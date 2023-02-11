<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Str;
use DateTime;

class BumdController extends Controller
{
    public function index_responden()
    {
    	$tahun = \App\BUMD::max('tahun');
    	if($tahun == NULL){
    		$daftar_sampel = \App\BUMD::all();
    	}else{
	    	$daftar_sampel = \App\BUMD::where('tahun',$tahun)->get();    	
		    $daftar_tahun = \App\BUMD::select('tahun')->distinct()->get();
	    }

	    // $daftar_tahun =  collect($daftar_tahun)->sortBy('tahun')->toArray();

	    // dd($daftar_tahun);
    	$count = 0;
    	if($daftar_sampel->isEmpty()){
            $daftar_nama_provinsi[$count] = '';
            $daftar_nama_kabupaten[$count] = '';
            // $daftar_nama_kecamatan[$count] = '';
            // $daftar_nama_desa[$count] = '';
        }else{            
        	foreach ($daftar_sampel as $sampel) {    		
        		$daftar_nama_provinsi[$count] = $this->getNamaProvinsi($sampel);
        		$daftar_nama_kabupaten[$count] = $this->getNamaKabuapten($sampel);
        		// $daftar_nama_kecamatan[$count] = $this->getNamaKecamatan($sampel);
        		// $daftar_nama_desa[$count] = $this->getNamaDesa($sampel);
        		$count++; 
        	}
        }   

        if (session( 'success_message')){    		
	    	Alert::success('Berhasil', session('success_message'));
    	}
    	if (session('eror')){
    		Alert::error('Gagal', session('eror'));
    	}

    	//dd($daftar_sampel);
    	// if(count($daftar_sampel) == 0){
    	// 	return view('bumd.index_responden',[
	    // 		'daftar_sampel'=>$daftar_sampel, 
	    // 		'tahun' => $tahun,
	    // 	]);
    	// }else{
	    	return view('bumd.index_responden',[
	    		'daftar_sampel' => $daftar_sampel,
	    		'tahun' => $tahun,
	    		'daftar_tahun' => $daftar_tahun,
	    		'daftar_nama_provinsi' => $daftar_nama_provinsi,
	    		'daftar_nama_kabupaten' => $daftar_nama_kabupaten,
	    		// 'daftar_nama_kecamatan' => $daftar_nama_kecamatan,
	    		// 'daftar_nama_desa' => $daftar_nama_desa
	    	]);
	    // }
    }

	public function index_entri()
    {
    	$tahun = \App\BUMD::max('tahun');
    	if($tahun == NULL){
    		$daftar_sampel = \App\BUMD::all();
    	}else{
	    	$daftar_sampel = \App\BUMD::where('tahun',$tahun)->get();    	
		    $daftar_tahun = \App\BUMD::select('tahun')->distinct()->get();
	    }

	    // $daftar_tahun =  collect($daftar_tahun)->sortBy('tahun')->toArray();

	    // dd($daftar_tahun);
    	$count = 0;
    	if($daftar_sampel->isEmpty()){
            $daftar_nama_provinsi[$count] = '';
            $daftar_nama_kabupaten[$count] = '';
            // $daftar_nama_kecamatan[$count] = '';
            // $daftar_nama_desa[$count] = '';
        }else{            
        	foreach ($daftar_sampel as $sampel) {    		
        		$daftar_nama_provinsi[$count] = $this->getNamaProvinsi($sampel);
        		$daftar_nama_kabupaten[$count] = $this->getNamaKabuapten($sampel);
        		// $daftar_nama_kecamatan[$count] = $this->getNamaKecamatan($sampel);
        		// $daftar_nama_desa[$count] = $this->getNamaDesa($sampel);
        		$count++; 
        	}
        }   

        if (session( 'success_message')){    		
	    	Alert::success('Berhasil', session('success_message'));
    	}
    	if (session('eror')){
    		Alert::error('Gagal', session('eror'));
    	}

    	//dd($daftar_sampel);
    	// if(count($daftar_sampel) == 0){
    	// 	return view('bumd.index_entri',[
	    // 		'daftar_sampel'=>$daftar_sampel, 
	    // 		'tahun' => $tahun,
	    // 	]);
    	// }else{
	    	return view('bumd.index_entri',[
	    		'daftar_sampel' => $daftar_sampel,
	    		'tahun' => $tahun,
	    		'daftar_tahun' => $daftar_tahun,
	    		'daftar_nama_provinsi' => $daftar_nama_provinsi,
	    		'daftar_nama_kabupaten' => $daftar_nama_kabupaten,
	    		// 'daftar_nama_kecamatan' => $daftar_nama_kecamatan,
	    		// 'daftar_nama_desa' => $daftar_nama_desa
	    	]);
	    // }
    }

    public function tambah(Request $request)
    {    	
    	$data_provinsi = \App\Provinsi::all();
    	$data_kabupaten = \App\Kabupaten::all();
    	$data_kecamatan = \App\Kecamatan::all();
    	$data_desa = \App\Desa::all();
    	
    	return view('bumd.tambah',[
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
    	// $data_kecamatan = \App\Kecamatan::all();
    	// $data_desa = \App\Desa::all();
    	
    	return view('bumd.tambah',[
    		'data_provinsi' => $data_provinsi,
    		'data_kabupaten' => $data_kabupaten,
    		// 'data_kecamatan' => $data_kecamatan,
    		// 'data_desa' => $data_desa,
    	]);
    }

    public function create(Request $request)
    {        
        $validator = Validator::make($request->all(),[
    		'tahun' => 'required',
    		'b1r1' => 'required',
    		'b1r2' => 'required',
    		'b1r3' => 'required',
    		'b1r4' => 'required|max:512'
    	]);

		if($validator->fails()){
    		Alert::error('Gagal', 'Terdapat eror');
    		$validator->validate();
    	}else{
    		//insert ke tabel bumd
    		try{
	        
	        \App\BUMD::create($request->all());

	        }catch(\Exception $exception){
				Alert::error('Gagal', 'Terdapat kesalahan saat menyimpan ke database');
				$validator->validate();
			}
	        return redirect('bumd_responden')->withSuccessMessage('Sampel BUMD berhasil ditambahkan');
	    }
    }

     public function edit($id)
    {
    	$bumd = \App\bumd::find($id);
    	$tahun = $bumd->tahun;
    	$kode_provinsi = $bumd->b1r1;
    	$kode_kabupaten = $bumd->b1r2;
    	$perusahaan = $bumd->b1r3;
    	$alamat = $bumd->b1r4;

    	$data_provinsi = \App\Provinsi::all();
    	$data_kabupaten = \App\Kabupaten::where(
    		'provinsi_id',$kode_provinsi
    		)->get();
    	// $data_kecamatan = \App\Kecamatan::where([
     //    	['provinsi_id','=',$kode_provinsi],
     //    	['kabupaten_id','=',$kode_kabupaten],
     //    	])->get();
    	// $data_desa = \App\Desa::where([
     //    	['provinsi_id','=',$kode_provinsi],
     //    	['kabupaten_id','=',$kode_kabupaten],
     //    	['kecamatan_id','=',$kode_kecamatan],
     //    	])->get();
    	// dd($kode_kecamatan);
    	return view('bumd.edit',[
    		'tahun' => $tahun,
    		'data_provinsi' => $data_provinsi,
    		'data_kabupaten' => $data_kabupaten,
    		'perusahaan' => $perusahaan,
    		'alamat' => $alamat,
    		'bumd' => $bumd
    	]);    	
    }

    public function update(Request $request, $id)
    {
    	$validator = Validator::make($request->all(),[
    		'tahun' => 'required',
    		'b1r1' => 'required',
    		'b1r2' => 'required',
    		'b1r3' => 'required',
    		'b1r4' => 'required|max:512'
    	]);

    	if($validator->fails()){
    		Alert::error('Gagal', 'Terdapat eror');
    		$validator->validate();
    	}else{
    		//update  tabel bumd
    		try{

	    	$bumd = \App\BUMD::find($id);
	    	$bumd->update($request->all());
    	 
    	 	}catch(\Exception $exception){
				Alert::error('Gagal', 'Terdapat kesalahan saat menyimpan ke database');
				$validator->validate();
			}
    		return redirect('bumd_responden')->withSuccessMessage('Sampel BUMD berhasil diperbaiki'); 
	    }
	}

	public function delete($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$bumd->delete();
    	return redirect('bumd_responden')->withSuccessMessage('Sampel BUMD berhasi dihapus');
    }

    public function daftarSampel($tahun)
    {
    	$daftar_sampel = \App\BUMD::where('tahun',$tahun)->get();
    	$daftar_tahun = \App\BUMD::select('tahun')->distinct()->get();
    	$count = 0;
    	foreach ($daftar_sampel as $bumd) {    		
    		$daftar_nama_provinsi[$count] = $this->getNamaProvinsi($bumd);
    		$daftar_nama_kabupaten[$count] = $this->getNamaKabuapten($bumd);
    		// $daftar_nama_kecamatan[$count] = $this->getNamaKecamatan($bumd);
    		// $daftar_nama_desa[$count] = $this->getNamaDesa($bumd);
    		$count++; 
    	}       
    	// dd(count($daftar_sampel));
    	// if(count($daftar_sampel) == 0){
    	// 	return view('bumd.index_responden',[
	    // 		'daftar_sampel'=>$daftar_sampel, 
	    // 		'tahun' => $tahun,
	    // 	]);
    	// }else{
    		return view('bumd.index_responden',[
	    		'daftar_sampel' => $daftar_sampel, 
	    		'daftar_tahun' => $daftar_tahun,
	    		'tahun' => $tahun,
	    		'daftar_nama_provinsi' => $daftar_nama_provinsi,
	    		'daftar_nama_kabupaten' => $daftar_nama_kabupaten,
	    		// 'daftar_nama_kecamatan' => $daftar_nama_kecamatan,
	    		// 'daftar_nama_desa' => $daftar_nama_desa
	    	]);
    	// }	    	
	}

	public function entri($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$nama_provinsi = $this->getNamaProvinsi($bumd);
    	$nama_kabupaten = $this->getNamaKabuapten($bumd);
    	// $nama_kecamatan = $this->getNamaKecamatan($bumd);
    	// $nama_desa = $this->getNamaDesa($bumd);
    	//dd($nama_kecamatan);
    	return view('bumd.entri',[
    		'nama_provinsi' => $nama_provinsi,
    		'nama_kabupaten' => $nama_kabupaten,
    		// 'nama_kecamatan' => $nama_kecamatan,
    		// 'nama_desa' => $nama_desa,
    		'bumd'=>$bumd
    	]);
    }

    public function simpan(Request $request, $id)
    {
    	//dd($request);
    	$bumd = \App\BUMD::find($id);
    	$bumd->update($request->all());
    	return redirect('entri_bumd.entri',['id'=>$id])->with('sukses','Sampel BUMD berhasil disimpan');
    }

    public function bloki($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$nama_provinsi = $this->getNamaProvinsi($bumd);
    	$nama_kabupaten = $this->getNamaKabuapten($bumd);
    	// $nama_kecamatan = $this->getNamaKecamatan($bumd);
    	// $nama_desa = $this->getNamaDesa($bumd);
    	$daftar_kondef = \App\Kondef_BUMD::all();  
    	//dd($nama_kecamatan);
    	return view('bumd.bloki',[
    		'nama_provinsi' => $nama_provinsi,
    		'nama_kabupaten' => $nama_kabupaten,
    		// 'nama_kecamatan' => $nama_kecamatan,
    		// 'nama_desa' => $nama_desa,
    		'bumd'=>$bumd,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_bloki(Request $request, $id)
    {
    	$validator = Validator::make($request->all(),[
    		'b1r3' => 'required',
    		'b1r4' => 'required',
    		'b1r4a' => 'digits:5|nullable',
            'b1r4b' => 'email|nullable',
            'b1r4c' => 'numeric|nullable',
            'b1r4d' => 'nullable',
            'b1r5a' => 'nullable',
            'b1r5b' => 'nullable',
            'b1r5c' => 'numeric|nullable',
    	]);

    	if($validator->fails()){
    		Alert::error('Gagal', 'Terdapat eror');
    		$validator->validate();
    	}else{

    	$bumd = \App\BUMD::find($id);
    	$nama_provinsi = $this->getNamaProvinsi($bumd);
    	$nama_kabupaten = $this->getNamaKabuapten($bumd);
    	// $nama_kecamatan = $this->getNamaKecamatan($bumd);
    	// $nama_desa = $this->getNamaDesa($bumd);
    	$bumd->update($request->all());

    	return redirect('/entri_bumd/'.$id.'/bloki')->with('sukses','Sampel BUMD berhasil disimpan');

    	}
    } 

    public function blokii($id)
    {
    	$bumd = \App\BUMD::find($id);  
    	$daftar_kondef = \App\Kondef_BUMD::all();  	
    	return view('bumd.blokii',[
    		'bumd'=>$bumd,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokii(Request $request, $id)
    {
    	$validator = Validator::make($request->all(),[
    		'b2r1' => 'required|numeric|min:1|max:2',
    		'b2r2a' => 'required',
    		'b2r2b' => 'required',
            'b2r2c' => 'required',
            'b2r2d' => 'required',
            'b2r2e' => 'required',
            'b2r3' => 'required|numeric',
            'b2r4a' => 'required',
            'b2r4b' => 'required',
            'b2r4c' => 'required',
            'b2r5a' => 'nullable',
            'b2r5b' => 'nullable',
            'b2r5c' => 'nullable',
            'b2r6a' => 'nullable',
            'b2r6b' => 'nullable',
            'b2r6c' => 'nullable',
            'b2r7' => 'required',
            'b2r8ak2' => 'numeric|required',
            'b2r8ak3' => 'numeric|required',
            'b2r8bk2' => 'numeric|required',
            'b2r8bk3' => 'numeric|required'
    	]);

    	if($validator->fails()){
    		Alert::error('Gagal', 'Terdapat eror');
    		$validator->validate();
    	}else{
	    	$bumd = \App\BUMD::find($id);
	    	$bumd->update($request->all());
	    	return redirect('/entri_bumd/'.$id.'/blokii')->with('sukses','Sampel BUMD berhasil disimpan');
	    }
    }

    public function blokiii($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$daftar_kondef = \App\Kondef_BUMD::all();
    	return view('bumd.blokiii',[
    		'bumd'=>$bumd,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiii(Request $request, $id)
    {
    	//dd($request);
    	$bumd = \App\BUMD::find($id);
    	$bumd->update($request->all());
    	return redirect('/entri_bumd/'.$id.'/blokiii')->with('sukses','Sampel BUMD berhasil disimpan');
    }

    public function blokiii_1($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$daftar_kondef = \App\Kondef_BUMD::all();
    	return view('bumd.blokiii-1',[
    		'bumd'=>$bumd,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiii_1(Request $request, $id)
    {
    	$bumd = \App\BUMD::find($id);
    	$bumd->update($request->all());
    	return redirect('/entri_bumd/'.$id.'/blokiii_1')->with('sukses','Sampel BUMD berhasil disimpan');
    }

    // public function blokiii_2($id)
    // {
    // 	$bumd = \App\BUMD::find($id);
    // 	$daftar_kondef = \App\Kondef::all();
    // 	return view('bumd.blokiii-2',[
    // 		'bumd'=>$bumd,
    // 		'daftar_kondef' => $daftar_kondef
    // 	]);
    // }

    // public function simpan_blokiii_2(Request $request, $id)
    // {
    // 	$bumd = \App\BUMD::find($id);
    // 	$bumd->update($request->all());
    // 	return redirect('/entri_bumd/'.$id.'/blokiii_2')->with('sukses','Sampel BUMD berhasil disimpan');
    // }

    // public function blokiii_3($id)
    // {
    // 	$bumd = \App\BUMD::find($id);
    // 	$daftar_kondef = \App\Kondef::all();
    // 	return view('bumd.blokiii-3',[
    // 		'bumd'=>$bumd,
    // 		'daftar_kondef' => $daftar_kondef
    // 	]);
    // }

    // public function simpan_blokiii_3(Request $request, $id)
    // {
    // 	$bumd = \App\BUMD::find($id);
    // 	$bumd->update($request->all());
    // 	return redirect('/entri_bumd/'.$id.'/blokiii_3')->with('sukses','Sampel BUMD berhasil disimpan');
    // }

    // public function blokiii_4($id)
    // {
    // 	$bumd = \App\BUMD::find($id);
    // 	$daftar_kondef = \App\Kondef::all();
    // 	return view('bumd.blokiii-4',[
    // 		'bumd'=>$bumd,
    // 		'daftar_kondef' => $daftar_kondef
    // 	]);
    // }

    // public function simpan_blokiii_4(Request $request, $id)
    // {
    // 	$bumd = \App\BUMD::find($id);
    // 	$bumd->update($request->all());
    // 	return redirect('/entri_bumd/'.$id.'/blokiii_4')->with('sukses','Sampel BUMD berhasil disimpan');
    // }

    public function blokiv($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$daftar_kondef = \App\Kondef_BUMD::all();
    	return view('bumd.blokiv',[
    		'bumd'=>$bumd,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokiv(Request $request, $id)
    {
    	$bumd = \App\BUMD::find($id);
    	$bumd->update($request->all());
    	return redirect('/entri_bumd/'.$id.'/blokiv')->with('sukses','Sampel BUMD berhasil disimpan');
    }

    public function blokv($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$daftar_kondef = \App\Kondef_BUMD::all();
    	return view('bumd.blokv',[
    		'bumd'=>$bumd,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokv(Request $request, $id)
    {
    	$validator = Validator::make($request->all(),[
    		'b5r1' => 'required|string',
            'b5r2' => 'numeric|nullable',
            'b5r4' => 'required',
            'b5r5' => 'mimes:jpeg,jpg,png,pdf',
    	]);

    	if($validator->fails()){
    		Alert::error('Gagal', 'Terdapat eror');
    		$validator->validate();
    	}else{
	    	$bumd = \App\BUMD::find($id);
	    	$request['b5r4'] = $this->getTanggal($request->b5r5);    	
	    	// dd($request);
	    	$bumd->update($request->all());

	    	if($request->hasFile('b5r5')){
		    	// menyimpan data file yang diupload ke variabel $file
				$file = $request->file('b5r5');
				$nama_file = time()."_".$file->getClientOriginalName();
				$tujuan_upload = 'files';
				$file->move($tujuan_upload,$nama_file);

				$bumd->b5r5 = $nama_file;
				$bumd->save();
	    	}
	    	return redirect('/entri_bumd/'.$id.'/blokv')->with('sukses','Sampel K3 berhasil disimpan');
	    }
    }

    public function blokvi($id)
    {
    	$bumd = \App\BUMD::find($id);
    	$daftar_kondef = \App\Kondef_BUMD::all();
    	return view('bumd.blokvi',[
    		'bumd'=>$bumd,
    		'daftar_kondef' => $daftar_kondef
    	]);
    }

    public function simpan_blokvi(Request $request, $id)
    {
    	$validator = Validator::make($request->all(),[
    		'b6r1k1' => 'required|string',
            'b6r1k2' => 'required|string',
            'b6r2k1' => 'required|date',
            'b6r2k2' => 'required|date',
            'b6r2k3' => 'required|date',
            'b6r2k4' => 'required|date',
    	]);

    	if($validator->fails()){
    		Alert::error('Gagal', 'Terdapat eror');
    		$validator->validate();
    	}else{
	    	$bumd = \App\BUMD::find($id);
	    	$request['b6r2k1'] = $this->getTanggal($request->b6r2k1);
	    	$request['b6r2k2'] = $this->getTanggal($request->b6r2k2);
	    	$request['b6r2k3'] = $this->getTanggal($request->b6r2k3);
	    	$request['b6r2k4'] = $this->getTanggal($request->b6r2k4);
	        // dd($request);
	    	
	    	$bumd->update($request->all());
	    	
	    	return redirect('/entri_bumd/'.$id.'/blokvi')->with('sukses','Sampel BUMD berhasil disimpan');
    	}
    }


    // ******* SIMPAN TIAP HALAMAN ******\\\

    public function simpan_bumd_bloki(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokii(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokiii(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokiii_1(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokiii_2(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokiii_3(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokiii_4(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokiv(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);    	
    	$bumd->update($request->all());
    	//dd($request->validator->fails());
    	//dd($id);
    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function simpan_bumd_blokv(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);
    	$request['b5r5'] = $this->getTanggal($request->b5r5);    	
    	// dd($request);
    	$bumd->update($request->all());

    	if($request->hasFile('b5r8')){
	    	// menyimpan data file yang diupload ke variabel $file
			$file = $request->file('b5r8');
			$nama_file = time()."_".$file->getClientOriginalName();
			$tujuan_upload = 'files';
			$file->move($tujuan_upload,$nama_file);

			$bumd->b5r8 = $nama_file;
			$bumd->save();
    	}

    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}    	
    }

    public function simpan_bumd_blokvi(Request $request, $id, $blok)
    {
    	$bumd = \App\BUMD::find($id);
    	$request['b6r2k1'] = $this->getTanggal($request->b6r2k1);
    	$request['b6r2k2'] = $this->getTanggal($request->b6r2k2);
    	$request['b6r2k3'] = $this->getTanggal($request->b6r2k3);
    	$request['b6r2k4'] = $this->getTanggal($request->b6r2k4);
    	
    	$bumd->update($request->all());

    	if($blok == "0"){
    		return redirect('/bumd_entri');
    	}else{    
			$blokNow = $this->getBlok($blok);	
    		return redirect('/entri_bumd/'.$id.'/'.$blokNow);
    	}
    }

    public function getBlok($blok)
    {
    	if($blok == "1"){    		
    		return "bloki";
    	}else if($blok == "2"){
    		return "blokii";
    	}else if($blok == "3"){
    		return "blokiii";
    	}else if($blok == "3.1"){    		
    		return "blokiii_1";
    	}else if($blok == "3.2"){    		
    		return "blokiii_2";
    	}else if($blok == "3.3"){
    		return "blokiii_3";
    	}else if($blok == "3.4"){
    		return "blokiii_4";
    	}else if($blok == "4"){
    		return "blokiv";
    	}else if($blok == "5"){
    		return "blokv";
    	}else if($blok == "6"){
    		return "blokvi";
    	}
    }

    public function getNamaProvinsi($bumd)
	{
		$nama_provinsi = \App\Provinsi::where('kode',$bumd->b1r1)->value('provinsi');
		return ucfirst(ucwords(strtolower($nama_provinsi)));
	}

	public function getNamaKabuapten($bumd)
	{
		$nama_kabupaten = \App\Kabupaten::where([
        	['provinsi_id','=',$bumd->b1r1],
        	['kode','=',$bumd->b1r2],
        	])->value('kabupaten');
		return ucfirst(ucwords(strtolower($nama_kabupaten)));
	}

	// public function getNamaKecamatan($bumd)
	// {
	// 	$nama_kecamatan = \App\Kecamatan::where([
 //        	['provinsi_id','=',$bumd->b1r1],
 //        	['kabupaten_id','=',$bumd->b1r2],
 //        	['kode','=',$bumd->b1r3],
 //        	])->value('kecamatan');
	// 	return $nama_kecamatan;
	// }

	// public function getNamaDesa($bumd)
	// {
	// 	$nama_desa = \App\Desa::where([
 //        	['provinsi_id','=',$bumd->b1r1],
 //        	['kabupaten_id','=',$bumd->b1r2],
 //        	['kecamatan_id','=',$bumd->b1r3],
 //        	['kode','=',$bumd->b1r4]
 //        	])->value('desa');
	// 	return $nama_desa;
	// }

	public function getTanggal($tanggal)
	{
		if($this->validateDate($tanggal)){
			return $tanggal;	
		}else{
			// $date = date_create_from_format("m/d/Y",$tanggal);
			// $date = DateTime::createFromFormat('m/d/Y', $tanggal);
			return  date_format(new DateTime($tanggal),"Y-m-d");			
		}
	}

	public function validateDate($date, $format = 'Y-m-d')
	{
	    $d = DateTime::createFromFormat($format, $date);
	    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
	    return $d && $d->format($format) === $date;
	}
}
