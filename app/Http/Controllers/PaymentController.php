<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Payment;
use PDF; 
use Validator,File,Redirect,Response;
use App\Exports\SupplierExport;
use Maatwebsite\Excel\Facades\Excel;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_payment = DB::table('payment')
        ->join('formcatering', 'formcatering.id', '=', 'payment.idformcatering')
        ->select ('payment.*','formcatering.nama AS nama')
        ->orderBy('tgl_bayar', 'desc')
        ->get();
        return view('payment.index', compact('ar_payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view('payment.form');
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
                
                'tgl_bayar' => 'required',
                'total_bayar' => 'required',
                'status_bayar' => 'required',
                'an'=> 'required',
                'bukti' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                
            ],
            //menampilkan pesan error jika salah input
            [
                
                'tgl_bayar.required' => 'Tanggal Bayar wajib diisi !!!',
                'total_bayar.required' => 'Total Bayar wajib diisi !!!',
                'status_bayar.required' => 'Status Bayar wajib diisi !!!',
                'an' => 'Atas Nama wajib diisi !!!',
                'bukti.image' => 'Ektensi file yg boleh hanya jpg,jpeg,png !!!',
                'bukti.max' => 'Ukuran file bukti terlalu besar, maksimal 2048 !!!',
            ]
            );

            //proses upload file
            if(!empty($request->bukti)){
                $request->validate([
                    'file' => 'image|mimes:jpg,jpeg,png|max:2048',
                
                ]);
                $fileName = $request->nama.'.'.$request->bukti->extension();  
                $request->bukti->move(public_path('assets/img/bukti'), $fileName);
            }
            else{ //tidak ada upload file
                $fileName = '';
            }

        DB::table('payment')->insert(
        [
            'idformcatering'=>$request->nama,
            'tgl_bayar'=>$request->tgl_bayar,
            'total_bayar'=>$request->total_bayar,
            'status_bayar'=>$request->status_bayar,
            'an'=>$request->an,
            'bukti'=>$fileName
        ]);
        //landing page
        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_payment = DB::table('payment')
        ->join('formcatering', 'formcatering.id', '=', 'payment.idformcatering')
        ->select ('payment.*','formcatering.nama AS nama')
        ->where('payment.id','=', $id)
        ->get();
        return view('payment.show', compact('ar_payment'));
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
        $data = Payment::where('id',$id)->get();
        return view('payment.form_edit',compact('data'));
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
                
                'tgl_bayar' => 'required',
                'total_bayar' => 'required',
                'status_bayar' => 'required',
                'an'=> 'required',
                'bukti' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                
            ],
            //menampilkan pesan error jika salah input
            [
                
                'tgl_bayar.required' => 'Tanggal Bayar wajib diisi !!!',
                'total_bayar.required' => 'Total Bayar wajib diisi !!!',
                'status_bayar.required' => 'Status Bayar wajib diisi !!!',
                'an' => 'Atas Nama wajib diisi !!!',
                'bukti.image' => 'Ektensi file yg boleh hanya jpg,jpeg,png !!!',
                'bukti.max' => 'Ukuran file bukti terlalu besar, maksimal 2048 !!!',
            ]
            );
        
            //ambil isi kolom bukti untuk hapus fisik file buktinya atau sekedar ambil nama filenya
        $bukti = DB::table('payment')->select('bukti')->where('id',$id)->get();
        foreach($bukti as $b){
            $namaFile = $b->bukti;
        }
        if(!empty($request->bukti)){
            //hapus fisik file foto lama di folder img/pengarang
            File::delete(public_path('assets/img/bukti/'.$namaFile));
            //proses upload file foto baru
            $request->validate([
                'file' => 'image|mimes:jpg,jpeg,png|max:2048',
            ]);
            $fileName = $request->nama.'.'.$request->bukti->extension();  
            $request->bukti->move(public_path('assets/img/bukti'), $fileName);
        }
        else{ //tidak ganti bukti, nama file tetap bukti yg lama
            $fileName = $namaFile;
        }

        DB::table('payment')->where('id',$id)->update(
            [ 
                'idformcatering'=>$request->nama,
                'tgl_bayar'=>$request->tgl_bayar,
                'total_bayar'=>$request->total_bayar,
                'status_bayar'=>$request->status_bayar, 
                'an'=>$request->an,
                'bukti'=>$fileName,
            ]);
            //landing page
            return redirect('/payment'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukti = DB::table('payment')->select('bukti')
        ->where('id',$id)->get();
        foreach($bukti as $b){
            $namaFile = $b->bukti;
        }
        //hapus fisik file di folder img/pengarang
        File::delete(public_path('assets/img/bukti/'.$namaFile));
        //hapus data payment
        DB::table('payment')->where('id',$id)->delete();
        //landing page
        return redirect('/payment');
    }

    public function paymentPDF()
    {
        $ar_payment = DB::table('payment')
        ->join('formcatering', 'formcatering.id', '=', 'payment.idformcatering')
        ->select ('payment.*','formcatering.nama AS nama')
        ->get();
        $pdf = PDF::loadView('payment/paymentPDF',['ar_payment'=>$ar_payment]);
        return $pdf->download('datapayment.pdf');
    }

    public function paymentExcel()
    {
        return Excel::download(new paymentExport, 'payment.xlsx');
    }
}
