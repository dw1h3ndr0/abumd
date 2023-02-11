@extends('layouts.master')

@section('content')

<form action="{{ asset(route('entri_data.simpan_blokiii_2', ['id'=>$k3->id], false)) }}{{-- /entri_data/{{$k3->id}}/simpan_blokiii_2 --}}" id="form_blokiii_2" method="POST" enctype="multipart/form-data">
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

				<button class="btn btn-block btn-default btn-blokii" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok II</b></button>
				
				<a class="btn btn-block btn-default" style="text-align:left;" id="flip"><span class="lnr lnr-chevron-right flip-simbol-right"></span><span class="lnr lnr-chevron-down flip-simbol-down" style= "display:none">&nbsp;</span><b>Blok III</b></a>
				
							
					<div class="flip-btn" style= "display:none">
						<button class="btn btn-block btn-blokiii" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></button>
						
						<button class="btn btn-block btn-blokiii1" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (1)</b></button>

						<button class="btn btn-block btn-blokiii2 active" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (2)</b></button>

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
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$k3->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
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
					<button class="btn btn-default btn-blokii" type="submit"><b>Blok II</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii" type="submit"><b>Blok III</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii1" type="submit"><b>Blok III (1)</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii2 active" type="submit"><b>Blok III (2)</b></button>
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

	<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK III. ANGGARAN PENDAPATAN DAN BELANJA PEMERINTAH DESA / NAGARI (Lanjutan 2)<p>( Ribu Rupiah )</p></h2>
		</div>
		<div class="clearfix">			
			<div class="profile-section">
				<table class="table table-bordered">
					<thead >
						<tr>
					      	<th class="text-center" colspan="2">Uraian</th>
					      	<th class="text-center">Realisasi <p>2019</p></th>
					      	<th class="text-center">Anggaran <p>2020</p></th>
					    </tr>
					    <tr>
					    	<td class="text-center"colspan="2">(1)</td>
					    	<td class="text-center">(2)</td>
					    	<td class="text-center">(3)</td>
					    </tr>
					</thead>
					<tbody>
						<tr>
							<th>5.2</th>
							<th>Bidang Pelaksanaan Pembangunan Desa</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r52k2')  ? 'has-error' : ''}}">
									<input class="form-control form-5k2" id="52k2" type="number" step="any" name="b3r52k2" value="{{$errors->any() ? old('b3r52k2') : $k3->b3r52k2}}" readonly="">
									@if ($errors->has('b3r52k2'))
										<span class="help-block">{{$errors->first('b3r52k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r52k3')  ? 'has-error' : ''}}">
									<input class="form-control form-5k3" id="52k3" type="number" step="any" name="b3r52k3" value="{{$errors->any() ? old('b3r52k3') : $k3->b3r52k3}}" readonly="">
									@if ($errors->has('b3r52k3'))
										<span class="help-block">{{$errors->first('b3r52k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[43]->keterangan}}" title="{{$daftar_kondef[43]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>5.2.1</th>
							<th>Pendidikan</th>
							<th><input class="form-control form-52k2" id="521k2" type="number" step="any" name="b3r521k2" value="{{$errors->any() ? old('b3r521k2') : $k3->b3r521k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="521k3" type="number" step="any" name="b3r521k3" value="{{$errors->any() ? old('b3r521k3') : $k3->b3r521k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.1.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-521k2" type="number" step="any" name="b3r5212k2" value="{{$errors->any() ? old('b3r5212k2') : $k3->b3r5212k2}}"></td>
							<td><input class="form-control form-521k3" type="number" step="any" name="b3r5212k3" value="{{$errors->any() ? old('b3r5212k3') : $k3->b3r5212k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.1.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-521k2" type="number" step="any" name="b3r5213k2" value="{{$errors->any() ? old('b3r5213k2') : $k3->b3r5213k2}}"></td>
							<td><input class="form-control form-521k3" type="number" step="any" name="b3r5213k3" value="{{$errors->any() ? old('b3r5213k3') : $k3->b3r5213k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.2.2</th>
							<th>Kesehatan</th>
							<th><input class="form-control form-52k2" id="522k2" type="number" step="any" name="b3r522k2" value="{{$errors->any() ? old('b3r522k2') : $k3->b3r522k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="522k3" type="number" step="any" name="b3r522k3" value="{{$errors->any() ? old('b3r522k3') : $k3->b3r522k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-522k2" type="number" step="any" name="b3r5222k2" value="{{$errors->any() ? old('b3r5222k2') : $k3->b3r5222k2}}"></td>
							<td><input class="form-control form-522k3" type="number" step="any" name="b3r5222k3" value="{{$errors->any() ? old('b3r5222k3') : $k3->b3r5222k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.2.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-522k2" type="number" step="any" name="b3r5223k2" value="{{$errors->any() ? old('b3r5223k2') : $k3->b3r5223k2}}"></td>
							<td><input class="form-control form-522k3" type="number" step="any" name="b3r5223k3" value="{{$errors->any() ? old('b3r5223k3') : $k3->b3r5223k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.2.3</th>
							<th>Pekerjaan Umum dan Penataan Ruang</th>
							<th><input class="form-control form-52k2" id="523k2" type="number" step="any" name="b3r523k2" value="{{$errors->any() ? old('b3r523k2') : $k3->b3r523k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="523k3" type="number" step="any" name="b3r523k3" value="{{$errors->any() ? old('b3r523k3') : $k3->b3r523k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-523k2" type="number" step="any" name="b3r5232k2" value="{{$errors->any() ? old('b3r5232k2') : $k3->b3r5232k2}}"></td>
							<td><input class="form-control form-523k3" type="number" step="any" name="b3r5232k3" value="{{$errors->any() ? old('b3r5232k3') : $k3->b3r5232k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.3.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-523k2" type="number" step="any" name="b3r5233k2" value="{{$errors->any() ? old('b3r5233k2') : $k3->b3r5233k2}}"></td>
							<td><input class="form-control form-523k3" type="number" step="any" name="b3r5233k3" value="{{$errors->any() ? old('b3r5233k3') : $k3->b3r5233k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<th>5.2.4</th>
							<th>Kawasan Permukiman</th>
							<th><input class="form-control form-52k2" id="524k2" type="number" step="any" name="b3r524k2" value="{{$errors->any() ? old('b3r524k2') : $k3->b3r524k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="524k3" type="number" step="any" name="b3r524k3" value="{{$errors->any() ? old('b3r524k3') : $k3->b3r524k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-524k2" type="number" step="any" name="b3r5242k2" value="{{$errors->any() ? old('b3r5242k2') : $k3->b3r5242k2}}"></td>
							<td><input class="form-control form-524k3" type="number" step="any" name="b3r5242k3" value="{{$errors->any() ? old('b3r5242k3') : $k3->b3r5242k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.4.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-524k2" type="number" step="any" name="b3r5243k2" value="{{$errors->any() ? old('b3r5243k2') : $k3->b3r5243k2}}"></td>
							<td><input class="form-control form-524k3" type="number" step="any" name="b3r5243k3" value="{{$errors->any() ? old('b3r5243k3') : $k3->b3r5243k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<th>5.2.5</th>
							<th>Kehutanan dan Lingkungan Hidup</th>
							<th><input class="form-control form-52k2" id="525k2" type="number" step="any" name="b3r525k2" value="{{$errors->any() ? old('b3r525k2') : $k3->b3r525k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="525k3" type="number" step="any" name="b3r525k3" value="{{$errors->any() ? old('b3r525k3') : $k3->b3r525k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.5.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-525k2" type="number" step="any" name="b3r5252k2" value="{{$errors->any() ? old('b3r5252k2') : $k3->b3r5252k2}}"></td>
							<td><input class="form-control form-525k3" type="number" step="any" name="b3r5252k3" value="{{$errors->any() ? old('b3r5252k3') : $k3->b3r5252k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.5.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-525k2" type="number" step="any" name="b3r5253k2" value="{{$errors->any() ? old('b3r5253k2') : $k3->b3r5253k2}}"></td>
							<td><input class="form-control form-525k3" type="number" step="any" name="b3r5253k3" value="{{$errors->any() ? old('b3r5253k3') : $k3->b3r5253k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>	
						<tr>
							<th>5.2.6</th>
							<th>Perhubungan, Komunikasi, dan Informatika</th>
							<th><input class="form-control form-52k2" id="526k2" type="number" step="any" name="b3r526k2" value="{{$errors->any() ? old('b3r526k2') : $k3->b3r526k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="526k3" type="number" step="any" name="b3r526k3" value="{{$errors->any() ? old('b3r526k3') : $k3->b3r526k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.6.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-526k2" type="number" step="any" name="b3r5262k2" value="{{$errors->any() ? old('b3r5262k2') : $k3->b3r5262k2}}"></td>
							<td><input class="form-control form-526k3" type="number" step="any" name="b3r5262k3" value="{{$errors->any() ? old('b3r5262k3') : $k3->b3r5262k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.6.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-526k2" type="number" step="any" name="b3r5263k2" value="{{$errors->any() ? old('b3r5263k2') : $k3->b3r5263k2}}"></td>
							<td><input class="form-control form-526k3" type="number" step="any" name="b3r5263k3" value="{{$errors->any() ? old('b3r5263k3') : $k3->b3r5263k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<th>5.2.7</th>
							<th>Energi dan Sumber Daya Mineral</th>
							<th><input class="form-control form-52k2" id="527k2" type="number" step="any" name="b3r527k2" value="{{$errors->any() ? old('b3r527k2') : $k3->b3r527k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="527k3" type="number" step="any" name="b3r527k3" value="{{$errors->any() ? old('b3r527k3') : $k3->b3r527k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.7.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-527k2" type="number" step="any" name="b3r5272k2" value="{{$errors->any() ? old('b3r5272k2') : $k3->b3r5272k2}}"></td>
							<td><input class="form-control form-527k3" type="number" step="any" name="b3r5272k3" value="{{$errors->any() ? old('b3r5272k3') : $k3->b3r5272k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.7.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-527k2" type="number" step="any" name="b3r5273k2" value="{{$errors->any() ? old('b3r5273k2') : $k3->b3r5273k2}}"></td>
							<td><input class="form-control form-527k3" type="number" step="any" name="b3r5273k3" value="{{$errors->any() ? old('b3r5273k3') : $k3->b3r5273k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<th>5.2.8</th>
							<th>Pariwisata</th>
							<th><input class="form-control form-52k2" id="528k2" type="number" step="any" name="b3r528k2" value="{{$errors->any() ? old('b3r528k2') : $k3->b3r528k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="528k3" type="number" step="any" name="b3r528k3" value="{{$errors->any() ? old('b3r528k3') : $k3->b3r528k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.8.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-528k2" type="number" step="any" name="b3r5282k2" value="{{$errors->any() ? old('b3r5282k2') : $k3->b3r5282k2}}"></td>
							<td><input class="form-control form-528k3" type="number" step="any" name="b3r5282k3" value="{{$errors->any() ? old('b3r5282k3') : $k3->b3r5282k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.8.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-528k2" type="number" step="any" name="b3r5283k2" value="{{$errors->any() ? old('b3r5283k2') : $k3->b3r5283k2}}"></td>
							<td><input class="form-control form-528k3" type="number" step="any" name="b3r5283k3" value="{{$errors->any() ? old('b3r5283k3') : $k3->b3r5283k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.2.99</th>
							<th>Lainnya</th>
							<th><input class="form-control form-52k2" id="5299k2" type="number" step="any" name="b3r5299k2" value="{{$errors->any() ? old('b3r5299k2') : $k3->b3r5299k2}}" readonly=""></th>
							<th><input class="form-control form-52k3" id="5299k3" type="number" step="any" name="b3r5299k3" value="{{$errors->any() ? old('b3r5299k3') : $k3->b3r5299k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.2.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-5299k2" type="number" step="any" name="b3r52992k2" value="{{$errors->any() ? old('b3r52992k2') : $k3->b3r52992k2}}"></td>
							<td><input class="form-control form-5299k3" type="number" step="any" name="b3r52992k3" value="{{$errors->any() ? old('b3r52992k3') : $k3->b3r52992k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.2.99.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-5299k2" type="number" step="any" name="b3r52993k2" value="{{$errors->any() ? old('b3r52993k2') : $k3->b3r52993k2}}"></td>
							<td><input class="form-control form-5299k3" type="number" step="any" name="b3r52993k3" value="{{$errors->any() ? old('b3r52993k3') : $k3->b3r52993k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<th>5.3</th>
							<th>Bidang Pembinaan Kemasyarakatan Desa</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r53k2')  ? 'has-error' : ''}}">
									<input class="form-control form-5k2" id="53k2" type="number" step="any" name="b3r53k2" value="{{$errors->any() ? old('b3r53k2') : $k3->b3r53k2}}" readonly="">
									@if ($errors->has('b3r53k2'))
										<span class="help-block">{{$errors->first('b3r53k2')}}</span>
									@endif
								</div>
							</th>
							<th><div class="form-group-table {{$errors->has('b3r53k3')  ? 'has-error' : ''}}">
									<input class="form-control form-5k3" id="53k3" type="number" step="any" name="b3r53k3" value="{{$errors->any() ? old('b3r53k3') : $k3->b3r53k3}}" readonly="">
									@if ($errors->has('b3r53k3'))
										<span class="help-block">{{$errors->first('b3r53k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[44]->keterangan}}" title="{{$daftar_kondef[44]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>			
						<tr>
							<th>5.3.1</th>
							<th>Ketenteraman, Ketertiban Umum, dan Pelindungan Masyarakat</th>
							<th><input class="form-control form-53k2" id="531k2" type="number" step="any" name="b3r531k2" value="{{$errors->any() ? old('b3r531k2') : $k3->b3r531k2}}" readonly=""></th>
							<th><input class="form-control form-53k3" id="531k3" type="number" step="any" name="b3r531k3" value="{{$errors->any() ? old('b3r531k3') : $k3->b3r531k3}}" readonly=""></th>
						</tr>			
						<tr>
							<td>5.3.1.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-531k2" type="number" step="any" name="b3r5312k2" value="{{$errors->any() ? old('b3r5312k2') : $k3->b3r5312k2}}"></td>
							<td><input class="form-control form-531k3" type="number" step="any" name="b3r5312k3" value="{{$errors->any() ? old('b3r5312k3') : $k3->b3r5312k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.3.1.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-531k2" type="number" step="any" name="b3r5313k2" value="{{$errors->any() ? old('b3r5313k2') : $k3->b3r5313k2}}"></td>
							<td><input class="form-control form-531k3" type="number" step="any" name="b3r5313k3" value="{{$errors->any() ? old('b3r5313k3') : $k3->b3r5313k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
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

			{{-- 4. PENDAPATAN DESA--}}
			<input class="form-control form-7k2" id="4k2" style="display:none" type="number" step="any" name="b3r4k2" value="{{$errors->any() ? old('b3r4k2') : $k3->b3r4k2}}" readonly="">
			<input class="form-control form-7k3" id="4k3" style="display:none" type="number" step="any" name="b3r4k3" value="{{$errors->any() ? old('b3r4k3') : $k3->b3r4k3}}" readonly="">

			{{-- 5. BELANJA --}}
			<input class="form-control form-7k2" id="5k2" style="display:none" type="number" step="any" name="b3r5k2" value="{{$errors->any() ? old('b3r5k2') : $k3->b3r5k2}}" readonly="">
			<input class="form-control form-7k3" id="5k3" style="display:none" type="number" step="any" name="b3r5k3" value="{{$errors->any() ? old('b3r5k3') : $k3->b3r5k3}}" readonly="">

			{{-- 5.1. Bidang Penyelenggaraan Pemerintahan Desa --}}
			<input class="form-control form-5k2" id="51k2" style="display:none" type="number" step="any" name="b3r51k2" value="{{$errors->any() ? old('b3r51k2') : $k3->b3r51k2}}" readonly="">
			<input class="form-control form-5k3" id="51k3" style="display:none" type="number" step="any" name="b3r51k3" value="{{$errors->any() ? old('b3r51k3') : $k3->b3r51k3}}" readonly="">

			{{-- 5.4. Bidang Pemberdayaan Masyarakat Desa --}}
			<input class="form-control form-5k2" id="54k2" style="display:none" type="number" step="any" name="b3r54k2" value="{{$errors->any() ? old('b3r54k2') : $k3->b3r54k2}}" readonly="">
			<input class="form-control form-5k3" id="54k3" style="display:none" type="number" step="any" name="b3r54k3" value="{{$errors->any() ? old('b3r54k3') : $k3->b3r54k3}}" readonly="">

			{{-- 5.5. Bidang Penanggulangan Bencana, Keadaan Darurat dan Mendesak --}}
			<input class="form-control form-5k2" id="55k2" style="display:none" type="number" step="any" name="b3r55k2" value="{{$errors->any() ? old('b3r55k2') : $k3->b3r55k2}}" readonly="">
			<input class="form-control form-5k3" id="55k3" style="display:none" type="number" step="any" name="b3r55k3" value="{{$errors->any() ? old('b3r55k3') : $k3->b3r55k3}}" readonly="">

			{{-- 5.3.2. Kebudayaan dan Keagamaan --}}
			<input class="form-control form-53k2" id="532k2" style="display:none" type="number" step="any" name="b3r532k2" value="{{$errors->any() ? old('b3r532k2') : $k3->b3r532k2}}" readonly="">
			<input class="form-control form-53k3" id="532k3" style="display:none" type="number" step="any" name="b3r532k3" value="{{$errors->any() ? old('b3r532k3') : $k3->b3r532k3}}" readonly="">

			{{-- 5.3.3. Kepemudaan dan Olah Raga --}}
			<input class="form-control form-53k2" id="533k2" style="display:none" type="number" step="any" name="b3r533k2" value="{{$errors->any() ? old('b3r533k2') : $k3->b3r533k2}}" readonly="">
			<input class="form-control form-53k3" id="533k3" style="display:none" type="number" step="any" name="b3r533k3" value="{{$errors->any() ? old('b3r533k3') : $k3->b3r533k3}}" readonly="">

			{{-- 5.3.4. Kelembagaan Masyarakat --}}
			<input class="form-control form-53k2" id="534k2" style="display:none" type="number" step="any" name="b3r534k2" value="{{$errors->any() ? old('b3r534k2') : $k3->b3r534k2}}" readonly="">
			<input class="form-control form-53k3" id="534k3" style="display:none" type="number" step="any" name="b3r534k3" value="{{$errors->any() ? old('b3r534k3') : $k3->b3r534k3}}" readonly="">

			{{-- 5.3.99. Lainnya --}}
			<input class="form-control form-53k2" id="5399k2" style="display:none" type="number" step="any" name="b3r5399k2" value="{{$errors->any() ? old('b3r5399k2') : $k3->b3r5399k2}}" readonly="">
			<input class="form-control form-53k3" id="5399k3" style="display:none" type="number" step="any" name="b3r5399k3" value="{{$errors->any() ? old('b3r5399k3') : $k3->b3r5399k3}}" readonly="">

			{{-- 6. PEMBIAYAAN  --}}
			<input class="form-control form-7k2" id="6k2" style="display:none" type="number" step="any" name="b3r6k2" value="{{$errors->any() ? old('b3r6k2') : $k3->b3r6k2}}" readonly="">
			<input class="form-control form-7k3" id="6k3" style="display:none" type="number" step="any" name="b3r6k3" value="{{$errors->any() ? old('b3r6k3') : $k3->b3r6k3}}" readonly="">

			{{-- 7. SILPA input --}}
			<input class="form-control" id="7k2"  style="display:none" type="number" step="any" name="b3r7k2" value="{{$errors->any() ? old('b3r7k2') : $k3->b3r7k2}}" readonly="">
			<input class="form-control" id="7k3"  style="display:none" type="number" step="any" name="b3r7k3" value="{{$errors->any() ? old('b3r7k3') : $k3->b3r7k3}}" readonly="">

		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokiii_2').submit();" href="/entri_data/{{$k3->id}}/blokiii_1">← Blok III (1)</a></li>
			<li><a onclick="document.getElementById('form_blokiii_2').submit();" href="/entri_data/{{$k3->id}}/blokiii_3">Blok III (3) →</a></li>
		</div> --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok III (1)</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok III (3) →</button>
		</div>
	</div>


		</div>
	</div>

</form>

@stop

{{-- <div class="tab-pane fade" id="blokiii-2"> --}}

{{-- </div> --}}