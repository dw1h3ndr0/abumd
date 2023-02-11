@extends('layouts.master')

@section('content')
			
<form action="{{ asset(route('entri_bumd.simpan_blokiv', ['id'=>$bumd->id], false)) }}" id="form_blokiv" method="POST" enctype="multipart/form-data">
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

				<button class="btn btn-block btn-default btn-blokiv active" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok IV</b></button>	

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
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$bumd->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokv" ><b>Blok V</b></a></li>
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
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiv active" type="submit"><b>Blok IV</b></button>
				</div> --}}
				<div class="btn-group">
					<button class="btn btn-default btn-blokv" type="submit"><b>Blok V</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokvi" type="submit"><b>Blok VI</b></button>
				</div>
			</div>

	<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK IV. C A T A T A N</h2>
		</div>
		<div class="clearfix">
			
			<div class="plan">
				<h5 style="color: #5A5A5A;" align="center">
					Apabila ada hal - hal yang memerlukan keterangan, bisa dituliskan pada blok ini. 
					<br>Selain informasi dari responden, petugas juga bisa menambahkan catatan
					<br>untuk memperjelas masalah yang berkaitan dengan isian kuesioner.
				</h5>
			</div>
			<textarea name="b4r1" class="form-control" rows="20" cols="30" placeholder="Catatan">{{$bumd->b4r1}}</textarea>
			<p class="margin-top-30" align="right">
				<button type="submit" class="btn btn-primary btn-keluar">
					<span class="lnr lnr-exit"></span><span>Keluar</span>
				</button>
				<button type="submit" class="btn btn-success" title="Simpan"><span class="sr-only">Simpan</span> <i class="fa fa-save"></i> &nbsp;&nbsp;Simpan</button>
			</p>
		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokiv').submit();" href="/entri_data/{{$bumd->id}}/blokiii_4">← Blok III (4)</a></li>
			<li><a onclick="document.getElementById('form_blokiv').submit();" href="/entri_data/{{$bumd->id}}/blokv">Blok V →</a></li>
		</div> --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok III (4)</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok V →</button>
		</div>
	</div>

		</div>
	</div>

</form>

@endsection

@push('scripts')
 	@include('bumd.simpan')
@endpush
