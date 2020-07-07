<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Bank;
use Validator,File,Redirect,Response;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_bank = DB::table('bank')
        ->get();
        return view('bank.index', compact('ar_bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view('bank.form');
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
                'nama' => 'required|unique:bank|max:45',
            ],
            //menampilkan pesan error jika salah input
            [
                'nama.required' => 'Nama wajib diisi !!!',
                'nama.unique' => 'Nama bank sudah ada !!!',
                'nama.max' => 'Nama maksimal 45 karakter'
            ]
            );
        DB::table('bank')->insert(
        [
            'nama'=>$request->nama,
            'norek'=>$request->norek,
            'pemilik'=>$request->pemilik
        ]);
        //landing page
        return redirect('/bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_bank = DB::table('bank')
        ->where('bank.id','=', $id)
        ->get();
        return view('bank.show', compact('ar_bank'));
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
        $data = Bank::where('id',$id)->get();
        return view('bank.form_edit',compact('data'));
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
        DB::table('bank')->where('id',$id)->update(
            [ 
                'nama'=>$request->nama, 
                'norek'=>$request->norek,     
                'pemilik'=>$request->pemilik
            ]);
            //landing page
            return redirect('/bank'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bank')->where('id',$id)->delete();
        //landing page
        return redirect('/bank');
    }
}
