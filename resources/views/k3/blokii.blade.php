@extends('layouts.master')

@section('content')
			
<form action="{{ asset(route('entri_data.simpan_blokii', ['id'=>$k3->id], false)) }}{{-- /entri_data/{{$k3->id}}/simpan_blokii --}}" id="form_blokii" method="POST" enctype="multipart/form-data">
{{csrf_field()}}

	<div id="left-sidebar" class="sidebar">
		<button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
			<span class="sr-only">Toggle Fullwidth</span>
			<i class="fa fa-angle-left"></i>
		</button>

		<div class="sidebar-scroll">
			
			<div class="user-account">
				<img src="{{asset('images/'.Auth::user()->pegawai->avatar)}}" class="img-responsive img-circle user-photo" alt="User Profile Picture">
				<div class="dropdown">
					<a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Operator, <strong>{{Auth::user()->name}}</strong> <i class="fa fa-caret-down"></i></a>
					<ul class="dropdown-menu dropdown-menu-right account">	
						<li><button class="btn btn-block btn-keluar" type="submit" style="text-align:left;"><span class="lnr lnr-exit"></span> Selesai Entri</button></li>
					</ul>		
				</div>
			</div>
			<nav id="left-sidebar-nav" class="sidebar-nav">
				  	
				<button class="btn btn-block btn-default btn-bloki" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok I</b></button>

				<button class="btn btn-block btn-default btn-blokii active" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok II</b></button>
				
				<a class="btn btn-block btn-default" style="text-align:left;" id="flip"><span class="lnr lnr-chevron-right flip-simbol-right"></span><span class="lnr lnr-chevron-down flip-simbol-down" style= "display:none">&nbsp;</span><b>Blok III</b></a>
				
							
					<div class="flip-btn" style= "display:none">
						<button class="btn btn-block btn-blokiii" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></button>
						
						<button class="btn btn-block btn-blokiii1" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (1)</b></button>

						<button class="btn btn-block btn-blokiii2" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (2)</b></button>

						<button class="btn btn-block btn-blokiii3" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (3)</b></button>

						<button class="btn btn-block btn-blokiii4" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (4)</b></button>
					</div>
				&nbsp;

				<button class="btn btn-block btn-default btn-blokiv" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok IV</b></button>	

				<button class="btn btn-block btn-default btn-blokv" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok V</b></button>	

				<button class="btn btn-block btn-default btn-blokvi" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok VI</b></button>


			</nav>
		</div>
	</div>

	<div id="main-content">
		<div class="container-fluid">
			@if(session('sukses'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<i class="fa fa-check-circle"></i> {{session('sukses')}}
				</div>
			@endif
			<div class="section-heading text-center">
				<h1 class="page-title text">Survei Statistik Keuangan Pemerintah Desa / Nagari (K3) <br> Tahun {{$k3->tahun}}</h1>
			</div>

			{{-- <ul class="nav nav-pills nav-justified " >
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$k3->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokvi" ><b>Blok VI</b></a></li>
			</ul>	 --}}	
			<div class="btn-group-justified" role="group">
				<div class="btn-group">
					<button class="btn btn-default btn-bloki" type="submit"><b>Blok I</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokii active" type="submit"><b>Blok II</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii" type="submit"><b>Blok III</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii1" type="submit"><b>Blok III (1)</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii2" type="submit"><b>Blok III (2)</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii3" type="submit"><b>Blok III (3)</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii4" type="submit"><b>Blok III (4)</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiv" type="submit"><b>Blok IV</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokv" type="submit"><b>Blok V</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokvi" type="submit"><b>Blok VI</b></button>
				</div>
			</div>

	<div class=" plan selected-plan profile-section">						
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK II. KETERANGAN UMUM DAN SUMBER DAYA</h2>
		</div>
		<div class="clearfix">
			
			<div class="profile-section">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th>1. Keterangan Umum Kepala Desa / Wali Nagari </th>
						</tr>
						<tr>
							<td>a. Nama : ..........................................</td>
							<td></td> 
							<td colspan="2" class="action">
								<div class="form-group {{$errors->has('b2r1a') ? 'has-error' : ''}}">									
									<input class="form-control" type="text" maxlength="50" name="b2r1a" value="{{$errors->any() ? old('b2r1a') : $k3->b2r1a}}">	
									@if ($errors->has('b2r1a'))
										<span class="help-block">{{$errors->first('b2r1a')}}</span>
									@endif
								</div>
							</td>
							
						</tr>
						<tr>
							<td>b. Umur : ..........................................Tahun</td>
							<td></td> 
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r1b') ? 'has-error' : ''}}">	
									<input class="form-control" type="text" maxlength="2" name="b2r1b" value="{{$errors->any() ? old('b2r1b') : $k3->b2r1b}}">
									@if ($errors->has('b2r1b'))
										<span class="help-block">{{$errors->first('b2r1b')}}</span>
									@endif
								</div>
							</td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[11]->keterangan}}" title="{{$daftar_kondef[11]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>c. Jenis Kelamin :</td>
							<td>Laki-Laki 1</td> 
							<td>Perempuan 2</td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r1c') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r1c" value="{{$errors->any() ? old('b2r1c') : $k3->b2r1c}}">
									@if ($errors->has('b2r1c'))
										<span class="help-block">{{$errors->first('b2r1c')}}</span>
									@endif
								</div>
							</td> 
						</tr>
						<tr>
							<td>d. Tahun mulai menjabat : ..........................</td>
							<td></td> 
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r1d') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r1d" value="{{$errors->any() ? old('b2r1d') : $k3->b2r1d}}">
									@if ($errors->has('b2r1d'))
										<span class="help-block">{{$errors->first('b2r1d')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[12]->keterangan}}" title="{{$daftar_kondef[12]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td rowspan="2">e. Pendidikan terakhir yang ditamatkan :</td>
							<td>Tidak Tamat SMA 1</td> 
							<td>SMA / D I / D II / D III 2</td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r1e') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r1e" value="{{$errors->any() ? old('b2r1e') : $k3->b2r1e}}">
									@if ($errors->has('b2r1e'))
										<span class="help-block">{{$errors->first('b2r1e')}}</span>
									@endif
								</div>
							</td> 
						</tr>
						<tr>	
							<td>Sarja S1 / D IV 3</td> 
							<td>S2 / S3 4</td>
						</tr>
						<tr>
							<th>2. Banyaknya Aparatur Desa / Nagari </th>
						</tr>
						<tr>
							<td colspan="4">
								{{-- <div class="form-group-table {{$errors->has('b2r2ak3') or $errors->has('b2r2a4') or $errors->has('b2r2bk1') or $errors->has('b2r2bk2') or $errors->has('b2r2bk3') or $errors->has('b2r2bk4') or $errors->has('b2r2ck3') or $errors->has('b2r2ck4') or $errors->has('b2r2dk3') or $errors->has('b2r2dk4') or $errors->has('b2r2ek3') or $errors->has('b2r2ek4') ? 'has-error' : ''}}"> --}}
								<table class="table table-bordered text-center">
								    <thead>
									    <tr>
									      	<th class="text-center" rowspan="2">Jabatan</th>
									      	<th class="text-center" colspan="2">PNS</th>
									      	<th class="text-center" colspan="2">Non PNS</th>
									    </tr>
									    <tr>
											<th class="text-center">Laki-Laki</th>
											<th class="text-center">Perempuan</th>
											<th class="text-center">Laki-Laki</th>
											<th class="text-center">Perempuan</th>
									    </tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-left">a. Kepala Desa / Wali Nagari</td>
											<td></td>
											<td></td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2ak3')  ? 'has-error' : ''}}">
													<input class="form-control" type="text"maxlength="2" name="b2r2ak3" value="{{$errors->any() ? old('b2r2ak3') : $k3->b2r2ak3}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2ak4')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="2" name="b2r2ak4" value="{{$errors->any() ? old('b2r2ak4') : $k3->b2r2ak4}}">
												</div>
											</td>
										</tr>
										<tr>
											<td class="text-left">b. Sekretaris Desa / Nagari</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2bk1')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="1" name="b2r2bk1" value="{{$errors->any() ? old('b2r2bk1') : $k3->b2r2bk1}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2bk2')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="1" name="b2r2bk2" value="{{$errors->any() ? old('b2r2bk2') : $k3->b2r2bk2}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2bk3')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="2" name="b2r2bk3" value="{{$errors->any() ? old('b2r2bk3') : $k3->b2r2bk3}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2bk4')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="2" name="b2r2bk4" value="{{$errors->any() ? old('b2r2bk4') : $k3->b2r2bk4}}">
												</div>
											</td>
										</tr>
										<tr>
											<td class="text-left">c. Kepala Urusan</td>
											<td></td>
											<td></td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2ck3')  ? 'has-error' : ''}}">
													<input class="form-control" type="text"maxlength="2" name="b2r2ck3" value="{{$errors->any() ? old('b2r2ck3') : $k3->b2r2ck3}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2ck4')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="2" name="b2r2ck4" value="{{$errors->any() ? old('b2r2ck4') : $k3->b2r2ck4}}">
												</div>
											</td>
										</tr>
										<tr>
											<td class="text-left">d. Kepala Seksi</td>
											<td></td>
											<td></td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2dk3')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="2" name="b2r2dk3" value="{{$errors->any() ? old('b2r2dk3') : $k3->b2r2dk3}}">
													</div>
												</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2dk4')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="2" name="b2r2dk4" value="{{$errors->any() ? old('b2r2dk4') : $k3->b2r2dk4}}">
												</div>
											</td>
										</tr>
										<tr>
											<td class="text-left">e. Kepala Dusun/Lingkungan/Jorong</td>
											<td></td>
											<td></td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2ek3')  ? 'has-error' : ''}}">
													<input class="form-control" type="text" maxlength="2" name="b2r2ek3" value="{{$errors->any() ? old('b2r2ek3') : $k3->b2r2ek3}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r2ek4')  ? 'has-error' : ''}}">
													<input class="form-control" type="text"maxlength="2" name="b2r2ek4" value="{{$errors->any() ? old('b2r2ek4') : $k3->b2r2ek4}}">
												</div>
											</td>
										</tr>
										<tr>
											<td class="text-left">f. Staf Lainnya</td>
											<td></td>
											<td></td>
											<td><input class="form-control" type="text" size="2" maxlength="2" name="b2r2fk3" value="{{$errors->any() ? old('b2r2fk3') : $k3->b2r2fk3}}"></td>
											<td><input class="form-control" type="text" size="2" maxlength="2" name="b2r2fk4" value="{{$errors->any() ? old('b2r2fk4') : $k3->b2r2fk4}}"></td>
										</tr>
										<tr>
											<th  class="text-center">Jumlah</th>
											<td><input class="form-control" type="text" size="1" maxlength="1" name="b2r2gk1" value="{{$errors->any() ? old('b2r2gk1') : $k3->b2r2gk1}}"></td>
											<td><input class="form-control" type="text" size="1" maxlength="1" name="b2r2gk2" value="{{$errors->any() ? old('b2r2gk2') : $k3->b2r2gk2}}"></td>
											<td><input class="form-control" type="text" size="2" maxlength="2" name="b2r2gk3" value="{{$errors->any() ? old('b2r2gk3') : $k3->b2r2gk3}}"></td>
											<td><input class="form-control" type="text" size="2" maxlength="2" name="b2r2gk4" value="{{$errors->any() ? old('b2r2gk4') : $k3->b2r2gk4}}"></td>
										</tr>
									</tbody>
								</table>
								@if ($errors->has('b2r2ak3') or $errors->has('b2r2a4') or $errors->has('b2r2bk1') or $errors->has('b2r2bk2') or $errors->has('b2r2bk3') or $errors->has('b2r2bk4') or $errors->has('b2r2ck3') or $errors->has('b2r2ck4') or $errors->has('b2r2dk3') or $errors->has('b2r2dk4') or $errors->has('b2r2ek3') or $errors->has('b2r2ek4'))
									<span class="help-block">
										<p class="text-danger">Rincian 2.a sampai dengan 2.e tidak boleh kosong dan harus terisi angka</p>
									</span>
								@endif
								{{-- </div> --}}
							</td>		
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[13]->keterangan}}" title="{{$daftar_kondef[13]->rincian}}"><i class="fa fa-search"></i></button>
							</td>						
						</tr>
						<tr>
							<th>3. Administrasi Desa / Nagari </th>
						</tr>
						<tr>
							<td colspan="3" >a. Apakah sudah mengetahui pengelolaan keuangan dilaksanakan berdasarkan APBDesa menurut Peraturan Menteri Dalam Negeri Nomor 20 Tahun 2018?</td>
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3a1')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r3a1" value="{{$errors->has('b2r3a1') ? old('b2r3a1') : $k3->b2r3a1}}">
									@if ($errors->has('b2r3a1'))
										<span class="help-block">{{$errors->first('b2r3a1')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="4" >Jika rincian 3.a berkode 1, informasi tersebut diperoleh dari:</td>
						</tr>
						<tr>
							<td></td>
							<td>Pemerintah Kab/Kota 1</td> 
							<td>Lainnya 4</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3a2')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r3a2" value="{{$errors->any() ? old('b2r3a2') : $k3->b2r3a2}}">
									@if ($errors->has('b2r3a2'))
										<span class="help-block">{{$errors->first('b2r3a2')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[15]->keterangan}}" title="{{$daftar_kondef[15]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>Petugas Kecamatan 2</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3" >b. Apakah dalam pengelolaan keuangan, Desa/Nagari membuat laporan keuangan?</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3b1')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r3b1" value="{{$errors->any() ? old('b2r3b1') : $k3->b2r3b1}}">
									@if ($errors->has('b2r3b1'))
										<span class="help-block">{{$errors->first('b2r3b1')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[16]->keterangan}}" title="{{$daftar_kondef[16]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td colspan="3" >Jika rincian 3.b. berkode 1, siapakah yang melakukan pencatatan/rekapitulasi laporan keuangan desa selama ini:</td>
						</tr>
						<tr>
							<td></td>
							<td>Kepala Desa / Wali Nagari 1</td> 
							<td>Kepala Seksi 4</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3b2')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r3b2" value="{{$errors->any() ? old('b2r3b2') : $k3->b2r3b2}}">
									@if ($errors->has('b2r3b2'))
										<span class="help-block">{{$errors->first('b2r3b2')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[17]->keterangan}}" title="{{$daftar_kondef[17]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>Sekretaris Desa / Nagari 2</td> 
							<td>Kepala Dusun / Lingkungan / Jorong 5</td>
						</tr>
						<tr>
							<td></td>
							<td>Kepala Urusan 3</td>
							<td>Staf lainnya 6</td>
						</tr>
						<tr>
							<td colspan="3" >Jika Rincian 3.b. berkode 2. Apa kendalanya:</td>
						</tr>
						<tr>
							<td></td>
							<td>Tidak ada Pedoman / Pelatihan 1</td> 
							<td>Tidak ada Bimbingan / Pendampingan 4</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3b3')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="2" name="b2r3b3" value="{{$errors->any() ? old('b2r3b3') : $k3->b2r3b3}}">
									@if ($errors->has('b2r3b3'))
										<span class="help-block">{{$errors->first('b2r3b3')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[18]->keterangan}}" title="{{$daftar_kondef[18]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>SDM Kurang 2</td>
							<td>Lainnya 8</td>
						</tr>
						<tr>
							<td colspan="3" >c. Apakah ada Bimbingan/Pendampingan/Pengawasan dari petugas Kabupaten/Kota atau Kecamatan dalam membuat laporan keuangan:</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3c')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r3c" value="{{$errors->any() ? old('b2r3c') : $k3->b2r3c}}">
									@if ($errors->has('b2r3c'))
										<span class="help-block">{{$errors->first('b2r3c')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[19]->keterangan}}" title="{{$daftar_kondef[19]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td colspan="3" >d. Apakah dalam pengelolaan keuangan Desa telah menggunakan sistem komputerisasi?</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3d1')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r3d1" value="{{$errors->any() ? old('b2r3d1') : $k3->b2r3d1}}">
									@if ($errors->has('b2r3d1'))
										<span class="help-block">{{$errors->first('b2r3d1')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[20]->keterangan}}" title="{{$daftar_kondef[20]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td colspan="3" >Jika jawaban 3.d berkode 1, Apakah sistem komputerisasi yang digunakan?</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Siskeudes 1</td> 
							<td>Lainnya (............................) 2</td>
							<td>
								<div class="form-group-table {{$errors->has('b2r3d2')  ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="1" name="b2r3d2" value="{{$errors->any() ? old('b2r3d2') : $k3->b2r3d2}}">
									@if ($errors->has('b2r3d2'))
										<span class="help-block">{{$errors->first('b2r3d2')}}</span>
									@endif
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="margin-top-30" align="right">
				<button type="submit" class="btn btn-primary btn-keluar">
					<span class="lnr lnr-exit"></span><span>Keluar</span>
				</button>
				<button type="submit" class="btn btn-success" title="Simpan"><span class="sr-only">Simpan</span> <i class="fa fa-save"></i> &nbsp;&nbsp;Simpan</button>
			</p>
				
		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokii').submit();" href="/entri_data/{{$k3->id}}/bloki">← Blok I</a></li>
			<li><a onclick="document.getElementById('form_blokii').submit();" href="/entri_data/{{$k3->id}}/blokiii">Blok III →</a></li>
		</div> --}}	
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok I</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok III →</button>
		</div>
	</div>
	
		</div>
	</div>

</form>	
@stop

{{-- <div class="tab-pane fade" id="blokii"> --}}
{{-- </div> --}}