@extends('layouts.master')

@section('content')

			
<form action="{{ asset(route('entri_bumd.simpan_blokiii', ['id'=>$bumd->id], false)) }}" id="form_blokiii" method="POST" enctype="multipart/form-data">
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

						{{-- <button class="btn btn-block btn-blokiii2" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (2)</b></button>

						<button class="btn btn-block btn-blokiii3" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (3)</b></button>

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
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_bumd/{{$bumd->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_bumd/{{$bumd->id}}/blokvi" ><b>Blok VI</b></a></li>
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
				{{-- <div class="btn-group">
					<button class="btn btn-default btn-blokiii2" type="submit"><b>Blok III (2)</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii3" type="submit"><b>Blok III (3)</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii4" type="submit"><b>Blok III (4)</b></button>
				</div> --}}	
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
					      	<th class="text-center">Uraian</th>
					      	<th class="text-center">Tahun {{$bumd->tahun}} <p>(Ribu Rp)</p></th>
					      	<th class="text-center">Tahun {{($bumd->tahun-1)}} <p>(Ribu Rp)</p></th>
					    </tr>
					    <tr>
					    	<td class="text-center">(1)</td>
					    	<td class="text-center">(2)</td>
					    	<td class="text-center">(3)</td>
					    </tr>
					</thead>
					<tbody>
						<tr>
							<th>ASET (A+B)</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r1k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1k2" value="{{$errors->any() ? old('b31r1k2') : $bumd->b31r1k2}}">
									@if ($errors->has('b31r1k2'))
										<span class="help-block">{{$errors->first('b31r1k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r1k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1k3" value="{{$errors->any() ? old('b31r1k3') : $bumd->b31r1k3}}">
									@if ($errors->has('b31r1k3'))
										<span class="help-block">{{$errors->first('b31r1k3')}}</span>
									@endif
								</div>
							</th>
						</tr>
						<tr>
							<th>A. Aset Lancar (1+2+3+4+5)</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r1ak2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1ak2" value="{{$errors->any() ? old('b31r1ak2') : $bumd->b31r1ak2}}">
									@if ($errors->has('b31r1ak2'))
										<span class="help-block">{{$errors->first('b31r1ak2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r1ak3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1ak3" value="{{$errors->any() ? old('b31r1ak3') : $bumd->b31r1ak3}}">
									@if ($errors->has('b31r1ak3'))
										<span class="help-block">{{$errors->first('b31r1ak3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[16]->keterangan}}" title="{{$daftar_kondef[16]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>1. Kas dan Setara Kas</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1a1k2" value="{{$errors->any() ? old('b31r1a1k2') : $bumd->b31r1a1k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1a1k3" value="{{$errors->any() ? old('b31r1a1k3') : $bumd->b31r1a1k3}}"></td>
						</tr>
						<tr>
							<td>2. Piutang dan Usaha</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1a2k2" value="{{$errors->any() ? old('b31r1a2k2') : $bumd->b31r1a2k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1a2k3" value="{{$errors->any() ? old('b31r1a2k3') : $bumd->b31r1a2k3}}"></td>
						</tr>
						<tr>
							<td>3. Piutang Lain-lain</td>
							<td><input class="form-control" type="number" step="any" name="b31r1a3k2" value="{{$errors->any() ? old('b31r1a3k2') : $bumd->b31r1a3k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1a3k3" value="{{$errors->any() ? old('b31r1a3k3') : $bumd->b31r1a3k3}}"></td>
						</tr>
						<tr>
							<td>4. Persediaan</td>
							<td><input class="form-control" type="number" step="any" name="b31r1a4k2" value="{{$errors->any() ? old('b31r1a4k2') : $bumd->b31r1a4k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1a4k3" value="{{$errors->any() ? old('b31r1a4k3') : $bumd->b31r1a4k3}}"></td>
						</tr>
						<tr>
							<td>5. Aset Lancar Lainnya</td>
							<td><input class="form-control" type="number" step="any" name="b31r1a5k2" value="{{$errors->any() ? old('b31r1a5k2') : $bumd->b31r1a5k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1a5k3" value="{{$errors->any() ? old('b31r1a5k3') : $bumd->b31r1a5k3}}"></td>
						</tr>
						<tr>
							<th>B. Aset Tidak Lancar (1+2+3)</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r1bk2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1bk2" value="{{$errors->any() ? old('b31r1bk2') : $bumd->b31r1bk2}}">
									@if ($errors->has('b31r1bk2'))
										<span class="help-block">{{$errors->first('b31r1bk2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r1bk3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1bk3" value="{{$errors->any() ? old('b31r1bk3') : $bumd->b31r1bk3}}">
									@if ($errors->has('b31r1bk3'))
										<span class="help-block">{{$errors->first('b31r1bk3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[17]->keterangan}}" title="{{$daftar_kondef[17]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>1. Investasi dan Penyertaan</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1b1k2" value="{{$errors->any() ? old('b31r1b1k2') : $bumd->b31r1b1k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b1k3" value="{{$errors->any() ? old('b31r1b1k3') : $bumd->b31r1b1k3}}"></td>
						</tr>
						<tr>
							<td>2. Aset Tetap (a-b)</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1b2k2" value="{{$errors->any() ? old('b31r1b2k2') : $bumd->b31r1b2k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2k3" value="{{$errors->any() ? old('b31r1b2k3') : $bumd->b31r1b2k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[18]->keterangan}}" title="{{$daftar_kondef[18]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>a. Nilai Perolehan (i+ii+iii+iv+v)</td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2ak2" value="{{$errors->any() ? old('b31r1b2ak2') : $bumd->b31r1b2ak2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2ak3" value="{{$errors->any() ? old('b31r1b2ak3') : $bumd->b31r1b2ak3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[19]->keterangan}}" title="{{$daftar_kondef[19]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>i. Tanah</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1b2a1k2" value="{{$errors->any() ? old('b31r1b2a1k2') : $bumd->b31r1b2a1k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2a1k3" value="{{$errors->any() ? old('b31r1b2a1k3') : $bumd->b31r1b2a1k3}}"></td>
						</tr>
						<tr>
							<td>ii. Bangunan</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1b2a2k2" value="{{$errors->any() ? old('b31r1b2a2k2') : $bumd->b31r1b2a2k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2a2k3" value="{{$errors->any() ? old('b31r1b2a2k3') : $bumd->b31r1b2a2k3}}"></td>
						</tr>
						<tr>
							<td>iii. Kendaraan</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1b2a3k2" value="{{$errors->any() ? old('b31r1b2a3k2') : $bumd->b31r1b2a3k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2a3k3" value="{{$errors->any() ? old('b31r1b2a3k3') : $bumd->b31r1b2a3k3}}"></td>
						</tr>
						<tr>
							<td>iv. Inventaris</td> 
							<td><input class="form-control" type="number" step="any" name="b31r1b2a4k2" value="{{$errors->any() ? old('b31r1b2a4k2') : $bumd->b31r1b2a4k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2a4k3" value="{{$errors->any() ? old('b31r1b2a4k3') : $bumd->b31r1b2a4k3}}"></td>
						</tr>
						<tr>
							<td>5. <input class="form-control" type="text" step="any" name="b31r1b2a5k1" placeholder="................" value="{{$errors->any() ? old('b31r1b2a5k1') : $bumd->b31r1b2a5k1}}"></td> 
							<td><input class="form-control" type="number" step="any" name="b31r1b2a5k2" value="{{$errors->any() ? old('b31r1b2a5k2') : $bumd->b31r1b2a5k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2a5k3" value="{{$errors->any() ? old('b31r1b2a5k3') : $bumd->b31r1b2a5k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[20]->keterangan}}" title="{{$daftar_kondef[20]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>b. Penyusutan</td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2bk2" value="{{$errors->any() ? old('b31r1b2bk2') : $bumd->b31r1b2bk2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r1b2bk3" value="{{$errors->any() ? old('b31r1b2bk3') : $bumd->b31r1b2bk3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[21]->keterangan}}" title="{{$daftar_kondef[21]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>3. Aset Tidak Lancar Lainnya</td>
							<td>
								<div class="form-group-table {{$errors->has('b31r1b3k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1b3k2" value="{{$errors->any() ? old('b31r1b3k2') : $bumd->b31r1b3k2}}">
									@if ($errors->has('b31r1b3k2'))
										<span class="help-block">{{$errors->first('b31r1b3k2')}}</span>
									@endif
								</div>
							</td>
							<td>
								<div class="form-group-table {{$errors->has('b31r1b3k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r1b3k3" value="{{$errors->any() ? old('b31r1b3k3') : $bumd->b31r1b3k3}}">
									@if ($errors->has('b31r1b3k3'))
										<span class="help-block">{{$errors->first('b31r1b3k3')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[22]->keterangan}}" title="{{$daftar_kondef[22]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>KEWAJIBAN DAN EKUITAS (A+B)</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r2k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r2k2" value="{{$errors->any() ? old('b31r2k2') : $bumd->b31r2k2}}">
									@if ($errors->has('b31r2k2'))
										<span class="help-block">{{$errors->first('b31r2k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b31r2k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b31r2k3" value="{{$errors->any() ? old('b31r2k3') : $bumd->b31r2k3}}">
									@if ($errors->has('b31r2k3'))
										<span class="help-block">{{$errors->first('b31r2k3')}}</span>
									@endif
								</div>
							</th>
						</tr>
						<tr>
							<td>A. KEWAJIBAN (1+2)</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2ak2" value="{{$errors->any() ? old('b31r2ak2') : $bumd->b31r2ak2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2ak3" value="{{$errors->any() ? old('b31r2ak3') : $bumd->b31r2ak3}}"></td> 
						</tr>
						<tr>
							<td>1. Kewajiban Jangka Pendek</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a1k2" value="{{$errors->any() ? old('b31r2a1k2') : $bumd->b31r2a1k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a1k3" value="{{$errors->any() ? old('b31r2a1k3') : $bumd->b31r2a1k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[23]->keterangan}}" title="{{$daftar_kondef[23]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>a. Hutang Usaha</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a1ak2" value="{{$errors->any() ? old('b31r2a1ak2') : $bumd->b31r2a1ak2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a1ak3" value="{{$errors->any() ? old('b31r2a1ak3') : $bumd->b31r2a1ak3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[24]->keterangan}}" title="{{$daftar_kondef[24]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>b. Hutang Bank</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a1bk2" value="{{$errors->any() ? old('b31r2a1bk2') : $bumd->b31r2a1bk2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a1bk3" value="{{$errors->any() ? old('b31r2a1bk3') : $bumd->b31r2a1bk3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[25]->keterangan}}" title="{{$daftar_kondef[25]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>c. Hutang Pajak</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a1ck2" value="{{$errors->any() ? old('b31r2a1ck2') : $bumd->b31r2a1ck2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a1ck3" value="{{$errors->any() ? old('b31r2a1ck3') : $bumd->b31r2a1ck3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[26]->keterangan}}" title="{{$daftar_kondef[26]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>d. Hutang Lain-Lain</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a1dk2" value="{{$errors->any() ? old('b31r2a1dk2') : $bumd->b31r2a1dk2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a1dk3" value="{{$errors->any() ? old('b31r2a1dk3') : $bumd->b31r2a1dk3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[27]->keterangan}}" title="{{$daftar_kondef[27]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>2. Kewajiban Jangka Panjang</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a2k2" value="{{$errors->any() ? old('b31r2a2k2') : $bumd->b31r2a2k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a2k3" value="{{$errors->any() ? old('b31r2a2k3') : $bumd->b31r2a2k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[28]->keterangan}}" title="{{$daftar_kondef[28]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>a. Hutang Obligasi</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a2ak2" value="{{$errors->any() ? old('b31r2a2ak2') : $bumd->b31r2a2ak2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a2ak3" value="{{$errors->any() ? old('b31r2a2ak3') : $bumd->b31r2a2ak3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[29]->keterangan}}" title="{{$daftar_kondef[29]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>b. Hutang Bank Jangka Panjang</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a2bk2" value="{{$errors->any() ? old('b31r2a2bk2') : $bumd->b31r2a2bk2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a2bk3" value="{{$errors->any() ? old('b31r2a2bk3') : $bumd->b31r2a2bk3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[30]->keterangan}}" title="{{$daftar_kondef[30]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>c. Hutang Jangka Panjang Lainnya</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2a2ck2" value="{{$errors->any() ? old('b31r2a2ck2') : $bumd->b31r2a2ck2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2a2ck3" value="{{$errors->any() ? old('b31r2a2ck3') : $bumd->b31r2a2ck3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[31]->keterangan}}" title="{{$daftar_kondef[31]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>B. EKUITAS (1+2+3+4+5+6+7+8)</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2bk2" value="{{$errors->any() ? old('b31r2bk2') : $bumd->b31r2bk2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2bk3" value="{{$errors->any() ? old('b31r2bk3') : $bumd->b31r2bk3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[32]->keterangan}}" title="{{$daftar_kondef[32]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>	
						<tr>
							<td>1. Penyertaan Pemerintah Pusat</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b1k2" value="{{$errors->any() ? old('b31r2b1k2') : $bumd->b31r2b1k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b1k3" value="{{$errors->any() ? old('b31r2b1k3') : $bumd->b31r2b1k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[33]->keterangan}}" title="{{$daftar_kondef[33]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>	
						<tr>
							<td>2. Penyertaan Pemerintah Provinsi</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b2k2" value="{{$errors->any() ? old('b31r2b2k2') : $bumd->b31r2b2k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b2k3" value="{{$errors->any() ? old('b31r2b2k3') : $bumd->b31r2b2k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[34]->keterangan}}" title="{{$daftar_kondef[34]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>		
						<tr>
							<td>3. Penyertaan Pemerintah Kabupaten/Kota</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b3k2" value="{{$errors->any() ? old('b31r2b3k2') : $bumd->b31r2b3k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b3k3" value="{{$errors->any() ? old('b31r2b3k3') : $bumd->b31r2b3k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[35]->keterangan}}" title="{{$daftar_kondef[35]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>	
						<tr>
							<td>4. Penyertaan Lainnya</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b4k2" value="{{$errors->any() ? old('b31r2b4k2') : $bumd->b31r2b4k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b4k3" value="{{$errors->any() ? old('b31r2b4k3') : $bumd->b31r2b4k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[36]->keterangan}}" title="{{$daftar_kondef[36]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>	
						<tr>
							<td>5. Hibah</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b5k2" value="{{$errors->any() ? old('b31r2b5k2') : $bumd->b31r2b5k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b5k3" value="{{$errors->any() ? old('b31r2b5k3') : $bumd->b31r2b5k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[37]->keterangan}}" title="{{$daftar_kondef[37]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>	
						<tr>
							<td>6. <input class="form-control" type="text" step="any" name="b31r2b6k1" placeholder="..............." value="{{$errors->any() ? old('b31r2b6k1') : $bumd->b31r2b6k1}}"></td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b6k2" value="{{$errors->any() ? old('b31r2b6k2') : $bumd->b31r2b6k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b6k3" value="{{$errors->any() ? old('b31r2b6k3') : $bumd->b31r2b6k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[38]->keterangan}}" title="{{$daftar_kondef[38]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>
						<tr>
							<td>7. Cadangan</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b7k2" value="{{$errors->any() ? old('b31r2b7k2') : $bumd->b31r2b7k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b7k3" value="{{$errors->any() ? old('b31r2b7k3') : $bumd->b31r2b7k3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[39]->keterangan}}" title="{{$daftar_kondef[39]->rincian}}"><i class="fa fa-search"></i></button>
							</td> 
						</tr>
						<tr>
							<td>8. Saldo Laba</td> 
							<td><input class="form-control" type="number" step="any" name="b31r2b8k2" value="{{$errors->any() ? old('b31r2b8k2') : $bumd->b31r2b8k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b31r2b8k3" value="{{$errors->any() ? old('b31r2b8k3') : $bumd->b31r2b8k3}}"></td>
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

		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokiii').submit();" href="/entri_bumd/{{$bumd->id}}/blokii">← Blok II</a></li>
			<li><a onclick="document.getElementById('form_blokiii').submit();" href="/entri_bumd/{{$bumd->id}}/blokiii_1">Blok III (1) →</a></li>
		</div> --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok II</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok III (1) →</button>
		</div>
	</div>
	
		</div>
	</div>

</form>

@endsection

@push('scripts')
 	@include('bumd.simpan')
@endpush
