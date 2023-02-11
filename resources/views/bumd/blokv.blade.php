@extends('layouts.master')

@section('content')
			
<form action="{{ asset(route('entri_bumd.simpan_blokv', ['id'=>$bumd->id], false)) }}" id="form_blokv" method="POST" enctype="multipart/form-data">
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

						<button class="btn btn-block btn-blokiii3" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (3)</b></button>

						<button class="btn btn-block btn-blokiii4" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (4)</b></button> --}}
					</div>
				&nbsp;

				<button class="btn btn-block btn-default btn-blokiv" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok IV</b></button>	

				<button class="btn btn-block btn-default btn-blokv active" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok V</b></button>	

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
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$bumd->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokvi" ><b>Blok VI</b></a></li>
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
					<button class="btn btn-default btn-blokv active" type="submit"><b>Blok V</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokvi" type="submit"><b>Blok VI</b></button>
				</div>
			</div>

	<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK V. PENGESAHAN</h2>
		</div>
		
		<div class="tab-pane fade active in">
			<div class="profile-section">	
				<div class="clearfix">
					<div class="col-md-6">								
						<div class="form-group">
							<label>1. Nama Pemberi Jawaban</label>
							<div class="form-group-table {{$errors->has('b5r1')  ? 'has-error' : ''}}">
								<input type="text" class="form-control" name="b5r1" maxlength="50" value="{{$errors->any() ? old('b5r1') : $bumd->b5r1}}">
								@if ($errors->has('b5r1'))
									<span class="help-block">{{$errors->first('b5r1')}}</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<label>2. Jabatan</label>
							<div class="form-group-table {{$errors->has('b5r2')  ? 'has-error' : ''}}">
								<input type="text" class="form-control" name="b5r2" maxlength="18" value="{{$errors->any() ? old('b5r2') : $bumd->b5r2}}">
								@if ($errors->has('b5r2'))
									<span class="help-block">{{$errors->first('b5r2')}}</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<label>3. Telepon</label>
							<input type="text" class="form-control" name="b5r3" value="{{$errors->any() ? old('b5r3') : $bumd->b5r3}}">
						</div>
						<div class="form-group">					
							<label>4. Tanggal Pengesahan</label>
							<div class="input-group date {{$errors->has('b5r4')  ? 'has-error' : ''}}" data-date-autoclose="true" data-provide="datepicker">
								<input type="text" class="form-control" name="b5r4" value="{{$errors->any() ? old('b5r4') : $bumd->b5r4}}">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								@if ($errors->has('b5r4'))
									<span class="help-block">{{$errors->first('b5r4')}}</span>
								@endif
							</div>
						</div>		
					</div>
					<div class="col-md-6">	
						<div class="panel-content">
							<h2 class="heading"><i class="fa fa-square"></i> Bukti Pengesahan</h2>
							<input type="file" name="b5r5" id="dropify-event"  data-default-file="{{asset('files/'.$bumd->b5r5)}}" data-allowed-file-extensions="pdf png jpg jpeg">
							@if ($errors->has('b5r5'))
								<span class="help-block"><p class="text-danger">{{$errors->first('b5r5')}}</p></span>
							@endif
						</div>						
					</div>
				</div>
			</div>			
		</div>
		<p class="margin-top-30" align="right">
			<button type="submit" class="btn btn-primary btn-keluar">
				<span class="lnr lnr-exit"></span><span>Keluar</span>
			</button>
			<button type="submit" class="btn btn-success" title="Simpan"><span class="sr-only">Simpan</span> <i class="fa fa-save"></i> &nbsp;&nbsp;Simpan</button>
		</p>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokv').submit();" href="/entri_data/{{$k3->id}}/blokiv">← Blok IV</a></li>
			<li><a onclick="document.getElementById('form_blokv').submit();" href="/entri_data/{{$k3->id}}/blokvi">Blok VI →</a></li>
		</div> --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok IV</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok VI →</button>
		</div>
	</div>

		</div>
	</div>

</form>

@endsection

@push('scripts')
 	@include('bumd.simpan')
@endpush
