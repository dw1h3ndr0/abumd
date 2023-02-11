@extends('layouts.master')

@section('content')
	<div id="main-content">
		<div class="container-fluid">
		{{-- <div class="center"> --}}
			<div class="vertical-align-middle">
				<h1>
					<span class="clearfix title">
						<span class="number left">Hai!</span> <span class="text"> {{Auth::user()->name}} <br/>Ini Tampilan Dashboard Sementara</span>
					</span>
				</h1>
				<p>Halaman yang Anda cari masih dalam tahap pengembangan, silahkan pilih menu lainya.</p>
				{{-- <div class="margin-top-30">
					<a href="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> <span>Kembali</span></a>
					<a href="index.html" class="btn btn-primary"><i class="fa fa-home"></i> <span>Home</span></a>
				</div> --}}
			</div>
		{{-- </div> --}}
		</div>
	</div>
@stop