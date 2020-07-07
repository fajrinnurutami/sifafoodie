<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\FormCatering;
use PDF; 
use App\Exports\FormCateringExport;
use Maatwebsite\Excel\Facades\Excel;

class FormCateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_formcatering = DB::table('formcatering')
        ->join('catering', 'catering.id', '=', 'formcatering.idcatering')
        ->join('waktu', 'waktu.id', '=', 'formcatering.idwaktu')
        ->join('bank', 'bank.id', '=', 'formcatering.idbank')
        ->select ('formcatering.*','catering.nama AS catering','catering.harga AS harga','waktu.jam AS waktu',
        'bank.nama AS bank')
        ->orderBy ('created_at','desc')
        ->get();
        return view('formcatering.index', compact('ar_formcatering'));
    }

    public function rekapPesanan()
    {
        $ar_formcatering = DB::table('formcatering')
        ->join('catering', 'catering.id', '=', 'formcatering.idcatering')
        ->join('waktu', 'waktu.id', '=', 'formcatering.idwaktu')
        ->join('bank', 'bank.id', '=', 'formcatering.idbank')
        ->select ('formcatering.*','catering.nama AS catering','catering.harga AS harga','waktu.jam AS waktu',
        'bank.nama AS bank')
        ->where('status_pay', 'like', '%lunas%')
        ->orderBy ('tgl_kirim','desc')
        ->orderBy ('waktu','asc')
        ->get();
        return view('formcatering.rekap', compact('ar_formcatering'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view('formcatering.form');
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
                'hp' => 'required',
                'email' => 'required|email|max:45',
                'catering' => 'required',
                'jumlah' => 'required|integer',
                'tgl_kirim' => 'required',
                'waktu' => 'required',
                'bank' => 'required',
                'alamat' => 'required|max:200',
           
            ],
            //menampilkan pesan error jika salah input
            [
                'nama.required' => 'Nama wajib diisi !!!',
                'nama.max' => 'Nama maksimal 45 karakter',
                'hp.required' => 'No Handphone wajib diisi !!!',
                'email.required' => 'Email wajib diisi',
                'email.max' => 'Email maksimal 15 karakter !!!',
                'email.email' => 'Email harus dalam format email',
                'catering.required' => 'menu wajib diisi',
                'jumlah.required' => 'jumlah pesanan wajib diisi',
                'jumlah.integer' => 'jumlah pesanan harus berformat angka',
                'tgl_kirim.required' => 'Tanggal pengantaran wajib diisi',
                'waktu.required' => 'Waktu pengantaran wajib diisi',
                'bank.required' => 'Bank transfer pembayaran wajib diisi',
                'alamat.required' => 'Alamat wajib diisi',
                'alamat.max' => 'Alamat maksimal 200 karakter',
               
            ]
            );

        DB::table('formcatering')->insert(
        [
            'nama'=>$request->nama,
            'hp'=>$request->hp,
            'email'=>$request->email,
            'idcatering'=>$request->catering,
            'jumlah'=>$request->jumlah,
            'tgl_kirim'=>$request->tgl_kirim,
            'idwaktu'=>$request->waktu,
            'idbank'=>$request->bank,
            'alamat'=>$request->alamat,
            'note'=>$request->note,
            
        ]);
        //landing page
        return redirect('/afterorder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_formcatering = DB::table('formcatering')
        ->join('catering', 'catering.id', '=', 'formcatering.idcatering')
        ->join('waktu', 'waktu.id', '=', 'formcatering.idwaktu')
        ->join('bank', 'bank.id', '=', 'formcatering.idbank')
        ->select ('formcatering.*','catering.nama AS catering','catering.harga AS harga','waktu.jam AS waktu',
        'bank.nama AS bank')
        ->where('formcatering.id','=', $id)
        ->get();
        return view('formcatering.show', compact('ar_formcatering'));
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
        $data = formcatering::where('id',$id)->get();
        return view('formcatering.form_edit',compact('data'));
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
                'hp' => 'required',
                'email' => 'required|email|max:45',
                'jumlah' => 'required|integer',
                'tgl_kirim' => 'required',
                'waktu' => 'required',
                'bank' => 'required',
                'alamat' => 'required|max:200',
                'status_email' => 'required',
                'status_pay' => 'required',
                
            ],
            //menampilkan pesan error jika salah input
            [
                'nama.required' => 'Nama wajib diisi !!!',
                'nama.max' => 'Nama maksimal 45 karakter',
                'hp.required' => 'No Handphone wajib diisi !!!',
                'email.required' => 'Email wajib diisi',
                'email.max' => 'Email maksimal 15 karakter !!!',
                'email.email' => 'Email harus dalam format email',
                'jumlah.required' => 'jumlah pesanan wajib diisi',
                'jumlah.integer' => 'jumlah pesanan harus berformat angka',
                'tgl_kirim.required' => 'Tanggal pengantaran wajib diisi',
                'waktu.required' => 'Waktu pengantaran wajib diisi',
                'bank.required' => 'Bank transfer pembayaran wajib diisi',
                'alamat.required' => 'Alamat wajib diisi',
                'alamat.max' => 'Alamat maksimal 200 karakter',
                'status_email.required' => 'Status email wajib diisi',
                'status_pay.required' => 'Status pembayaran wajib diisi',
            ]
            );

        DB::table('formcatering')->where('id',$id)->update(
            [ 
            'nama'=>$request->nama,
            'hp'=>$request->hp,
            'email'=>$request->email,
            'idcatering'=>$request->catering,
            'jumlah'=>$request->jumlah,
            'tgl_kirim'=>$request->tgl_kirim,
            'idwaktu'=>$request->waktu,
            'idbank'=>$request->bank,
            'alamat'=>$request->alamat,
            'note'=>$request->note, 
            'status_email'=>$request->status_email,
            'status_pay'=>$request->status_pay,
            ]);
            //landing page
            return redirect('/formcatering'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('formcatering')->where('id',$id)->delete();
        return redirect('/formcatering');
    }

    public function rekapPDF()
    {
        $ar_formcatering = DB::table('formcatering')
        ->join('catering', 'catering.id', '=', 'formcatering.idcatering')
        ->join('waktu', 'waktu.id', '=', 'formcatering.idwaktu')
        ->join('bank', 'bank.id', '=', 'formcatering.idbank')
        ->select ('formcatering.*','catering.nama AS catering','catering.harga AS harga','waktu.jam AS waktu',
        'bank.nama AS bank')
        ->where('status_pay', 'like', '%lunas%')
        ->orderBy ('tgl_kirim','desc')
        ->orderBy ('waktu','asc')
        ->get();
        $pdf = PDF::loadView('formcatering/rekapPDF',['ar_formcatering'=>$ar_formcatering]);
        return $pdf->download('datarekap.pdf');
    }

    public function formcateringExcel()
    {
        return Excel::download(new formcateringExport, 'formcatering.xlsx');
    }
}
