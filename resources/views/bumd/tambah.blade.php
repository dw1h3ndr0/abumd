@extends('layouts.master')

@section('content')

	<div id="main-content">
		<div class="container-fluid">
			<div class="section-heading">
				<h1 class="page-title">Tambah Sampel</h1>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="panel-content">
						<h2 class="heading"><i class="fa fa-square"></i> Sampel Survei Statistik Keuangan Badan Usaha Milik Daerah</h2>
						<form action="{{ asset(route('sampel_bumd.create', [], false)) }}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('tahun') ? 'has-error' : ''}}">
								<label for="tahun">Tahun</label>
							    <select name="tahun" class="form-control" id="tahun">
							    	<option value="">--- Pilih Tahun ---</option>
							    	<option value="2020">2020</option>							    	
							    	<option value="2021">2021</option>
							    	<option value="2022">2022</option>
							    	<option value="2023">2023</option>
							    	<option value="2024">2024</option>
							    	<option value="2025">2025</option>
							    </select>
							    @if ($errors->has('tahun'))
									<span class="help-block">{{$errors->first('tahun')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r1') ? 'has-error' : ''}}">
								<label for="provinsi">Provinsi</label>
							    <select name="b1r1" class="form-control" id="b1r1">
							      	<option value="">--- Pilih Provinsi ---</option>
							      	@foreach($data_provinsi as $provinsi)
							      		<option value="{{ $provinsi->kode }}">[{{$provinsi->kode}}] {{ $provinsi->provinsi}}</option>
							      	@endforeach
							    </select>
							    @if ($errors->has('b1r1'))
									<span class="help-block">{{$errors->first('b1r1')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r2') ? 'has-error' : ''}}">
								<label for="kabupaten">Kabupaten/Kota</label>
							    <select name="b1r2" class="form-control" id="b1r2">
							      		{{-- <option value="">--- Pilih Kabupaten ---</option>
							      	@foreach($data_kabupaten as $kabupaten)
							      		<option value="{{ $kabupaten->kode }}">{{ $kabupaten->kabupaten}}</option>
							      	@endforeach --}}
							    </select>
							    @if ($errors->has('b1r2'))
									<span class="help-block">{{$errors->first('b1r2')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r3') ? 'has-error' : ''}}">
								<label for="perusahaan">Nama Perusahaan</label>
							    <input class="form-control" type="text" id="b1r3" name="b1r3" value=" {{$errors->any() ? old('b1r3') : $b1r3 ?? ''}}">
							    {{-- <select name="b1r3" class="form-control" id="b1r3">
							      		<option value="">--- Pilih Kecamatan ---</option>
							      	@foreach($data_kecamatan as $kecamatan)
							      		<option value="{{ $kecamatan->kode }}">{{ $kecamatan->kecamatan}}</option>
							      	@endforeach
							    </select> --}}

							    @if ($errors->has('b1r3'))
									<span class="help-block">{{$errors->first('b1r3')}}</span>
								@endif
							</div>
							<div class="form-group {{$errors->has('b1r4') ? 'has-error' : ''}}">
								<label for="alamat">Alamat</label>
							    <textarea class="form-control" name="b1r4" rows="3">{{$errors->any() ? old('b1r4') : $b1r4 ?? ''}}</textarea> 
							    {{-- <select name="b1r4" class="form-control" id="b1r4">
							      		<option value="">--- Pilih Desa ---</option>
							      	@foreach($data_desa as $desa)
							      		<option value="{{ $desa->kode }}">{{ $desa->desa}}</option>
							      	@endforeach
							    </select> --}}
							    @if ($errors->has('b1r4'))
									<span class="help-block">{{$errors->first('b1r4')}}</span>
								@endif
							</div>
							
							<br>
							<button type="submit" class="btn btn-primary">Tambah</button>
							<button type="button" class="btn btn-default" onclick="window.location.href = '{{ asset(route('bumd_responden', [], false)) }}'">Batal</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection


@push('scripts')
<script>

	base_url="{{asset('')}}";	

		/**** JQuery Dinamic Dropdown Pilih Wilayah *******/

		$(document).ready(function() {
			$('select[name="b1r1"]').on('change', function() {
    		 	
    		 	var kode_provinsi = $(this).val();
    		 	
    		 	if(kode_provinsi) {

    		 		$.ajax({

    		 			url: base_url+'provinsi/'+kode_provinsi,
    		 			type: 'GET',
    		 			dataType: 'json',
    		 			success: function(data){
    		 				// console.log(data)
    		 				$('select[name="b1r2"]').empty();
    		 				// $('select[name="kecamatan"]').empty();
    		 				// $('select[name="desa"]').empty();
    		 				$('select[name="b1r2"]').append('<option value="">--- Pilih Kabupaten ---</option>');
    		 				$.each(data, function(key, value) {
			                    $('select[name="b1r2"]').append('<option value="'+ key +'">'+'['+key+'] '+ value +'</option>');
			                 });
    		 			}
    		 		});
    		 	}else{
    		 		$('select[name="b1r2"]').empty();
    		 	}
    		});	

		});
</script>
@endpush