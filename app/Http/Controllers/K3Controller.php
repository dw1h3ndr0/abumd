<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidasiDaftarSampelK3Request;
use App\Http\Requests\ValidasiSampelK3Request;
use App\Http\Requests\ValidasiK3Blok_I_Request;
use App\Http\Requests\ValidasiK3Blok_II_Request;
use App\Http\Requests\ValidasiK3Blok_III_Request;
use App\Http\Requests\ValidasiK3Blok_III1_Request;
use App\Http\Requests\ValidasiK3Blok_III2_Request;
use App\Http\Requests\ValidasiK3Blok_III3_Request;
use App\Http\Requests\ValidasiK3Blok_III4_Request;
use App\Http\Requests\ValidasiK3Blok_IV_Request;
use App\Http\Requests\ValidasiK3Blok_V_Request;
use App\Http\Requests\ValidasiK3Blok_VI_Request;
use App\Exceptions\Handler;
use Illuminate\Http\Request;
use App\K3;
use DateTime;
use PDF;

class K3Controller extends Controller
{
    public function index()
    {
    	$tahun = \App\K3::max('tahun');
    	$daftar_sampel = \App\K3::where('tahun',$tahun)->get(); 
    	$count = 0;
    	foreach ($daftar_sampel as $k3) {    		
    		$daftar_nama_provinsi[$count] = $this->getNamaProvinsi($k3);
    		$daftar_nama_kabupaten[$count] = $this->getNamaKabuapten($k3);
    		$daftar_nama_kecamatan[$count] = $this->getNamaKecamatan($k3);
    		$daftar_nama_desa[$count] = $this->getNamaDesa($k3);
    		$count++; 
    	}   
    	//dd($daftar_sampel);
    	if(count($daftar_sampel) == 0){
    		return view('k3.index',[
	    		'daftar_sampel'=>$daftar_sampel, 
	    		'tahun' => $tahun,
	    	]);
    	}else{
	    	return view('k3.index',[
	    		'daftar_sampel' => $daftar_sampel,
	    		'tahun' => $tahun,
	    		'daftar_nama_provinsi' => $daftar_nama_provinsi,
	    		'daftar_nama_kabupaten' => $daftar_nama_kabupaten,
	    		'daftar_nama_kecamatan' => $daftar_nama_kecamatan,
	    		'daftar_nama_desa' => $daftar_nama_desa
	    	]);
	    }
    }

	public function tambah(Request $request)
    {    	
    	$data_provinsi = \App\Provinsi::all();
    	$data_kabupaten = \App\Kabupaten::all();
    	$data_kecamatan = \App\Kecamatan::all();
    	$data_desa = \App\Desa::all();
    	
    	return view('k3/tambah',[
    		'tahun' => $request->tahun,
    		'data_provinsi' => $data_provinsi,
    		'data_kabupaten' => $data_kabupaten,
    		'data_kecamatan' => $data_kecamatan,
    		'data_desa' => $data_desa
    	]);
    }

    public function tambahGet()
    {    	
    	$data_provinsi = \App\Provinsi::all();
    	$data_kabupaten = \App\Kabupaten::all();
    	$data_kecamatan = \App\Kecamatan::all();
    	$data_desa = \App\Desa::all();
    	
    	return view('k3/tambah',[
    		'data_provinsi' => $data_provinsi,
    		'data_kabupaten' => $data_kabupaten,
    		'data_kecamatan' => $data_kecamatan,
    		'data_desa' => $data_desa,
    	]);
    }

    public function create(ValidasiDaftarSampelK3Request $request)
    {        
        //insert ke tabel K3
        //dd($request);
        \App\k3::create($request->all());
        
        return redirect('/k3')->with('sukses','Sampel K3 berhasil ditambahkan');
    }

    public function edit($id)
    {
    	$k3 = \App\K3::find($id);
    	$kode_provinsi = $k3->b1r1;
    	$kode_kabupaten = $k3->b1r2;
    	$kode_kecamatan = $k3->b1r3;
    	$kode_desa = $k3->b1r4;

    	$data_provinsi = \App\Provinsi::all();
    	$data_kabupaten = \App\Kabupaten::where(
    		'provinsi_id',$kode_provinsi
    		)->get();
    	$data_kecamatan = \App\Kecamatan::where([
        	['provinsi_id','=',$kode_provinsi],
        	['kabupaten_id','=',$kode_kabupaten],
        	])->get();
    	$data_desa = \App\Desa::where([
        	['provinsi_id','=',$kode_provinsi],
        	['kabupaten_id','=',$kode_kabupaten],
        	['kecamatan_id','=',$kode_kecamatan],
        	])->get();
    	// dd($kode_kecamatan);
    	return view('k3/edit',[
    		'data_provinsi' => $data_provinsi,
    		'data_kabupaten' => $data_kabupaten,
    		'data_kecamatan' => $data_kecamatan,
    		'data_desa' => $data_desa,
    		'k3' => $k3
    	]);    	
    }

    public function update(ValidasiDaftarSampelK3Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/k3')->with('sukses','Sampel K3 berhasil diupdate'); 
    }

    public function delete($id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->delete();
    	return redirect('/k3')->with('sukses','Sampel K3 berhasi dihapus');
    }

    public function daftarSampel($tahun)
    {
    	$daftar_sampel = \App\K3::where('tahun',$tahun)->get();
    	$count = 0;
    	foreach ($daftar_sampel as $k3) {    		
    		$daftar_nama_provinsi[$count] = $this->getNamaProvinsi($k3);
    		$daftar_nama_kabupaten[$count] = $this->getNamaKabuapten($k3);
    		$daftar_nama_kecamatan[$count] = $this->getNamaKecamatan($k3);
    		$daftar_nama_desa[$count] = $this->getNamaDesa($k3);
    		$count++; 
    	}       
    	// dd(count($daftar_sampel));
    	if(count($daftar_sampel) == 0){
    		return view('k3.index',[
	    		'daftar_sampel'=>$daftar_sampel, 
	    		'tahun' => $tahun,
	    	]);
    	}else{
    		return view('k3.index',[
	    		'daftar_sampel'=>$daftar_sampel, 
	    		'tahun' => $tahun,
	    		'daftar_nama_provinsi' => $daftar_nama_provinsi,
	    		'daftar_nama_kabupaten' => $daftar_nama_kabupaten,
	    		'daftar_nama_kecamatan' => $daftar_nama_kecamatan,
	    		'daftar_nama_desa' => $daftar_nama_desa
	    	]);
    	}	
    	
	}

    public function entri($id)
    {
    	$k3 = \App\K3::find($id);
    	$nama_provinsi = $this->getNamaProvinsi($k3);
    	$nama_kabupaten = $this->getNamaKabuapten($k3);
    	$nama_kecamatan = $this->getNamaKecamatan($k3);
    	$nama_desa = $this->getNamaDesa($k3);
    	//dd($nama_kecamatan);
    	return view('k3/entri',[
    		'nama_provinsi' => $nama_provinsi,
    		'nama_kabupaten' => $nama_kabupaten,
    		'nama_kecamatan' => $nama_kecamatan,
    		'nama_desa' => $nama_desa,
    		'k3'=>$k3
    	]);
    }

    public function simpan(ValidasiSampelK3Request $request, $id)
    {
    	//dd($request);
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/entri')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function bloki($id)
    {
    	$k3 = \App\K3::find($id);
    	$nama_provinsi = $this->getNamaProvinsi($k3);
    	$nama_kabupaten = $this->getNamaKabuapten($k3);
    	$nama_kecamatan = $this->getNamaKecamatan($k3);
    	$nama_desa = $this->getNamaDesa($k3);
    	$daftar_kondef = \App\Kondef::all();  
    	//dd($nama_kecamatan);
    	return view('k3/bloki',[
    		'nama_provinsi' => $nama_provinsi,
    		'nama_kabupaten' => $nama_kabupaten,
    		'nama_kecamatan' => $nama_kecamatan,
    		'nama_desa' => $nama_desa,
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_bloki(ValidasiK3Blok_I_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$nama_provinsi = $this->getNamaProvinsi($k3);
    	$nama_kabupaten = $this->getNamaKabuapten($k3);
    	$nama_kecamatan = $this->getNamaKecamatan($k3);
    	$nama_desa = $this->getNamaDesa($k3);
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	return redirect('/entri_data/'.$id.'/bloki')->with('sukses','Sampel K3 berhasil disimpan');
    	// if($request->validator->fails()){
    	// 	return redirect('k3/bloki');
    	// }else{
    	// 	return view('k3/bloki',[
    	// 	'nama_provinsi' => $nama_provinsi,
    	// 	'nama_kabupaten' => $nama_kabupaten,
    	// 	'nama_kecamatan' => $nama_kecamatan,
    	// 	'nama_desa' => $nama_desa,
    	// 	'k3'=>$k3
    	// 	])->with('sukses','Sampel K3 berhasil disimpan');
    	// }
    }    

    public function blokii($id)
    {
    	$k3 = \App\K3::find($id);  
    	$daftar_kondef = \App\Kondef::all();  	
    	return view('k3/blokii',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokii(ValidasiK3Blok_II_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/blokii')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokiii($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokiii',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiii(ValidasiK3Blok_III_Request $request, $id)
    {
    	//dd($request);
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/blokiii')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokiii_1($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokiii-1',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiii_1(ValidasiK3Blok_III1_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/blokiii_1')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokiii_2($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokiii-2',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiii_2(ValidasiK3Blok_III2_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/blokiii_2')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokiii_3($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokiii-3',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiii_3(ValidasiK3Blok_III3_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/blokiii_3')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokiii_4($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokiii-4',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiii_4(ValidasiK3Blok_III4_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/blokiii_4')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokiv($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokiv',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiv(ValidasiK3Blok_IV_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$k3->update($request->all());
    	return redirect('/entri_data/'.$id.'/blokiv')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokv($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokv',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokv(ValidasiK3Blok_V_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$request['b5r5'] = $this->getTanggal($request->b5r5);    	
    	// dd($request);
    	$k3->update($request->all());

    	if($request->hasFile('b5r8')){
	    	// menyimpan data file yang diupload ke variabel $file
			$file = $request->file('b5r8');
			$nama_file = time()."_".$file->getClientOriginalName();
			$tujuan_upload = 'files';
			$file->move($tujuan_upload,$nama_file);

			$k3->b5r8 = $nama_file;
			$k3->save();
    	}
    	return redirect('/entri_data/'.$id.'/blokv')->with('sukses','Sampel K3 berhasil disimpan');
    }

    public function blokvi($id)
    {
    	$k3 = \App\K3::find($id);
    	$daftar_kondef = \App\Kondef::all();
    	return view('k3/blokvi',[
    		'k3'=>$k3,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokvi(ValidasiK3Blok_VI_Request $request, $id)
    {
    	$k3 = \App\K3::find($id);
    	$request['b6r2k1'] = $this->getTanggal($request->b6r2k1);
    	$request['b6r2k2'] = $this->getTanggal($request->b6r2k2);
    	$request['b6r2k3'] = $this->getTanggal($request->b6r2k3);
    	$request['b6r2k4'] = $this->getTanggal($request->b6r2k4);
        // dd($request);
    	
    	$k3->update($request->all());
    	
    	return redirect('/entri_data/'.$id.'/blokvi')->with('sukses','Sampel K3 berhasil disimpan');
    }



    // ******* SIMPAN TIAP HALAMAN ******\\\

    public function simpan_k3_bloki(ValidasiK3Blok_I_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    		
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokii(ValidasiK3Blok_II_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    		
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokiii(ValidasiK3Blok_III_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    	
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokiii_1(ValidasiK3Blok_III1_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    		
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokiii_2(ValidasiK3Blok_III2_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    		
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokiii_3(ValidasiK3Blok_III3_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    		
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokiii_4(ValidasiK3Blok_III4_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    		
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokiv(ValidasiK3Blok_IV_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);    	
    	$k3->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    	
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokv(ValidasiK3Blok_V_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);
    	$request['b5r5'] = $this->getTanggal($request->b5r5);    	
    	// dd($request);
    	$k3->update($request->all());

    	if($request->hasFile('b5r8')){
	    	// menyimpan data file yang diupload ke variabel $file
			$file = $request->file('b5r8');
			$nama_file = time()."_".$file->getClientOriginalName();
			$tujuan_upload = 'files';
			$file->move($tujuan_upload,$nama_file);

			$k3->b5r8 = $nama_file;
			$k3->save();
    	}

    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){    		
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }

    public function simpan_k3_blokvi(ValidasiK3Blok_VI_Request  $request, $id, $blok)
    {
    	$k3 = \App\K3::find($id);
    	$request['b6r2k1'] = $this->getTanggal($request->b6r2k1);
    	$request['b6r2k2'] = $this->getTanggal($request->b6r2k2);
    	$request['b6r2k3'] = $this->getTanggal($request->b6r2k3);
    	$request['b6r2k4'] = $this->getTanggal($request->b6r2k4);
    	
    	$k3->update($request->all());

    	if($blok == "0"){
    		$tahun = \App\K3::max('tahun');
    		return redirect('/daftar_sampel/'.$tahun.'');
    	}else if($blok == "1"){   
    		return redirect('/entri_data/'.$id.'/bloki');
    	}else if($blok == "2"){
    		//return view('k3/blokii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokii');
    	}else if($blok == "3"){
    		// return view('k3/blokiii',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii');
    	}else if($blok == "3.1"){
    		// return view('k3/blokiii-1',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_1');
    	}else if($blok == "3.2"){
    		// return view('k3/blokiii-2',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_2');
    	}else if($blok == "3.3"){
    		// return view('k3/blokiii-3',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_3');
    	}else if($blok == "3.4"){
    		// return view('k3/blokiii-4',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiii_4');
    	}else if($blok == "4"){
    		// return view('k3/blokiv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokiv');
    	}else if($blok == "5"){
    		// return view('k3/blokv',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokv');
    	}else if($blok == "6"){
    		// return view('k3/blokvi',['k3'=>$k3]);
    		return redirect('/entri_data/'.$id.'/blokvi');
    	}
    }


	public function getNamaProvinsi($k3)
	{
		$nama_provinsi = \App\Provinsi::where('kode',$k3->b1r1)->value('provinsi');
		return $nama_provinsi;
	}

	public function getNamaKabuapten($k3)
	{
		$nama_kabupaten = \App\Kabupaten::where([
        	['provinsi_id','=',$k3->b1r1],
        	['kode','=',$k3->b1r2],
        	])->value('kabupaten');
		return $nama_kabupaten;
	}

	public function getNamaKecamatan($k3)
	{
		$nama_kecamatan = \App\Kecamatan::where([
        	['provinsi_id','=',$k3->b1r1],
        	['kabupaten_id','=',$k3->b1r2],
        	['kode','=',$k3->b1r3],
        	])->value('kecamatan');
		return $nama_kecamatan;
	}

	public function getNamaDesa($k3)
	{
		$nama_desa = \App\Desa::where([
        	['provinsi_id','=',$k3->b1r1],
        	['kabupaten_id','=',$k3->b1r2],
        	['kecamatan_id','=',$k3->b1r3],
        	['kode','=',$k3->b1r4]
        	])->value('desa');
		return $nama_desa;
	}

	public function getTanggal($tanggal)
	{
		if($this->validateDate($tanggal)){
			return $tanggal;	
		}else{
			$date = date_create_from_format("m/d/Y",$tanggal);
			return  date_format($date,"Y-m-d");			
		}
	}

	public function validateDate($date, $format = 'Y-m-d')
	{
	    $d = DateTime::createFromFormat($format, $date);
	    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
	    return $d && $d->format($format) === $date;
	}

	public function getK3Data($id = 0)
	{
	    // Fetch all records
	    $k3Data['data'] = K3::getK3Data($id);
	    //$k3DataF = \App\K3::where('id',$id)->first();
	    echo json_encode($k3Data);
	    exit;
	    // return json_encode($k3Data);
	}

    public function cetak_pdf($id)
    {
        $k3 = \App\K3::find($id);
        $nama_provinsi = $this->getNamaProvinsi($k3);
        $nama_kabupaten = $this->getNamaKabuapten($k3);
        $nama_kecamatan = $this->getNamaKecamatan($k3);
        $nama_desa = $this->getNamaDesa($k3);

        // dd($k3['b5r8']);
        if($k3['b5r8'] == null){
            $path = 'files/default.pdf';
        }else{            
            $path = 'files/'.$k3['b5r8'];
        }

        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
        $nama_file = ''.$k3['tahun'].'-'.$k3['b1r1'].''.$k3['b1r2'].''.$k3['b1r3'].''.$k3['b1r4'].'';
 
        $pdf = PDF::loadview('k3.cetak_sampel_k3',[
            'nama_provinsi' => $nama_provinsi,
            'nama_kabupaten' => $nama_kabupaten,
            'nama_kecamatan' => $nama_kecamatan,
            'nama_desa' => $nama_desa,
            'k3'=>$k3, 
            'base64' => $base64
        ]);
        return $pdf->download($nama_file.'.pdf');
        // return $pdf->stream();
    }
}
