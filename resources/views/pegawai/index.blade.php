@extends('layouts.master')

@section('content')
	<div id="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					@if(session('sukses'))
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							<i class="fa fa-check-circle"></i> {{session('sukses')}}
						</div>
					@endif
					<!-- TABLE HOVER -->
					{{-- <div class="panel"> --}}
						<div class="panel-heading">
							<h1 class="page-title">Data Pengguna</h1>
						</div>
						<div class="panel-body">
							@if(auth()->user()->role == 'admin')
							<div class="navbar-right">
								<a href="{{ asset(route('pegawai.tambah', [], false)) }}" class="btn btn-primary ">
									<i class="fa fa-plus-square"></i><span>Tambah Pengguna</span>
								</a>
							</div>
							@endif							
						</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>NAMA</th>
										<th>NIP LAMA</th>
										<th>NIP BARU</th>
										<th>JABATAN</th>
										<th>EMAIL</th>		
										<th>NO HP</th>
										<th class="text-center">AKSI</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data_pegawai as $pegawai)
									<tr>
										<td><a href="{{ asset(route('pegawai.profile', ['id'=> $pegawai->id], false)) }}">{{ $pegawai->nama }}</a></td>
										<td>{{ $pegawai->nip_lama }}</td>
										<td>{{ $pegawai->nip_baru }}</td>
										<td>{{ $pegawai->jabatan }}</td>
										<td>{{ $pegawai->email }}</td>
										<td>{{ $pegawai->no_hp }}</td>
										<td class="text-center">
											<a href="{{ asset(route('pegawai.profile', ['id'=> $pegawai->id], false)) }}" class="fa fa-eye" title="lihat"></a>
											
											@if(auth()->user()->role == 'admin')
											<a href="{{ asset(route('pegawai.edit', ['id'=> $pegawai->id], false)) }}" class="fa fa-edit" title="edit"></a>
											<a href="{{ asset(route('pegawai.delete', ['id'=> $pegawai->id], false)) }}" class="fa fa-trash" title="hapus" onclick="return confirm('Yakin mau dihapus?')"></a>
											@endif
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					{{-- </div> --}}
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">Tambah pegawai</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="{{ asset(route('pegawai.tambah', [], false)) }}" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Lengkap</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">NIP Lama</label>
			    <input name="nip_lama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIP Lama">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
			    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			      <option value="L">Laki-Laki</option>
			      <option value="P">Perempuan</option>
			    </select>
			  </div>
			 
			 <label for="exampleRadios">Agama</label>
			 <div class="form-check">
			 	<div class="row">
			 		<div class="col-md-2">
					  <input name="agama" class="form-check-input" type="radio" id="exampleRadios1" value="Islam" checked>
					  <label class="form-check-label" for="exampleRadios1">
					    Islam
					  </label>	
				  	</div>
				  	<div class="col-md-2">
					  <input name="agama" class="form-check-input" type="radio" id="exampleRadios2" value="Kristen">
					  <label class="form-check-label" for="exampleRadios2">
					    Kristen
					  </label>	
				  	</div>
					<div class="col-md-2">
					  <input name="agama" class="form-check-input" type="radio" id="exampleRadios3" value="Katolik">
					  <label class="form-check-label" for="exampleRadios3">
					    Katolik
					  </label>	
				  	</div>
					<div class="col-md-2">
					  <input name="agama" class="form-check-input" type="radio" id="exampleRadios4" value="Hindu">
					  <label class="form-check-label" for="exampleRadios4">
					    Hindu
					  </label>	
				  	</div>
					<div class="col-md-2">
					  <input name="agama" class="form-check-input" type="radio" id="exampleRadios5" value="Budha">
					  <label class="form-check-label" for="exampleRadios5">
					    Budha
					  </label>	
				  	</div>

			 	</div>  
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Alamat</label>
			    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Contoh Check Box</label>
			  </div>
			  <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  	<button type="submit" class="btn btn-primary">Submit</button>
		      </div>
			</form>
	      </div>
	      
	    </div>
	  </div>
	</div>
@stop


{{-- {{ dd($data_pegawai) }} --}}