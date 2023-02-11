@extends('layouts.master')

@section('content')

<form action="{{ asset(route('entri_data.simpan_blokiii_1', ['id'=>$k3->id], false)) }}{{-- /entri_data/{{$k3->id}}/simpan_blokiii_1 --}}" id="form_blokiii_1" method="POST" enctype="multipart/form-data">
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
						
						<button class="btn btn-block btn-blokiii1 active" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (1)</b></button>

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
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$k3->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokvi" ><b>Blok VI</b></a></li>
			</ul> --}}		
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
					<button class="btn btn-default btn-blokiii1 active" type="submit"><b>Blok III (1)</b></button>
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

	<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK III. ANGGARAN PENDAPATAN DAN BELANJA PEMERINTAH DESA / NAGARI (Lanjutan 1)<p>( Ribu Rupiah )</p></h2>
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
							<th>5 </th>
							<th>BELANJA</th>
							<th><div class="form-group-table {{$errors->has('b3r5k2')  ? 'has-error' : ''}}">
									<input class="form-control form-7k2" id="5k2" type="number" step="any" name="b3r5k2" value="{{$errors->any() ? old('b3r5k2') : $k3->b3r5k2}}" readonly="">
									@if ($errors->has('b3r5k2'))
										<span class="help-block">{{$errors->first('b3r5k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r5k3')  ? 'has-error' : ''}}">
									<input class="form-control form-7k3" id="5k3" type="number" step="any" name="b3r5k3" value="{{$errors->any() ? old('b3r5k3') : $k3->b3r5k3}}" readonly="">
									@if ($errors->has('b3r5k3'))
										<span class="help-block">{{$errors->first('b3r5k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[37]->keterangan}}" title="{{$daftar_kondef[37]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>5.1</th>
							<th>Bidang Penyelenggaraan Pemerintahan Desa</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r51k2')  ? 'has-error' : ''}}">
									<input class="form-control form-5k2" id="51k2" type="number" step="any" name="b3r51k2" value="{{$errors->any() ? old('b3r51k2') : $k3->b3r51k2}}" readonly="">
									@if ($errors->has('b3r51k2'))
										<span class="help-block">{{$errors->first('b3r51k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b3r51k3')  ? 'has-error' : ''}}">
									<input class="form-control form-5k3" id="51k3" type="number" step="any" name="b3r51k3" value="{{$errors->any() ? old('b3r51k3') : $k3->b3r51k3}}" readonly="">
									@if ($errors->has('b3r51k3'))
										<span class="help-block">{{$errors->first('b3r51k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[42]->keterangan}}" title="{{$daftar_kondef[42]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>5.1.1</th>
							<th>Penyelenggaraan Belanja Penghasilan Tetap, Tunjangan dan Operasional Pemerintahan Desa</th> 
							<th><input class="form-control form-51k2" id="511k2" type="number" step="any" name="b3r511k2" value="{{$errors->any() ? old('b3r511k2') : $k3->b3r511k2}}" readonly=""></th>
							<th><input class="form-control form-51k3" id="511k3" type="number" step="any" name="b3r511k3" value="{{$errors->any() ? old('b3r511k3') : $k3->b3r511k3}}" readonly=""></th>
						</tr>
						<tr>
							<th>5.1.1.01</th>
							<th>Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa</th> 
							<th><input class="form-control form-511k2" id="51101k2" type="number" step="any" name="b3r51101k2" value="{{$errors->any() ? old('b3r51101k2') : $k3->b3r51101k2}}" readonly=""></th>
							<th><input class="form-control form-511k3" id="51101k3" type="number" step="any" name="b3r51101k3" value="{{$errors->any() ? old('b3r51101k3') : $k3->b3r51101k3}}" readonly=""></th> 
						</tr>
						<tr>
							<td>5.1.1.01.1</td>
							<td>Belanja Pegawai</td>
							<td><input class="form-control form-51101k2" type="number" step="any" name="b3r511011k2" value="{{$errors->any() ? old('b3r511011k2') : $k3->b3r511011k2}}" ></td>
							<td><input class="form-control form-51101k3" type="number" step="any" name="b3r511011k3" value="{{$errors->any() ? old('b3r511011k3') : $k3->b3r511011k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[38]->keterangan}}" title="{{$daftar_kondef[38]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.1.01.1.1</td>
							<td>Penghasilan Tetap & Tunjangan Kepala Desa</td>
							<td><input class="form-control" type="number" step="any" name="b3r5110111k2" value="{{$errors->any() ? old('b3r5110111k2') : $k3->b3r5110111k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b3r5110111k3" value="{{$errors->any() ? old('b3r5110111k3') : $k3->b3r5110111k3}}"></td>
						</tr>
						<tr>
							<td>5.1.1.02.1.2</td>
							<td>Penghasilan Tetap & Tunjangan Perangkat Desa</td>
							<td><input class="form-control" type="number" step="any" name="b3r5110212k2" value="{{$errors->any() ? old('b3r5110212k2') : $k3->b3r5110212k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b3r5110212k3" value="{{$errors->any() ? old('b3r5110212k3') : $k3->b3r5110212k3}}"></td>
						</tr>
						<tr>
							<td>5.1.1.03.1.3</td>
							<td>Jaminan Sosial Kepala Desa dan Perangkat Desa</td> 
							<td><input class="form-control" type="number" step="any" name="b3r5110313k2" value="{{$errors->any() ? old('b3r5110313k2') : $k3->b3r5110313k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b3r5110313k3" value="{{$errors->any() ? old('b3r5110313k3') : $k3->b3r5110313k3}}"></td> 
						</tr>
						<tr>
							<td>5.1.1.04.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-51101k2" type="number" step="any" name="b3r511042k2" value="{{$errors->any() ? old('b3r511042k2') : $k3->b3r511042k2}}" ></td>
							<td><input class="form-control form-51101k3" type="number" step="any" name="b3r511042k3" value="{{$errors->any() ? old('b3r511042k3') : $k3->b3r511042k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.1.1.05</th>
							<th>Penyediaan Tunjangan BPD</th> 
							<th><input class="form-control form-511k2" id="51105k2" type="number" step="any" name="b3r51105k2" value="{{$errors->any() ? old('b3r51105k2') : $k3->b3r51105k2}}" readonly=""></th>
							<th><input class="form-control form-511k3" id="51105k3" type="number" step="any" name="b3r51105k3" value="{{$errors->any() ? old('b3r51105k3') : $k3->b3r51105k3}}" readonly=""></th> 
						</tr>
						<tr>
							<td>5.1.1.05.1</td>
							<td>Belanja Pegawai (Tunjangan BPD)</td> 
							<td><input class="form-control form-51105k2" type="number" step="any" name="b3r511051k2" value="{{$errors->any() ? old('b3r511051k2') : $k3->b3r511051k2}}" ></td>
							<td><input class="form-control form-51105k3" type="number" step="any" name="b3r511051k3" value="{{$errors->any() ? old('b3r511051k3') : $k3->b3r511051k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[38]->keterangan}}" title="{{$daftar_kondef[38]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.1.06.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-51105k2" type="number" step="any" name="b3r511062k2" value="{{$errors->any() ? old('b3r511062k2') : $k3->b3r511062k2}}" ></td>
							<td><input class="form-control form-51105k3" type="number" step="any" name="b3r511062k3" value="{{$errors->any() ? old('b3r511062k3') : $k3->b3r511062k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.1.1.07</th>
							<th>Penyediaan Insentif/Operasional RT/RW</th>
							<th><input class="form-control form-511k2" id="51107k2" type="number" step="any" name="b3r51107k2" value="{{$errors->any() ? old('b3r51107k2') : $k3->b3r51107k2}}" readonly=""></th>
							<th><input class="form-control form-511k3" id="51107k3" type="number" step="any" name="b3r51107k3" value="{{$errors->any() ? old('b3r51107k3') : $k3->b3r51107k3}}" readonly=""></th>
						</tr>
						<tr>
							<td>5.1.1.07.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-51107k2" type="number" step="any" name="b3r511072k2" value="{{$errors->any() ? old('b3r511072k2') : $k3->b3r511072k2}}" ></td>
							<td><input class="form-control form-51107k3" type="number" step="any" name="b3r511072k3" value="{{$errors->any() ? old('b3r511072k3') : $k3->b3r511072k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.1.1.99</th>
							<th>Lainnya</th> 
							<th><input class="form-control form-511k2" id="51199k2" type="number" step="any" name="b3r51199k2" value="{{$errors->any() ? old('b3r51199k2') : $k3->b3r51199k2}}" readonly=""></th>
							<th><input class="form-control form-511k3" id="51199k3" type="number" step="any" name="b3r51199k3" value="{{$errors->any() ? old('b3r51199k3') : $k3->b3r51199k3}}" readonly=""></th> 
						</tr>
						<tr>
							<td>5.1.1.99.1</td>
							<td>Belanja Pegawai</td> 
							<td><input class="form-control form-51199k2" type="number" step="any" name="b3r511991k2" value="{{$errors->any() ? old('b3r511991k2') : $k3->b3r511991k2}}" ></td>
							<td><input class="form-control form-51199k3" type="number" step="any" name="b3r511991k3" value="{{$errors->any() ? old('b3r511991k3') : $k3->b3r511991k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[38]->keterangan}}" title="{{$daftar_kondef[38]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.1.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-51199k2" type="number" step="any" name="b3r511992k2" value="{{$errors->any() ? old('b3r511992k2') : $k3->b3r511992k2}}" ></td>
							<td><input class="form-control form-51199k3" type="number" step="any" name="b3r511992k3" value="{{$errors->any() ? old('b3r511992k3') : $k3->b3r511992k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.1.2</th>
							<th>Sarana dan Prasarana Pemerintahan Desa</th> 
							<th><input class="form-control form-51k2" id="512k2" type="number" step="any" name="b3r512k2" value="{{$errors->any() ? old('b3r512k2') : $k3->b3r512k2}}" readonly=""></th>
							<th><input class="form-control form-51k3" id="512k3" type="number" step="any" name="b3r512k3" value="{{$errors->any() ? old('b3r512k3') : $k3->b3r512k3}}" readonly=""></th> 
						</tr>
						<tr>
							<td>5.1.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-512k2" type="number" step="any" name="b3r5122k2" value="{{$errors->any() ? old('b3r5122k2') : $k3->b3r5122k2}}" ></td>
							<td><input class="form-control form-512k3" type="number" step="any" name="b3r5122k3" value="{{$errors->any() ? old('b3r5122k3') : $k3->b3r5122k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.2.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-512k2" type="number" step="any" name="b3r5123k2" value="{{$errors->any() ? old('b3r5123k2') : $k3->b3r5123k2}}" ></td>
							<td><input class="form-control form-512k3" type="number" step="any" name="b3r5123k3" value="{{$errors->any() ? old('b3r5123k3') : $k3->b3r5123k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<th>5.1.3</th>
							<th>Administrasi Kependudukan, Pencatatan Sipil, Statistik dan Kearsipan</th> 
							<th><input class="form-control form-51k2" id="513k2" type="number" step="any" name="b3r513k2" value="{{$errors->any() ? old('b3r513k2') : $k3->b3r513k2}}" readonly=""></th>
							<th><input class="form-control form-51k3" id="513k3" type="number" step="any" name="b3r513k3" value="{{$errors->any() ? old('b3r513k3') : $k3->b3r513k3}}" readonly=""></th> 
						</tr>	
						<tr>
							<td>5.1.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-513k2" type="number" step="any" name="b3r5132k2" value="{{$errors->any() ? old('b3r5132k2') : $k3->b3r5132k2}}" ></td>
							<td><input class="form-control form-513k3" type="number" step="any" name="b3r5132k3" value="{{$errors->any() ? old('b3r5132k3') : $k3->b3r5132k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.3.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-513k2" type="number" step="any" name="b3r5133k2" value="{{$errors->any() ? old('b3r5133k2') : $k3->b3r5133k2}}" ></td>
							<td><input class="form-control form-513k3" type="number" step="any" name="b3r5133k3" value="{{$errors->any() ? old('b3r5133k3') : $k3->b3r5133k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<th>5.1.4</th>
							<th>Tata Praja Pemerintahan, Perencanaan, Keuangan dan Pelaporan</th> 
							<th><input class="form-control form-51k2" id="514k2" type="number" step="any" name="b3r514k2" value="{{$errors->any() ? old('b3r514k2') : $k3->b3r514k2}}" readonly=""></th>
							<th><input class="form-control form-51k3" id="514k3" type="number" step="any" name="b3r514k3" value="{{$errors->any() ? old('b3r514k3') : $k3->b3r514k3}}" readonly=""></th> 
						</tr>	
						<tr>
							<td>5.1.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-514k2" type="number" step="any" name="b3r5142k2" value="{{$errors->any() ? old('b3r5142k2') : $k3->b3r5142k2}}" ></td>
							<td><input class="form-control form-514k3" type="number" step="any" name="b3r5142k3" value="{{$errors->any() ? old('b3r5142k3') : $k3->b3r5142k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.4.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-514k2" type="number" step="any" name="b3r5143k2" value="{{$errors->any() ? old('b3r5143k2') : $k3->b3r5143k2}}" ></td>
							<td><input class="form-control form-514k3" type="number" step="any" name="b3r5143k3" value="{{$errors->any() ? old('b3r5143k3') : $k3->b3r5143k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>						
						<tr>
							<th>5.1.5</th>
							<th>Pertanahan</th> 
							<th><input class="form-control form-51k2" id="515k2" type="number" step="any" name="b3r515k2" value="{{$errors->any() ? old('b3r515k2') : $k3->b3r515k2}}" readonly=""></th>
							<th><input class="form-control form-51k3" id="515k3" type="number" step="any" name="b3r515k3" value="{{$errors->any() ? old('b3r515k3') : $k3->b3r515k3}}" readonly=""></th> 
						</tr>	
						<tr>
							<td>5.1.5.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-515k2" type="number" step="any" name="b3r5152k2" value="{{$errors->any() ? old('b3r5152k2') : $k3->b3r5152k2}}" ></td>
							<td><input class="form-control form-515k3" type="number" step="any" name="b3r5152k3" value="{{$errors->any() ? old('b3r5152k3') : $k3->b3r5152k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.5.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-515k2" type="number" step="any" name="b3r5153k2" value="{{$errors->any() ? old('b3r5153k2') : $k3->b3r5153k2}}" ></td>
							<td><input class="form-control form-515k3" type="number" step="any" name="b3r5153k3" value="{{$errors->any() ? old('b3r5153k3') : $k3->b3r5153k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[40]->keterangan}}" title="{{$daftar_kondef[40]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5.1.99</th>
							<th>Lainnya</th> 
							<th><input class="form-control form-51k2" id="5199k2" type="number" step="any" name="b3r5199k2" value="{{$errors->any() ? old('b3r5199k2') : $k3->b3r5199k2}}" readonly=""></th>
							<th><input class="form-control form-51k3" id="5199k3" type="number" step="any" name="b3r5199k3" value="{{$errors->any() ? old('b3r5199k3') : $k3->b3r5199k3}}" readonly=""></th> 
						</tr>	
						<tr>
							<td>5.1.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td><input class="form-control form-5199k2" type="number" step="any" name="b3r51992k2" value="{{$errors->any() ? old('b3r51992k2') : $k3->b3r51992k2}}" ></td>
							<td><input class="form-control form-5199k3" type="number" step="any" name="b3r51992k3" value="{{$errors->any() ? old('b3r51992k3') : $k3->b3r51992k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>5.1.99.3</td>
							<td>Belanja Modal</td> 
							<td><input class="form-control form-5199k2" type="number" step="any" name="b3r51993k2" value="{{$errors->any() ? old('b3r51993k2') : $k3->b3r51993k2}}" ></td>
							<td><input class="form-control form-5199k3" type="number" step="any" name="b3r51993k3" value="{{$errors->any() ? old('b3r51993k3') : $k3->b3r51993k3}}"></td> 
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

			{{-- 5.2. Bidang Pelaksanaan Pembangunan Desa --}}
			<input class="form-control form-5k2" id="52k2" style="display:none" type="number" step="any" name="b3r52k2" value="{{$errors->any() ? old('b3r52k2') : $k3->b3r52k2}}" readonly="">
			<input class="form-control form-5k3" id="52k3" style="display:none" type="number" step="any" name="b3r52k3" value="{{$errors->any() ? old('b3r52k3') : $k3->b3r52k3}}" readonly="">

			{{-- 5.3. Bidang Pembinaan Kemasyarakatan Desa --}}
			<input class="form-control form-5k2" id="53k2" style="display:none" type="number" step="any" name="b3r53k2" value="{{$errors->any() ? old('b3r53k2') : $k3->b3r53k2}}" readonly="">
			<input class="form-control form-5k3" id="53k3" style="display:none" type="number" step="any" name="b3r53k3" value="{{$errors->any() ? old('b3r53k3') : $k3->b3r53k3}}" readonly="">

			{{-- 5.4. Bidang Pemberdayaan Masyarakat Desa --}}
			<input class="form-control form-5k2" id="54k2" style="display:none" type="number" step="any" name="b3r54k2" value="{{$errors->any() ? old('b3r54k2') : $k3->b3r54k2}}" readonly="">
			<input class="form-control form-5k3" id="54k3" style="display:none" type="number" step="any" name="b3r54k3" value="{{$errors->any() ? old('b3r54k3') : $k3->b3r54k3}}" readonly="">

			{{-- 5.5. Bidang Penanggulangan Bencana, Keadaan Darurat dan Mendesak --}}
			<input class="form-control form-5k2" id="55k2" style="display:none" type="number" step="any" name="b3r55k2" value="{{$errors->any() ? old('b3r55k2') : $k3->b3r55k2}}" readonly="">
			<input class="form-control form-5k3" id="55k3" style="display:none" type="number" step="any" name="b3r55k3" value="{{$errors->any() ? old('b3r55k3') : $k3->b3r55k3}}" readonly="">

			{{-- 6. PEMBIAYAAN  --}}
			<input class="form-control form-7k2" id="6k2" style="display:none" type="number" step="any" name="b3r6k2" value="{{$errors->any() ? old('b3r6k2') : $k3->b3r6k2}}" readonly="">
			<input class="form-control form-7k3" id="6k3" style="display:none" type="number" step="any" name="b3r6k3" value="{{$errors->any() ? old('b3r6k3') : $k3->b3r6k3}}" readonly="">
			
			{{-- 7. SILPA input --}}
			<input class="form-control" id="7k2"  style="display:none" type="number" step="any" name="b3r7k2" value="{{$errors->any() ? old('b3r7k2') : $k3->b3r7k2}}" readonly="">
			<input class="form-control" id="7k3"  style="display:none" type="number" step="any" name="b3r7k3" value="{{$errors->any() ? old('b3r7k3') : $k3->b3r7k3}}" readonly="">

		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokiii_1').submit();" href="/entri_data/{{$k3->id}}/blokiii">← Blok III</a></li>
			<li><a onclick="document.getElementById('form_blokiii_1').submit();" href="/entri_data/{{$k3->id}}/blokiii_2">Blok III (2) →</a></li>
		</div> --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok III</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok III (2) →</button>
		</div>	
	</div>

		</div>
	</div>

</form>

@stop

{{-- <div class="tab-pane fade" id="blokiii-1"> --}}

{{-- </div> --}}