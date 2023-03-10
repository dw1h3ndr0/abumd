<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
		</div>
		<!-- logo -->
		<div class="navbar-brand">
			@if(request()->is('entri_data*'))
			<img src="{{asset('admin/assets/img/Logo Abumd.png')}}" alt="ABUMD Logo" class="img-responsive logo">
			@else
			<a href="{{asset(route('dashboard', [], false))}}"><img src="{{asset('admin/assets/img/Logo Abumd.png')}}" alt="ABUMD Logo" class="img-responsive logo"></a>
			@endif
		</div>
		<!-- end logo -->
			@if(request()->is('entri_data*'))
			@else
			<div class="navbar-right">
				<!-- search form -->
				{{-- <form id="navbar-search" class="navbar-form search-form" method="GET" action="/pegawai">
					<input name="cari" value="" class="form-control" placeholder="Search here..." type="text">
					<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
				</form> --}}
				<!-- end search form -->
				<!-- navbar menu -->
				<div id="navbar-menu">
					<ul class="nav navbar-nav">
						{{-- <li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="notification-dot"></span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="header"><strong>You have 7 new notifications</strong></li>
								<li>
									<a href="#">
										<div class="media">
											<div class="media-left">
												<i class="fa fa-fw fa-flag-checkered text-muted"></i>
											</div>
											<div class="media-body">
												<p class="text">Your campaign <strong>Holiday Sale</strong> is starting to engage potential customers.</p>
												<span class="timestamp">24 minutes ago</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="media">
											<div class="media-left">
												<i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
											</div>
											<div class="media-body">
												<p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
												<span class="timestamp">2 hours ago</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="media">
											<div class="media-left">
												<i class="fa fa-fw fa-bar-chart text-muted"></i>
											</div>
											<div class="media-body">
												<p class="text">Website visits from Facebook is 27% higher than last week.</p>
												<span class="timestamp">Yesterday</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="media">
											<div class="media-left">
												<i class="fa fa-fw fa-check-circle text-success"></i>
											</div>
											<div class="media-body">
												<p class="text">Your campaign <strong>Holiday Sale</strong> is approved.</p>
												<span class="timestamp">2 days ago</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="media">
											<div class="media-left">
												<i class="fa fa-fw fa-exclamation-circle text-danger"></i>
											</div>
											<div class="media-body">
												<p class="text">Error on website analytics configurations</p>
												<span class="timestamp">3 days ago</span>
											</div>
										</div>
									</a>
								</li>
								<li class="footer"><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li> --}}
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-cog"></i>
							</a>
							<ul class="dropdown-menu user-menu menu-icon">
								<li class="menu-heading">Profile Setting</li>
								<li><a href="{{asset(route('pegawai.myprofile', ['id'=> Auth::user()->pegawai->id], false))}}"><i class="fa fa-fw fa-user"></i> <span>Profil</span></a></li>
								{{-- <li><a href="#"><i class="fa fa-fw fa-bell"></i> <span>Notifications</span></a></li>
								<li><a href="#"><i class="fa fa-fw fa-sliders"></i> <span>Preferences</span></a></li> --}}
								<li><a href="{{asset(route('change.password.get', ['id'=> Auth::user()->pegawai->id], false))}}"><i class="fa fa-fw fa-lock"></i> <span>Ganti Password</span></a></li>
								{{-- <li class="divider"></li> --}}
								{{-- <li class="menu-heading">Panduan</li>
								<li><a href="{{asset(route('tutorial', [], false))}}"><i class="lnr lnr-camera-video"></i> <span>Video Tutorial</span></a></li> --}}
								<li class="divider"></li>
								<li><a href="{{asset(route('logout', [], false))}}"><i class="fa fa-fw fa-sign-out"></i> <span>Logout</span></a></li>
								{{-- <li><a href="#"><i class="fa fa-fw fa-credit-card"></i> <span>Payments</span></a></li>
								<li><a href="#"><i class="fa fa-fw fa-refresh"></i> <span>Renewals</span></a></li>
								<li class="menu-button">
									<a href="#" class="btn btn-primary"><i class="fa fa-rocket"></i> UPGRADE PLAN</a>
								</li> --}}
							</ul>
						</li>
						{{-- <li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-question-circle"></i>
							</a>
							<ul class="dropdown-menu user-menu">
								<li>
									<form class="search-form help-search-form">
										<input value="" class="form-control" placeholder="How can we help?" type="text">
										<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
									</form>
								</li>
								<li class="menu-heading">HOW-TO</li>
								<li><a href="#">Setting up Campaign</a></li>
								<li><a href="#">Understanding Website Analytics</a></li>
								<li><a href="#">Boost Your Sales</a></li>
								<li><a href="#">Knowing Your Audience</a></li>
								<li class="menu-heading">ACCOUNT</li>
								<li><a href="#">Change Password</a></li>
								<li><a href="#">Privacy &amp; Security</a></li>
								<li><a href="#">Membership</a></li>
								<li class="menu-heading">BILLING</li>
								<li><a href="#">Setup Payment</a></li>
								<li><a href="#">Auto-Renewal Program</a></li>
								<li><a href="#">Cancellation</a></li>
								<li class="menu-button">
									<a href="#" class="btn btn-primary"><i class="fa fa-question-circle"></i> HELP CENTER</a>
								</li>
							</ul>
						</li> --}}
					</ul>
				</div>
				<!-- end navbar menu -->
			</div>
			@endif
	</div>
</nav>