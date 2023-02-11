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
				<h1 class="page-title text">Keuangan Pemerintah Desa (K-3)</h1>
				<h4 class="page-title text">Tahun {{$k3->tahun}}</h4>
			</div>
			
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="/entri_data/{{$k3->id}}/bloki" role="tab" data-toggle="tab" aria-expanded="true">Blok I</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokii" role="tab" data-toggle="tab" aria-expanded="false">Blok II</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokiii" role="tab" data-toggle="tab" aria-expanded="false">Blok III</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokiii_1" role="tab" data-toggle="tab" aria-expanded="false">Blok III (1)</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokiii_2" role="tab" data-toggle="tab" aria-expanded="false">Blok III (2)</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokiii_3" role="tab" data-toggle="tab" aria-expanded="false">Blok III (3)</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokiii_4" role="tab" data-toggle="tab" aria-expanded="false">Blok III (4)</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokiv" role="tab" data-toggle="tab" aria-expanded="false">Blok IV</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokv" role="tab" data-toggle="tab" aria-expanded="false">Blok V</a></li>
				<li class=""><a href="/entri_data/{{$k3->id}}/blokvi" role="tab" data-toggle="tab" aria-expanded="false">Blok VI</a></li>
			</ul>			
					<div class="tab-content content-profile">
				<form action="/entri_data/{{$k3->id}}/simpan" method="POST" enctype="multipart/form-data">						
				<div>
				{{csrf_field()}}
							
						<!-- BLOK I -->
						@include('k3.bloki')
						<!-- END BLOK I -->
						<!-- BLOK II -->
						@include('k3.blokii')
						<!-- END BLOK II -->
						<!-- BLOK III -->
						@include('k3.blokiii')
						<!-- END BLOK III -->
						<!-- BLOK III (Lanjutan 1) -->
						@include('k3.blokiii-1')
						<!-- END BLOK III (Lanjutan 1) -->
						<!-- BLOK III (Lanjutan 2) -->
						@include('k3.blokiii-2')
						<!-- END BLOK III (Lanjutan 2) -->
						<!-- BLOK III (Lanjutan 3) -->
						@include('k3.blokiii-3')
						<!-- END BLOK III (Lanjutan 3) -->
						<!-- BLOK III (Lanjutan 4) -->
						@include('k3.blokiii-4')
						<!-- END BLOK III (Lanjutan 4) -->
						<!-- BLOK IV -->
						@include('k3.blokiv')
						<!-- END BLOK IV -->
						<!-- BLOK V -->
						@include('k3.blokv')
						<!-- END BLOK V -->
						<!-- BLOK VI -->
						@include('k3.blokvi')
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


