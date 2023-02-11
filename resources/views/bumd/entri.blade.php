@extends('layouts.master')

@section('content')
	<div id="main-content">
		<div class="container-fluid">
			@if(session('sukses'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<i class="fa fa-check-circle"></i> {{session('sukses')}}
				</div>
			@endif
			<div class="section-heading">
				<h1 class="page-title text">Keuangan Badan Usaha Milik Daerah</h1>
				<h4 class="page-title text">Tahun {{$bumd->tahun}}</h4>
			</div>
			
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="/entri_data/{{$bumd->id}}/bloki" role="tab" data-toggle="tab" aria-expanded="true">Blok I</a></li>
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokii" role="tab" data-toggle="tab" aria-expanded="false">Blok II</a></li>
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokiii" role="tab" data-toggle="tab" aria-expanded="false">Blok III</a></li>
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokiii_1" role="tab" data-toggle="tab" aria-expanded="false">Blok III (1)</a></li>
				{{-- <li class=""><a href="/entri_data/{{$bumd->id}}/blokiii_2" role="tab" data-toggle="tab" aria-expanded="false">Blok III (2)</a></li>
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokiii_3" role="tab" data-toggle="tab" aria-expanded="false">Blok III (3)</a></li>
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokiii_4" role="tab" data-toggle="tab" aria-expanded="false">Blok III (4)</a></li> --}}
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokiv" role="tab" data-toggle="tab" aria-expanded="false">Blok IV</a></li>
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokv" role="tab" data-toggle="tab" aria-expanded="false">Blok V</a></li>
				<li class=""><a href="/entri_data/{{$bumd->id}}/blokvi" role="tab" data-toggle="tab" aria-expanded="false">Blok VI</a></li>
			</ul>			
					<div class="tab-content content-profile">
				<form action="/entri_data/{{$bumd->id}}/simpan" method="POST" enctype="multipart/form-data">						
				<div>
				{{csrf_field()}}
							
						<!-- BLOK I -->
						@include('bumd.bloki')
						<!-- END BLOK I -->
						<!-- BLOK II -->
						@include('bumd.blokii')
						<!-- END BLOK II -->
						<!-- BLOK III -->
						@include('bumd.blokiii')
						<!-- END BLOK III -->
						BLOK III (Lanjutan 1)
						@include('bumd.blokiii-1')
						<!-- END BLOK III (Lanjutan 1) -->
						<!-- BLOK III (Lanjutan 2) -->
						{{-- @include('bumd.blokiii-2') --}}
						<!-- END BLOK III (Lanjutan 2) -->
						<!-- BLOK III (Lanjutan 3) -->
						{{-- @include('bumd.blokiii-3') --}}
						<!-- END BLOK III (Lanjutan 3) -->
						<!-- BLOK III (Lanjutan 4) -->
						{{-- @include('bumd.blokiii-4') --}}
						<!-- END BLOK III (Lanjutan 4) -->
						<!-- BLOK IV -->
						@include('bumd.blokiv')
						<!-- END BLOK IV -->
						<!-- BLOK V -->
						@include('bumd.blokv')
						<!-- END BLOK V -->
						<!-- BLOK VI -->
						@include('bumd.blokvi')
						<!-- END BLOK VI -->				
							
					{{-- <p class="margin-top-30" align="right">
						<button type="submit" class="btn btn-success" title="Simpan"><span class="sr-only">Simpan</span> <i class="fa fa-save"></i> &nbsp;&nbsp;Simpan</button>
					</p> --}}
				</div>
				</form>
					</div>
		</div>
	</div>
@stop


