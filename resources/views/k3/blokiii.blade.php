@extends('layouts.master')

@section('content')

			
<form action="{{ asset(route('entri_data.simpan_blokiii', ['id'=>$k3->id], false)) }}{{-- /entri_data/{{$k3->id}}/simpan_blokiii --}}" id="form_blokiii" method="POST" enctype="multipart/form-data">
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
						<button class="btn btn-block btn-blokiii active" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></button>
						
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
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$k3->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokvi" ><b>Blok VI</b></a></li>
			</ul>		 --}}
			<div class="btn-group-justified" role="group">
				<div class="btn-group">
					<button class="btn btn-default btn-bloki" type="submit"><b>Blok I</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokii" type="submit"><b>Blok II</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii active" type="submit"><b>Blok III</b></button>
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

	<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK III. ANGGARAN PENDAPATAN DAN BELANJA PEMERINTAH DESA / NAGARI <p>( Ribu Rupiah )</p></h2>
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
							<th>4 </th>
							<th>PENDAPATAN DESA</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r4k2')  ? 'has-error' : ''}}">
									<input class="form-control form-7k2" id="4k2" type="number" step="any" name="b3r4k2" value="{{$errors->any() ? old('b3r4k2') : $k3->b3r4k2}}" readonly="">
									@if ($errors->has('b3r4k2'))
										<span class="help-block">{{$errors->first('b3r4k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r4k3')  ? 'has-error' : ''}}">
									<input class="form-control form-7k3" id="4k3" type="number" step="any" name="b3r4k3" value="{{$errors->any() ? old('b3r4k3') : $k3->b3r4k3}}" readonly="">
									@if ($errors->has('b3r4k3'))
										<span class="help-block">{{$errors->first('b3r4k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[23]->keterangan}}" title="{{$daftar_kondef[23]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>4.1</th>
							<th>Pendapatan Asli Desa</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r41k2')  ? 'has-error' : ''}}">
									<input class="form-control form-4k2" id="41k2" type="number" step="any" name="b3r41k2" value="{{$errors->any() ? old('b3r41k2') : $k3->b3r41k2}}" readonly="">
									@if ($errors->has('b3r41k2'))
										<span class="help-block">{{$errors->first('b3r41k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r41k3')  ? 'has-error' : ''}}">
									<input class="form-control form-4k3" id="41k3" type="number" step="any" name="b3r41k3" value="{{$errors->any() ? old('b3r41k3') : $k3->b3r41k3}}" readonly="">
									@if ($errors->has('b3r41k3'))
										<span class="help-block">{{$errors->first('b3r41k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[24]->keterangan}}" title="{{$daftar_kondef[24]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>4.1.1</td>
							<td>Hasil Usaha</td> 
							<td><input class="form-control form-41k2" type="number" step="any" name="b3r411k2" value="{{$errors->any() ? old('b3r411k2') : $k3->b3r411k2}}"></td>
							<td><input class="form-control form-41k3" type="number" step="any" name="b3r411k3" value="{{$errors->any() ? old('b3r411k3') : $k3->b3r411k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[25]->keterangan}}" title="{{$daftar_kondef[25]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>4.1.2</td>
							<td>Hasil Aset</td> 
							<td><input class="form-control form-41k2" type="number" step="any" name="b3r412k2" value="{{$errors->any() ? old('b3r412k2') : $k3->b3r412k2}}"></td>
							<td><input class="form-control form-41k3" type="number" step="any" name="b3r412k3" value="{{$errors->any() ? old('b3r412k3') : $k3->b3r412k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[26]->keterangan}}" title="{{$daftar_kondef[26]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>
						<tr>
							<td>4.1.3</td>
							<td>Swadaya, Partisipasi dan Gotong Royong</td>
							<td><input class="form-control form-41k2" type="number" step="any" name="b3r413k2" value="{{$errors->any() ? old('b3r413k2') : $k3->b3r413k2}}"></td>
							<td><input class="form-control form-41k3" type="number" step="any" name="b3r413k3" value="{{$errors->any() ? old('b3r413k3') : $k3->b3r413k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[27]->keterangan}}" title="{{$daftar_kondef[27]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>4.1.4</td>
							<td>Lain-lain Pendapatan Asli Desa</td>
							<td><input class="form-control form-41k2" type="number" step="any" name="b3r414k2" value="{{$errors->any() ? old('b3r414k2') : $k3->b3r414k2}}"></td>
							<td><input class="form-control form-41k3" type="number" step="any" name="b3r414k3" value="{{$errors->any() ? old('b3r414k3') : $k3->b3r414k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[28]->keterangan}}" title="{{$daftar_kondef[28]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>4.2</th>
							<th>Transfer</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r42k2')  ? 'has-error' : ''}}">
									<input class="form-control form-4k2" id="42k2" type="number" step="any" name="b3r42k2" value="{{$errors->any() ? old('b3r42k2') : $k3->b3r42k2}}" readonly="">
									@if ($errors->has('b3r42k2'))
										<span class="help-block">{{$errors->first('b3r42k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r42k3')  ? 'has-error' : ''}}">
									<input class="form-control form-4k3" id="42k3" type="number" step="any" name="b3r42k3" value="{{$errors->any() ? old('b3r42k3') : $k3->b3r42k3}}" readonly="">
									@if ($errors->has('b3r42k3'))
										<span class="help-block">{{$errors->first('b3r42k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[29]->keterangan}}" title="{{$daftar_kondef[29]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>4.2.1</td>
							<td>Dana Desa</td> 
							<td><input class="form-control form-42k2" type="number" step="any" name="b3r421k2" value="{{$errors->any() ? old('b3r421k2') : $k3->b3r421k2}}"></td>
							<td><input class="form-control form-42k3" type="number" step="any" name="b3r421k3" value="{{$errors->any() ? old('b3r421k3') : $k3->b3r421k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[30]->keterangan}}" title="{{$daftar_kondef[30]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>4.2.2</td>
							<td>Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten/kota</td> 
							<td><input class="form-control form-42k2" type="number" step="any" name="b3r422k2" value="{{$errors->any() ? old('b3r422k2') : $k3->b3r422k2}}"></td>
							<td><input class="form-control form-42k3" type="number" step="any" name="b3r422k3" value="{{$errors->any() ? old('b3r422k3') : $k3->b3r422k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[31]->keterangan}}" title="{{$daftar_kondef[31]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>4.2.3</td>
							<td>Alokasi Dana Desa</td> 
							<td><input class="form-control form-42k2" type="number" step="any" name="b3r423k2" value="{{$errors->any() ? old('b3r423k2') : $k3->b3r423k2}}"></td>
							<td><input class="form-control form-42k3" type="number" step="any" name="b3r423k3" value="{{$errors->any() ? old('b3r423k3') : $k3->b3r423k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[32]->keterangan}}" title="{{$daftar_kondef[32]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>4.2.4</td>
							<td>Bantuan Keuangan Provinsi</td> 
							<td><input class="form-control form-42k2" type="number" step="any" name="b3r424k2" value="{{$errors->any() ? old('b3r424k2') : $k3->b3r424k2}}"></td>
							<td><input class="form-control form-42k3" type="number" step="any" name="b3r424k3" value="{{$errors->any() ? old('b3r424k3') : $k3->b3r424k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[33]->keterangan}}" title="{{$daftar_kondef[33]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>4.2.5</td>
							<td>Bantuan Keuangan APBD Kabupaten/Kota</td> 
							<td><input class="form-control form-42k2" type="number" step="any" name="b3r425k2" value="{{$errors->any() ? old('b3r425k2') : $k3->b3r425k2}}"></td>
							<td><input class="form-control form-42k3" type="number" step="any" name="b3r425k3" value="{{$errors->any() ? old('b3r425k3') : $k3->b3r425k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[34]->keterangan}}" title="{{$daftar_kondef[34]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>4.3</th>
							<th>Pendapatan Lain-Lain</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r43k2')  ? 'has-error' : ''}}">
									<input class="form-control form-4k2" id="43k2" type="number" step="any" name="b3r43k2" value="{{$errors->any() ? old('b3r43k2') : $k3->b3r43k2}}" readonly="">
									@if ($errors->has('b3r43k2'))
										<span class="help-block">{{$errors->first('b3r43k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b3r43k3')  ? 'has-error' : ''}}">
									<input class="form-control form-4k3" id="43k3" type="number" step="any" name="b3r43k3" value="{{$errors->any() ? old('b3r43k3') : $k3->b3r43k3}}" readonly="">
									@if ($errors->has('b3r43k3'))
										<span class="help-block">{{$errors->first('b3r43k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[35]->keterangan}}" title="{{$daftar_kondef[35]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>4.3.1</td>
							<td>Penerimaan dari Hasil Kerjasama antar Desa</td> 
							<td><input class="form-control form-43k2" type="number" step="any" name="b3r431k2" value="{{$errors->any() ? old('b3r431k2') : $k3->b3r431k2}}"></td>
							<td><input class="form-control form-43k3" type="number" step="any" name="b3r431k3" value="{{$errors->any() ? old('b3r431k3') : $k3->b3r431k3}}"></td> 
						</tr>
						<tr>
							<td>4.3.2</td>
							<td>Penerimaan dari Hasil Kerjasama Desa dengan Pihak Ketiga</td> 
							<td><input class="form-control form-43k2" type="number" step="any" name="b3r432k2" value="{{$errors->any() ? old('b3r432k2') : $k3->b3r432k2}}"></td>
							<td><input class="form-control form-43k3" type="number" step="any" name="b3r432k3" value="{{$errors->any() ? old('b3r432k3') : $k3->b3r432k3}}"></td> 
						</tr>
						<tr>
							<td>4.3.3</td>
							<td>Penerimaan dari Bantuan Perusahaan yang berlokasi di Desa</td> 
							<td><input class="form-control form-43k2" type="number" step="any" name="b3r433k2" value="{{$errors->any() ? old('b3r433k2') : $k3->b3r433k2}}"></td>
							<td><input class="form-control form-43k3" type="number" step="any" name="b3r433k3" value="{{$errors->any() ? old('b3r433k3') : $k3->b3r433k3}}"></td> 
						</tr>
						<tr>
							<td>4.3.4</td>
							<td>Hibah dan sumbangan dari Pihak Ketiga</td> 
							<td><input class="form-control form-43k2" type="number" step="any" name="b3r434k2" value="{{$errors->any() ? old('b3r434k2') : $k3->b3r434k2}}"></td>
							<td><input class="form-control form-43k3" type="number" step="any" name="b3r434k3" value="{{$errors->any() ? old('b3r434k3') : $k3->b3r434k3}}"></td> 
						</tr>
						<tr>
							<td>4.3.5</td>
							<td>Koreksi kesalahan belanja tahun-tahun anggaran sebelumnya yang mengakibatkan penerimaan di kas Desa pada tahun anggaran berjalan</td> 
							<td><input class="form-control form-43k2" type="number" step="any" name="b3r435k2" value="{{$errors->any() ? old('b3r435k2') : $k3->b3r435k2}}"></td>
							<td><input class="form-control form-43k3" type="number" step="any" name="b3r435k3" value="{{$errors->any() ? old('b3r435k3') : $k3->b3r435k3}}"></td> 
						</tr>
						<tr>
							<td>4.3.6</td>
							<td>Bunga Bank</td> 
							<td><input class="form-control form-43k2" type="number" step="any" name="b3r436k2" value="{{$errors->any() ? old('b3r436k2') : $k3->b3r436k2}}"></td>
							<td><input class="form-control form-43k3" type="number" step="any" name="b3r436k3" value="{{$errors->any() ? old('b3r436k3') : $k3->b3r436k3}}"></td> 
						</tr>
						<tr>
							<td>4.3.9</td>
							<td>Lain-lain pendapatan Desa yang sah</td> 
							<td><input class="form-control form-43k2" type="number" step="any" name="b3r439k2" value="{{$errors->any() ? old('b3r439k2') : $k3->b3r439k2}}"></td>
							<td><input class="form-control form-43k3" type="number" step="any" name="b3r439k3" value="{{$errors->any() ? old('b3r439k3') : $k3->b3r439k3}}"></td> 
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

			{{-- 5. BELANJA input --}}
			<input class="form-control form-7k2" id="5k2" style="display:none" type="number" step="any" name="b3r5k2" value="{{$errors->any() ? old('b3r5k2') : $k3->b3r5k2}}" readonly="">
			<input class="form-control form-7k3" id="5k3" style="display:none" type="number" step="any" name="b3r5k3" value="{{$errors->any() ? old('b3r5k3') : $k3->b3r5k3}}" readonly="">

			{{-- 6. PEMBIAYAAN  --}}
			<input class="form-control form-7k2" id="6k2" style="display:none" type="number" step="any" name="b3r6k2" value="{{$errors->any() ? old('b3r6k2') : $k3->b3r6k2}}" readonly="">
			<input class="form-control form-7k3" id="6k3" style="display:none" type="number" step="any" name="b3r6k3" value="{{$errors->any() ? old('b3r6k3') : $k3->b3r6k3}}" readonly="">
			
			{{-- 7. SILPA input --}}
			<input class="form-control" id="7k2"  style="display:none" type="number" step="any" name="b3r7k2" value="{{$errors->any() ? old('b3r7k2') : $k3->b3r7k2}}" readonly="">
			<input class="form-control" id="7k3"  style="display:none" type="number" step="any" name="b3r7k3" value="{{$errors->any() ? old('b3r7k3') : $k3->b3r7k3}}" readonly="">

		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokiii').submit();" href="/entri_data/{{$k3->id}}/blokii">← Blok II</a></li>
			<li><a onclick="document.getElementById('form_blokiii').submit();" href="/entri_data/{{$k3->id}}/blokiii_1">Blok III (1) →</a></li>
		</div> --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok II</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok III (1) →</button>
		</div>
	</div>
	
		</div>
	</div>

</form>

@stop


{{-- <div class="tab-pane fade" id="blokiii"> --}}

{{-- </div> --}}