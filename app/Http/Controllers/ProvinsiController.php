<?php

namespace App\Http\Controllers;

use \App\Provinsi;
use \App\Kabupaten;
use Illuminate\Http\Request;


class ProvinsiController extends Controller
{
    public function getKabupaten($kode_provinsi)
    {
        //return $provinsi->kabupaten()->select('kode', 'kabupaten')->get();
        $kab = Kabupaten::where('provinsi_id',$kode_provinsi)->pluck('kabupaten','kode');
		return json_encode($kab);
    }

}
