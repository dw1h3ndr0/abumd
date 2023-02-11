@extends('layouts.master')

@section('content')

<form action="{{ asset(route('entri_bumd.simpan_blokiii_1', ['id'=>$bumd->id], false)) }}" id="form_blokiii_1" method="POST" enctype="multipart/form-data">
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
			</ul> --}}		
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/bloki" ><b>Blok I</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokii" ><b>Blok II</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii" ><b>Blok III</b></a></li> --}}
				{{-- <li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$bumd->id}}/blokiii_1" ><b>Blok III (1)</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_2" ><b>Blok III (2)</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_3" ><b>Blok III (3)</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_4" ><b>Blok III (4)</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiv" ><b>Blok IV</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokv" ><b>Blok V</b></a></li> --}}
				{{-- <li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokvi" ><b>Blok VI</b></a></li> --}}
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
				{{-- <div class="btn-group">
					<button class="btn btn-default btn-blokiii2" type="submit"><b>Blok III (2)</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii3" type="submit"><b>Blok III (3)</b></button>
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
			<h2 class="page-title text-center">BLOK III. LAPORAN KEUANGAN PERUSAHAAN [Lanjutan]</h2>
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
							<th>1. PENDAPATAN USAHA (1.1 + 1.2)</th>
							<th><div class="form-group-table {{$errors->has('b32r1k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r1k2" value="{{$errors->any() ? old('b32r1k2') : $bumd->b32r1k2}}">
									@if ($errors->has('b32r1k2'))
										<span class="help-block">{{$errors->first('b32r1k2')}}</span>
									@endif
								</div>
							</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r1k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r1k3" value="{{$errors->any() ? old('b32r1k3') : $bumd->b32r1k3}}">
									@if ($errors->has('b32r1k3'))
										<span class="help-block">{{$errors->first('b32r1k3')}}</span>
									@endif
								</div>
							</th>
						</tr>
						<tr>
							<td>1.1 Pendapatan Usaha Utama</td> 
							<td><input class="form-control" type="number" step="any" name="b32r1_1k2" value="{{$errors->any() ? old('b32r1_1k2') : $bumd->b32r1_1k2}}"></td>
							<td><input class="form-control" type="number" step="any" name="b32r1_1k3" value="{{$errors->any() ? old('b32r1_1k3') : $bumd->b32r1_1k3}}" ></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[42]->keterangan}}" title="{{$daftar_kondef[42]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>1.2 Pendapatan Usaha Lainnya</td> 
							<td><input class="form-control" type="number" step="any" name="b32r1_2k2" value="{{$errors->any() ? old('b32r1_2k2') : $bumd->b32r1_2k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r1_2k3" value="{{$errors->any() ? old('b32r1_2k3') : $bumd->b32r1_2k3}}" ></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[43]->keterangan}}" title="{{$daftar_kondef[43]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>2. Beban Usaha (2.1 + 2.2 + 2.3)</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r2k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r2k2" value="{{$errors->any() ? old('b32r2k2') : $bumd->b32r2k2}}">
									@if ($errors->has('b32r2k2'))
										<span class="help-block">{{$errors->first('b32r2k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r2k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r2k3" value="{{$errors->any() ? old('b32r2k3') : $bumd->b32r2k3}}">
									@if ($errors->has('b32r2k3'))
										<span class="help-block">{{$errors->first('b32r2k3')}}</span>
									@endif
								</div>
							</th>
						</tr>
						<tr>
							<th>2.1. Beban Pokok Penjualan (a + b - c + d - e)</th> 
							<th><input class="form-control" type="number" step="any" name="b32r21k2" value="{{$errors->any() ? old('b32r21k2') : $bumd->b32r21k2}}"></th>
							<th><input class="form-control" type="number" step="any" name="b32r21k3" value="{{$errors->any() ? old('b32r21k3') : $bumd->b32r21k3}}"></th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[44]->keterangan}}" title="{{$daftar_kondef[44]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>a. Beban Pokok Produksi</td> 
							<td><input class="form-control" type="number" step="any" name="b32r21ak2" value="{{$errors->any() ? old('b32r21ak2') : $bumd->b32r21ak2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r21ak3" value="{{$errors->any() ? old('b32r21ak3') : $bumd->b32r21ak3}}" ></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[45]->keterangan}}" title="{{$daftar_kondef[45]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>- Upah dan Gaji</td>
							<td><input class="form-control" type="number" step="any" name="b32r21a1k2" value="{{$errors->any() ? old('b32r21a1k2') : $bumd->b32r21a1k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r21a1k3" value="{{$errors->any() ? old('b32r21a1k3') : $bumd->b32r21a1k3}}"></td>
						</tr>
						<tr>
							<td>- Beban Produksi Lainnya</td>
							<td><input class="form-control" type="number" step="any" name="b32r21a2k2" value="{{$errors->any() ? old('b32r21a2k2') : $bumd->b32r21a2k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r21a2k3" value="{{$errors->any() ? old('b32r21a2k3') : $bumd->b32r21a2k3}}"></td>
						</tr>
						<tr>
							<td>b. Persediaan Awal</td>
							<td><input class="form-control" type="number" step="any" name="b32r21bk2" value="{{$errors->any() ? old('b32r21bk2') : $bumd->b32r21bk2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r21bk3" value="{{$errors->any() ? old('b32r21bk3') : $bumd->b32r21bk3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[46]->keterangan}}" title="{{$daftar_kondef[46]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>c. Persediaan Akhir (-)</td> 
							<td><input class="form-control" type="number" step="any" name="b32r21ck2" value="{{$errors->any() ? old('b32r21ck2') : $bumd->b32r21ck2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r21ck3" value="{{$errors->any() ? old('b32r21ck3') : $bumd->b32r21ck3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[47]->keterangan}}" title="{{$daftar_kondef[47]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>d. Pembelian Barang Jadi</td> 
							<td><input class="form-control" type="number" step="any" name="b32r21dk2" value="{{$errors->any() ? old('b32r21dk2') : $bumd->b32r21dk2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r21dk3" value="{{$errors->any() ? old('b32r21dk3') : $bumd->b32r21dk3}}"></td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[48]->keterangan}}" title="{{$daftar_kondef[48]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>e. Pemakaian Sendiri (-)</td> 
							<td><input class="form-control" type="number" step="any" name="b32r21ek2" value="{{$errors->any() ? old('b32r21ek2') : $bumd->b32r21ek2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r21ek3" value="{{$errors->any() ? old('b32r21ek3') : $bumd->b32r21ek3}}" ></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[49]->keterangan}}" title="{{$daftar_kondef[49]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>2.2 Beban Umum dan Administrasi ( a + b )</th> 
							<th><input class="form-control" type="number" step="any" name="b32r22k2" value="{{$errors->any() ? old('b32r22k2') : $bumd->b32r22k2}}" ></th>
							<th><input class="form-control" type="number" step="any" name="b32r22k3" value="{{$errors->any() ? old('b32r22k3') : $bumd->b32r22k3}}"></th> 
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[50]->keterangan}}" title="{{$daftar_kondef[50]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>a. Upah dan gaji</td> 
							<td><input class="form-control" type="number" step="any" name="b32r22ak2" value="{{$errors->any() ? old('b32r22ak2') : $bumd->b32r22ak2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r22ak3" value="{{$errors->any() ? old('b32r22ak3') : $bumd->b32r22ak3}}"></td>
						</tr>
						<tr>
							<td>b. Beban Umum & Administrasi Lainnya</td>
							<td><input class="form-control" type="number" step="any" name="b32r22bk2" value="{{$errors->any() ? old('b32r22bk2') : $bumd->b32r22bk2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r22bk3" value="{{$errors->any() ? old('b32r22bk3') : $bumd->b32r22bk3}}" ></td>
						</tr>
						<tr>
							<th>2.3. Beban Usaha lainnya</th> 
							<th><input class="form-control" type="number" step="any" name="b32r23k2" value="{{$errors->any() ? old('b32r23k2') : $bumd->b32r23k2}}" ></th>
							<th><input class="form-control" type="number" step="any" name="b32r23k3" value="{{$errors->any() ? old('b32r23k3') : $bumd->b32r23k3}}"></th> 
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[51]->keterangan}}" title="{{$daftar_kondef[51]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>3. Laba (Rugi) Usaha (1-2)</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r3k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r3k2" value="{{$errors->any() ? old('b32r3k2') : $bumd->b32r3k2}}">
									@if ($errors->has('b32r3k2'))
										<span class="help-block">{{$errors->first('b32r3k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r3k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r3k3" value="{{$errors->any() ? old('b32r3k3') : $bumd->b32r3k3}}">
									@if ($errors->has('b32r3k3'))
										<span class="help-block">{{$errors->first('b32r3k3')}}</span>
									@endif
								</div>
							</th>
						</tr>
						<tr>
							<th>4. Pendapatan di Luar Usaha (netto) ( 4.1 - 4.2 )</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r4k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r4k2" value="{{$errors->any() ? old('b32r4k2') : $bumd->b32r4k2}}">
									@if ($errors->has('b32r4k2'))
										<span class="help-block">{{$errors->first('b32r4k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r4k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r4k3" value="{{$errors->any() ? old('b32r4k3') : $bumd->b32r4k3}}">
									@if ($errors->has('b32r4k3'))
										<span class="help-block">{{$errors->first('b32r4k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[52]->keterangan}}" title="{{$daftar_kondef[52]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<td>4.1. Pendapatan di Luar Usaha</td> 
							<td><input class="form-control" type="number" step="any" name="b32r41k2" value="{{$errors->any() ? old('b32r41k2') : $bumd->b32r41k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r41k3" value="{{$errors->any() ? old('b32r41k3') : $bumd->b32r41k3}}" ></td>  
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[53]->keterangan}}" title="{{$daftar_kondef[53]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<td>4.2. Beban di Luar Usaha</td> 
							<td><input class="form-control" type="number" step="any" name="b32r42k2" value="{{$errors->any() ? old('b32r42k2') : $bumd->b32r42k2}}" ></td>
							<td><input class="form-control" type="number" step="any" name="b32r42k3" value="{{$errors->any() ? old('b32r42k3') : $bumd->b32r42k3}}"></td> 
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[54]->keterangan}}" title="{{$daftar_kondef[54]->rincian}}"><i class="fa fa-search"></i></button>
							</td>
						</tr>
						<tr>
							<th>5. Laba (Rugi) Sebelum Pajak (3+4)</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r5k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r5k2" value="{{$errors->any() ? old('b32r5k2') : $bumd->b32r5k2}}">
									@if ($errors->has('b32r5k2'))
										<span class="help-block">{{$errors->first('b32r5k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r5k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r5k3" value="{{$errors->any() ? old('b32r5k3') : $bumd->b32r5k3}}">
									@if ($errors->has('b32r5k3'))
										<span class="help-block">{{$errors->first('b32r5k3')}}</span>
									@endif
								</div>
							</th>
						</tr>
						<tr>
							<th>6. Pajak Penghasilan Perusahaan</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r6k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r6k2" value="{{$errors->any() ? old('b32r6k2') : $bumd->b32r6k2}}">
									@if ($errors->has('b32r6k2'))
										<span class="help-block">{{$errors->first('b32r6k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r6k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r6k3" value="{{$errors->any() ? old('b32r6k3') : $bumd->b32r6k3}}">
									@if ($errors->has('b32r6k3'))
										<span class="help-block">{{$errors->first('b32r6k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[55]->keterangan}}" title="{{$daftar_kondef[55]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>7. Laba (Rugi) Tahun Berjalan (5-6)</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r7k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r7k2" value="{{$errors->any() ? old('b32r7k2') : $bumd->b32r7k2}}">
									@if ($errors->has('b32r7k2'))
										<span class="help-block">{{$errors->first('b32r7k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r7k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r7k3" value="{{$errors->any() ? old('b32r7k3') : $bumd->b32r7k3}}">
									@if ($errors->has('b32r7k3'))
										<span class="help-block">{{$errors->first('b32r7k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[56]->keterangan}}" title="{{$daftar_kondef[56]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>8. Laba Ditahan Awal Periode</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r8k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r8k2" value="{{$errors->any() ? old('b32r8k2') : $bumd->b32r8k2}}">
									@if ($errors->has('b32r8k2'))
										<span class="help-block">{{$errors->first('b32r8k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r8k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r8k3" value="{{$errors->any() ? old('b32r8k3') : $bumd->b32r8k3}}">
									@if ($errors->has('b32r8k3'))
										<span class="help-block">{{$errors->first('b32r8k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[57]->keterangan}}" title="{{$daftar_kondef[57]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>9. Dividen</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r9k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r9k2" value="{{$errors->any() ? old('b32r9k2') : $bumd->b32r9k2}}">
									@if ($errors->has('b32r9k2'))
										<span class="help-block">{{$errors->first('b32r9k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r9k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r9k3" value="{{$errors->any() ? old('b32r9k3') : $bumd->b32r9k3}}">
									@if ($errors->has('b32r9k3'))
										<span class="help-block">{{$errors->first('b32r9k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[58]->keterangan}}" title="{{$daftar_kondef[58]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
						</tr>
						<tr>
							<th>10. <input class="form-control" type="text" step="any" name="b32r10k1" placeholder="................." value="{{$errors->any() ? old('b32r10k1') : $bumd->b32r10k1}}"></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r10k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r10k2" value="{{$errors->any() ? old('b32r10k2') : $bumd->b32r10k2}}">
									@if ($errors->has('b32r10k2'))
										<span class="help-block">{{$errors->first('b32r10k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r10k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r10k3" value="{{$errors->any() ? old('b32r10k3') : $bumd->b32r10k3}}">
									@if ($errors->has('b32r10k3'))
										<span class="help-block">{{$errors->first('b32r10k3')}}</span>
									@endif
								</div>
							</th>
						</tr>
						<tr>
							<th>11. Laba Ditahan Akhir Periode (7+8-9+10)</th>
							<th>
								<div class="form-group-table {{$errors->has('b32r11k2')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r11k2" value="{{$errors->any() ? old('b32r11k2') : $bumd->b32r11k2}}">
									@if ($errors->has('b32r11k2'))
										<span class="help-block">{{$errors->first('b32r11k2')}}</span>
									@endif
								</div></th>
							<th>
								<div class="form-group-table {{$errors->has('b32r11k3')  ? 'has-error' : ''}}">
									<input class="form-control" type="number" step="any" name="b32r11k3" value="{{$errors->any() ? old('b32r11k3') : $bumd->b32r11k3}}">
									@if ($errors->has('b32r11k3'))
										<span class="help-block">{{$errors->first('b32r11k3')}}</span>
									@endif
								</div>
							</th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[59]->keterangan}}" title="{{$daftar_kondef[59]->rincian}}"><i class="fa fa-search"></i></button>
							</th>
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


@endsection

@push('scripts')
 	@include('bumd.simpan')
@endpush
