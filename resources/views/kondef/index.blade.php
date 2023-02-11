@extends('layouts.master')

@section('content')

<div id="main-content">
	<div class="container-fluid">
		{{-- <div class="panel"> --}}
			<div class="section-heading">
				<h1 class="page-title">Konsep dan Definisi</h1>
			</div>
			<div class="row">				
				<div class="col-md-6">
					<div class="panel-content">
						<h2 class="heading"><i class="fa fa-square"></i> PENGENALAN TEMPAT</h2>
						<div class="panel-group" id="accordion">
							@foreach($daftar_kondef_flag_1 as $kondef)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$kondef->id}}" class="collapsed">{{$kondef->rincian}} <i class="fa fa-angle-down right icon-collapsed"></i><i class="fa fa-angle-up right icon-expanded"></i></a>
									</h4>
								</div>
								<div id="collapse{{$kondef->id}}" class="panel-collapse collapse">
									<div class="panel-body">{{$kondef->keterangan}}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="panel-content">
						<h2 class="heading"><i class="fa fa-square"></i> KETERANGAN UMUM DAN SUMBER DAYA</h2>
						<div class="panel-group" id="accordion">
							@foreach($daftar_kondef_flag_2 as $kondef)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$kondef->id}}" class="collapsed">{{$kondef->rincian}} <i class="fa fa-angle-down right icon-collapsed"></i><i class="fa fa-angle-up right icon-expanded"></i></a>
									</h4>
								</div>
								<div id="collapse{{$kondef->id}}" class="panel-collapse collapse">
									<div class="panel-body">{{$kondef->keterangan}}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-content">
						<h2 class="heading"><i class="fa fa-square"></i> REALISASI PENDAPATAN PEMERINTAH</h2>
						<div class="panel-group" id="accordion">
							@foreach($daftar_kondef_flag_3 as $kondef)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$kondef->id}}" class="collapsed">{{$kondef->rincian}} <i class="fa fa-angle-down right icon-collapsed"></i><i class="fa fa-angle-up right icon-expanded"></i></a>
									</h4>
								</div>
								<div id="collapse{{$kondef->id}}" class="panel-collapse collapse">
									<div class="panel-body">{{$kondef->keterangan}}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="panel-content">
						<h2 class="heading"><i class="fa fa-square"></i> REALISASI BELANJA PEMERINTAH</h2>
						<div class="panel-group" id="accordion">
							@foreach($daftar_kondef_flag_4 as $kondef)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$kondef->id}}" class="collapsed">{{$kondef->rincian}} <i class="fa fa-angle-down right icon-collapsed"></i><i class="fa fa-angle-up right icon-expanded"></i></a>
									</h4>
								</div>
								<div id="collapse{{$kondef->id}}" class="panel-collapse collapse">
									<div class="panel-body">{{$kondef->keterangan}}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		{{-- </div> --}}


		{{-- @foreach($daftar_kondef as $x)
			<button type="button" class="btn btn-sm btn-default" data-toggle="popover" data-trigger="hover" title="{{ $x->rincian }}" data-content="{{ $x->keterangan }}">!</button>
		@endforeach --}}
							
	</div>
</div>

@stop