<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Supplier;
use Validator,File,Redirect,Response;
use PDF; 
use App\Exports\SupplierExport;
use Maatwebsite\Excel\Facades\Excel;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_supplier = DB::table('supplier')
        ->get();
        return view('supplier.index', compact('ar_supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view('supplier.form');
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
                'nama' => 'required|unique:supplier|max:45',
            ],
            //menampilkan pesan error jika salah input
            [
                'nama.required' => 'Nama wajib diisi !!!',
                'nama.unique' => 'Nama supplier sudah ada !!!',
                'nama.max' => 'Nama maksimal 45 karakter'
            ]
            );
        DB::table('supplier')->insert(
        [
            'nama'=>$request->nama,
            'no_telp'=>$request->no_telp,
            'alamat'=>$request->alamat,
        ]);
        //landing page
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_supplier = DB::table('supplier')
        ->where('supplier.id','=', $id)
        ->get();
        return view('supplier.show', compact('ar_supplier'));
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
        $data = Supplier::where('id',$id)->get();
        return view('supplier.form_edit',compact('data'));
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
        DB::table('supplier')->where('id',$id)->update(
            [ 
                'nama'=>$request->nama,
                'no_telp'=>$request->no_telp,
                'alamat'=>$request->alamat,     
            ]);
            //landing page
            return redirect('/supplier'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('supplier')->where('id',$id)->delete();
        //landing page
        return redirect('/supplier');
    }

    public function supplierPDF()
    {
        $ar_supplier = DB::table('supplier')->get();

        $pdf = PDF::loadView('supplier/supplierPDF',['ar_supplier'=>$ar_supplier]);
        return $pdf->download('datasupplier.pdf');
    }

    public function supplierExcel()
    {
        return Excel::download(new SupplierExport, 'supplier.xlsx');
    }
}
