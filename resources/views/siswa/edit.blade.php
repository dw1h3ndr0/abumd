@extends('layouts.master')

@section('content')
	<div id="main-content" style="min-height: 613px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h2 class="panel-title">Edit Siswa</h2>
						</div>
						<div class="panel-body">
							<form action="/siswa/{{$siswa->id}}/update" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Depan</label>
							    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Belakang</label>
							    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
							  </div>
							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
							    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
							      <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
							      <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
							    </select>
							  </div>
							 
							 <label for="exampleRadios">Agama</label>
							 <div class="form-check">
							 	<div class="row">
							 		<div class="col-md-4">
									  <input name="agama" class="form-check-input" type="radio" id="exampleRadios1" value="Islam" @if($siswa->agama == 'Islam') checked @endif>
									  <label class="form-check-label" for="exampleRadios1">
									    Islam
									  </label>	
								  	</div>
								  	<div class="col-md-4">
									  <input name="agama" class="form-check-input" type="radio" id="exampleRadios2" value="Kristen" @if($siswa->agama == 'Kristen') checked @endif>
									  <label class="form-check-label" for="exampleRadios2">
									    Kristen
									  </label>	
								  	</div>
									<div class="col-md-4">
									  <input name="agama" class="form-check-input" type="radio" id="exampleRadios3" value="Katolik" @if($siswa->agama == 'Katolik') checked @endif>
									  <label class="form-check-label" for="exampleRadios3">
									    Katolik
									  </label>	
								  	</div>
									<div class="col-md-4">
									  <input name="agama" class="form-check-input" type="radio" id="exampleRadios4" value="Hindu" @if($siswa->agama == 'Hindu') checked @endif>
									  <label class="form-check-label" for="exampleRadios4">
									    Hindu
									  </label>	
								  	</div>
									<div class="col-md-4">
									  <input name="agama" class="form-check-input" type="radio" id="exampleRadios5" value="Budha" @if($siswa->agama == 'Budha') checked @endif>
									  <label class="form-check-label" for="exampleRadios5">
									    Budha
									  </label>	
								  	</div>

							 	</div>  
							  </div>
							  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Alamat</label>
							    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
							  </div>
							  <div class="form-group form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
							    <label class="form-check-label" for="exampleCheck1">Contoh Check Box</label>
							  </div>
							  <div class="modal-footer">
						        <a href="/siswa" class="btn btn-danger">Batal</a>
							  	<button type="submit" class="btn btn-primary btn-warning">Update</button>
						      </div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop

@section('content1')
		<div class="container">
			<h1>Edit Data Siswa</h1>
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}} 
			</div>
			@endif
			<div class="row">
				<div class="col-12">					
				<form action="/siswa/{{$siswa->id}}/update" method="POST">
	        	{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Depan</label>
				    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Belakang</label>
				    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
				    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
				      <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
				      <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
				    </select>
				  </div>
				 
				 <label for="exampleRadios">Agama</label>
				 <div class="form-check">
				 	<div class="row">
				 		<div class="col-4">
						  <input name="agama" class="form-check-input" type="radio" id="exampleRadios1" value="Islam" @if($siswa->agama == 'Islam') checked @endif>
						  <label class="form-check-label" for="exampleRadios1">
						    Islam
						  </label>	
					  	</div>
					  	<div class="col-4">
						  <input name="agama" class="form-check-input" type="radio" id="exampleRadios2" value="Kristen" @if($siswa->agama == 'Kristen') checked @endif>
						  <label class="form-check-label" for="exampleRadios2">
						    Kristen
						  </label>	
					  	</div>
						<div class="col-4">
						  <input name="agama" class="form-check-input" type="radio" id="exampleRadios3" value="Katolik" @if($siswa->agama == 'Katolik') checked @endif>
						  <label class="form-check-label" for="exampleRadios3">
						    Katolik
						  </label>	
					  	</div>
						<div class="col-4">
						  <input name="agama" class="form-check-input" type="radio" id="exampleRadios4" value="Hindu" @if($siswa->agama == 'Hindu') checked @endif>
						  <label class="form-check-label" for="exampleRadios4">
						    Hindu
						  </label>	
					  	</div>
						<div class="col-4">
						  <input name="agama" class="form-check-input" type="radio" id="exampleRadios5" value="Budha" @if($siswa->agama == 'Budha') checked @endif>
						  <label class="form-check-label" for="exampleRadios5">
						    Budha
						  </label>	
					  	</div>

				 	</div>  
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Alamat</label>
				    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Contoh Check Box</label>
				  </div>
				  <div class="modal-footer">
			        <a href="/siswa" class="btn btn-danger">Batal</a>
				  	<button type="submit" class="btn btn-primary btn-warning">Update</button>
			      </div>
				</form>		
				</div>
			</div>			
		</div>	

<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        
	      </div>
	      
	    </div>
	  </div>
	</div>
@endsection
	

{{-- {{ dd($data_siswa) }} --}}