@extends('layouts.master')

@section('content')

<form action="{{ asset(route('entri_bumd.simpan_blokiii_3', ['id'=>$bumd->id], false)) }}" id="form_blokiii_3" method="POST" enctype="multipart/form-data">
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

						{{-- <button class="btn btn-block btn-blokiii2" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (2)</b></button>

						<button class="btn btn-block btn-blokiii3 active" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (3)</b></button>

						<button class="btn btn-block btn-blokiii4" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (4)</b></button> --}}
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
				<h1 class="page-title text">Survei Statistik Keuangan Badan Usaha Milik Daerah <br> Tahun {{$bumd->tahun}}</h1>
			</div>

			{{-- <ul class="nav nav-pills nav-justified " >
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_bumd/{{$k3->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$k3->id}}/blokvi" ><b>Blok VI</b></a></li>
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
				{{-- <div class="btn-group">
					<button class="btn btn-default btn-blokiii2" type="submit"><b>Blok III (2)</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii3 active" type="submit"><b>Blok III (3)</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii4" type="submit"><b>Blok III (4)</b></button>
				</div>	 --}}
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
			<h2 class="page-title text-center">BLOK III. LAPORAN KEUANGAN PERUSAHAAN</h2>
		</div>
		<div class="clearfix">
			
			<div class="profile-section">
				<table class="table table-bordered">
					<thead >
						<tr>
					      	<th class="text-center" colspan="2">Uraian</th>
					      	<th class="text-center">Tahun {{$bumd->tahun}} <p>(Ribu Rp)</p></th>
					      	<th class="text-center">Tahun {{($bumd->tahun-1)}} <p>(Ribu Rp)</p></th>
					    </tr>
					    <tr>
					    	<td class="text-center"colspan="2">(1)</td>
					    	<td class="text-center">(2)</td>
					    	<td class="text-center">(3)</td>
					    </tr>
					</thead>
					<tbody>
						<tr>
							<th>5.3.2</th>
							<th>Kebudayaan dan Keagamaan</th>
							<th><input class="form-control form-53k2" id="532k2" type="number" step="any" name="b3r532k2" value="{{$errors->any() ? old('b3r532k2') : $k3->b3r532k2}}" readonly=""></th>
							<th><input class="form-control form-53k3" id="532k3" type="number" step="any" name="b3r532k3" value="{{$errors->any() ? old('b3r532k3') : $k3->b3r532k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.3.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-532k2" type="number" step="any" name="b3r5322k2" value="{{$errors->any() ? old('b3r5322k2') : $k3->b3r5322k2}}"></td>
							<td><input class="form-control form-532k3" type="number" step="any" name="b3r5322k3" value="{{$errors->any() ? old('b3r5322k3') : $k3->b3r5322k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.3.2.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-532k2" type="number" step="any" name="b3r5323k2" value="{{$errors->any() ? old('b3r5323k2') : $k3->b3r5323k2}}"></td>
							<td><input class="form-control form-532k3" type="number" step="any" name="b3r5323k3" value="{{$errors->any() ? old('b3r5323k3') : $k3->b3r5323k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.3.3</th>
							<th>Kepemudaan dan Olah Raga</th>
							<th><input class="form-control form-53k2" id="533k2" type="number" step="any" name="b3r533k2" value="{{$errors->any() ? old('b3r533k2') : $k3->b3r533k2}}" readonly=""></th>
							<th><input class="form-control form-53k3" id="533k3" type="number" step="any" name="b3r533k3" value="{{$errors->any() ? old('b3r533k3') : $k3->b3r533k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.3.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-533k2" type="number" step="any" name="b3r5332k2" value="{{$errors->any() ? old('b3r5332k2') : $k3->b3r5332k2}}"></td>
							<td><input class="form-control form-533k3" type="number" step="any" name="b3r5332k3" value="{{$errors->any() ? old('b3r5332k3') : $k3->b3r5332k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.3.3.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-533k2" type="number" step="any" name="b3r5333k2" value="{{$errors->any() ? old('b3r5333k2') : $k3->b3r5333k2}}"></td>
							<td><input class="form-control form-533k3" type="number" step="any" name="b3r5333k3" value="{{$errors->any() ? old('b3r5333k3') : $k3->b3r5333k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.3.4</th>
							<th>Kelembagaan Masyarakat</th>
							<th><input class="form-control form-53k2" id="534k2" type="number" step="any" name="b3r534k2" value="{{$errors->any() ? old('b3r534k2') : $k3->b3r534k2}}" readonly=""></th>
							<th><input class="form-control form-53k3" id="534k3" type="number" step="any" name="b3r534k3" value="{{$errors->any() ? old('b3r534k3') : $k3->b3r534k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.3.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-534k2" type="number" step="any" name="b3r5342k2" value="{{$errors->any() ? old('b3r5342k2') : $k3->b3r5342k2}}"></td>
							<td><input class="form-control form-534k3" type="number" step="any" name="b3r5342k3" value="{{$errors->any() ? old('b3r5342k3') : $k3->b3r5342k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.3.4.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-534k2" type="number" step="any" name="b3r5343k2" value="{{$errors->any() ? old('b3r5343k2') : $k3->b3r5343k2}}"></td>
							<td><input class="form-control form-534k3" type="number" step="any" name="b3r5343k3" value="{{$errors->any() ? old('b3r5343k3') : $k3->b3r5343k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.3.99</th>
							<th>Lainnya</th>
							<th><input class="form-control form-53k2" id="5399k2" type="number" step="any" name="b3r5399k2" value="{{$errors->any() ? old('b3r5399k2') : $k3->b3r5399k2}}" readonly=""></th>
							<th><input class="form-control form-53k3" id="5399k3" type="number" step="any" name="b3r5399k3" value="{{$errors->any() ? old('b3r5399k3') : $k3->b3r5399k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.3.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-5399k2" type="number" step="any" name="b3r53992k2" value="{{$errors->any() ? old('b3r53992k2') : $k3->b3r53992k2}}"></td>
							<td><input class="form-control form-5399k3" type="number" step="any" name="b3r53992k3" value="{{$errors->any() ? old('b3r53992k3') : $k3->b3r53992k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.3.99.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-5399k2" type="number" step="any" name="b3r53993k2" value="{{$errors->any() ? old('b3r53993k2') : $k3->b3r53993k2}}"></td>
							<td><input class="form-control form-5399k3" type="number" step="any" name="b3r53993k3" value="{{$errors->any() ? old('b3r53993k3') : $k3->b3r53993k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.4</th>
							<th>Bidang Pemberdayaan Masyarakat Desa</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r54k2')  ? 'has-error' : ''}}">
									<input class="form-control form-5k2" id="54k2" type="number" step="any" name="b3r54k2" value="{{$errors->any() ? old('b3r54k2') : $k3->b3r54k2}}" readonly="">
									@if ($errors->has('b3r54k2'))
										<span class="help-block">{{$errors->first('b3r54k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r54k3')  ? 'has-error' : ''}}">
									<input class="form-control form-5k3" id="54k3" type="number" step="any" name="b3r54k3" value="{{$errors->any() ? old('b3r54k3') : $k3->b3r54k3}}" readonly="">
									@if ($errors->has('b3r54k3'))
										<span class="help-block">{{$errors->first('b3r54k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[45]->keterangan}}" title="{{$daftar_kondef[45]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>5.4.1</th>
							<th>Kelautan dan Perikanan</th>
							<th><input class="form-control form-54k2" id="541k2" type="number" step="any" name="b3r541k2" value="{{$errors->any() ? old('b3r541k2') : $k3->b3r541k2}}" readonly=""></th>
							<th><input class="form-control form-54k3" id="541k3" type="number" step="any" name="b3r541k3" value="{{$errors->any() ? old('b3r541k3') : $k3->b3r541k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.4.1.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-541k2" type="number" step="any" name="b3r5412k2" value="{{$errors->any() ? old('b3r5412k2') : $k3->b3r5412k2}}"></td>
							<td><input class="form-control form-541k3" type="number" step="any" name="b3r5412k3" value="{{$errors->any() ? old('b3r5412k3') : $k3->b3r5412k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.4.1.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-541k2" type="number" step="any" name="b3r5413k2" value="{{$errors->any() ? old('b3r5413k2') : $k3->b3r5413k2}}"></td>
							<td><input class="form-control form-541k3" type="number" step="any" name="b3r5413k3" value="{{$errors->any() ? old('b3r5413k3') : $k3->b3r5413k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.4.2</th>
							<th>Pertanian dan Peternakan</th>
							<th><input class="form-control form-54k2" id="542k2" type="number" step="any" name="b3r542k2" value="{{$errors->any() ? old('b3r542k2') : $k3->b3r542k2}}" readonly=""></th>
							<th><input class="form-control form-54k3" id="542k3" type="number" step="any" name="b3r542k3" value="{{$errors->any() ? old('b3r542k3') : $k3->b3r542k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.4.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-542k2" type="number" step="any" name="b3r5422k2" value="{{$errors->any() ? old('b3r5422k2') : $k3->b3r5422k2}}"></td>
							<td><input class="form-control form-542k3" type="number" step="any" name="b3r5422k3" value="{{$errors->any() ? old('b3r5422k3') : $k3->b3r5422k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.4.2.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-542k2" type="number" step="any" name="b3r5423k2" value="{{$errors->any() ? old('b3r5423k2') : $k3->b3r5423k2}}"></td>
							<td><input class="form-control form-542k3" type="number" step="any" name="b3r5423k3" value="{{$errors->any() ? old('b3r5423k3') : $k3->b3r5423k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.4.3</th>
							<th>Peningkatan Kapasitas Aparatur Desa</th>
							<th><input class="form-control form-54k2" id="543k2" type="number" step="any" name="b3r543k2" value="{{$errors->any() ? old('b3r543k2') : $k3->b3r543k2}}" readonly=""></th>
							<th><input class="form-control form-54k3" id="543k3" type="number" step="any" name="b3r543k3" value="{{$errors->any() ? old('b3r543k3') : $k3->b3r543k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.4.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-543k2" type="number" step="any" name="b3r5432k2" value="{{$errors->any() ? old('b3r5432k2') : $k3->b3r5432k2}}"></td>
							<td><input class="form-control form-543k3" type="number" step="any" name="b3r5432k3" value="{{$errors->any() ? old('b3r5432k3') : $k3->b3r5432k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.4.3.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-543k2" type="number" step="any" name="b3r5433k2" value="{{$errors->any() ? old('b3r5433k2') : $k3->b3r5433k2}}"></td>
							<td><input class="form-control form-543k3" type="number" step="any" name="b3r5433k3" value="{{$errors->any() ? old('b3r5433k3') : $k3->b3r5433k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.4.4</th>
							<th>Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga</th>
							<th><input class="form-control form-54k2" id="544k2" type="number" step="any" name="b3r544k2" value="{{$errors->any() ? old('b3r544k2') : $k3->b3r544k2}}" readonly=""></th>
							<th><input class="form-control form-54k3" id="544k3" type="number" step="any" name="b3r544k3" value="{{$errors->any() ? old('b3r544k3') : $k3->b3r544k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.4.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-544k2" type="number" step="any" name="b3r5442k2" value="{{$errors->any() ? old('b3r5442k2') : $k3->b3r5442k2}}"></td>
							<td><input class="form-control form-544k3" type="number" step="any" name="b3r5442k3" value="{{$errors->any() ? old('b3r5442k3') : $k3->b3r5442k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.4.4.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-544k2" type="number" step="any" name="b3r5443k2" value="{{$errors->any() ? old('b3r5443k2') : $k3->b3r5443k2}}"></td>
							<td><input class="form-control form-544k3" type="number" step="any" name="b3r5443k3" value="{{$errors->any() ? old('b3r5443k3') : $k3->b3r5443k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.4.5</th>
							<th>Koperasi, Usaha Mikro Kecil dan Menengah (UMKM)</th>
							<th><input class="form-control form-54k2" id="545k2" type="number" step="any" name="b3r545k2" value="{{$errors->any() ? old('b3r545k2') : $k3->b3r545k2}}" readonly=""></th>
							<th><input class="form-control form-54k3" id="545k3" type="number" step="any" name="b3r545k3" value="{{$errors->any() ? old('b3r545k3') : $k3->b3r545k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.4.5.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-545k2" type="number" step="any" name="b3r5452k2" value="{{$errors->any() ? old('b3r5452k2') : $k3->b3r5452k2}}"></td>
							<td><input class="form-control form-545k3" type="number" step="any" name="b3r5452k3" value="{{$errors->any() ? old('b3r5452k3') : $k3->b3r5452k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.4.5.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-545k2" type="number" step="any" name="b3r5453k2" value="{{$errors->any() ? old('b3r5453k2') : $k3->b3r5453k2}}"></td>
							<td><input class="form-control form-545k3" type="number" step="any" name="b3r5453k3" value="{{$errors->any() ? old('b3r5453k3') : $k3->b3r5453k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.4.6</th>
							<th>Dukungan Penanaman Modal</th>
							<th><input class="form-control form-54k2" id="546k2" type="number" step="any" name="b3r546k2" value="{{$errors->any() ? old('b3r546k2') : $k3->b3r546k2}}" readonly=""></th>
							<th><input class="form-control form-54k3" id="546k3" type="number" step="any" name="b3r546k3" value="{{$errors->any() ? old('b3r546k3') : $k3->b3r546k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.4.6.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-546k2" type="number" step="any" name="b3r5462k2" value="{{$errors->any() ? old('b3r5462k2') : $k3->b3r5462k2}}"></td>
							<td><input class="form-control form-546k3" type="number" step="any" name="b3r5462k3" value="{{$errors->any() ? old('b3r5462k3') : $k3->b3r5462k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.4.6.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-546k2" type="number" step="any" name="b3r5463k2" value="{{$errors->any() ? old('b3r5463k2') : $k3->b3r5463k2}}"></td>
							<td><input class="form-control form-546k3" type="number" step="any" name="b3r5463k3" value="{{$errors->any() ? old('b3r5463k3') : $k3->b3r5463k3}}"></td> 
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
			<input class="form-control form-7k2" id="5k3" style="display:none" type="number" step="any" name="b3r5k3" value="{{$errors->any() ? old('b3r5k3') : $k3->b3r5k3}}" readonly="">

			{{-- 5.1. Bidang Penyelenggaraan Pemerintahan Desa --}}
			<input class="form-control form-5k2" id="51k2" style="display:none" type="number" step="any" name="b3r51k2" value="{{$errors->any() ? old('b3r51k2') : $k3->b3r51k2}}" readonly="">
			<input class="form-control form-5k3" id="51k3" style="display:none" type="number" step="any" name="b3r51k3" value="{{$errors->any() ? old('b3r51k3') : $k3->b3r51k3}}" readonly="">

			{{-- 5.2. Bidang Pelaksanaan Pembangunan Desa --}}
			<input class="form-control form-5k2" id="52k2" style="display:none" type="number" step="any" name="b3r52k2" value="{{$errors->any() ? old('b3r52k2') : $k3->b3r52k2}}" readonly="">
			<input class="form-control form-5k3" id="52k3" style="display:none" type="number" step="any" name="b3r52k3" value="{{$errors->any() ? old('b3r52k3') : $k3->b3r52k3}}" readonly="">

			{{-- 5.3. Bidang Pembinaan Kemasyarakatan Desa --}}
			<input class="form-control form-5k2" id="53k2" style="display:none" type="number" step="any" name="b3r53k2" value="{{$errors->any() ? old('b3r53k2') : $k3->b3r53k2}}" readonly="">
			<input class="form-control form-5k3" id="53k3" style="display:none" type="number" step="any" name="b3r53k3" value="{{$errors->any() ? old('b3r53k3') : $k3->b3r53k3}}" readonly="">

			{{-- 5.5. Bidang Penanggulangan Bencana, Keadaan Darurat dan Mendesak --}}
			<input class="form-control form-5k2" id="55k2" style="display:none" type="number" step="any" name="b3r55k2" value="{{$errors->any() ? old('b3r55k2') : $k3->b3r55k2}}" readonly="">
			<input class="form-control form-5k3" id="55k3" style="display:none" type="number" step="any" name="b3r55k3" value="{{$errors->any() ? old('b3r55k3') : $k3->b3r55k3}}" readonly="">

			{{-- 5.3.1. Ketenteraman, Ketertiban Umum, dan Pelindungan Masyarakat --}}
			<input class="form-control form-53k2" id="531k2" style="display:none" type="number" step="any" name="b3r531k2" value="{{$errors->any() ? old('b3r531k2') : $k3->b3r531k2}}" readonly="">
			<input class="form-control form-53k3" id="531k3" style="display:none" type="number" step="any" name="b3r531k3" value="{{$errors->any() ? old('b3r531k3') : $k3->b3r531k3}}" readonly="">

			{{-- 5.4.7. Perdagangan dan Perindustrian --}}
			<input class="form-control form-54k2" id="547k2" style="display:none" type="number" step="any" name="b3r547k2" value="{{$errors->any() ? old('b3r547k2') : $k3->b3r547k2}}" readonly="">
			<input class="form-control form-54k3" id="547k3" style="display:none" type="number" step="any" name="b3r547k3" value="{{$errors->any() ? old('b3r547k3') : $k3->b3r547k3}}" readonly="">

			{{-- 5.4.99. Lainnya --}}
			<input class="form-control form-54k2" id="5499k2" style="display:none" type="number" step="any" name="b3r5499k2" value="{{$errors->any() ? old('b3r5499k2') : $k3->b3r5499k2}}" readonly="">
			<input class="form-control form-54k3" id="5499k3" style="display:none" type="number" step="any" name="b3r5499k3" value="{{$errors->any() ? old('b3r5499k3') : $k3->b3r5499k3}}" readonly="">

			{{-- 6. PEMBIAYAAN  --}}
			<input class="form-control form-7k2" id="6k2" style="display:none" type="number" step="any" name="b3r6k2" value="{{$errors->any() ? old('b3r6k2') : $k3->b3r6k2}}" readonly="">
			<input class="form-control form-7k3" id="6k3" style="display:none" type="number" step="any" name="b3r6k3" value="{{$errors->any() ? old('b3r6k3') : $k3->b3r6k3}}" readonly="">

			{{-- 7. SILPA input --}}
			<input class="form-control" id="7k2"  style="display:none" type="number" step="any" name="b3r7k2" value="{{$errors->any() ? old('b3r7k2') : $k3->b3r7k2}}" readonly="">
			<input class="form-control" id="7k3"  style="display:none" type="number" step="any" name="b3r7k3" value="{{$errors->any() ? old('b3r7k3') : $k3->b3r7k3}}" readonly="">

		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokiii_3').submit();" href="/entri_bumd/{{$k3->id}}/blokiii_2">← Blok III (2)</a></li>
			<li><a onclick="document.getElementById('form_blokiii_3').submit();" href="/entri_bumd/{{$k3->id}}/blokiii_4">Blok III (4) →</a></li>
		</div> --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok III (2)</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok III (4) →</button>
		</div>
	</div>


		</div>
	</div>
</form>

@stop

{{-- <div class="tab-pane fade" id="blokiii-3"> --}}

{{-- </div> --}}