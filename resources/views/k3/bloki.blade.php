@extends('layouts.master')

@section('content')

<form action="{{ asset(route('entri_data.simpan_bloki', ['id'=>$k3->id], false)) }}{{-- /entri_data/{{$k3->id}}/simpan_bloki --}}" id="form_bloki" method="POST" enctype="multipart/form-data">
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
				  	
				<button class="btn btn-block btn-default btn-bloki active" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok I</b></button>

				<button class="btn btn-block btn-default btn-blokii" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok II</b></button>
				
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


			{{-- <ul class="nav nav-pills nav-justified" >
				<li class="nav-item active"><a class="nav-link active " href="/entri_data/{{$k3->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokvi" ><b>Blok VI</b></a></li>
			</ul> --}}	
			<div class="btn-group-justified" role="group" >
				<div class="btn-group">
					<button class="btn btn-default btn-bloki active" type="submit"><b>Blok I</b></button>
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
					<h2 class="page-title text-center">BLOK I. PENGENALAN TEMPAT</h2>
				</div>
				<div class="clearfix">
					
					<div class="profile-section">
						<table class="table table-hover">
							<tbody>
								<tr>
									<th >1. Provinsi: </th>
									<td >{{$nama_provinsi}}</td>
									<td align="right"><input class="form-control" maxlength="2" type="text" readonly="" value="{{$k3->b1r1}}"></td>
									<td>
										<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[5]->keterangan}}" title="{{$daftar_kondef[5]->rincian}}"><i class="fa fa-search"></i></button>
									</td>									
								</tr>
								<tr>
									<th>2. Kabupaten/Kota*): </th>
									<td>{{$nama_kabupaten}}</td>
									<td align="right"><input class="form-control" maxlength="2" type="text" readonly="" value="{{$k3->b1r2}}"></td>
								</tr>
								<tr>
									<th>3. Kecamatan: </th>
									<td>{{$nama_kecamatan}}</td>
									<td align="right"><input class="form-control" maxlength="3" type="text" readonly="" value="{{$k3->b1r3}}"></td>
								</tr>
								<tr>
									<th>4. Desa/Nagari*): </th>
									<td>{{$nama_desa}}</td>
									<td align="right"><input class="form-control" maxlength="3" type="text" readonly="" value="{{$k3->b1r4}}"></td>
								</tr>
								<tr>
									<th rowspan="3">5. Jenis Wilayah Administrasi: </th>
									<td>1   Desa</td>								
									<td align="right">
										<div class="form-group {{$errors->has('b1r5') ? 'has-error' : ''}}">
											<input class="form-control" maxlength="1" type="text" name="b1r5" value="{{$errors->any() ? old('b1r5') : $k3->b1r5}}">
											@if ($errors->has('b1r5'))
												<span class="help-block">{{$errors->first('b1r5')}}</span>
											@endif
										</div>
									</td>
									<td>
										<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[6]->keterangan}}" title="{{$daftar_kondef[6]->rincian}}"><i class="fa fa-search"></i></button>
									</td>
								</tr>
								<tr>
									<td>2   Nagari</td>
								</tr>
								<tr>
									<td>3   Lainnya</td>
								</tr>
								<tr>
									<th rowspan="2">6. Status Desa: </th>
									<td>1   Perkotaan</td>								
									<td align="right">
										<div class="form-group {{$errors->has('b1r6') ? 'has-error' : ''}}">
											<input class="form-control" maxlength="1" type="text" name="b1r6" value="{{$errors->any() ? old('b1r6') : $k3->b1r6}}">
											@if ($errors->has('b1r6'))
												<span class="help-block">{{$errors->first('b1r6')}}</span>
											@endif
										</div>
									</td>
									<td>
										<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[7]->keterangan}}" title="{{$daftar_kondef[7]->rincian}}"><i class="fa fa-search"></i></button>
									</td>
								</tr>
								<tr>
									<td>2   Perdesaan </td>
								</tr>
								<tr>
									<th>7. Alamat Lengkap Kantor Desa/Nagari: </th>
									<td> 
										<div class="form-group {{$errors->has('b1r7a') ? 'has-error' : ''}}">
											<textarea class="form-control" name="b1r7a">{{$errors->any() ? old('b1r7a') : $k3->b1r7a}}</textarea>
											@if ($errors->has('b1r7a'))
												<span class="help-block">{{$errors->first('b1r7a')}}</span>
											@endif

											RT: <input class="form-control" size="3" maxlength="3" type="text" name="b1r7b" value="{{$errors->any() ? old('b1r7b') :$k3->b1r7b}}"> 
											/ RW: <input class="form-control" size="3" maxlength="3"type="text" name="b1r7c" value="{{$errors->any() ? old('b1r7c') :$k3->b1r7c}}">
											Kode Pos: <input class="form-control" size="5" maxlength="5" type="text" name="b1r7d" value="{{$errors->any() ? old('b1r7d') : $k3->b1r7d}}">
											@if ($errors->has('b1r7d'))
												<span class="help-block"><p class="text-danger">{{$errors->first('b1r7d')}}</p></span>
											@endif
										</div>	 								
									</td>
									<td>
										<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[8]->keterangan}}" title="{{$daftar_kondef[8]->rincian}}"><i class="fa fa-search"></i></button>
									</td>		
								</tr>						
								<tr>
									<td>Email: </td>
									<td> 
										<div class="form-group {{$errors->has('b1r7e') ? 'has-error' : ''}}">
											<input class="form-control" type="email" name="b1r7e" value="{{$errors->any() ? old('b1r7e') : $k3->b1r7e}}">
											@if ($errors->has('b1r7e'))
												<span class="help-block">{{$errors->first('b1r7e')}}</span>
											@endif
										</div>
									</td>		
								</tr>
								<tr>
									<td>Nomor Telepon: </td>
									<td> 
										<div class="form-group {{$errors->has('b1r7f') ? 'has-error' : ''}}">
											<input class="form-control" type="text" name="b1r7f" value="{{$errors->any() ? old('b1r7f') : $k3->b1r7f}}">
											@if ($errors->has('b1r7f'))
												<span class="help-block">{{$errors->first('b1r7f')}}</span>
											@endif
										</div>
									</td>		
								</tr>
								<tr>
									<td>Nomor Faksimile: </td>
									<td> 
										<div class="form-group {{$errors->has('b1r7g') ? 'has-error' : ''}}">
											<input class="form-control" type="text" name="b1r7g" value="{{$errors->any() ? old('b1r7g') : $k3->b1r7g}}">
											@if ($errors->has('b1r7g'))
												<span class="help-block">{{$errors->first('b1r7g')}}</span>
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
						<button type="submit" class="btn btn-success"><span class="sr-only">Simpan</span> <i class="fa fa-save"></i> &nbsp;&nbsp;Simpan</button>
					</p>
				</div>	
				{{-- <div class="pager">
					<li class="disabled"><a href="">← </a></li>
					<li><a class="next-blok" onclick="document.getElementById('form_bloki').submit();" href="/entri_data/{{$k3->id}}/blokii">Blok II →</a></li>
				</div> --}}
				<div class="pager">
					<button type="submit" class="btn btn-default btn-sm prev-blok" disabled="">← </button>
					<button type="submit" class="btn btn-default btn-sm next-blok">Blok II →</button>
				</div>
			</div>		
			

		</div>
	</div>

</form>

@stop






{{-- <div class="tab-pane fade active in" id="bloki"> --}}
	
{{-- </div> --}}