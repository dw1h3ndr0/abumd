@extends('layouts.master')

@section('content')
<div id="main-content">
	<div class="container-fluid">
		<div class="section-heading">
			<h1 class="page-title">Edit Pengguna</h1>
		</div>

		<form action="{{ asset(route('pegawai.update', ['id'=>$pegawai->id], false)) }}" method="POST" enctype="multipart/form-data">
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
									<input name="nama" type="text" class="form-control {{$errors->has('nama') ? 'has-error' : ''}}" placeholder="Nama Lengkap" value="{{$errors->any() ? old('nama') : $pegawai->nama}}">
									@if ($errors->has('nama'))
										<span class="help-block">{{$errors->first('nama')}}</span>
									@endif
								</div>
								<div class="form-group {{$errors->has('nip_lama') ? 'has-error' : ''}}">
									<label>NIP Lama</label>
									<input name="nip_lama" type="text" class="form-control" placeholder="NIP Lama" value="{{$errors->any() ? old('nip_lama') : $pegawai->nip_lama}}">
									@if ($errors->has('nip_lama'))
										<span class="help-block">{{$errors->first('nip_lama')}}</span>
									@endif
								</div>
								<div class="form-group {{$errors->has('nip_baru') ? 'has-error' : ''}}">
									<label>NIP Baru</label>
									<input name="nip_baru" type="text" class="form-control" placeholder="NIP Baru" value="{{$errors->any() ? old('nip_baru') : $pegawai->nip_baru}}">
									@if ($errors->has('nip_baru'))
										<span class="help-block">{{$errors->first('nip_baru')}}</span>
									@endif
								</div>
								<div class="form-group {{$errors->has('jabatan') ? 'has-error' : ''}}">
									<label>Jabatan</label>
									<select name="jabatan" class="form-control">
										<option value="">-- Pilih Jabatan --</option>
										<option value="Kepala BPS" @if($pegawai->jabatan == 'Kepala BPS') selected @endif>Laki-Laki</option>>Kepala BPS</option>
										<option value="Kepala Subbagian Tata Usaha" @if($pegawai->jabatan == 'Kepala Subbagian Tata Usaha') selected @endif>Kepala Subbagian Tata Usaha</option>
										<option value="	Kepala Seksi Statistik Sosial" @if($pegawai->jabatan == 'Kepala Seksi Statistik Sosial') selected @endif>Kepala Seksi Statistik Sosial</option>
										<option value="Kepala Seksi Statistik Produksi" @if($pegawai->jabatan == 'Kepala Seksi Statistik Produksi') selected @endif>Kepala Seksi Statistik Produksi</option>
										<option value="Kepala Seksi Statistik Distribusi" @if($pegawai->jabatan == 'Kepala Seksi Statistik Distribusi') selected @endif>Kepala Seksi Statistik Distribusi</option>
										<option value="Kepala Seksi IPDS" @if($pegawai->jabatan == 'Kepala Seksi IPDS') selected @endif>Kepala Seksi IPDS</option>
										<option value="Staf Subbagian Tata Usaha" @if($pegawai->jabatan == 'Staf Subbagian Tata Usaha') selected @endif>Staf Subbagian Tata Usaha</option>
										<option value="	Staf Seksi Statistik Sosial" @if($pegawai->jabatan == 'Staf Seksi Statistik Sosial') selected @endif>Staf Seksi Statistik Sosial</option>
										<option value="Staf Seksi Statistik Produksi" @if($pegawai->jabatan == 'Staf Seksi Statistik Produksi') selected @endif>Staf Seksi Statistik Produksi</option>
										<option value="Staf Seksi Statistik Distribusi" @if($pegawai->jabatan == 'Staf Seksi Statistik Distribusi') selected @endif>Staf Seksi Statistik Distribusi</option>
										<option value="Staf Seksi IPDS" @if($pegawai->jabatan == 'Staf Seksi IPDS') selected @endif>Staf Seksi IPDS</option>
										<option value="Statistisi Pertama" @if($pegawai->jabatan == 'Statistisi Pertama') selected @endif>Statistisi Pertama</option>
										<option value="Statistisi Muda" @if($pegawai->jabatan == 'Statistisi Muda') selected @endif>Statistisi Muda</option>
										<option value="Koordinator Statistik Kecamatan" @if($pegawai->jabatan == 'Koordinator Statistik Kecamatan') selected @endif>Koordinator Statistik Kecamatan</option>
									</select>
									@if ($errors->has('jabatan'))
										<span class="help-block">{{$errors->first('jabatan')}}</span>
									@endif
								</div>
								<div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
									<label>Nomor HP</label>
									<input name="no_hp" type="text" class="form-control" placeholder="Nomor Handphone" value="{{$errors->any() ? old('no_hp') : $pegawai->no_hp}}">
									@if ($errors->has('no_hp'))
										<span class="help-block">{{$errors->first('no_hp')}}</span>
									@endif
								</div>
								<h2 class="profile-heading">Akun</h2>

								@if(auth()->user()->role == 'admin')
								<div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">	<label>Level</label>
									<select name="role" class="form-control">
										<option value="" selected>-- Pilih Level --</option>
										<option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
										<option value="user" @if($user->role == 'user') selected @endif>User</option>
									</select>
									@if ($errors->has('role'))
										<span class="help-block">{{$errors->first('role')}}</span>
									@endif
								</div>
								@endif

								<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
									<label>Email</label>
									<input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" value="{{$errors->any() ? old('email') : $pegawai->email}}">
									@if ($errors->has('email'))
										<span class="help-block">{{$errors->first('email')}}</span>
									@endif
								</div>

								<div class="form-group">
									<label>Password</label>
									<button type="button" class="btn btn-default form-control" onclick="window.location.href = '{{ asset(route('change.password.get', ['id'=>$pegawai->id], false)) }}'"{{-- data-toggle="modal" data-target="#ganti-password" --}}>Ganti Password</button>
								</div>

								<p class="margin-top-30">
									<button type="submit" id="update" class="btn btn-primary">Update</button> &nbsp;&nbsp;
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
											<img src="{{$pegawai->getAvatar()}}" class="user-photo media-object" alt="User">
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
									        <input type="radio" name="image_radio" class="img_radio" value="1" @if($pegawai->avatar == '1.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/2.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="2" @if($pegawai->avatar == '2.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/3.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="3" @if($pegawai->avatar == '3.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/4.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="4" @if($pegawai->avatar == '4.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/5.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="5" @if($pegawai->avatar == '5.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/6.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="6" @if($pegawai->avatar == '6.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/7.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="7" @if($pegawai->avatar == '7.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/8.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="8" @if($pegawai->avatar == '8.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/9.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="9" @if($pegawai->avatar == '9.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/10.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="10" @if($pegawai->avatar == '10.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/11.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="11" @if($pegawai->avatar == '11.png') checked @endif/>
									        <i class="glyphicon glyphicon-ok hidden"></i>
									    </label>
									</div>
									<div class="col-md-3 nopad text-center">
									    <label class="image-radio">
									        <img class="img-responsive" src="{{asset('images/default.png')}}" />
									        <input type="radio" name="image_radio" class="img_radio" value="default" @if($pegawai->avatar == 'default.png') checked @endif />
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


<div id="ganti-password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Ganti password {{$pegawai->nama}}</h4>
			</div>

		    <form method="POST" action="{{ asset(route('change.password.post', ['id'=>$pegawai->user_id,'page'=>'edit'], false)) }}">
			<div class="modal-body">
				<div class="auth-box">
				<div class="content">
                @csrf

                @foreach ($errors->all() as $error)
                    <p class="text-danger" >{{ $error }}</p>
                @endforeach

                <div class="form-group">
                    <label for="password">Current Password</label>
                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                </div>

                <div class="form-group">
                    <label for="password">New Confirm Password</label>
                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                </div>
                </div>
                </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
				<button type="submit" id="btn-update-password" class="btn btn-primary"><i class="fa fa-check-circle"></i> Update Password</button>
			</div>

            </form>
		</div>
	</div>
</div>
@stop
