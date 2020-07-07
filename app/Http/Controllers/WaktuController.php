<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Waktu;
use Validator,File,Redirect,Response;

class WaktuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_waktu = DB::table('waktu')
        ->get();
        return view('waktu.index', compact('ar_waktu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view('waktu.form');
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
                'jam' => 'required|unique:waktu|max:45',
            ],
            //menampilkan pesan error jika salah input
            [
                'jam.required' => 'jam wajib diisi !!!',
                'jam.unique' => 'jam waktu sudah ada !!!',
                'jam.max' => 'jam maksimal 45 karakter'
            ]
            );
        DB::table('waktu')->insert(
        [
            'jam'=>$request->jam,
        ]);
        //landing page
        return redirect('/waktu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_waktu = DB::table('waktu')
        ->where('waktu.id','=', $id)
        ->get();
        return view('waktu.show', compact('ar_waktu'));
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
        $data = Waktu::where('id',$id)->get();
        return view('waktu.form_edit',compact('data'));
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
        DB::table('waktu')->where('id',$id)->update(
            [ 
                'jam'=>$request->jam,      
            ]);
            //landing page
            return redirect('/waktu'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('waktu')->where('id',$id)->delete();
        //landing page
        return redirect('/waktu');
    }

}