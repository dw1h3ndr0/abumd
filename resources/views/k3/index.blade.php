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
				<h1 class="page-title">Daftar Sampel Keuangan Pemerintah Desa</h1>
			</div>
			<div class="row">
				<div class="col-md-12">					
					<!-- TABLE HOVER -->
					<div class="panel">
						<form action="{{ asset(route('daftar_sampel.tambah', [], false)) }}{{-- /daftar_sampel/tambah --}}" method="post" novalidate>
							<div class="panel-content">
								<div class="col-md-6 profile-section">						
									<label>Pilih Periode Sampel</label>
									
									{{csrf_field()}}
									<div class="form-group">
										{{-- <label for="tahun">Pilih Periode Sampel</label> --}}
									    <select id="tahun_sampel_k3" name="tahun" class="form-control" id="tahun">
									      <option value="">--- periode ---</option>
									      <option @if($tahun == '2016') selected @endif value="2016">2016</option>
									      <option @if($tahun == '2017') selected @endif value="2017">2017</option>
									      <option @if($tahun == '2018') selected @endif value="2018">2018</option>
									      <option @if($tahun == '2019') selected @endif value="2019">2019</option>
									      <option @if($tahun == '2020') selected @endif value="2020">2020</option>
									    </select>
									</div>
								</div>
							{{-- </div>
							<div class="panel-content"> --}}
								<div class="panel-body">									
									@if(auth()->user()->role == 'admin')
									<div class="navbar-right">								
										<button type="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i><span>Tambah Sampel</span></button>
									</div>								
								</div>
								@endif
								<div class="panel-body">
									<table  @if($tahun == null) style="display:none" @endif id="daftar_sampel_k3" class="table table-hover">
										<thead>
											<tr>
												<th>PROVINSI</th>
												<th>KABUPATEN/KOTA</th>
												<th>KECAMATAN</th>
												<th>DESA/NAGARI</th>		
												<th class="text-center">AKSI</th>
											</tr>
										</thead>
										<tbody id="body_daftar_sampel_k3">
											@foreach($daftar_sampel as $k3)
											<tr>
												<td>[{{ $k3->b1r1 }}] {{$daftar_nama_provinsi[$loop->index]}}</td>
												<td>[{{ $k3->b1r2 }}] {{$daftar_nama_kabupaten[$loop->index]}}</td>
												<td>[{{ $k3->b1r3 }}] {{$daftar_nama_kecamatan[$loop->index]}}</td>
												<td>[{{ $k3->b1r4 }}] {{$daftar_nama_desa[$loop->index]}}</td>
												<td  class="text-center">
													@if(auth()->user()->role == 'admin')
													<a href="{{ asset(route('daftar_sampel.edit', ['id'=>$k3->id], false)) }}{{-- /daftar_sampel/{{$k3->id}}/edit --}}" class="btn btn-warning btn-xs" title="edit"><i class="fa fa-edit"></i>Edit</a>
													<a href="{{ asset(route('daftar_sampel.delete', ['id'=>$k3->id], false)) }}{{-- /daftar_sampel/{{$k3->id}}/delete --}}" class="btn btn-danger btn-xs" title="hapus" onclick="return confirm('Yakin mau dihapus?')"><span class="lnr lnr-trash"></span>Hapus</a>
													@endif
													<a href="{{ asset(route('entri_data.bloki', ['id'=>$k3->id], false)) }}{{-- /entri_data/{{$k3->id}}/bloki --}}" class="btn btn-success btn-xs " title="entri"><span class="lnr lnr-laptop-phone"></span>Entri</a>
													<a href="{{ asset(route('entri_data.cetak_pdf', ['id'=>$k3->id], false)) }}{{-- /entri_data/{{$k3->id}}/cetak_pdf --}}" class="btn btn-primary btn-xs " title="print PDF"><span class="lnr lnr-printer"></span>PDF</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop


{{-- {{ dd($data_siswa) }} --}}