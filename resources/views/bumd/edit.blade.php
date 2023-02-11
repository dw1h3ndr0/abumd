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
						<h2 class="heading"><i class="fa fa-square"></i> Sampel Survei Statistik Keuangan Badan Usaha Milik Daerah</h2>
						<form action="{{ asset(route('sampel_bumd.update', ['id'=>$bumd->id], false)) }}" method="post" novalidate>
							{{csrf_field()}}							
							<div class="form-group {{$errors->has('tahun') ? 'has-error' : ''}}">
								<label for="tahun">Tahun</label>
							    <select name="tahun" class="form-control" id="tahun">
							    	<option value="">--- Pilih Tahun ---</option>
							    	<option value="2020" {{ ($tahun == '2020') ? 'selected' : '' }}>2020</option>							    	
							    	<option value="2021" {{ ($tahun == '2021') ? 'selected' : '' }}>2021</option>
							    	<option value="2022" {{ ($tahun == '2022') ? 'selected' : '' }}>2022</option>
							    	<option value="2023" {{ ($tahun == '2023') ? 'selected' : '' }}>2023</option>
							    	<option value="2024" {{ ($tahun == '2024') ? 'selected' : '' }}>2024</option>
							    	<option value="2025" {{ ($tahun == '2025') ? 'selected' : '' }}>2025</option>
							    </select>
							    @if ($errors->has('tahun'))
									<span class="help-block">{{$errors->first('tahun')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r1') ? 'has-error' : ''}}">
								<label for="provinsi">Provinsi</label>
							    <select name="b1r1" class="form-control" id="b1r1">
							    	@foreach($data_provinsi as $provinsi)
							      		<option @if($bumd->b1r1 == $provinsi->kode) selected @endif value="{{ $provinsi->kode }}">{{ $provinsi->provinsi}}</option>
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
							      		<option @if($bumd->b1r2 == $kabupaten->kode) selected @endif value="{{ $kabupaten->kode }}">{{ $kabupaten->kabupaten}}</option>
							      	@endforeach
							    </select>
							    @if ($errors->has('b1r2'))
									<span class="help-block">{{$errors->first('b1r2')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r3') ? 'has-error' : ''}}">
								<label for="perusahaan">Nama Perusahaan</label>
						      	<input class="form-control" type="text" id="b1r3" name="b1r3" value=" {{$errors->any() ? $perusahaan : $perusahaan }}">
							    @if ($errors->has('b1r3'))
									<span class="help-block">{{$errors->first('b1r3')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r4') ? 'has-error' : ''}}">
								<label for="desa">Desa/Nagari</label>
							    <textarea class="form-control" name="b1r4" rows="3">{{$errors->any() ? $alamat : $alamat }}</textarea>
							    @if ($errors->has('b1r4'))
									<span class="help-block">{{$errors->first('b1r4')}}</span>
								@endif
							</div>
							
							<br>
							<button type="submit" class="btn btn-primary">Edit</button>
							<button type="button" class="btn btn-default" onclick="window.location.href = '{{ asset(route('bumd_responden', [], false)) }}'">Batal</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@stop
