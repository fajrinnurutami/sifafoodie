<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Katcat;
use Validator,File,Redirect,Response;
use PDF; 
use App\Exports\KatcatExport;
use Maatwebsite\Excel\Facades\Excel;

class KatcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_katcat = DB::table('katcat')
        ->get();
        return view('katcat.index', compact('ar_katcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view('katcat.form');
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
                'nama' => 'required|unique:katcat|max:45',
            ],
            //menampilkan pesan error jika salah input
            [
                'nama.required' => 'Nama wajib diisi !!!',
                'nama.unique' => 'Nama katcat sudah ada !!!',
                'nama.max' => 'Nama maksimal 45 karakter'
            ]
            );
        DB::table('katcat')->insert(
        [
            'nama'=>$request->nama,
        ]);
        //landing page
        return redirect('/katcat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_katcat = DB::table('katcat')
        ->where('katcat.id','=', $id)
        ->get();
        return view('katcat.show', compact('ar_katcat'));
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
        $data = Katcat::where('id',$id)->get();
        return view('katcat.form_edit',compact('data'));
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
        DB::table('katcat')->where('id',$id)->update(
            [ 
                'nama'=>$request->nama,      
            ]);
            //landing page
            return redirect('/katcat'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('katcat')->where('id',$id)->delete();
        //landing page
        return redirect('/katcat');
    }

    public function katcatPDF()
    {
        $ar_katcat = DB::table('katcat')->get();
        $pdf = PDF::loadView('katcat/katcatPDF',['ar_katcat'=>$ar_katcat]);
        return $pdf->download('datakatcat.pdf');
    }

    public function katcatExcel()
    {
        return Excel::download(new katcatExport, 'katcat.xlsx');
    }
}
