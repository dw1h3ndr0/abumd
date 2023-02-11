<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;

class ChangePasswordController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $pegawai = \App\Pegawai::find($id);
        return view('pegawai.changePassword',['pegawai' => $pegawai]);
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request, $id, $page)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword($id)],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        $user = User::find($id);
        $user->update(['password'=> Hash::make($request->new_password)]);
        // dd('Password change successfully.');
        if($page == 'profil'){            
            return redirect('/pegawai/'.$user->pegawai->id.'/myprofile')->with('sukses','Password berhasil diganti');   
        }else if($page == 'edit'){
            return redirect('/pegawai/'.$user->pegawai->id.'/edit')->with('sukses','Password berhasil diganti'); 
        }else{            
            return redirect('/change-password/'.$user->pegawai->id)->with('sukses','Password berhasil diganti');
        }
    }
}
