<div id="left-sidebar" class="sidebar">
	<button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
		<span class="sr-only">Toggle Fullwidth</span>
		<i class="fa fa-angle-left"></i>
	</button>
	<div class="sidebar-scroll">
		<div class="user-account">
			<img src="{{asset('images/'.Auth::user()->pegawai->avatar)}}" class="img-responsive img-circle user-photo" alt="User Profile Picture">
			<div class="dropdown">
				@if(request()->is('entri_data*'))
					<a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Operator, <strong>{{Auth::user()->name}}</strong> <i class="fa fa-caret-down"></i></a>
					<ul class="dropdown-menu dropdown-menu-right account">	
						<li><a href="{{asset(route('k3', [], false))}}"><i class="fa fa-fw fa-sign-out"></i> <span>Selesai Entri</span></a></li>
					</ul>
				@else
					<a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Halo, <strong>{{Auth::user()->name}}</strong> <i class="fa fa-caret-down"></i></a>
					<ul class="dropdown-menu dropdown-menu-right account">
						<li><a href="{{ asset(route('pegawai.myprofile', ['id'=> Auth::user()->pegawai->id], false)) }}"><i class="fa fa-fw fa-user"></i> <span>Profil Saya</span></a></li>
						<li><a href="{{ asset(route('change.password.get', ['id'=> Auth::user()->pegawai->id], false)) }}"><i class="fa fa-fw fa-lock"></i> <span>Ganti Password</span></a></li>
						<li class="divider"></li>
						<li><a href="{{ asset(route('logout', [], false)) }}"><i class="fa fa-fw fa-sign-out"></i> <span>Logout</span></a></li>
					</ul>
				@endif
			</div>
		</div>
		<nav id="left-sidebar-nav" class="sidebar-nav">
			<ul id="main-menu" class="metismenu">

				@if(request()->is('entri_data*'))
					<li class="nav-item {{ (request()->segment(3) == 'bloki') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/bloki" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok I</b></a></li>
					<li class="nav-item {{ (request()->segment(3) == 'blokii') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokii" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok II</b></a></li>
					
					<li class="{{ (request()->segment(3) == 'blokiii') or (request()->segment(3) == 'blokiii_1') or (request()->segment(3) == 'blokiii_2') or (request()->segment(3) == 'blokiii_3') or (request()->segment(3) == 'blokiii_4') ? 'active' : '' }}">
					<a href="#forms" class="has-arrow" aria-expanded="false"><span class="lnr lnr-file-empty"></span><span><b>&nbsp;&nbsp; Blok III</b></span></a>
					<ul aria-expanded="true">
						<li class="nav-item {{ (request()->segment(3) == 'blokiii') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok III</b></a></li>
						<li class="nav-item {{ (request()->segment(3) == 'blokiii_1') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_1" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok III (1)</b></a></li>
						<li class="nav-item {{ (request()->segment(3) == 'blokiii_2') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_2" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok III (2)</b></a></li>
						<li class="nav-item {{ (request()->segment(3) == 'blokiii_3') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_3" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok III (3)</b></a></li>
						<li class="nav-item {{ (request()->segment(3) == 'blokiii_4') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiii_4" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok III (4)</b></a></li>
					</ul>
					</li>
					
					<li class="nav-item {{ (request()->segment(3) == 'blokiv') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokiv" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok IV</b></a></li>
					<li class="nav-item {{ (request()->segment(3) == 'blokv') ? 'active' : '' }}"><a class="nav-link active" href="/entri_data/{{$k3->id}}/blokv" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok V</b></a></li>
					<li class="nav-item {{ (request()->segment(3) == 'blokvi') ? 'active' : '' }}"><a class="nav-link" href="/entri_data/{{$k3->id}}/blokvi" ><span class="lnr lnr-file-empty"></span><b>&nbsp;&nbsp; Blok VI</b></a></li>
				@else
					<li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a href="{{ asset(route('dashboard', [], false)) }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					{{-- @if(auth()->user()->role == 'admin')
						<li class="active"><a href="/siswa"><i class="lnr lnr-user"></i> <span>Siswa</span></a></li>
					@endif --}}	
					
					{{-- @if(auth()->user()->role == 'admin')		
					<li class="">
						<a href="#forms" class="has-arrow" aria-expanded="false"><i class="lnr lnr-pencil"></i> <span>Kuesioner K2</span></a>
						<ul aria-expanded="true"> --}}
							{{-- <li class=""><a href="forms-validation.html">Daftar Responden</a></li> --}}
							{{-- <li class=""><a href="{{ asset(route('page404', [], false)) }}">Entri Data</a></li>
						</ul>
					</li>
					@endif --}}

					{{-- <li class="">
						<a href="#forms" class="has-arrow" aria-expanded="false"><i class="lnr lnr-pencil"></i> <span>Kuesioner K3</span></a>
						<ul aria-expanded="true"> --}}
							{{-- <li class=""><a href="forms-validation.html">Daftar Responden</a></li> --}}
							{{-- <li class=""><a href="{{ asset(route('k3', [], false)) }}">Entri Data</a></li>
						</ul>
					</li> --}}

					<li class="">
						<a href="#forms" class="has-arrow" aria-expanded="false"><i class="lnr lnr-pencil"></i> <span>Kuesioner BUMD</span></a>
						<ul aria-expanded="true">
							@if(auth()->user()->role == 'admin')
							<li class=""><a href="{{ asset(route('bumd_responden', [], false)) }}">Daftar Responden</a></li>
							@endif
							<li class=""><a href="{{ asset(route('bumd_entri', [], false)) }}">Entri Data</a></li>
						</ul>
					</li>

					{{-- <li class="">
						<a href="#forms" class="has-arrow" aria-expanded="false"><i class="lnr lnr-book"></i> <span>Panduan</span></a>
						<ul aria-expanded="true"> --}}
							{{-- <li class="{{ (request()->is('kondef')) ? 'active' : '' }}"><a href="{{ asset(route('kondef', [], false)) }}"><i class="lnr lnr-book"></i> <span>Konsep &amp; Definisi</span></a></li> --}}

							<li class="{{ (request()->is('kondef_bumd')) ? 'active' : '' }}"><a href="{{ asset(route('kondef_bumd', [], false)) }}"><i class="lnr lnr-book"></i> <span>Konsep &amp; Definisi</span></a></li>

							{{-- <li class="{{ (request()->is('tutorial')) ? 'active' : '' }}"><a href="{{ asset(route('tutorial', [], false)) }}"><i class="lnr lnr-camera-video"></i> <span>Video Tutorial</span></a></li> --}}
					{{-- 	</ul>
					</li> --}}
					
					@if(auth()->user()->role == 'admin')
					<li class="{{ (request()->is('pegawai')) ? 'active' : '' }}"><a href="{{ asset(route('pegawai', [], false)) }}"><i class="lnr lnr-users"></i> <span>Pengguna</span></a>
					</li>
					@endif
					
					<li class="{{ (request()->segment(3) == 'myprofile') ? 'active' : '' }}"><a href="{{ asset(route('pegawai.myprofile', ['id'=> Auth::user()->pegawai->id], false)) }}"><i class="lnr lnr-user"></i> <span>Profil</span></a>
					</li>
					<!-- <li class="">
						<a href="#charts" class="has-arrow" aria-expanded="false"><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a>
						<ul aria-expanded="true">
							<li class=""><a href="charts-chartist.html">Chartist</a></li>
							<li class=""><a href="charts-sparkline.html">Sparkline Chart</a></li>
						</ul>
					</li>
					<li class=""><a href="notifications.html"><i class="lnr lnr-alarm"></i> <span>Notifications</span> <span class="badge bg-danger">15</span></a></li>
					<li class=""><a href="typography.html"><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li> -->
				@endif

			</ul>
		</nav>
	</div>
</div>