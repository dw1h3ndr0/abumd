@extends('layouts.master')

@section('content')
	<div id="main-content" style="min-height: 613px;">
		<div class="container-fluid">
			@if(session('sukses'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<i class="fa fa-check-circle"></i> {{session('sukses')}}
				</div>
			@endif
			<div class="section-heading">
				<h1 class="page-title">Entri Sampel</h1>
			</div>
			<div class="row">
				<div class="col-md-12">					
					<!-- TABLE HOVER -->
					<div class="panel">
						{{-- <form action="{{ asset(route('sampel_bumd.tambah', [], false)) }}" method="post" novalidate> --}}
							<div class="panel-content">
								<div class="col-md-6 profile-section">						
									<label>Pilih Periode Sampel</label>
									
									{{csrf_field()}}
									<div class="form-group">
									    <select id="tahun_sampel_bumd" name="tahun" class="form-control" id="tahun">
									      <option value="" selected>--- Pilih Periode ---</option>
									      {{-- @for ($i = 0; $i < count($daftar_tahun); $i++)
											    <option value="{{ $daftar_tahun[$i]['tahun'] }}" {{ ($tahun == $daftar_tahun[$i]['tahun']) ? 'selected' : '' }}>{{$daftar_tahun[$i]['tahun']}}</option>
										  @endfor --}}

										  @foreach($daftar_tahun as $year)
										  	<option value="{{ $daftar_tahun[$loop->index]['tahun'] }}" {{ ($tahun == $daftar_tahun[$loop->index]['tahun']) ? 'selected' : '' }}>{{$daftar_tahun[$loop->index]['tahun']}}</option>
										  @endforeach
									    </select>
									</div>
								</div>
							</div>
							<div class="panel-content">								
								<div class="panel-body">
									<table  @if($tahun == null) style="display:none" @endif id="daftar_sampel_bumd" class="table table-hover">
										<thead>
											<tr>
												<th>PROVINSI</th>
												<th>KABUPATEN/KOTA</th>
												<th>NAMA PERUSAHAAN</th>
												<th>ALAMAT</th>		
												<th class="text-center">AKSI</th>
											</tr>
										</thead>
										<tbody id="body_daftar_sampel_bumd">
											@foreach($daftar_sampel as $bumd)
											<tr>
												<td>[{{ $bumd->b1r1 }}] {{$daftar_nama_provinsi[$loop->index]}}</td>
												<td>[{{ $bumd->b1r2 }}] {{$daftar_nama_kabupaten[$loop->index]}}</td>
												<td>{{ $bumd->b1r3 }}</td>
												<td>{{ $bumd->b1r4 }}</td>
												<td  class="text-center">
													<a href="{{ asset(route('entri_bumd.bloki', ['id'=>$bumd->id], false)) }}" class="btn btn-success btn-xs " title="entri"><span class="lnr lnr-laptop-phone"></span>Entri</a>
													{{-- <a href="{{ asset(route('entri_data.cetak_pdf', ['id'=>$bumd->id], false)) }}" class="btn btn-primary btn-xs " title="print PDF"><span class="lnr lnr-printer"></span>PDF</a> --}}
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						{{-- </form> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
<script>

	base_url="{{asset('')}}";	

	/**** JQuery Pilih Tahun Daftar Sampel *******/
		$(document).ready(function() {
			
			// $('#daftar_sampel_bumd').DataTable(); 

			 $("#tahun_sampel_bumd").change(function(){
				// $('select[name="tahun"]').on('change', function(){
				var tahun = $(this).val();
				var x = document.getElementById("daftar_sampel_bumd");
				var url = base_url+'sampel_bumd/'+tahun;
				//console.log(url);
				if(tahun){
					console.log(tahun)
					x.style.display = "block";
					window.location = url;
				}else{
					var x = document.getElementById("daftar_sampel_bumd");
					x.style.display = "none";
				}
			});
		});
</script>
@endpush


{{-- {{ dd($data_siswa) }} --}}