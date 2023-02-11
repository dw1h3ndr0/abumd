<head>
	<title>Kisah Desa | Kuesioner Digital Survei Keuangan Pemerintah Desa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	{{-- <meta name="csrf-token" content="{{ csrf_token() }} />
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/styl.css')}}>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/sty.css')}}>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/metisMenu/metisMenu.css')}}>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/toastr/toastr.min.css')}}>	
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/dropify/css/dropify.min.css')}}>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}>
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}>
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}> --}}
	
	<style type="text/css">

		body {
		  background-color: #fafafa;
		  font-family: "Source Sans Pro", sans-serif;
		  font-size: 11px;
		  color: #5A5A5A;
		  background-color: #F0FFDF; }

		a {
		  color: #6290d0; }
		  a:hover, a:focus {
		    color: #437ac7;
		    text-decoration: none; }

		.page-title {
		  margin-top: 10;
		  margin-left: 5;
		  margin-right: 5;
		  margin-bottom: 20px;
		  font-size: 18px;
		  font-weight: 400; }

		.page-body {
		  font-family: "Source Sans Pro", sans-serif;
		  font-size: 11px; }
		
		footer {
		  padding: 0 30px;
		  padding-bottom: 9px;
		  position: absolute;
		  right: 0; }
		  @media screen and (max-width: 768px) {
		    footer {
		      position: relative;
		      text-align: center; } }

		.copyright {
		  margin-bottom: 0;
		  font-size: 9px; }

		#main-content {
		  -webkit-transition: all 0.3s ease-in-out;
		  -moz-transition: all 0.3s ease-in-out;
		  -ms-transition: all 0.3s ease-in-out;
		  -o-transition: all 0.3s ease-in-out;
		  transition: all 0.3s ease-in-out;
		  width: calc(100% - 250px);
		  float: right;
		  position: relative;
		  padding-top: 90px;
		  padding-bottom: 40px; }
		  @media screen and (max-width: 768px) {
		    #main-content {
		      width: 100%; } }

		.layout-fullwidth #wrapper #left-sidebar {
		  left: -250px; }
		  .layout-fullwidth #wrapper #left-sidebar.ps {
		    overflow: visible !important; }

		.layout-fullwidth #wrapper #main-content {
		  width: 100%; }

		html.fullscreen-bg,
		html.fullscreen-bg body,
		html.fullscreen-bg #wrapper {
		  height: 100%; }

		.vertical-align-wrap {
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  display: table; }

		.vertical-align-middle {
		  display: table-cell;
		  vertical-align: middle; }

		.offcanvas-active #left-sidebar {
		  left: 0; }

		.dashboard-section {
		  margin-bottom: 50px; }

		.panel-content {
		  padding: 30px 15px; }
		  .panel-content .heading {
		    font-size: 18px;
		    margin-top: 0;
		    margin-bottom: 20px;
		    position: relative;
		    padding-left: 20px;
		    padding-bottom: 10px;
		    border-bottom: 1px solid #e8e8e8; }
		    .panel-content .heading i {
		      font-size: 16px;
		      margin-right: 8px;
		      float: left;
		      position: absolute;
		      top: 2px;
		      left: 0;
		      text-indent: 0;
		      color: #c1c1c1; }

		/* Forms */
		label {
		  font-weight: 600; }

		.search-form {
		  position: relative;
		  padding: 0; }
		  .search-form .btn {
		    -moz-box-shadow: none;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		    position: absolute;
		    top: 7px;
		    right: 10px;
		    padding: 0;
		    border: none;
		    color: #929292;
		    background-color: transparent; }
		    .search-form .btn:hover, .search-form .btn:focus {
		      background-color: inherit;
		      border-left: none;
		      border-color: inherit; }

		/* fancy checkbox and radio button */
		.fancy-checkbox {
		  margin-right: 10px; }
		  .fancy-checkbox,
		  .fancy-checkbox label {
		    font-weight: normal; }
		  .fancy-checkbox input[type="checkbox"] {
		    display: none; }
		    .fancy-checkbox input[type="checkbox"] + span {
		      display: inline-block;
		      vertical-align: middle;
		      *vertical-align: auto;
		      *zoom: 1;
		      *display: inline;
		      cursor: pointer;
		      position: relative; }
		      .fancy-checkbox input[type="checkbox"] + span:before {
		        display: inline-block;
		        vertical-align: middle;
		        *vertical-align: auto;
		        *zoom: 1;
		        *display: inline;
		        position: relative;
		        bottom: 1px;
		        width: 18px;
		        height: 18px;
		        margin-right: 10px;
		        content: "";
		        border: 1px solid #ccc; }
		    .fancy-checkbox input[type="checkbox"]:checked + span:before {
		      font-family: FontAwesome;
		      content: '\f00c';
		      font-size: 12px;
		      color: #99a1a7;
		      text-align: center;
		      line-height: 16px;
		      background: #ededed;
		      border: 1px solid #ccc; }
		  .fancy-checkbox.custom-color-green input[type="checkbox"]:checked + span:before {
		    color: #53D76A;
		    background-color: #fff; }
		  .fancy-checkbox.custom-bgcolor-green input[type="checkbox"]:checked + span:before {
		    color: #fff;
		    background-color: #53D76A;
		    border-color: #32cf4d; }

		.fancy-radio {
		  margin-right: 10px; }
		  .fancy-radio,
		  .fancy-radio label {
		    font-weight: normal; }
		  .fancy-radio input[type="radio"] {
		    display: none; }
		    .fancy-radio input[type="radio"] + span {
		      display: block;
		      cursor: pointer;
		      position: relative; }
		      .fancy-radio input[type="radio"] + span i {
		        display: inline-block;
		        vertical-align: middle;
		        *vertical-align: auto;
		        *zoom: 1;
		        *display: inline;
		        -webkit-border-radius: 8px;
		        -moz-border-radius: 8px;
		        border-radius: 8px;
		        position: relative;
		        bottom: 1px;
		        content: "";
		        border: 1px solid #ccc;
		        width: 18px;
		        height: 18px;
		        margin-right: 5px; }
		    .fancy-radio input[type="radio"]:checked + span i:after {
		      -webkit-border-radius: 50%;
		      -moz-border-radius: 50%;
		      border-radius: 50%;
		      display: block;
		      position: relative;
		      top: 3px;
		      left: 3px;
		      content: '';
		      width: 10px;
		      height: 10px;
		      background-color: #7b848c; }
		  .fancy-radio.custom-color-green input[type="radio"]:checked + span i:after {
		    background-color: #53D76A; }
		  .fancy-radio.custom-bgcolor-green input[type="radio"]:checked + span i {
		    background-color: #53D76A; }
		    .fancy-radio.custom-bgcolor-green input[type="radio"]:checked + span i:after {
		      background-color: #fff; }

		/* fancy checkbox and fancy radio */
		.input-group-addon .fancy-radio,
		.input-group-addon .fancy-checkbox {
		  margin: 0;
		  position: relative;
		  top: 1px; }

		.input-group-addon .fancy-radio input[type="radio"] + span i,
		.input-group-addon .fancy-checkbox input[type="checkbox"] + span {
		  margin: 0; }
		  .input-group-addon .fancy-radio input[type="radio"] + span i:before,
		  .input-group-addon .fancy-checkbox input[type="checkbox"] + span:before {
		    margin: 0; }

		.form-control {
		  -moz-box-shadow: none;
		  -webkit-box-shadow: none;
		  box-shadow: none;
		  -webkit-border-radius: 2px;
		  -moz-border-radius: 2px;
		  border-radius: 2px;
		  background-color: #f9f9f9;
		  border-color: #dadada;
		  color: #777; }
		  .form-control:focus {
		    -moz-box-shadow: none;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		    outline: none;
		    border-color: #c1c0c0; }

		.help-block {
		  font-size: 13px;
		  color: #929292; }

		

		/* date picker */
		.datepicker table tr td.active.active, .datepicker table tr td.active.highlighted.active, .datepicker table tr td.active.highlighted:active, .datepicker table tr td.active.active:active {
		  background-color: #5c8ed4;
		  border-color: #3c78cb; }	

		.md-editor > textarea {
		  padding: 10px; }

		.dropify-wrapper {
		  -webkit-border-radius: 3px;
		  -moz-border-radius: 3px;
		  border-radius: 3px;
		  background-color: #f9f9f9;
		  color: #b9b9b9;
		  border: 1px solid #e4e4e4; }
		  .dropify-wrapper .dropify-preview {
		    background-color: #f9f9f9; }

		/* accordion */
		.panel-group .panel .panel-heading {
		  padding: 0; }

		.panel-group .panel .panel-title {
		  font-size: 14px;
		  font-family: "Source Sans Pro", sans-serif; }

		.panel-group .panel .panel-title > a {
		  display: block;
		  padding: 10px 15px; }
		  .panel-group .panel .panel-title > a:hover, .panel-group .panel .panel-title > a:focus {
		    color: inherit; }
		  .panel-group .panel .panel-title > a i {
		    font-size: 18px;
		    margin-right: 5px; }
		    .panel-group .panel .panel-title > a i.icon-collapsed {
		      display: none; }
		    .panel-group .panel .panel-title > a i.right {
		      float: right;
		      margin-right: 0; }
		  .panel-group .panel .panel-title > a.collapsed .icon-expanded {
		    display: none; }
		  .panel-group .panel .panel-title > a.collapsed .icon-collapsed {
		    display: inline-block;
		    vertical-align: middle;
		    *vertical-align: auto;
		    *zoom: 1;
		    *display: inline;
		    vertical-align: baseline; }
		
		/* Page Profile */
		.content-profile .profile-heading {
		  margin-bottom: 30px;
		  font-size: 20px;
		  font-weight: normal; }

		.content-profile .user-photo {
		  width: 90px;
		  border: 2px solid #e2e2e2; }

		.content-profile .profile-section {
		  margin-bottom: 70px; }

		.content-profile .left,
		.content-profile .right {
		  width: 40%; }

		.content-profile .left {
		  float: left; }

		.content-profile .right {
		  float: right; }

		.content-profile .form-group {
		  margin-bottom: 30px; }

		.content-profile .form-group-table {
		  margin-bottom: 0px; }  

		.content-profile label {
		  display: block; }

		@media screen and (max-width: 767px) {
		  .content-profile .left,
		  .content-profile .right {
		    float: none;
		    width: 100%; } }

		.plan {
		  -webkit-border-radius: 3px;
		  -moz-border-radius: 3px;
		  border-radius: 3px;
		  padding: 15px 30px;
		  margin-bottom: 30px;
		  background-color: #FBFBFB;
		  border: 1px solid #E3E3E3;
		  color: #777; }
		  .plan .plan-title {
		    margin: 0 0 15px 0; }
		    .plan .plan-title span {
		      font-size: 15px;
		      color: #afafaf; }
		      .plan .plan-title span i {
		        margin-left: 10px;
		        color: #7ED321; }
		  .plan.selected-plan {
		    background-color: #F0FFDF;
		    border: 1px solid #C3D7AE; }
		  .plan .list-plan-details {
		    margin-bottom: 20px; }
		    .plan .list-plan-details li {
		      margin-bottom: 5px; }

		/*page break*/
		.page_break { page-break-before: always; }

		/*# sourceMappingURL=main.css.map */
	</style>

</head>
<body>
	{{-- BLOK I --}}
		<div class=" plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK I. PENGENALAN TEMPAT</h2>
		</div>
		<div class="clearfix">			
			<div class="profile-section">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th >1. Provinsi: </th>
							<td >{{$nama_provinsi}}</td>
							<td align="right" bgcolor="white">{{$k3->b1r1}}</td>
						</tr>
						<tr>
							<th>2. Kabupaten/Kota*): </th>
							<td>{{$nama_kabupaten}}</td>
							<td align="right" bgcolor="white">{{$k3->b1r2}}</td>
						</tr>
						<tr>
							<th>3. Kecamatan: </th>
							<td>{{$nama_kecamatan}}</td>
							<td align="right" bgcolor="white">{{$k3->b1r3}}</td>
						</tr>
						<tr>
							<th>4. Desa/Nagari*): </th>
							<td>{{$nama_desa}}</td>
							<td align="right" bgcolor="white">{{$k3->b1r4}}</td>
						</tr>
						<tr>
							<th rowspan="3">5. Jenis Wilayah Administrasi: </th>
							<td>1   Desa</td>								
							<td align="right" bgcolor="white">{{$k3->b1r5}}</td>
						</tr>
						<tr>
							<td>2   Nagari</td>
						</tr>
						<tr>
							<td>3   Lainnya</td>
						</tr>
						<tr>
							<th rowspan="2">6. Status Desa: </th>
							<td>1   Perkotaan</td>								
							<td align="right" bgcolor="white">{{$k3->b1r6}}</td>
						</tr>
						<tr>
							<td>2   Perdesaan </td>
						</tr>
						<tr>
							<th>7. Alamat Lengkap Kantor Desa/Nagari: </th>
							<td bgcolor="white">
								{{$k3->b1r7a}}<br>
								RT: &nbsp;{{$k3->b1r7b}} <br> 
								/ RW: &nbsp;{{$k3->b1r7c}} <br>
								Kode Pos: &nbsp;{{$k3->b1r7d}} <br>
							</td>
						</tr>						
						<tr>
							<td>Email: </td>
							<td bgcolor="white">{{$k3->b1r7e}}</td>		
						</tr>
						<tr>
							<td>Nomor Telepon: </td>
							<td bgcolor="white">{{$k3->b1r7f}}</td>		
						</tr>
						<tr>
							<td>Nomor Faksimile: </td>
							<td bgcolor="white">{{$k3->b1r7g}}</td>		
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		</div>

	{{-- BLOK II --}}
		<div class="page_break"></div>
		<div class=" plan selected-plan profile-section">						
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK II. KETERANGAN UMUM DAN SUMBER DAYA</h2>
		</div>
		<div class="clearfix">			
			<div class="profile-section">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th>1. Keterangan Umum Kepala Desa / Wali Nagari </th>
						</tr>
						<tr>
							<td>a. Nama : ..........................................</td>
							<td></td> 
							<td colspan="2" class="action" bgcolor="white">{{$k3->b2r1a}}</td>							
						</tr>
						<tr>
							<td>b. Umur : ..........................................Tahun</td>
							<td></td> 
							<td></td>
							<td class="action" bgcolor="white">{{$k3->b2r1b}}</td>
						</tr>
						<tr>
							<td>c. Jenis Kelamin :</td>
							<td>Laki-Laki 1</td> 
							<td>Perempuan 2</td>
							<td class="action" bgcolor="white">{{$k3->b2r1c}}</td> 
						</tr>
						<tr>
							<td>d. Tahun mulai menjabat : ..........................</td>
							<td></td> 
							<td></td>
							<td class="action" bgcolor="white">{{$k3->b2r1d}}</td>
						</tr>
						<tr>
							<td rowspan="2">e. Pendidikan terakhir yang ditamatkan :</td>
							<td>Tidak Tamat SMA 1</td> 
							<td>SMA / D I / D II / D III 2</td>
							<td class="action" bgcolor="white">{{$k3->b2r1e}}</td> 
						</tr>
						<tr>	
							<td>Sarja S1 / D IV 3</td> 
							<td>S2 / S3 4</td>
						</tr>
						<tr>
							<th>2. Banyaknya Aparatur Desa / Nagari </th>
						</tr>
						<tr>
							<td colspan="4">
								<table class="table table-bordered text-center">
								    <thead>
									    <tr>
									      	<th class="text-center" rowspan="2">Jabatan</th>
									      	<th class="text-center" colspan="2">PNS</th>
									      	<th class="text-center" colspan="2">Non PNS</th>
									    </tr>
									    <tr>
											<th class="text-center">Laki-Laki</th>
											<th class="text-center">Perempuan</th>
											<th class="text-center">Laki-Laki</th>
											<th class="text-center">Perempuan</th>
									    </tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-left">a. Kepala Desa / Wali Nagari</td>
											<td></td>
											<td></td>
											<td>{{$k3->b2r2ak3}}</td>
											<td>{{$k3->b2r2ak4}}</td>
										</tr>
										<tr>
											<td class="text-left">b. Sekretaris Desa / Nagari</td>
											<td>{{$k3->b2r2bk1}}</td>
											<td>{{$k3->b2r2bk2}}</td>
											<td>{{$k3->b2r2bk3}}</td>
											<td>{{$k3->b2r2bk4}}</td>
										</tr>
										<tr>
											<td class="text-left">c. Kepala Urusan</td>
											<td></td>
											<td></td>
											<td>{{$k3->b2r2ck3}}</td>
											<td>{{$k3->b2r2ck4}}</td>
										</tr>
										<tr>
											<td class="text-left">d. Kepala Seksi</td>
											<td></td>
											<td></td>
											<td>{{$k3->b2r2dk3}}</td>
											<td>{{$k3->b2r2dk4}}</td>
										</tr>
										<tr>
											<td class="text-left">e. Kepala Dusun/Lingkungan/Jorong</td>
											<td></td>
											<td></td>
											<td>{{$k3->b2r2ek3}}</td>
											<td>{{$k3->b2r2ek4}}</td>
										</tr>
										<tr>
											<td class="text-left">f. Staf Lainnya</td>
											<td></td>
											<td></td>
											<td>{{$k3->b2r2fk3}}</td>
											<td>{{$k3->b2r2fk4}}</td>
										</tr>
										<tr>
											<th  class="text-center">Jumlah</th>
											<td>{{$k3->b2r2gk1}}</td>
											<td>{{$k3->b2r2gk2}}</td>
											<td>{{$k3->b2r2gk3}}</td>
											<td>{{$k3->b2r2gk4}}</td>
										</tr>
									</tbody>
								</table>
							</td>						
						</tr>
						<tr>
							<th>3. Administrasi Desa / Nagari </th>
						</tr>
						<tr>
							<td colspan="3" >a. Apakah sudah mengetahui pengelolaan keuangan dilaksanakan berdasarkan APBDesa menurut Peraturan Menteri Dalam Negeri Nomor 20 Tahun 2018?</td>
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td bgcolor="white">{{$k3->b2r3a1}}</td>
						</tr>
						<tr>
							<td colspan="4" >Jika rincian 3.a berkode 1, informasi tersebut diperoleh dari:</td>
						</tr>
						<tr>
							<td></td>
							<td>Pemerintah Kab/Kota 1</td> 
							<td>Lainnya 4</td>
							<td bgcolor="white">{{$k3->b2r3a2}}</td>
						</tr>
						<tr>
							<td></td>
							<td>Petugas Kecamatan 2</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3" >b. Apakah dalam pengelolaan keuangan, Desa/Nagari membuat laporan keuangan?</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td bgcolor="white">{{$k3->b2r3b1}}</td>
						</tr>
						<tr>
							<td colspan="3" >Jika rincian 3.b. berkode 1, siapakah yang melakukan pencatatan/rekapitulasi laporan keuangan desa selama ini:</td>
						</tr>
						<tr>
							<td></td>
							<td>Kepala Desa / Wali Nagari 1</td> 
							<td>Kepala Seksi 4</td>
							<td bgcolor="white">{{$k3->b2r3b2}}</td>
						</tr>
						<tr>
							<td></td>
							<td>Sekretaris Desa / Nagari 2</td> 
							<td>Kepala Dusun / Lingkungan / Jorong 5</td>
						</tr>
						<tr>
							<td></td>
							<td>Kepala Urusan 3</td>
							<td>Staf lainnya 6</td>
						</tr>
						<tr>
							<td colspan="3" >Jika Rincian 3.b. berkode 2. Apa kendalanya:</td>
						</tr>
						<tr>
							<td></td>
							<td>Tidak ada Pedoman / Pelatihan 1</td> 
							<td>Tidak ada Bimbingan / Pendampingan 4</td>
							<td bgcolor="white">{{$k3->b2r3b3}}</td>
						</tr>
						<tr>
							<td></td>
							<td>SDM Kurang 2</td>
							<td>Lainnya 8</td>
						</tr>
						<tr>
							<td colspan="3" >c. Apakah ada Bimbingan/Pendampingan/Pengawasan dari petugas Kabupaten/Kota atau Kecamatan dalam membuat laporan keuangan:</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td bgcolor="white">{{$k3->b2r3c}}</td>
						</tr>
						<tr>
							<td colspan="3" >d. Apakah dalam pengelolaan keuangan Desa telah menggunakan sistem komputerisasi?</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Ya 1</td> 
							<td>Tidak 2</td>
							<td bgcolor="white">{{$k3->b2r3d1}}</td>
						</tr>
						<tr>
							<td colspan="3" >Jika jawaban 3.d berkode 1, Apakah sistem komputerisasi yang digunakan?</td>							 
						</tr>
						<tr>
							<td></td>
							<td>Siskeudes 1</td> 
							<td>Lainnya (............................) 2</td>
							<td bgcolor="white">{{$k3->b2r3d2}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	{{-- BLOK III --}}
		<div class="page_break"></div>
		<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK III. ANGGARAN PENDAPATAN DAN BELANJA PEMERINTAH DESA / NAGARI<br>( Ribu Rupiah )</h2>
		</div>
		<div class="clearfix">			
			{{-- <div class="profile-section"> --}}
				<table class="table table-bordered">
					<thead >
						<tr>
					      	<th class="text-center" colspan="2">Uraian</th>
					      	<th class="text-center">Realisasi <br>2019</th>
					      	<th class="text-center">Anggaran <br>2020</th>
					    </tr>
					    <tr>
					    	<td class="text-center"colspan="2">(1)</td>
					    	<td class="text-center">(2)</td>
					    	<td class="text-center">(3)</td>
					    </tr>
					</thead>
					<tbody>
						<tr>
							<th>4 </th>
							<th>PENDAPATAN DESA</th>
							<th>{{$k3->b3r4k2}}</th>
							<th>{{$k3->b3r4k3}}</th>							
						</tr>
						<tr>
							<th>4.1</th>
							<th>Pendapatan Asli Desa</th>
							<th>{{$k3->b3r41k2}}</th>
							<th>{{$k3->b3r41k3}}</th>
						</tr>
						<tr>
							<td>4.1.1</td>
							<td>Hasil Usaha</td> 
							<td>{{$k3->b3r411k2}}</td>
							<td>{{$k3->b3r411k3}}</td>
						</tr>
						<tr>
							<td>4.1.2</td>
							<td>Hasil Aset</td> 
							<td>{{$k3->b3r412k2}}</td>
							<td>{{$k3->b3r412k3}}</td> 
						</tr>
						<tr>
							<td>4.1.3</td>
							<td>Swadaya, Partisipasi dan Gotong Royong</td>
							<td>{{$k3->b3r413k2}}</td>
							<td>{{$k3->b3r413k3}}</td>
						</tr>
						<tr>
							<td>4.1.4</td>
							<td>Lain-lain Pendapatan Asli Desa</td>
							<td>{{$k3->b3r414k2}}</td>
							<td>{{$k3->b3r414k3}}</td>
						</tr>
						<tr>
							<th>4.2</th>
							<th>Transfer</th>
							<th>{{$k3->b3r42k2}}</th>
							<th>{{$k3->b3r42k3}}</th>
						</tr>
						<tr>
							<td>4.2.1</td>
							<td>Dana Desa</td> 
							<td>{{$k3->b3r421k2}}</td>
							<td>{{$k3->b3r421k3}}</td> 
						</tr>
						<tr>
							<td>4.2.2</td>
							<td>Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten/kota</td> 
							<td>{{$k3->b3r422k2}}</td>
							<td>{{$k3->b3r422k3}}</td> 
						</tr>
						<tr>
							<td>4.2.3</td>
							<td>Alokasi Dana Desa</td> 
							<td>{{$k3->b3r423k2}}</td>
							<td>{{$k3->b3r423k3}}</td> 
						</tr>
						<tr>
							<td>4.2.4</td>
							<td>Bantuan Keuangan Provinsi</td> 
							<td>{{$k3->b3r424k2}}</td>
							<td>{{$k3->b3r424k3}}</td> 
						</tr>
						<tr>
							<td>4.2.5</td>
							<td>Bantuan Keuangan APBD Kabupaten/Kota</td> 
							<td>{{$k3->b3r425k2}}</td>
							<td>{{$k3->b3r425k3}}</td> 
						</tr>
						<tr>
							<th>4.3</th>
							<th>Pendapatan Lain-Lain</th>
							<th>{{$k3->b3r43k2}}</th>
							<th>{{$k3->b3r43k3}}</th>
						</tr>
						<tr>
							<td>4.3.1</td>
							<td>Penerimaan dari Hasil Kerjasama antar Desa</td> 
							<td>{{$k3->b3r431k2}}</td>
							<td>{{$k3->b3r431k3}}</td> 
						</tr>
						<tr>
							<td>4.3.2</td>
							<td>Penerimaan dari Hasil Kerjasama Desa dengan Pihak Ketiga</td> 
							<td>{{$k3->b3r432k2}}</td>
							<td>{{$k3->b3r432k3}}</td> 
						</tr>
						<tr>
							<td>4.3.3</td>
							<td>Penerimaan dari Bantuan Perusahaan yang berlokasi di Desa</td> 
							<td>{{$k3->b3r433k2}}</td>
							<td>{{$k3->b3r433k3}}</td> 
						</tr>
						<tr>
							<td>4.3.4</td>
							<td>Hibah dan sumbangan dari Pihak Ketiga</td> 
							<td>{{$k3->b3r434k2}}</td>
							<td>{{$k3->b3r434k3}}</td> 
						</tr>
						<tr>
							<td>4.3.5</td>
							<td>Koreksi kesalahan belanja tahun-tahun anggaran sebelumnya yang mengakibatkan penerimaan di kas Desa pada tahun anggaran berjalan</td> 
							<td>{{$k3->b3r435k2}}</td>
							<td>{{$k3->b3r435k3}}</td> 
						</tr>
						<tr>
							<td>4.3.6</td>
							<td>Bunga Bank</td> 
							<td>{{$k3->b3r436k2}}</td>
							<td>{{$k3->b3r436k3}}</td> 
						</tr>
						<tr>
							<td>4.3.9</td>
							<td>Lain-lain pendapatan Desa yang sah</td> 
							<td>{{$k3->b3r439k2}}</td>
							<td>{{$k3->b3r439k3}}</td> 
						</tr>	
						<tr>
							<th>5 </th>
							<th>BELANJA</th>
							<th>{{$k3->b3r5k2}}</th>
							<th>{{$k3->b3r5k3}}</th>
						</tr>
						<tr>
							<th>5.1</th>
							<th>Bidang Penyelenggaraan Pemerintahan Desa</th>
							<th>{{$k3->b3r51k2}}</th>
							<th>{{$k3->b3r51k3}}</th>
						</tr>
						<tr>
							<th>5.1.1</th>
							<th>Penyelenggaraan Belanja Penghasilan Tetap, Tunjangan dan Operasional Pemerintahan Desa</th> 
							<th>{{$k3->b3r511k2}}</th>
							<th>{{$k3->b3r511k3}}</th>
						</tr>
						<tr>
							<th>5.1.1.01</th>
							<th>Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa</th> 
							<th>{{$k3->b3r51101k2}}</th>
							<th>{{$k3->b3r51101k3}}</th> 
						</tr>
						<tr>
							<td>5.1.1.01.1</td>
							<td>Belanja Pegawai</td>
							<td>{{$k3->b3r511011k2}}</td>
							<td>{{$k3->b3r511011k3}}</td>
						</tr>
						<tr>
							<td>5.1.1.01.1.1</td>
							<td>Penghasilan Tetap & Tunjangan Kepala Desa</td>
							<td>{{$k3->b3r5110111k2}}</td>
							<td>{{$k3->b3r5110111k3}}</td>
						</tr>
						<tr>
							<td>5.1.1.02.1.2</td>
							<td>Penghasilan Tetap & Tunjangan Perangkat Desa</td>
							<td>{{$k3->b3r5110212k2}}</td>
							<td>{{$k3->b3r5110212k3}}</td>
						</tr>
						<tr>
							<td>5.1.1.03.1.3</td>
							<td>Jaminan Sosial Kepala Desa dan Perangkat Desa</td> 
							<td>{{$k3->b3r5110313k2}}</td>
							<td>{{$k3->b3r5110313k3}}</td> 
						</tr>
						<tr>
							<td>5.1.1.04.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r511042k2}}</td>
							<td>{{$k3->b3r511042k3}}</td> 
						</tr>
						<tr>
							<th>5.1.1.05</th>
							<th>Penyediaan Tunjangan BPD</th> 
							<th>{{$k3->b3r51105k2}}</th>
							<th>{{$k3->b3r51105k3}}</th> 
						</tr>
						<tr>
							<td>5.1.1.05.1</td>
							<td>Belanja Pegawai (Tunjangan BPD)</td> 
							<td>{{$k3->b3r511051k2}} </td>
							<td>{{$k3->b3r511051k3}}</td>
						</tr>
						<tr>
							<td>5.1.1.06.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r511062k2}} </td>
							<td>{{$k3->b3r511062k3}}</td> 
						</tr>
						<tr>
							<th>5.1.1.07</th>
							<th>Penyediaan Insentif/Operasional RT/RW</th>
							<th>{{$k3->b3r51107k2}}</th>
							<th>{{$k3->b3r51107k3}}</th>
						</tr>
						<tr>
							<td>5.1.1.07.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r511072k2}} </td>
							<td>{{$k3->b3r511072k3}}</td> 
						</tr>
						<tr>
							<th>5.1.1.99</th>
							<th>Lainnya</th> 
							<th>{{$k3->b3r51199k2}}</th>
							<th>{{$k3->b3r51199k3}}</th> 
						</tr>
						<tr>
							<td>5.1.1.99.1</td>
							<td>Belanja Pegawai</td> 
							<td>{{$k3->b3r511991k2}} </td>
							<td>{{$k3->b3r511991k3}}</td> 
						</tr>
						<tr>
							<td>5.1.1.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r511992k2}} </td>
							<td>{{$k3->b3r511992k3}}</td> 
						</tr>
						<tr>
							<th>5.1.2</th>
							<th>Sarana dan Prasarana Pemerintahan Desa</th> 
							<th>{{$k3->b3r512k2}}</th>
							<th>{{$k3->b3r512k3}}</th> 
						</tr>
						<tr>
							<td>5.1.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5122k2}} </td>
							<td>{{$k3->b3r5122k3}}</td> 
						</tr>
						<tr>
							<td>5.1.2.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5123k2}} </td>
							<td>{{$k3->b3r5123k3}}</td> 
						</tr>	
						<tr>
							<th>5.1.3</th>
							<th>Administrasi Kependudukan, Pencatatan Sipil, Statistik dan Kearsipan</th> 
							<th>{{$k3->b3r513k2}}</th>
							<th>{{$k3->b3r513k3}}</th> 
						</tr>	
						<tr>
							<td>5.1.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5132k2}} </td>
							<td>{{$k3->b3r5132k3}}</td> 
						</tr>
						<tr>
							<td>5.1.3.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5133k2}} </td>
							<td>{{$k3->b3r5133k3}}</td> 
						</tr>	
						<tr>
							<th>5.1.4</th>
							<th>Tata Praja Pemerintahan, Perencanaan, Keuangan dan Pelaporan</th> 
							<th>{{$k3->b3r514k2}}</th>
							<th>{{$k3->b3r514k3}}</th> 
						</tr>	
						<tr>
							<td>5.1.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5142k2}} </td>
							<td>{{$k3->b3r5142k3}}</td> 
						</tr>
						<tr>
							<td>5.1.4.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5143k2}} </td>
							<td>{{$k3->b3r5143k3}}</td> 
						</tr>						
						<tr>
							<th>5.1.5</th>
							<th>Pertanahan</th> 
							<th>{{$k3->b3r515k2}}</th>
							<th>{{$k3->b3r515k3}}</th> 
						</tr>	
						<tr>
							<td>5.1.5.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5152k2}} </td>
							<td>{{$k3->b3r5152k3}}</td> 
						</tr>
						<tr>
							<td>5.1.5.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5153k2}} </td>
							<td>{{$k3->b3r5153k3}}</td> 
						</tr>
						<tr>
							<th>5.1.99</th>
							<th>Lainnya</th> 
							<th>{{$k3->b3r5199k2}}</th>
							<th>{{$k3->b3r5199k3}}</th> 
						</tr>	
						<tr>
							<td>5.1.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r51992k2}} </td>
							<td>{{$k3->b3r51992k3}}</td> 
						</tr>
						<tr>
							<td>5.1.99.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r51993k2}} </td>
							<td>{{$k3->b3r51993k3}}</td> 
						</tr>
						<tr>
							<th>5.2</th>
							<th>Bidang Pelaksanaan Pembangunan Desa</th>
							<th>{{$k3->b3r52k2}}</th>
							<th>{{$k3->b3r52k3}}</th>
						</tr>
						<tr>
							<th>5.2.1</th>
							<th>Pendidikan</th>
							<th>{{$k3->b3r521k2}}</th>
							<th>{{$k3->b3r521k3}}</th>
						</tr>
						<tr>
							<td>5.2.1.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5212k2}}</td>
							<td>{{$k3->b3r5212k3}}</td>
						</tr>
						<tr>
							<td>5.2.1.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5213k2}}</td>
							<td>{{$k3->b3r5213k3}}</td>
						</tr>
						<tr>
							<th>5.2.2</th>
							<th>Kesehatan</th>
							<th>{{$k3->b3r522k2}}</th>
							<th>{{$k3->b3r522k3}}</th>
						</tr>
						<tr>
							<td>5.2.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5222k2}}</td>
							<td>{{$k3->b3r5222k3}}</td>
						</tr>
						<tr>
							<td>5.2.2.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5223k2}}</td>
							<td>{{$k3->b3r5223k3}}</td>
						</tr>
						<tr>
							<th>5.2.3</th>
							<th>Pekerjaan Umum dan Penataan Ruang</th>
							<th>{{$k3->b3r523k2}}</th>
							<th>{{$k3->b3r523k3}}</th>
						</tr>
						<tr>
							<td>5.2.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5232k2}}</td>
							<td>{{$k3->b3r5232k3}}</td>
						</tr>
						<tr>
							<td>5.2.3.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5233k2}}</td>
							<td>{{$k3->b3r5233k3}}</td>
						</tr>	
						<tr>
							<th>5.2.4</th>
							<th>Kawasan Permukiman</th>
							<th>{{$k3->b3r524k2}}</th>
							<th>{{$k3->b3r524k3}}</th>
						</tr>
						<tr>
							<td>5.2.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5242k2}}</td>
							<td>{{$k3->b3r5242k3}}</td>
						</tr>
						<tr>
							<td>5.2.4.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5243k2}}</td>
							<td>{{$k3->b3r5243k3}}</td>
						</tr>	
						<tr>
							<th>5.2.5</th>
							<th>Kehutanan dan Lingkungan Hidup</th>
							<th>{{$k3->b3r525k2}}</th>
							<th>{{$k3->b3r525k3}}</th>
						</tr>
						<tr>
							<td>5.2.5.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5252k2}}</td>
							<td>{{$k3->b3r5252k3}}</td>
						</tr>
						<tr>
							<td>5.2.5.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5253k2}}</td>
							<td>{{$k3->b3r5253k3}}</td>
						</tr>	
						<tr>
							<th>5.2.6</th>
							<th>Perhubungan, Komunikasi, dan Informatika</th>
							<th>{{$k3->b3r526k2}}</th>
							<th>{{$k3->b3r526k3}}</th>
						</tr>
						<tr>
							<td>5.2.6.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5262k2}}</td>
							<td>{{$k3->b3r5262k3}}</td>
						</tr>
						<tr>
							<td>5.2.6.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5263k2}}</td>
							<td>{{$k3->b3r5263k3}}</td>
						</tr>	
						<tr>
							<th>5.2.7</th>
							<th>Energi dan Sumber Daya Mineral</th>
							<th>{{$k3->b3r527k2}}</th>
							<th>{{$k3->b3r527k3}}</th>
						</tr>
						<tr>
							<td>5.2.7.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5272k2}}</td>
							<td>{{$k3->b3r5272k3}}</td>
						</tr>
						<tr>
							<td>5.2.7.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5273k2}}</td>
							<td>{{$k3->b3r5273k3}}</td>
						</tr>	
						<tr>
							<th>5.2.8</th>
							<th>Pariwisata</th>
							<th>{{$k3->b3r528k2}}</th>
							<th>{{$k3->b3r528k3}}</th>
						</tr>
						<tr>
							<td>5.2.8.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5282k2}}</td>
							<td>{{$k3->b3r5282k3}}</td>
						</tr>
						<tr>
							<td>5.2.8.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5283k2}}</td>
							<td>{{$k3->b3r5283k3}}</td>
						</tr>
						<tr>
							<th>5.2.99</th>
							<th>Lainnya</th>
							<th>{{$k3->b3r5299k2}}</th>
							<th>{{$k3->b3r5299k3}}</th>
						</tr>
						<tr>
							<td>5.2.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r52992k2}}</td>
							<td>{{$k3->b3r52992k3}}</td>
						</tr>
						<tr>
							<td>5.2.99.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r52993k2}}</td>
							<td>{{$k3->b3r52993k3}}</td>
						</tr>	
						<tr>
							<th>5.3</th>
							<th>Bidang Pembinaan Kemasyarakatan Desa</th>
							<th>{{$k3->b3r53k2}}</th>
							<th>{{$k3->b3r53k3}}</th> 
						</tr>			
						<tr>
							<th>5.3.1</th>
							<th>Ketenteraman, Ketertiban Umum, dan Pelindungan Masyarakat</th>
							<th>{{$k3->b3r531k2}}</th>
							<th>{{$k3->b3r531k3}}</th>
						</tr>			
						<tr>
							<td>5.3.1.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5312k2}}</td>
							<td>{{$k3->b3r5312k3}}</td>
						</tr>
						<tr>
							<td>5.3.1.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5313k2}}</td>
							<td>{{$k3->b3r5313k3}}</td>
						</tr>
						<tr>
							<th>5.3.2</th>
							<th>Kebudayaan dan Keagamaan</th>
							<th>{{$k3->b3r532k2}}</th>
							<th>{{$k3->b3r532k3}}</th>
						</tr>
						<tr>
							<td>5.3.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5322k2}}</td>
							<td>{{$k3->b3r5322k3}}</td>
						</tr>
						<tr>
							<td>5.3.2.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5323k2}}</td>
							<td>{{$k3->b3r5323k3}}</td>
						</tr>
						<tr>
							<th>5.3.3</th>
							<th>Kepemudaan dan Olah Raga</th>
							<th>{{$k3->b3r533k2}}</th>
							<th>{{$k3->b3r533k3}}</th>
						</tr>
						<tr>
							<td>5.3.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5332k2}}</td>
							<td>{{$k3->b3r5332k3}}</td>
						</tr>
						<tr>
							<td>5.3.3.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5333k2}}</td>
							<td>{{$k3->b3r5333k3}}</td>
						</tr>
						<tr>
							<th>5.3.4</th>
							<th>Kelembagaan Masyarakat</th>
							<th>{{$k3->b3r534k2}}</th>
							<th>{{$k3->b3r534k3}}</th>
						</tr>
						<tr>
							<td>5.3.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5342k2}}</td>
							<td>{{$k3->b3r5342k3}}</td>
						</tr>
						<tr>
							<td>5.3.4.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5343k2}}</td>
							<td>{{$k3->b3r5343k3}}</td>
						</tr>
						<tr>
							<th>5.3.99</th>
							<th>Lainnya</th>
							<th>{{$k3->b3r5399k2}}</th>
							<th>{{$k3->b3r5399k3}}</th>
						</tr>
						<tr>
							<td>5.3.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r53992k2}}</td>
							<td>{{$k3->b3r53992k3}}</td>
						</tr>
						<tr>
							<td>5.3.99.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r53993k2}}</td>
							<td>{{$k3->b3r53993k3}}</td>
						</tr>
						<tr>
							<th>5.4</th>
							<th>Bidang Pemberdayaan Masyarakat Desa</th>
							<th>{{$k3->b3r54k2}}</th>
							<th>{{$k3->b3r54k3}}</th> 
						</tr>
						<tr>
							<th>5.4.1</th>
							<th>Kelautan dan Perikanan</th>
							<th>{{$k3->b3r541k2}}</th>
							<th>{{$k3->b3r541k3}}</th>
						</tr>
						<tr>
							<td>5.4.1.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5412k2}}</td>
							<td>{{$k3->b3r5412k3}}</td>
						</tr>
						<tr>
							<td>5.4.1.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5413k2}}</td>
							<td>{{$k3->b3r5413k3}}</td>
						</tr>
						<tr>
							<th>5.4.2</th>
							<th>Pertanian dan Peternakan</th>
							<th>{{$k3->b3r542k2}}</th>
							<th>{{$k3->b3r542k3}}</th>
						</tr>
						<tr>
							<td>5.4.2.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5422k2}}</td>
							<td>{{$k3->b3r5422k3}}</td>
						</tr>
						<tr>
							<td>5.4.2.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5423k2}}</td>
							<td>{{$k3->b3r5423k3}}</td>
						</tr>
						<tr>
							<th>5.4.3</th>
							<th>Peningkatan Kapasitas Aparatur Desa</th>
							<th>{{$k3->b3r543k2}}</th>
							<th>{{$k3->b3r543k3}}</th>
						</tr>
						<tr>
							<td>5.4.3.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5432k2}}</td>
							<td>{{$k3->b3r5432k3}}</td>
						</tr>
						<tr>
							<td>5.4.3.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5433k2}}</td>
							<td>{{$k3->b3r5433k3}}</td>
						</tr>
						<tr>
							<th>5.4.4</th>
							<th>Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga</th>
							<th>{{$k3->b3r544k2}}</th>
							<th>{{$k3->b3r544k3}}</th>
						</tr>
						<tr>
							<td>5.4.4.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5442k2}}</td>
							<td>{{$k3->b3r5442k3}}</td>
						</tr>
						<tr>
							<td>5.4.4.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5443k2}}</td>
							<td>{{$k3->b3r5443k3}}</td>
						</tr>
						<tr>
							<th>5.4.5</th>
							<th>Koperasi, Usaha Mikro Kecil dan Menengah (UMKM)</th>
							<th>{{$k3->b3r545k2}}</th>
							<th>{{$k3->b3r545k3}}</th>
						</tr>
						<tr>
							<td>5.4.5.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5452k2}}</td>
							<td>{{$k3->b3r5452k3}}</td>
						</tr>
						<tr>
							<td>5.4.5.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5453k2}}</td>
							<td>{{$k3->b3r5453k3}}</td>
						</tr>
						<tr>
							<th>5.4.6</th>
							<th>Dukungan Penanaman Modal</th>
							<th>{{$k3->b3r546k2}}</th>
							<th>{{$k3->b3r546k3}}</th>
						</tr>
						<tr>
							<td>5.4.6.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5462k2}}</td>
							<td>{{$k3->b3r5462k3}}</td>
						</tr>
						<tr>
							<td>5.4.6.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5463k2}}</td>
							<td>{{$k3->b3r5463k3}}</td>
						</tr>
						<tr>
							<th>5.4.7</th>
							<th>Perdagangan dan Perindustrian</th>
							<th>{{$k3->b3r547k2}}</th>
							<th>{{$k3->b3r547k3}}</th>
						</tr>
						<tr>
							<td>5.4.7.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r5472k2}}</td>
							<td>{{$k3->b3r5472k3}}</td>
						</tr>
						<tr>
							<td>5.4.7.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r5473k2}}</td>
							<td>{{$k3->b3r5473k3}}</td>
						</tr>
						<tr>
							<th>5.4.99</th>
							<th>Lainnya</th>
							<th>{{$k3->b3r5499k2}}</th>
							<th>{{$k3->b3r5499k3}}</th>
						</tr>
						<tr>
							<td>5.4.99.2</td>
							<td>Belanja Barang dan Jasa</td> 
							<td>{{$k3->b3r54992k2}}</td>
							<td>{{$k3->b3r54992k3}}</td>
						</tr>
						<tr>
							<td>5.4.99.3</td>
							<td>Belanja Modal</td> 
							<td>{{$k3->b3r54993k2}}</td>
							<td>{{$k3->b3r54993k3}}</td>
						</tr>
						<tr>
							<th>5.5</th>
							<th>Bidang Penanggulangan Bencana, Keadaan Darurat dan Mendesak</th>
							<th>{{$k3->b3r55k2}}</th>
							<th>{{$k3->b3r55k3}}</th>
						</tr>
						<tr>
							<td>5.5.1</td>
							<td>Penanggulangan Bencana</td> 
							<td>{{$k3->b3r551k2}}</td>
							<td>{{$k3->b3r551k3}}</td>
						</tr>
						<tr>
							<td>5.5.2</td>
							<td>Keadaan Darurat</td> 
							<td>{{$k3->b3r552k2}}</td>
							<td>{{$k3->b3r552k3}}</td>
						</tr>
						<tr>
							<td>5.5.3</td>
							<td>Mendesak</td> 
							<td>{{$k3->b3r553k2}}</td>
							<td>{{$k3->b3r553k3}}</td>
						</tr>
						<tr>
							<td>5.5.99</td>
							<td>Lainnya</td> 
							<td>{{$k3->b3r5599k2}}</td>
							<td>{{$k3->b3r5599k3}}</td>
						</tr>
						<tr>
							<th>6</th>
							<th>PEMBIAYAAN</th>
							<th>{{$k3->b3r6k2}}</th>
							<th>{{$k3->b3r6k3}}</th>							
						</tr>
						<tr>
							<th>6.1</th>
							<th>Penerimaan Pembiayaan</th>
							<th>{{$k3->b3r61k2}}</th>
							<th>{{$k3->b3r61k3}}</th>
						</tr>
						<tr>
							<td>6.1.1</td>
							<td>SiLPA Tahun Sebelumnya</td> 
							<td>{{$k3->b3r611k2}}</td>
							<td>{{$k3->b3r611k3}}</td>
						</tr>
						<tr>
							<td>6.1.2</td>
							<td>Pencairan Dana Cadangan</td> 
							<td>{{$k3->b3r612k2}}</td>
							<td>{{$k3->b3r612k3}}</td>
						</tr>
						<tr>
							<td>6.1.3</td>
							<td>Hasil Penjualan Kekayaan Desa yang Dipisahkan</td> 
							<td>{{$k3->b3r613k2}}</td>
							<td>{{$k3->b3r613k3}}</td>
						</tr>
						<tr>
							<td>6.1.9</td>
							<td>Penerimaan Pembiayaan Lainnya</td> 
							<td>{{$k3->b3r6199k2}}</td>
							<td>{{$k3->b3r6199k3}}</td>
						</tr>
						<tr>
							<th>6.2</th>
							<th>Pengeluaran Pembiayaan</th>
							<th>{{$k3->b3r62k2}}</th>
							<th>{{$k3->b3r62k3}}</th>
						</tr>
						<tr>
							<td>6.2.1</td>
							<td>Pembentukan Dana Cadangan</td> 
							<td>{{$k3->b3r621k2}}</td>
							<td>{{$k3->b3r621k3}}</td>
						</tr>
						<tr>
							<td>6.2.2</td>
							<td>Penyertaan Modal Desa</td> 
							<td>{{$k3->b3r622k2}}</td>
							<td>{{$k3->b3r622k3}}</td>
						</tr>
						<tr>
							<td>6.2.3</td>
							<td>Pengeluaran Pembiayaan Lainnya</td> 
							<td>{{$k3->b3r623k2}}</td>
							<td>{{$k3->b3r623k3}}</td>
						</tr>
						<tr>
							<th></th>
							<th>SISA LEBIH PEMBIAYAAN</th>
							<th>{{$k3->b3r7k2}}</th>
							<th>{{$k3->b3r7k3}}</th>
						</tr>
					</tbody>
				</table>
			{{-- </div> --}}
		</div>
		</div>

	{{-- BLOK IV --}}
		<div class="page_break"></div>
		<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK IV. C A T A T A N</h2>
		</div>
		<div class="clearfix">			
			{{-- <div class="plan"> --}}
				<h5 class="page-body text-center">
					Apabila ada hal - hal yang memerlukan keterangan, bisa dituliskan pada blok ini. 
					<br>Selain informasi dari responden, petugas juga bisa menambahkan catatan
					<br>untuk memperjelas masalah yang berkaitan dengan isian kuesioner.
				</h5>
			{{-- </div> --}}
			<textarea name="b4r1" class="form-control" rows="20" cols="30" placeholder="Catatan">{{$k3->b4r1}}</textarea>
		</div>
		</div>	
	
	{{-- BLOK V --}}
		<div class="page_break"></div>
		<div class="plan selected-plan profile-section">
		<div class="profile-section">
			<h2 class="page-title text-center">BLOK V. PENGESAHAN</h2>
		</div>
		<div class="clearfix">
			Daftar ini diisi dengan sebenarnya <br>
			Menurut keadaan yang sesungguhnya oleh : <p></p>
		</div>
		
		<div class="tab-pane fade active in">
			<div class="profile-section">	
				<table class="table table-borderless">
					<tbody>
						<tr>
							<th width="50%">Nama</th>
							<th>Tempat</th>
						</tr>
						<tr>							
							<td bgcolor="white">{{$k3->b5r1}}</td>
							<td bgcolor="white">{{$k3->b5r4}}</td>
						</tr>
						<tr>
							<td></td><td></td>
						</tr>
						<tr>
							<th>NIP</th>
							<th>Tanggal</th>
						</tr>
						<tr>	
							<td bgcolor="white">{{$k3->b5r2}}</td>
							<td bgcolor="white">{{$k3->b5r5}}</td>
						</tr>
						<tr>
							<td></td><td></td>
						</tr>
						<tr>
							<th>Jabatan</th>
							<th>Mengetahui Kepala Desa</th>
						</tr>
						<tr>
							<td bgcolor="white">{{$k3->b5r3}}</td>
							<td bgcolor="white">{{$k3->b5r6}}</td>
						</tr>
						<tr>
							<td></td><td></td>
						</tr>
						<tr>
							<th></th>
							<th>NIP Kepala Desa</th>
						</tr>
						<tr>	
							<td></td>
							<td bgcolor="white">{{$k3->b5r7}}</td>
						</tr>
						<tr>
							<th><i class="fa fa-square"></i>Bukti Pengesahan</th>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">		
				
				<img src="{{$base64}}" width="300" height="200"/>			
					<div class="col-md-6">	
						{{-- <div class="panel-content">
							<h2 class="heading"><i class="fa fa-square"></i> Bukti Pengesahan</h2>
							<input type="file" name="b5r8" id="dropify-event"  data-default-file="{{asset('files/'.$k3->b5r8)}}" data-allowed-file-extensions="pdf png jpg jpeg">
						</div> --}}						
					</div>
				</div>
			</div>			
		</div>
		</div>

	{{-- BLOK VI --}}
		<div class="page_break"></div>
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
							<td class="text-center">{{$k3->b6r1k1}}</td>
							<td class="text-center">{{$k3->b6r1k2}}</td>
						</tr>
						<tr>
							<th>2. Tanggal Pencacahan </th>
							<td class="text-center">{{$k3->b6r2k1}}<span>&nbsp;s.d.&nbsp;</span>{{$k3->b6r2k2}}</td>
							<td class="text-center">{{$k3->b6r2k3}}<span>&nbsp;s.d.&nbsp;</span>{{$k3->b6r2k4}}</td>
						</tr>
						<tr>
							<th>3. Tanda Tangan </th>
							<td class="text-center align-middle">								
								{{-- <label class="fancy-checkbox custom-bgcolor-green"> --}}
									<input type="checkbox" {{($k3->b6r3k1 == '1') ? 'checked' : ''}}><span>ttd pcl</span>								
								{{-- </label> --}}
							</td>
							<td class="text-center align-middle">
								{{-- <label class="fancy-checkbox custom-bgcolor-green"> --}}
									<input type="checkbox" {{($k3->b6r3k2 == '1') ? 'checked' : ''}}><span>ttd pml</span>								
								{{-- </label> --}}
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
		</div>
	<footer>
		<p class="copyright">&copy; 2020 <a href="https://www.gorontaloutara.bps.go.id" target="_blank">BPS Kabupaten Gorontalo Utara</a>. Seksi Integrasi Pengolahan dan Diseminasi Statistik.</p>
	</footer>
</div>
</body>