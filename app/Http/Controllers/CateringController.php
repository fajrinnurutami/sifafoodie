<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Catering;
use Validator,File,Redirect,Response;
use PDF; 
use App\Exports\CateringExport;
use Maatwebsite\Excel\Facades\Excel;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_catering = DB::table('catering')
        ->join('katcat', 'katcat.id', '=', 'catering.idkatcat')
        ->join('supplier', 'supplier.id', '=', 'catering.idsupplier')
        ->select ('catering.*','katcat.nama AS katcat','supplier.nama AS supplier')
        ->get();
        return view('catering.index', compact('ar_catering'));
    }

    public function daftarMenu()
    {
        $ar_catering = DB::table('catering')
        ->join('katcat', 'katcat.id', '=', 'catering.idkatcat')
        ->select ('catering.*','katcat.nama AS katcat')
        ->get();
        return view('catering.daftar', compact('ar_catering'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view('catering.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            //mendefinisikan rule validasi data
            [
                'nama' => 'required|max:45',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ],

            //menampilkan pesan error jika salah input
            [
                'nama.required' => 'Nama wajib diisi !!!',
                'nama.max' => 'Nama maksimal 45 karakter',
                'foto.image' => 'Ekstensi file yang boleh hanya jpg,jpeg,png !!!',
                'foto.max' => 'Ukuran file foto terlalu besar, maksimal 2048 !!!',
            ]
            );

        if(!empty($request->foto)){//proses upload file
            $request->validate([
                'file' => 'image|mimes:jpg,jpeg,png|max:2048',
            ]);
            $fileName = $request->nama.'.'.$request->foto->extension();  
            $request->foto->move(public_path('assets/img/catering'), $fileName);
        }
        else{ //tidak ada upload file
            $fileName = '';
        }

        DB::table('catering')->insert(
        [
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'idkatcat'=>$request->katcat,
            'idsupplier'=>$request->supplier,
            'deskripsi'=>$request->deskripsi,
            'ingredient'=>$request->ingredient,
            'kal'=>$request->kal,
            'foto'=>$fileName,
        ]);
        //landing page
        return redirect('/catering');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_catering = DB::table('catering')
        ->join('katcat', 'katcat.id', '=', 'catering.idkatcat')
        ->join('supplier', 'supplier.id', '=', 'catering.idsupplier')
        ->select ('catering.*','katcat.nama AS katcat','supplier.nama AS supplier')
        ->where('catering.id','=', $id)
        ->get();
        return view('catering.show', compact('ar_catering'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ambil 1 baris data yang mau diedit
        $data = Catering::where('id',$id)->get();
        return view('catering.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate(
            //mendefinisikan rule validasi data
            [
                'nama' => 'required|max:45',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                
            ],
            //menampilkan pesan error jika salah input
            [
                'nama.required' => 'Nama wajib diisi !!!',
                'nama.max' => 'Nama maksimal 45 karakter',
                'foto.image' => 'Ekstensi file yang boleh hanya jpg,jpeg,png !!!',
                'foto.max' => 'Ukuran file foto terlalu besar, maksimal 2048 !!!',
            ]
            );

         //ambil isi kolom foto untuk hapus fisik file fotonya atau sekedar ambil nama filenya
        $foto = DB::table('catering')->select('foto')->where('id',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        if(!empty($request->foto)){
            //hapus fisik file foto lama di folder img/catering
            File::delete(public_path('assets/img/catering/'.$namaFile));
            //proses upload file foto baru
            $request->validate([
                'file' => 'image|mimes:jpg,jpeg,png|max:2048',
            ]);
            $fileName = $request->nama.'.'.$request->foto->extension();  
            $request->foto->move(public_path('assets/img/catering'), $fileName);
        }
        else{ //tidak ganti foto, nama file tetap foto yg lama
            $fileName = $namaFile;
        }

        DB::table('catering')->where('id',$id)->update(
            [ 
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'idkatcat'=>$request->katcat,
            'idsupplier'=>$request->supplier,
            'deskripsi'=>$request->deskripsi,
            'ingredient'=>$request->ingredient,
            'kal'=>$request->kal,
            'foto'=>$fileName,     
            ]);
            //landing page
            return redirect('/catering'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = DB::table('catering')->select('foto')
                ->where('id', $id)->get();
        foreach($foto as $f) {
            $namaFile = $f->foto;
        }

        File::delete(public_path('assets/img/catering/'.$namaFile));

        DB::table('catering')->where('id',$id)->delete();
        return redirect('/catering');
    }

    public function cateringPDF()
    {
        $ar_catering = DB::table('catering')
        ->join('katcat', 'katcat.id', '=', 'catering.idkatcat')
        ->join('supplier', 'supplier.id', '=', 'catering.idsupplier')
        ->select ('catering.*','katcat.nama AS katcat','supplier.nama AS supplier')
        ->get();
        $pdf = PDF::loadView('catering/cateringPDF',['ar_catering'=>$ar_catering]);
        return $pdf->download('datacatering.pdf');
    }

    public function cateringExcel()
    {
        return Excel::download(new cateringExport, 'catering.xlsx');
    }
}
