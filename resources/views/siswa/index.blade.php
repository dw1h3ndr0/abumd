@extends('layouts.master')

@section('content')
	<div id="main-content" style="min-height: 613px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- TABLE HOVER -->
					<div class="panel">
							<div class="panel-heading">
								<h3 class="page-title">Data Siswa</h3>
								<div class="navbar-right">
									<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
										<i class="fa fa-plus-square"></i>
									  	<span>Tambah Data Siswa</span>
									</button>
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>NAMA DEPAN</th>
											<th>NAMA BELAKANG</th>
											<th>JENIS KELAMIN</th>
											<th>AGAMA</th>
											<th>ALAMAT</th>		
											<th>AKSI</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data_siswa as $siswa)
										<tr>
											<td><a href="/siswa/{{$siswa->id}}/profile">{{ $siswa->nama_depan }}</a></td>
											<td><a href="/siswa/{{$siswa->id}}/profile">{{ $siswa->nama_belakang }}</a></td>
											<td>{{ $siswa->jenis_kelamin }}</td>
											<td>{{ $siswa->agama }}</td>
											<td>{{ $siswa->alamat }}</td>
											<td><a href="/siswa/{{$siswa->id}}/profile" class="fa fa-edit" title="edit"></a>
												<a href="/siswa/{{$siswa->id}}/delete" class="fa fa-trash" title="hapus" onclick="return confirm('Yakin mau dihapus?')"></a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">Tambah Siswa</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/siswa/create" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Depan</label>
			    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Belakang</label>
			    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
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


{{-- {{ dd($data_siswa) }} --}}