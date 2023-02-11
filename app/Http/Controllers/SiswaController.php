<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
    	//dd($request->all());
    	if($request->has('cari')){
    		$data_siswa = \App\Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_siswa = \App\Siswa::all();        
    	}
    	return view('siswa.index',['data_siswa' => $data_siswa]);
    }
    
    public function create(Request $request)
    {        
        //insert ke tabel Users
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('user');
        $user->remember_token = Str::random(60);
        $user->save();

        //insert ke tabel Siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\siswa::create($request->all());
        
        return redirect('/siswa')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
    	$siswa = \App\Siswa::find($id);
    	return view('siswa/edit',['siswa'=>$siswa]);
    }

    public function update(Request $request,$id)
    {
        //dd($request->all());
       	$siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());

        if($request->has('image_radio')){
            $path = public_path().'/images/' . $request->image_radio .'.png';
            if (!File::exists($path)) {
                abort(404);                
            }
            //$file = File::get($path);
            $siswa->avatar = $request->image_radio .'.png';
            $siswa->save();
        } 
    	else if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses','Data berhasil diupdate'); 
    }

    public function delete($id)
    {
    	$siswa = \App\siswa::find($id);
    	$siswa->delete($siswa);
    	return redirect('/siswa')->with('sukses','Data berhasil dihapus');
    }

    public function profile($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa.profile',['siswa'=>$siswa]);
    }
}
