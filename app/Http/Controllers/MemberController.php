<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Member;
use Illuminate\Support\Facades\Hash;
use Validator,File,Redirect,Response;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_member = DB::table('users')->get();
        return view('member.index', compact('ar_member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.form');
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
            // mendefinisikan rule validasi data
            [
                'name' => 'required|unique:users|max:45',
                'email' => 'required|email',
                'password' => 'required',
                'role' => 'required',
                'isactive' => 'required',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
            ],
            // menampilkan pesan error jika salah input
            [
                'name.required' => 'Nama harus diisi',
                'name.unique' => 'Nama sudah ada',
                'name.max' => 'maksimal 45 karakter',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Harus berformat email',
                'password.required' => 'Password masih kosong',
                'role.required' => 'Role masih kosong',
                'isactive.required' => 'Status masih kosong',
                'foto.image' => 'Harus berformat jpg, jpeg, atau png',
                'foto.max' => 'Maksimal berukuran 2048kb'
            ]
            );

        if(!empty($request->foto)){//proses upload file
            
            $fileName = $request->name.'.'.$request->foto->extension();  
            $request->foto->move(public_path('img/member'), $fileName);
        }
        else{ //tidak ada upload file
            $fileName = '';
        }
        DB::table('users')->insert(
            [ 
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make ($request->password),
                'role' => $request->role,
                'isactive' => $request->isactive,
                'foto'=>$fileName
            ]);
            //landing page
            return redirect('/member');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_member = DB::table('users')->where('id','=', $id)->get(); 
        return view('member.show', compact('ar_member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ambil 1 baris data yg mau diedit
        $data = Member::where('id',$id)->get();
        return view('member.form_edit',compact('data'));
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
            // mendefinisikan rule validasi data
            [
                'name' => 'required|max:45',
                'email' => 'required|email',
                'password' => 'required',
                'role' => 'required',
                'isactive' => 'required',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
            ],
            // menampilkan pesan error jika salah input
            [
                'name.required' => 'Nama harus diisi',
                'name.max' => 'maksimal 45 karakter',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Harus berformat email',
                'password.required' => 'Password masih kosong',
                'role.required' => 'Role masih kosong',
                'isactive.required' => 'Status masih kosong',
                'foto.image' => 'Harus berformat jpg, jpeg, atau png',
                'foto.max' => 'Maksimal berukuran 2048kb'
            ]
            );
            //ambil isi kolom foto untuk hapus fisik file fotonya atau sekedar ambil nama filenya
        $foto = DB::table('users')->select('foto')->where('id',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        if(!empty($request->foto)){
            //hapus fisik file foto lama di folder img/anggota
            File::delete(public_path('img/member/'.$namaFile));
            //proses upload file foto baru
            $request->validate([
                'file' => 'image|mimes:jpg,jpeg,png|max:2048',
            ]);
            $fileName = $request->name.'.'.$request->foto->extension();  
            $request->foto->move(public_path('img/member'), $fileName);
        }
        else{ //tidak ganti foto, nama file tetap foto yg lama
            $fileName = $namaFile;
        }
        DB::table('users')->where('id',$id)->update(
            [ 
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request->role,
                'isactive' => $request->isactive,
                'foto'=>$fileName
            ]);
            //landing page
            return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ambil isi kolom foto lalu hapus file fotonya 
        //di folder img/pengarang
        $foto = DB::table('users')->select('foto')
                ->where('id',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        //hapus fisik file di folder img/anggota
        File::delete(public_path('img/member/'.$namaFile));
        //hapus data anggota
        DB::table('users')->where('id',$id)->delete();
        //landing page
        return redirect('/member');
    }
}