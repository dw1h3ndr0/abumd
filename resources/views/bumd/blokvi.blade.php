@extends('layouts.master')

@section('content')

<form action="{{ asset(route('entri_bumd.simpan_blokvi', ['id'=>$bumd->id], false)) }}" id="form_blokvi" method="POST" enctype="multipart/form-data">
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

				<button class="btn btn-block btn-default btn-blokii" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok II</b></button>
				
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

				<button class="btn btn-block btn-default btn-blokvi active" style="text-align:left;" type="submit"><span class="lnr lnr-file-empty"></span><b>Blok VI</b></button>


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
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/bloki" ><b>Blok I</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokii" ><b>Blok II</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii" ><b>Blok III</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_1" ><b>Blok III (1)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_2" ><b>Blok III (2)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_3" ><b>Blok III (3)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiii_4" ><b>Blok III (4)</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokiv" ><b>Blok IV</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/entri_data/{{$bumd->id}}/blokv" ><b>Blok V</b></a></li>
				<li class="nav-item active"><a class="nav-link active" href="/entri_data/{{$bumd->id}}/blokvi" ><b>Blok VI</b></a></li>
			</ul> --}}		
			<div class="btn-group-justified" role="group">
				<div class="btn-group">
					<button class="btn btn-default btn-bloki" type="submit"><b>Blok I</b></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-default btn-blokii" type="submit"><b>Blok II</b></button>
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
					<button class="btn btn-default btn-blokvi active" type="submit"><b>Blok VI</b></button>
				</div>
			</div>

	<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK VI. KETERANGAN PETUGAS</h2>
		</div>
		<div class="clearfix">
			
			<div class="profile-section">
				<table class="table table-bordered">
					<thead >
						<tr>
					      	<th class="text-center">U r a i a n</th>
					      	<th class="text-center">P e n c a c a h</th>
					      	<th class="text-center">P e n g a w a s</th>
					    </tr>
					</thead>
					<tbody>
						<tr>
							<th>1. Nama Petugas </th>
							<td>
								<div class="form-group-table {{$errors->has('b6r1k1')  ? 'has-error' : ''}}">
									<input type="text" class="form-control" name="b6r1k1" value="{{$errors->any() ? old('b6r1k1') : $bumd->b6r1k1}}">
									@if ($errors->has('b6r1k1'))
										<span class="help-block">{{$errors->first('b6r1k1')}}</span>
									@endif
								</div>
							</td>
							<td>
								<div class="form-group-table {{$errors->has('b6r1k2')  ? 'has-error' : ''}}">
									<input type="text" class="form-control" name="b6r1k2" value="{{$errors->any() ? old('b6r1k2') : $bumd->b6r1k2}}">
									@if ($errors->has('b6r1k2'))
										<span class="help-block">{{$errors->first('b6r1k2')}}</span>
									@endif
								</div>
							</td>
						</tr>
						<tr>
							<th>2. Tanggal Pencacahan </th>
							<td>
								<div class="input-daterange input-group {{$errors->has('b6r2k1') or $errors->has('b6r2k2') ? 'has-error' : ''}}" data-provide="datepicker">
									<input type="text" class="input-sm form-control" name="b6r2k1" value="{{$errors->any() ? old('b6r2k1') : $bumd->b6r2k1}}">
									<span class="input-group-addon">s.d.</span>
									<input type="text" class="input-sm form-control" name="b6r2k2" value="{{$errors->any() ? old('b6r2k2') : $bumd->b6r2k2}}">									
								</div>
								@if ($errors->has('b6r2k1'))
									<span class="help-block"><p class="text-danger">{{$errors->first('b6r2k1')}}</p></span>
								@elseif($errors->has('b6r2k2'))
									<span class="help-block"><p class="text-danger">{{$errors->first('b6r2k2')}}</p></span>
								@endif
							</td>
							<td>
								<div class="input-daterange input-group {{$errors->has('b6r2k3') or $errors->has('b6r2k4') ? 'has-error' : ''}}" data-provide="datepicker">
									<input type="text" class="input-sm form-control" name="b6r2k3" value="{{$errors->any() ? old('b6r2k3') : $bumd->b6r2k3}}">
									<span class="input-group-addon">s.d.</span>
									<input type="text" class="input-sm form-control" name="b6r2k4" value="{{$errors->any() ? old('b6r2k4') : $bumd->b6r2k4}}">									
								</div>
								@if ($errors->has('b6r2k3'))
									<span class="help-block"><p class="text-danger">{{$errors->first('b6r2k3')}}</p></span>
								@elseif($errors->has('b6r2k4'))
									<span class="help-block"><p class="text-danger">{{$errors->first('b6r2k4')}}</p></span>
								@endif
							</td>
						</tr>
						<tr>
							<th>3. Tanda Tangan </th>
							<td class="text-center">								
								<label class="fancy-checkbox custom-bgcolor-green">
									{{-- @if($errors->has('b6r3k1'))
										<input type="checkbox" name="b6r3k1" value="1" {{(old('b6r3k1') == '1') ? 'checked' : ''}}><span>ttd pcl</span>
									@else --}}
										<input type="hidden" name="b6r3k1" value="0">
										<input type="checkbox" name="b6r3k1" value="1" {{($bumd->b6r3k1 == '1') ? 'checked' : ''}} ><span>ttd pcl</span>
									{{-- @endif --}}
								</label>
							</td>
							<td class="text-center">
								<label class="fancy-checkbox custom-bgcolor-green">
									{{-- @if($errors->has('b6r3k2'))
										<input type="checkbox" name="b6r3k2" value="1" {{(old('b6r3k2') == '1') ? 'checked' : ''}}><span>ttd pml</span>
									@else --}}
										<input type="hidden" name="b6r3k2" value="0">
										<input type="checkbox" name="b6r3k2" value="1" {{($bumd->b6r3k2 == '1') ? 'checked' : ''}}><span>ttd pml</span>
									{{-- @endif --}}
								</label>
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
			<li><a onclick="document.getElementById('form_blokvi').submit();" href="/entri_data/{{$bumd->id}}/blokv">← Blok V</a></li>
			<li class="disabled"><a href="#"> →</a></li>
		</div>	 --}}
		<div class="pager">
			<button type="submit" class="btn btn-default btn-sm prev-blok">← Blok V</button>
			<button type="submit" class="btn btn-default btn-sm next-blok" disabled=""> →</button>
		</div>	
	</div>

		</div>
	</div>

</form>

@endsection

@push('scripts')
 	@include('bumd.simpan')
@endpush
