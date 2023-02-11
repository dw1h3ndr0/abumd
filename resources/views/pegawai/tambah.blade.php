@extends('layouts.master')

@section('content')
	<div id="main-content">
		<div class="container-fluid">
			<div class="section-heading">
				<h1 class="page-title">Tambah Pengguna</h1>
			</div>
			
			<form action="{{ asset(route('pegawai.create', [], false)) }}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}

				<div class="tab-content content-profile">						
					<div class="tab-pane fade active in">						
						<div class="profile-section">
							<div class="left">	
								<h2 class="profile-heading">Informasi Umum</h2>
							</div>
							<div class="right">	
								<h2 class="profile-heading">Foto Profil</h2>
							</div>
							<div class="clearfix">	
								<!-- LEFT SECTION -->
								<div class="left">
									<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
										<label>Nama Lengkap</label>
										<input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}">
										@if ($errors->has('nama'))
											<span class="help-block">{{$errors->first('nama')}}</span>
										@endif
									</div>
									<div class="form-group {{$errors->has('nip_lama') ? 'has-error' : ''}}">
										<label>NIP Lama</label>
										<input name="nip_lama" type="text" class="form-control" placeholder="NIP Lama" value="{{ old('nip_lama') }}">
										@if ($errors->has('nip_lama'))
											<span class="help-block">{{$errors->first('nip_lama')}}</span>
										@endif
									</div>
									<div class="form-group {{$errors->has('nip_baru') ? 'has-error' : ''}}">
										<label>NIP Baru</label>
										<input name="nip_baru" type="text" class="form-control" placeholder="NIP Baru" value="{{ old('nip_baru') }}">
										@if ($errors->has('nip_baru'))
											<span class="help-block">{{$errors->first('nip_baru')}}</span>
										@endif
									</div>
									<div class="form-group {{$errors->has('jabatan') ? 'has-error' : ''}}">
										<label>Jabatan</label>
										<select name="jabatan" class="form-control">
											<option value="" {{(old('jabatan') == '') ? 'selected' : ''}}>-- Pilih Jabatan --</option>
											<option value="Kepala BPS" {{(old('jabatan') == 'Kepala BPS') ? 'selected' : ''}}>Kepala BPS</option>
											<option value="Kepala Subbagian Tata Usaha" {{(old('jabatan') == 'Kepala Subbagian Tata Usaha') ? 'selected' : ''}}>Kepala Subbagian Tata Usaha</option>
											<option value="	Kepala Seksi Statistik Sosial" {{(old('jabatan') == 'Kepala Seksi Statistik Sosial') ? 'selected' : ''}}>Kepala Seksi Statistik Sosial</option>
											<option value="Kepala Seksi Statistik Produksi" {{(old('jabatan') == 'Kepala Seksi Statistik Produksi') ? 'selected' : ''}}>Kepala Seksi Statistik Produksi</option>
											<option value="Kepala Seksi Statistik Distribusi" {{(old('jabatan') == 'Kepala Seksi Statistik Distribusi') ? 'selected' : ''}}>Kepala Seksi Statistik Distribusi</option>
											<option value="Kepala Seksi IPDS" {{(old('jabatan') == 'Kepala Seksi IPDS') ? 'selected' : ''}}>Kepala Seksi IPDS</option>
											<option value="Staf Subbagian Tata Usaha" {{(old('jabatan') == 'Staf Subbagian Tata Usaha') ? 'selected' : ''}}>Staf Subbagian Tata Usaha</option>
											<option value="	Staf Seksi Statistik Sosial" {{(old('jabatan') == 'Staf Seksi Statistik Sosial') ? 'selected' : ''}}>Staf Seksi Statistik Sosial</option>
											<option value="Staf Seksi Statistik Produksi" {{(old('jabatan') == 'Staf Seksi Statistik Produksi') ? 'selected' : ''}}>Staf Seksi Statistik Produksi</option>
											<option value="Staf Seksi Statistik Distribusi" {{(old('jabatan') == 'Staf Seksi Statistik Distribusi') ? 'selected' : ''}}>Staf Seksi Statistik Distribusi</option>
											<option value="Staf Seksi IPDS" {{(old('jabatan') == 'Staf Seksi IPDS') ? 'selected' : ''}}>Staf Seksi IPDS</option>
											<option value="Statistisi Pertama" {{(old('jabatan') == 'Statistisi Pertama') ? 'selected' : ''}}>Statistisi Pertama</option>
											<option value="Statistisi Muda" {{(old('jabatan') == 'Statistisi Muda') ? 'selected' : ''}}>Statistisi Muda</option>
											<option value="Koordinator Statistik Kecamatan" {{(old('jabatan') == 'Koordinator Statistik Kecamatan') ? 'selected' : ''}}>Koordinator Statistik Kecamatan</option>
										</select>
										@if ($errors->has('jabatan'))
											<span class="help-block">{{$errors->first('jabatan')}}</span>
										@endif
									</div>									
									<div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
										<label>Nomor HP</label>
										<input name="no_hp" type="text" class="form-control" placeholder="Nomor Handphone" value="{{ old('no_hp') }}">
										@if ($errors->has('no_hp'))
											<span class="help-block">{{$errors->first('no_hp')}}</span>
										@endif
									</div>	
									<h2 class="profile-heading">Akun</h2>
									<div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">						
										<label>Level</label>
										<select name="role" class="form-control">
											<option value="" {{(old('role') == '') ? 'selected' : ''}} >-- Pilih Level --</option>
											<option value="admin" {{(old('role') == 'admin') ? 'selected' : ''}} >Admin</option>
											<option value="user" {{(old('role') == 'user') ? 'selected' : ''}} >User</option>
										</select>
										@if ($errors->has('role'))
											<span class="help-block">{{$errors->first('role')}}</span>
										@endif
									</div>
									<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
										<label>Email</label>
										<input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
										@if ($errors->has('email'))
											<span class="help-block">{{$errors->first('email')}}</span>
										@endif
									</div>
									{{-- <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
										<label>Password</label>
										<input name="password" type="password" class="form-control" aria-describedby="passwordHelp" placeholder="Password" value="{{ old('password') }}">
										@if ($errors->has('password'))
											<span class="help-block">{{$errors->first('password')}}</span>
										@endif
									</div> --}}
									<p class="margin-top-30">
										<button type="submit" id="update" class="btn btn-primary">Tambah</button> &nbsp;&nbsp;
										<button type="button" class="btn btn-default" onclick="window.location.href = '{{ asset(route('pegawai', [], false)) }}'">Batal</button>
									</p>							
								</div>
								<!-- END LEFT SECTION -->	

								<!-- RIGHT SECTION -->
								<div class="right">									
									<div class="form-group">	
										<!-- <input type="radio" id="gfoto" name="gambar_foto" >
										<span><i></i>Menggunakan Foto</span>		 -->
		
										<div class="media">
											<div class="media-left">
												<img src="{{asset('images/default.png')}}" class="user-photo media-object" alt="User">
											</div>
											<div class="media-body">
												<p>Upload Foto Anda.
													<br> <em>Ukuran gambar maksimal 140px x 140px</em></p>
												<div class="form-group {{$errors->has('avatar') ? 'has-error' : ''}}">
													<input type="file" name="avatar" id="btn-upload-photo" class="form-control">
													@if ($errors->has('avatar'))
														<span class="help-block">{{$errors->first('avatar')}}</span>
													@endif
												</div>	

											</div>
										</div>
										
											
									</div>
									<div class="form-group">											
										<input type="checkbox" id="gavatar" name="gambar_avatar" >
										<span><i></i>Gunakan Avatar</span>	
										<h4></h4>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/1.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="1" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/2.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="2" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/3.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="3" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/4.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="4" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/5.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="5" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/6.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="6" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/7.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="7" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/8.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="8" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>		
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/9.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="9" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/10.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="10" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/11.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="11" />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>
										<div class="col-md-3 nopad text-center">
										    <label class="image-radio">
										        <img class="img-responsive" src="{{asset('images/default.png')}}" />
										        <input type="radio" name="image_radio" class="img_radio" value="default" checked />
										        <i class="glyphicon glyphicon-ok hidden"></i>
										    </label>
										</div>				
									</div>
								</div>
								<!-- END RIGHT SECTION -->	
							</div>
						</div>						
					</div>
				</div>		
			</form>
		</div>
	</div>
@stop