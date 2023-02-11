@extends('layouts.master')

@section('content')
			
<form action="{{ asset(route('entri_bumd.simpan_blokii', ['id'=>$bumd->id], false)) }}" id="form_blokii" method="POST" enctype="multipart/form-data">
{{csrf_field()}}

	<div id="left-sidebar" class="sidebar">
		<button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
			<span class="sr-only">Toggle Fullwidth</span>
			<i class="fa fa-angle-left"></i>
		</button>

		<div class="sidebar-scroll">
			
			<div class="user-account">
				<img src="{{asset('images/'.Auth::user()->pegawai->avatar)}}" class="img-responsive img-circle user-photo" alt="User Profile Picture">
				<div class="dropdown">
					<a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Operator, <strong>{{Auth::user()->name}}</strong> <i class="fa fa-caret-down"></i></a>
					<ul class="dropdown-menu dropdown-menu-right account">	
						<li><button class="btn btn-block btn-keluar" type="submit" style="text-align:left;"><span class="lnr lnr-exit"></span> Selesai Entri</button></li>
					</ul>		
				</div>
			</div>
			<nav id="left-sidebar-nav" class="sidebar-nav">
				  	
				<button class="btn btn-block btn-default btn-bloki" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok I</b></button>

				<button class="btn btn-block btn-default btn-blokii active" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok II</b></button>
				
				<a class="btn btn-block btn-default" style="text-align:left;" id="flip"><span class="lnr lnr-chevron-right flip-simbol-right"></span><span class="lnr lnr-chevron-down flip-simbol-down" style= "display:none">&nbsp;</span><b>Blok III</b></a>
				
							
					<div class="flip-btn" style= "display:none">
						<button class="btn btn-block btn-blokiii" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></button>
						
						<button class="btn btn-block btn-blokiii1" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (1)</b></button>

						{{-- <button class="btn btn-block btn-blokiii2" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (2)</b></button>

						<button class="btn btn-block btn-blokiii3" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (3)</b></button>

						<button class="btn btn-block btn-blokiii4" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok III (4)</b></button> --}}
					</div>
				&nbsp;

				<button class="btn btn-block btn-default btn-blokiv" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok IV</b></button>	

				<button class="btn btn-block btn-default btn-blokv" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok V</b></button>	

				<button class="btn btn-block btn-default btn-blokvi" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok VI</b></button>


			</nav>
		</div>
	</div>

	<div id="main-content">
		<div class="container-fluid">
			@if(session('sukses'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<i class="fa fa-check-circle"></i> {{session('sukses')}}
				</div>
			@endif
			<div class="section-heading text-center">
				<h1 class="page-title text">Survei Statistik Keuangan Badan Usaha Milik Daerah <br> Tahun {{$bumd->tahun}}</h1>
			</div>

			{{-- <ul class="nav nav-pills nav-justified " >
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$k3->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokvi" ><b>Blok VI</b></a></li>
			</ul>	 --}}	
			<div class="btn-group-justified" role="group">
				<div class="btn-group">
					<button class="btn btn-default btn-bloki" type="submit"><b>Blok I</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokii active" type="submit"><b>Blok II</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii" type="submit"><b>Blok III</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii1" type="submit"><b>Blok III (1)</b></button>
				</div>
				{{-- <div class="btn-group">
					<button class="btn btn-default btn-blokiii2" type="submit"><b>Blok III (2)</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii3" type="submit"><b>Blok III (3)</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokiii4" type="submit"><b>Blok III (4)</b></button>
				</div> --}}	
				<div class="btn-group">
					<button class="btn btn-default btn-blokiv" type="submit"><b>Blok IV</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokv" type="submit"><b>Blok V</b></button>
				</div>	
				<div class="btn-group">
					<button class="btn btn-default btn-blokvi" type="submit"><b>Blok VI</b></button>
				</div>
			</div>

	<div class=" plan selected-plan profile-section">						
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK II. KETERANGAN PERUSAHAAN</h2>
		</div>
		<div class="clearfix">
			
			<div class="profile-section">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th>1. Perusahaan Daerah Milik : </th>
							<td></td>
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r1') ? 'has-error' : ''}}">									
									<input class="form-control" type="text" maxlength="2" name="b2r1" value="{{$errors->any() ? old('b2r1') : $bumd->b2r1}}">	
									@if ($errors->has('b2r1'))
										<span class="help-block">{{$errors->first('b2r1')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>1. Pemda Provinsi</td>
							<td>2. Pemda Kabupaten/Kota</td> 
							
						</tr>
						<tr>
							<th>2. Persentase Kepemilikan Modal :</th>
							<th></th><th></th><th></th>
							<th>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[8]->keterangan}}" title="{{$daftar_kondef[8]->rincian}}"><i class="fa fa-search"></i></button>							
							</th>
						</tr>
						<tr>
							<td>1. Pemerintah Pusat </td> 
							<td>: ...................%</td>
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r2a') ? 'has-error' : ''}}">	
									<input class="form-control" type="text" maxlength="4" name="b2r2a" value="{{$errors->any() ? old('b2r2a') : $bumd->b2r2a}}">
									@if ($errors->has('b2r2a'))
										<span class="help-block">{{$errors->first('b2r2a')}}</span>
									@endif
								</div>
							</td> 
						</tr>
						<tr>
							<td>2. Pemda Provinsi </td>
							<td>: ...................%</td> 
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r2b') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r2b" value="{{$errors->any() ? old('b2r2b') : $bumd->b2r2b}}">
									@if ($errors->has('b2r2b'))
										<span class="help-block">{{$errors->first('b2r2b')}}</span>
									@endif
								</div>
							</td> 
						</tr>
						<tr>
							<td>3. Pemda Kab/Kota</td>
							<td>: ...................%</td> 
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r2c') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r2c" value="{{$errors->any() ? old('b2r2c') : $bumd->b2r2c}}">
									@if ($errors->has('b2r2c'))
										<span class="help-block">{{$errors->first('b2r2c')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<td>4. Perusahaan/Korporasi</td>
							<td>: ...................%</td> 
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r2d') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r2d" value="{{$errors->any() ? old('b2r2d') : $bumd->b2r2d}}">
									@if ($errors->has('b2r2d'))
										<span class="help-block">{{$errors->first('b2r2d')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<td>5. Lainnya</td>
							<td>: ...................%</td> 
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r2e') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r2e" value="{{$errors->any() ? old('b2r2e') : $bumd->b2r2e}}">
									@if ($errors->has('b2r2e'))
										<span class="help-block">{{$errors->first('b2r2e')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<td>Jumlah</td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100%</td>
						</tr>						
						<tr>
							<th>3. Tahun Berdiri : .................</th>
							<td></td>
							<td></td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r3') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r3" value="{{$errors->any() ? old('b2r3') : $bumd->b2r3}}">
									@if ($errors->has('b2r3'))
										<span class="help-block">{{$errors->first('b2r3')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>Kode Kategori</td>
							<td>Share terhadap Pendapatan</td>
						</tr>
						<tr>
							<th>4. Kegiatan ke-1 : </th>
							<td class="action">
								<div class="form-group {{$errors->has('b2r4a') ? 'has-error' : ''}}">
									<input class="form-control" type="text" name="b2r4a" value="{{$errors->any() ? old('b2r4a') : $bumd->b2r4a}}">
									@if ($errors->has('b2r4a'))
										<span class="help-block">{{$errors->first('b2r4a')}}</span>
									@endif
								</div>
							</td>							
							<td class="action">
								<div class="form-group {{$errors->has('b2r4b') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r4b" value="{{$errors->any() ? old('b2r4b') : $bumd->b2r4b}}">
									@if ($errors->has('b2r4b'))
										<span class="help-block">{{$errors->first('b2r4b')}}</span>
									@endif
								</div>
							</td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r4c') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r4c" value="{{$errors->any() ? old('b2r4c') : $bumd->b2r4c}}">
									@if ($errors->has('b2r4c'))
										<span class="help-block">{{$errors->first('b2r4c')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[9]->keterangan}}" title="{{$daftar_kondef[9]->rincian}}"><i class="fa fa-search"></i></button>							
							</td>
						</tr>
						<tr>
							<th>5. Kegiatan ke-2 : </th>
							<td class="action">
								<div class="form-group {{$errors->has('b2r5a') ? 'has-error' : ''}}">
									<input class="form-control" type="text" name="b2r5a" value="{{$errors->any() ? old('b2r5a') : $bumd->b2r5a}}">
									@if ($errors->has('b2r5a'))
										<span class="help-block">{{$errors->first('b2r5a')}}</span>
									@endif
								</div>
							</td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r5b') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r5b" value="{{$errors->any() ? old('b2r5b') : $bumd->b2r5b}}">
									@if ($errors->has('b2r5b'))
										<span class="help-block">{{$errors->first('b2r5b')}}</span>
									@endif
								</div>
							</td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r5c') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r5c" value="{{$errors->any() ? old('b2r5c') : $bumd->b2r5c}}">
									@if ($errors->has('b2r5c'))
										<span class="help-block">{{$errors->first('b2r5c')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<th>6. Kegiatan ke-3 : </th>
							<td class="action">
								<div class="form-group {{$errors->has('b2r6a') ? 'has-error' : ''}}">
									<input class="form-control" type="text" name="b2r6a" value="{{$errors->any() ? old('b2r6a') : $bumd->b2r6a}}">
									@if ($errors->has('b2r6a'))
										<span class="help-block">{{$errors->first('b2r6a')}}</span>
									@endif
								</div>
							</td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r6b') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r6b" value="{{$errors->any() ? old('b2r6b') : $bumd->b2r6b}}">
									@if ($errors->has('b2r6b'))
										<span class="help-block">{{$errors->first('b2r6b')}}</span>
									@endif
								</div>
							</td>
							<td class="action">
								<div class="form-group {{$errors->has('b2r6c') ? 'has-error' : ''}}">
									<input class="form-control" type="text" maxlength="4" name="b2r6c" value="{{$errors->any() ? old('b2r6c') : $bumd->b2r6c}}">
									@if ($errors->has('b2r6c'))
										<span class="help-block">{{$errors->first('b2r6c')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<th>7. Produk Perusahaan : .................</th>
							{{-- <td></td> --}}
							<td class="action" colspan="3">
								<div class="form-group {{$errors->has('b2r7') ? 'has-error' : ''}}">
									<input class="form-control" type="text" name="b2r7" value="{{$errors->any() ? old('b2r7') : $bumd->b2r7}}">
									@if ($errors->has('b2r7'))
										<span class="help-block">{{$errors->first('b2r7')}}</span>
									@endif
								</div>
							</td>
							<td>
								<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[11]->keterangan}}" title="{{$daftar_kondef[11]->rincian}}"><i class="fa fa-search"></i></button>							
							</td>
						</tr>
						<tr>	
							<th>8. Jumlah Tenaga Kerja :</th>
						</tr>
						<tr>
							<td colspan="4">
								<table class="table table-bordered text-center">
								    <thead>
									    <tr>
									      	<th class="text-center" >Tenaga Kerja</th>
									      	<th class="text-center" >Tahun {{$bumd->tahun}}</th>
									      	<th class="text-center" >Tahun {{($bumd->tahun - 1)}}</th>
									    </tr>							    
									</thead>
									<tbody>
										<tr>
											<td class="text-center">Tenaga Kerja Tetap</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r8ak2')  ? 'has-error' : ''}}">
													<input class="form-control" type="text"maxlength="2" name="b2r8ak2" value="{{$errors->any() ? old('b2r8ak2') : $bumd->b2r8ak2}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r8ak3')  ? 'has-error' : ''}}">
													<input class="form-control" type="text"maxlength="2" name="b2r8ak3" value="{{$errors->any() ? old('b2r8ak3') : $bumd->b2r8ak3}}">
												</div>
											</td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[12]->keterangan}}" title="{{$daftar_kondef[12]->rincian}}"><i class="fa fa-search"></i></button>							
											</td>
									    </tr>
									    <tr>
											<td class="text-center">Tenaga Kerja Tak Tetap</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r8bk2')  ? 'has-error' : ''}}">
													<input class="form-control" type="text"maxlength="2" name="b2r8bk2" value="{{$errors->any() ? old('b2r8bk2') : $bumd->b2r8bk2}}">
												</div>
											</td>
											<td>
												<div class="form-group-table {{$errors->has('b2r8bk3')  ? 'has-error' : ''}}">
													<input class="form-control" type="text"maxlength="2" name="b2r8bk3" value="{{$errors->any() ? old('b2r8bk3') : $bumd->b2r8bk3}}">
												</div>
											</td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="{{$daftar_kondef[13]->keterangan}}" title="{{$daftar_kondef[13]->rincian}}"><i class="fa fa-search"></i></button>							
											</td>
									    </tr>
									</tbody>
								</table>
								@if ($errors->has('b2r8ak2') or $errors->has('b2r8ak3') or $errors->has('b2r8bk2') or $errors->has('b2r8bk3'))
									<span class="help-block">
										<p class="text-danger">Rincian 8.a sampai dengan 8.b tidak boleh kosong dan harus terisi angka</p>
									</span>
								@endif
								{{-- </div> --}}
							</td>						
						</tr>						
					</tbody>
				</table>
			</div>
			<p class="margin-top-30" align="right">
				<button type="submit" class="btn btn-primary btn-keluar">
					<span class="lnr lnr-exit"></span><span>Keluar</span>
				</button>
				<button type="submit" class="btn btn-success" title="Simpan"><span class="sr-only">Simpan</span> <i class="fa fa-save"></i> &nbsp;&nbsp;Simpan</button>
			</p>
				
		</div>
		{{-- <div class="pager">
			<li><a onclick="document.getElementById('form_blokii').submit();" href="/entri_data/{{$bumd->id}}/bloki">← Blok I</a></li>
			<li><a onclick="document.getElementById('form_blokii').submit();" href="/entri_data/{{$bumd->id}}/blokiii">Blok III →</a></li>
		</div> --}}	
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok I</button>
			<button type="submit" class="btn btn-default btn-sm next-blok">Blok III →</button>
		</div>
	</div>
	
		</div>
	</div>

</form>	

@endsection

@push('scripts')
	@include('bumd.simpan')
@endpush
