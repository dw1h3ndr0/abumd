<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kondef_BumdController extends Controller
{
    public function index()
    {
    	$daftar_kondef_flag_1 = \App\Kondef_BUMD::where('flag','1')->get();
    	$daftar_kondef_flag_2 = \App\Kondef_BUMD::where('flag','2')->get();
    	$daftar_kondef_flag_3 = \App\Kondef_BUMD::where('flag','3')->get();
    	$daftar_kondef_flag_4 = \App\Kondef_BUMD::where('flag','4')->get();

    	return view('kondef_bumd.index',[
    		'daftar_kondef_flag_1' => $daftar_kondef_flag_1,
    		'daftar_kondef_flag_2' => $daftar_kondef_flag_2,
    		'daftar_kondef_flag_3' => $daftar_kondef_flag_3,
    		'daftar_kondef_flag_4' => $daftar_kondef_flag_4
    	]);
    }
}
