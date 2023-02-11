@extends('layouts.master')

@section('content')

	<div id="main-content">
		<div class="container-fluid">
			<div class="section-heading">
				<h1 class="page-title">Edit Sampel</h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel-content">
						<h2 class="heading"><i class="fa fa-square"></i> Sampel Survei Statistik Keuangan Pemerintah Desa/Nagari</h2>
						<form action="{{ asset(route('daftar_sampel.update', ['id'=>$k3->id], false)) }}{{-- /daftar_sampel/{{$k3->id}}/update --}}" method="post" novalidate>
							{{csrf_field()}}							
							<div class="form-group">
								<label for="tahun">Tahun</label>
							    <input class="form-control" type="text" name="tahun" value=" {{$k3->tahun}}" readonly="">
							</div>
							<div class="form-group {{$errors->has('b1r1') ? 'has-error' : ''}}">
								<label for="provinsi">Provinsi</label>
							    <select name="b1r1" class="form-control" id="b1r1">
							    	@foreach($data_provinsi as $provinsi)
							      		<option @if($k3->b1r1 == $provinsi->kode) selected @endif value="{{ $provinsi->kode }}">{{ $provinsi->provinsi}}</option>
							      	@endforeach
							    </select>
							    @if ($errors->has('b1r1'))
									<span class="help-block">{{$errors->first('b1r1')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r2') ? 'has-error' : ''}}">
								<label for="kabupaten">Kabupaten/Kota</label>
							    <select name="b1r2" class="form-control" id="b1r2">
							      	@foreach($data_kabupaten as $kabupaten)
							      		<option @if($k3->b1r2 == $kabupaten->kode) selected @endif value="{{ $kabupaten->kode }}">{{ $kabupaten->kabupaten}}</option>
							      	@endforeach
							    </select>
							    @if ($errors->has('b1r2'))
									<span class="help-block">{{$errors->first('b1r2')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r3') ? 'has-error' : ''}}">
								<label for="kecamatan">Kecamatan</label>
							    <select name="b1r3" class="form-control" id="b1r3">
							      	@foreach($data_kecamatan as $kecamatan)
							      		<option @if($k3->b1r3 == $kecamatan->kode) selected @endif value="{{ $kecamatan->kode }}">{{ $kecamatan->kecamatan}}</option>
							      	@endforeach
							    </select>
							    @if ($errors->has('b1r3'))
									<span class="help-block">{{$errors->first('b1r3')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r4') ? 'has-error' : ''}}">
								<label for="desa">Desa/Nagari</label>
							    <select name="b1r4" class="form-control" id="b1r4">
							       	@foreach($data_desa as $desa)
							      		<option @if($k3->b1r4 == $desa->kode) selected @endif value="{{ $desa->kode }}">{{ $desa->desa}}</option>
							      	@endforeach
							    </select>
							    @if ($errors->has('b1r4'))
									<span class="help-block">{{$errors->first('b1r4')}}</span>
								@endif
							</div>
							
							<br>
							<button type="submit" class="btn btn-primary">Edit</button>
							<button type="button" class="btn btn-default" onclick="window.location.href = '{{ asset(route('k3', [], false)) }}'">Batal</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@stop
