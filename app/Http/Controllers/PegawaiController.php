<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidasiCreatePegawaiRequest;
use App\Http\Requests\ValidasiUpdatePegawaiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;;
use File;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
    	//dd($request->all());
    	if($request->has('cari')){
    		$data_pegawai = \App\Pegawai::where('nama','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_pegawai = \App\Pegawai::all();        
    	}
    	return view('pegawai.index',['data_pegawai' => $data_pegawai]);
    }

    public function tambah()
    {
    	return view('pegawai.tambah');
    }
    
    public function create(ValidasiCreatePegawaiRequest $request)
    {        
        //insert ke tabel Users
        $user = new \App\User;
        $user->role = $request->role;
        $user->name = $request->nama;
        $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        if($request->role == 'admin'){
        	$user->password = bcrypt('admin');	
        }else if($request->role == 'user'){
        	$user->password = bcrypt('user');
        }
        
        $user->remember_token = Str::random(60);
        $user->save();

        //insert ke tabel Pegawai
        //insert id
        $request->request->add(['user_id' => $user->id]);
        //insert avatar
        
    	if($request->hasFile('avatar')){
            $nama_file = time()."_".$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('images/',$nama_file);            
            $request->request->add(['avatar' => $nama_file]);        
            //$pegawai->avatar = $request->file('avatar')->getClientOriginalName();
            //$pegawai->save();
        }else if($request->has('image_radio')){
            $path = public_path().'/images/' . $request->image_radio .'.png';
            if (!File::exists($path)) {
                abort(404);                
            }
            //$file = File::get($path);
            //dd($request->all());
            $request->request->add(['avatar' => $request->image_radio .'.png']);        
            //$pegawai->avatar = $request->image_radio .'.png';
            //$pegawai->save();
        } 
        //insert lainnya
        $pegawai = \App\Pegawai::create($request->all());
        
        return redirect('/pegawai')->with('sukses','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
    	$pegawai = \App\Pegawai::find($id);
    	$user = \App\User::find($pegawai->user_id);
    	return view('pegawai/edit',['pegawai'=>$pegawai, 'user'=>$user]);
    }

    public function update(ValidasiUpdatePegawaiRequest $request,$id)
    {
        //dd($request->all());
       	$pegawai = \App\Pegawai::find($id);
    	$pegawai->update($request->all());

    	$user = \App\User::find($pegawai->user_id);
    	$user->name = $request->nama;
        $user->email = $request->email;
        if($request->role == 'admin'){
        	if (Hash::check('user', $user->password)) {	        	
	        	$user->role = $request->role;
	        	$user->fill([
			        'password' => Hash::make('admin')
			    ])->save();
	        	//$user->password = bcrypt('admin');	
	        	//$user->remember_token = Str::random(60);
        	}
        }else if($request->role == 'user'){
        	if (Hash::check('admin', $user->password)) {
	        	$user->fill([
		        	'password' => Hash::make('user')
		        ])->save();
	        	//$user->password = bcrypt('user');	
	        	//$user->remember_token = Str::random(60);
        	}
        }
        $user->save();

        if($request->hasFile('avatar')){
            $nama_file = time()."_".$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('images/',$nama_file);
            $pegawai->avatar = $nama_file;
            $pegawai->save();
        }else if($request->has('image_radio')){
            $path = public_path().'/images/' . $request->image_radio .'.png';
            if (!File::exists($path)) {
                abort(404);                
            }
            //$file = File::get($path);
            $pegawai->avatar = $request->image_radio .'.png';
            $pegawai->save();
        } 
        // dd(request()->segment(3));
        if(request()->segment(3) == 'update_profile'){
            return redirect('/pegawai/'.$id.'/myprofile')->with('sukses','Data berhasil diupdate');
        }
        else{            
            return redirect('/pegawai')->with('sukses','Data berhasil diupdate'); 
        }
    }

    public function delete($id)
    {
    	$pegawai = \App\Pegawai::find($id);
    	$pegawai->delete($pegawai);
    	return redirect('/pegawai')->with('sukses','Data berhasil dihapus');
    }

    public function profile($id)
    {
        $pegawai = \App\Pegawai::find($id);
        $user = \App\User::find($pegawai->user_id);
        return view('pegawai.profile',['pegawai'=>$pegawai, 'user'=>$user]);
    }

    public function myprofile($id)
    {
    	$pegawai = \App\Pegawai::find($id);
    	$user = \App\User::find($pegawai->user_id);
    	return view('pegawai/myprofile',['pegawai'=>$pegawai, 'user'=>$user]);
    }
}
