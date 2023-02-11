<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auths.login');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin')->name('login.post');
Route::get('/logout','AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth','checkRole:admin']], function(){
// 	Route::get('/dashboard','DashboardController@index');
// 	Route::get('/siswa','SiswaController@index');
// 	Route::post('/siswa/create','SiswaController@create');
// 	Route::get('/siswa/{id}/edit','SiswaController@edit');
// 	Route::post('/siswa/{id}/update','SiswaController@update');
// 	Route::get('/siswa/{id}/delete','SiswaController@delete');
// 	Route::get('/siswa/{id}/profile','SiswaController@profile');
// });

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
	
	//Route Pegawai
	Route::get('/pegawai','PegawaiController@index')->name('pegawai');
	Route::get('pegawai/tambah','PegawaiController@tambah')->name('pegawai.tambah');
	Route::get('/pegawai/{id}/edit','PegawaiController@edit')->name('pegawai.edit');
	Route::get('/pegawai/{id}/delete','PegawaiController@delete')->name('pegawai.delete');
	Route::post('pegawai/create','PegawaiController@create')->name('pegawai.create');

	//Route Sampel K3
	Route::post('/daftar_sampel/tambah','K3Controller@tambah')->name('daftar_sampel.tambah.simpan');
	Route::get('/daftar_sampel/tambah','K3Controller@tambahGet')->name('daftar_sampel.tambah');
	Route::post('/daftar_sampel/create','K3Controller@create')->name('daftar_sampel.create');
	Route::get('/daftar_sampel/{id}/edit','K3Controller@edit')->name('daftar_sampel.edit');
	Route::post('/daftar_sampel/{id}/update','K3Controller@update')->name('daftar_sampel.update');
	Route::get('/daftar_sampel/{id}/delete','K3Controller@delete')->name('daftar_sampel.delete');

	//Route Sampel BUMD
	Route::post('/sampel_bumd/tambah','BumdController@tambah')->name('sampel_bumd.tambah.simpan');
	Route::get('/sampel_bumd/tambah','BumdController@tambahGet')->name('sampel_bumd.tambah');
	Route::post('/sampel_bumd/create','BumdController@create')->name('sampel_bumd.create');
	Route::get('/sampel_bumd/{id}/edit','BumdController@edit')->name('sampel_bumd.edit');
	Route::post('/sampel_bumd/{id}/update','BumdController@update')->name('sampel_bumd.update');
	Route::get('/sampel_bumd/{id}/delete','BumdController@delete')->name('sampel_bumd.delete');

});

Route::group(['middleware' => ['auth','checkRole:admin,user']], function(){
	
	//Route Dashboard
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	
	//Route Pegawai
	Route::get('/pegawai/{id}/profile','PegawaiController@profile')->name('pegawai.profile');
	Route::get('/pegawai/{id}/myprofile','PegawaiController@myprofile')->name('pegawai.myprofile');
	Route::post('/pegawai/{id}/update','PegawaiController@update')->name('pegawai.update');
	Route::post('/pegawai/{id}/update_profile','PegawaiController@update')->name('pegawai.update_profile');
	
	//Route BUMD
	Route::get('/bumd_entri','BumdController@index_entri')->name('bumd_entri');
	Route::get('/bumd_responden','BumdController@index_responden')->name('bumd_responden');

	Route::get('/entri_bumd/{id}/entri','BumdController@entri')->name('entri_bumd.entri');
	Route::post('/entri_bumd/{id}/simpan','BumdController@simpan')->name('entri_bumd.simpan');
	Route::get('/entri_bumd/{id}/bloki','BumdController@bloki')->name('entri_bumd.bloki');
	Route::post('/entri_bumd/{id}/simpan_bloki','BumdController@simpan_bloki')->name('entri_bumd.simpan_bloki');
	Route::get('/entri_bumd/{id}/blokii','BumdController@blokii')->name('entri_bumd.blokii');
	Route::post('/entri_bumd/{id}/simpan_blokii','BumdController@simpan_blokii')->name('entri_bumd.simpan_blokii');
	Route::get('/entri_bumd/{id}/blokiii','BumdController@blokiii')->name('entri_bumd.blokiii');
	Route::post('/entri_bumd/{id}/simpan_blokiii','BumdController@simpan_blokiii')->name('entri_bumd.simpan_blokiii');
	Route::get('/entri_bumd/{id}/blokiii_1','BumdController@blokiii_1')->name('entri_bumd.blokiii_1');
	Route::post('/entri_bumd/{id}/simpan_blokiii_1','BumdController@simpan_blokiii_1')->name('entri_bumd.simpan_blokiii_1');
	Route::get('/entri_bumd/{id}/blokiii_2','BumdController@blokiii_2')->name('entri_bumd.blokiii_2');
	Route::post('/entri_bumd/{id}/simpan_blokiii_2','BumdController@simpan_blokiii_2')->name('entri_bumd.simpan_blokiii_2');
	Route::get('/entri_bumd/{id}/blokiii_3','BumdController@blokiii_3')->name('entri_bumd.blokiii_3');
	Route::post('/entri_bumd/{id}/simpan_blokiii_3','BumdController@simpan_blokiii_3')->name('entri_bumd.simpan_blokiii_3');
	Route::get('/entri_bumd/{id}/blokiii_4','BumdController@blokiii_4')->name('entri_bumd.blokiii_4');
	Route::post('/entri_bumd/{id}/simpan_blokiii_4','BumdController@simpan_blokiii_4')->name('entri_bumd.simpan_blokiii_4');
	Route::get('/entri_bumd/{id}/blokiv','BumdController@blokiv')->name('entri_bumd.blokiv');
	Route::post('/entri_bumd/{id}/simpan_blokiv','BumdController@simpan_blokiv')->name('entri_bumd.simpan_blokiv');
	Route::get('/entri_bumd/{id}/blokv','BumdController@blokv')->name('entri_bumd.blokv');
	Route::post('/entri_bumd/{id}/simpan_blokv','BumdController@simpan_blokv')->name('entri_bumd.simpan_blokv');
	Route::get('/entri_bumd/{id}/blokvi','BumdController@blokvi')->name('entri_bumd.blokvi');
	Route::post('/entri_bumd/{id}/simpan_blokvi','BumdController@simpan_blokvi')->name('entri_bumd.simpan_blokvi');

	Route::post('entri_bumd/{id}/simpan_bloki/{blok}','BumdController@simpan_bumd_bloki');
	Route::post('entri_bumd/{id}/simpan_blokii/{blok}','BumdController@simpan_bumd_blokii');
	Route::post('entri_bumd/{id}/simpan_blokiii/{blok}','BumdController@simpan_bumd_blokiii');
	Route::post('entri_bumd/{id}/simpan_blokiii_1/{blok}','BumdController@simpan_bumd_blokiii_1');
	Route::post('entri_bumd/{id}/simpan_blokiii_2/{blok}','BumdController@simpan_bumd_blokiii_2');
	Route::post('entri_bumd/{id}/simpan_blokiii_3/{blok}','BumdController@simpan_bumd_blokiii_3');
	Route::post('entri_bumd/{id}/simpan_blokiii_4/{blok}','BumdController@simpan_bumd_blokiii_4');
	Route::post('entri_bumd/{id}/simpan_blokiv/{blok}','BumdController@simpan_bumd_blokiv');
	Route::post('entri_bumd/{id}/simpan_blokv/{blok}','BumdController@simpan_bumd_blokv');
	Route::post('entri_bumd/{id}/simpan_blokvi/{blok}','BumdController@simpan_bumd_blokvi');
	

	//Route K3
	Route::get('/k3','k3Controller@index')->name('k3');
	Route::get('/entri_data/{id}/entri','K3Controller@entri')->name('entri_data.entri');
	Route::post('/entri_data/{id}/simpan','K3Controller@simpan')->name('entri_data.simpan');
	Route::get('/entri_data/{id}/bloki','K3Controller@bloki')->name('entri_data.bloki');
	Route::post('/entri_data/{id}/simpan_bloki','K3Controller@simpan_bloki')->name('entri_data.simpan_bloki');
	Route::get('/entri_data/{id}/blokii','K3Controller@blokii')->name('entri_data.blokii');
	Route::post('/entri_data/{id}/simpan_blokii','K3Controller@simpan_blokii')->name('entri_data.simpan_blokii');
	Route::get('/entri_data/{id}/blokiii','K3Controller@blokiii')->name('entri_data.blokiii');
	Route::post('/entri_data/{id}/simpan_blokiii','K3Controller@simpan_blokiii')->name('entri_data.simpan_blokiii');
	Route::get('/entri_data/{id}/blokiii_1','K3Controller@blokiii_1')->name('entri_data.blokiii_1');
	Route::post('/entri_data/{id}/simpan_blokiii_1','K3Controller@simpan_blokiii_1')->name('entri_data.simpan_blokiii_1');
	Route::get('/entri_data/{id}/blokiii_2','K3Controller@blokiii_2')->name('entri_data.blokiii_2');
	Route::post('/entri_data/{id}/simpan_blokiii_2','K3Controller@simpan_blokiii_2')->name('entri_data.simpan_blokiii_2');
	Route::get('/entri_data/{id}/blokiii_3','K3Controller@blokiii_3')->name('entri_data.blokiii_3');
	Route::post('/entri_data/{id}/simpan_blokiii_3','K3Controller@simpan_blokiii_3')->name('entri_data.simpan_blokiii_3');
	Route::get('/entri_data/{id}/blokiii_4','K3Controller@blokiii_4')->name('entri_data.blokiii_4');
	Route::post('/entri_data/{id}/simpan_blokiii_4','K3Controller@simpan_blokiii_4')->name('entri_data.simpan_blokiii_4');
	Route::get('/entri_data/{id}/blokiv','K3Controller@blokiv')->name('entri_data.blokiv');
	Route::post('/entri_data/{id}/simpan_blokiv','K3Controller@simpan_blokiv')->name('entri_data.simpan_blokiv');
	Route::get('/entri_data/{id}/blokv','K3Controller@blokv')->name('entri_data.blokv');
	Route::post('/entri_data/{id}/simpan_blokv','K3Controller@simpan_blokv')->name('entri_data.simpan_blokv');
	Route::get('/entri_data/{id}/blokvi','K3Controller@blokvi')->name('entri_data.blokvi');
	Route::post('/entri_data/{id}/simpan_blokvi','K3Controller@simpan_blokvi')->name('entri_data.simpan_blokvi');

	Route::post('entri_data/{id}/simpan_bloki/{blok}','K3Controller@simpan_k3_bloki');
	Route::post('entri_data/{id}/simpan_blokii/{blok}','K3Controller@simpan_k3_blokii');
	Route::post('entri_data/{id}/simpan_blokiii/{blok}','K3Controller@simpan_k3_blokiii');
	Route::post('entri_data/{id}/simpan_blokiii_1/{blok}','K3Controller@simpan_k3_blokiii_1');
	Route::post('entri_data/{id}/simpan_blokiii_2/{blok}','K3Controller@simpan_k3_blokiii_2');
	Route::post('entri_data/{id}/simpan_blokiii_3/{blok}','K3Controller@simpan_k3_blokiii_3');
	Route::post('entri_data/{id}/simpan_blokiii_4/{blok}','K3Controller@simpan_k3_blokiii_4');
	Route::post('entri_data/{id}/simpan_blokiv/{blok}','K3Controller@simpan_k3_blokiv');
	Route::post('entri_data/{id}/simpan_blokv/{blok}','K3Controller@simpan_k3_blokv');
	Route::post('entri_data/{id}/simpan_blokvi/{blok}','K3Controller@simpan_k3_blokvi');

	Route::get('/entri_data/{id}/cetak_pdf', 'K3Controller@cetak_pdf')->name('entri_data.cetak_pdf');

	//Route Konsep dan Definisi
	Route::get('/kondef','KondefController@index')->name('kondef');
	Route::get('/kondef_bumd','Kondef_BumdController@index')->name('kondef_bumd');
	Route::get('/tutorial','KondefController@tutorial')->name('tutorial');

	//dynamic dropdown pilih wilayah
	Route::get('/provinsi/{kode_provinsi}','ProvinsiController@getKabupaten');
	Route::get('/kabupaten/{kode_provinsi}/{kode_kabupaten}','KabupatenController@getKecamatan');
	Route::get('/kecamatan/{kode_provinsi}/{kode_kabupaten}/{kode_kecamatan}','KecamatanController@getDesa');

	//Pilih Tahun Daftar Sampel	K3
	Route::get('/tahun/{tahun}','K3Controller@daftarSampel');
	Route::get('/daftar_sampel/{tahun}','K3Controller@daftarSampel');

	//Pilih Tahun Daftar Sampel BUMD	
	Route::get('/tahun_bumd/{tahun}','BumdController@daftarSampel');
	Route::get('/sampel_bumd/{tahun}','BumdController@daftarSampel');

	//Halaman Maintenance
	Route::get('/page404','DashboardController@maintenance')->name('page404');

	//Retrieve Data dari Database ke JQuery
	Route::get('/getK3/{id}','K3Controller@getK3Data');

	//Rubah Password
	Route::get('/change-password/{id}', 'ChangePasswordController@index')->name('change.password.get');
	Route::post('/change-password/{id}/{page}', 'ChangePasswordController@store')->name('change.password.post');
});