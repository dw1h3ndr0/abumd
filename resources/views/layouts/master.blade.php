<!doctype html>
<html lang="en">

<head>
	<title>Abumd | Aplikasi Survei Statistik Keuangan Badan Usaha Milik Daerah</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/styl.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/sty.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/metisMenu/metisMenu.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/toastr/toastr.min.css')}}">	
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/dropify/css/dropify.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		@if(!request()->is('entri_data*'))
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		@endif
		<!-- MAIN CONTENT -->
		@yield('content')
		<!-- END MAIN CONTENT -->
		<div class="clearfix"></div>
		<footer>
			<p class="copyright">&copy; 2021 <a href="https://www.gorontaloutara.bps.go.id" target="_blank">BPS Kabupaten Gorontalo Utara</a>. Seksi IPDS.</p>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/metisMenu/metisMenu.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/toastr/toastr.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/dropify/js/dropify.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
	{{-- <script src="{{asset('admin/assets/scripts/common.js')}}"></script> --}}
	<script src="{{asset('admin/assets/js/animated-headline.js')}}"></script>
    <script src="{{asset('admin/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--  custom script -->
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
    <script src="{{asset('admin/assets/js/modernizr.js')}}"></script>

  	<script type="text/javascript" src="{{asset('admin/assets/vendor/DataTables-1.10.24/js/jquery.dataTables.min.js')}}"></script>
  	<script type="text/javascript" src="{{asset('admin/assets/vendor/DataTables-1.10.24/js/dataTables.bootstrap4.min.js')}}"></script>
    
  	  <!-- Page level Sweet Allert scripts -->
  @include('sweetalert::alert')

  @stack('scripts')

  
	<script>
		$(document).ready(function() {

			// sidebar navigation
			$('#main-menu').metisMenu();

			// sidebar nav scrolling
			$('#left-sidebar .sidebar-scroll').slimScroll({
				height: '95%',
				wheelStep: 5,
				touchScrollStep: 50,
				color: '#cecece'
			});

			// toggle fullwidth layout
			$('.btn-toggle-fullwidth').on('click', function() {
				if(!$('body').hasClass('layout-fullwidth')) {
					$('body').addClass('layout-fullwidth');
					$(this).find(".fa").toggleClass('fa-angle-left fa-angle-right');

					$(this).animate({
						left: "+=28px"
					}, 800);

				} else {
					$('body').removeClass('layout-fullwidth');
					$(this).find(".fa").toggleClass('fa-angle-left fa-angle-right');

					$(this).animate({
						left: "-=28px"
					}, 800);
				}
			});

			// off-canvas menu toggle
			$('.btn-toggle-offcanvas').on('click', function() {
				$('body').toggleClass('offcanvas-active');
			});

			$('#main-content').on('click', function() {
				$('body').removeClass('offcanvas-active');
			});

			// adding effect dropdown menu
			$('.dropdown').on('show.bs.dropdown', function() {
				$(this).find('.dropdown-menu').first().stop(true, true).animate({
					top: '100%'
				}, 200);
			});

			$('.dropdown').on('hide.bs.dropdown', function() {
				$(this).find('.dropdown-menu').first().stop(true, true).animate({
					top: '80%'
				}, 200);
			});

			// navbar search form
			$('.navbar-form.search-form input[type="text"]')
			.on('focus', function() {
				$(this).animate({
					width: '+=50px'
				}, 300);
			})
			.on('focusout', function() {
				$(this).animate({
					width: '-=50px'
				}, 300);
			});

			// Bootstrap tooltip init
			if($('[data-toggle="tooltip"]').length > 0) {
				$('[data-toggle="tooltip"]').tooltip();
			}

			if($('[data-toggle="popover"]').length > 0) {
				$('[data-toggle="popover"]').popover();
			}

			$(window).on('load', function() {
				// for shorter main content
				if($('#main-content').height() < $('#left-sidebar').height()) {
					$('#main-content').css('min-height', $('#left-sidebar').innerHeight() - $('footer').innerHeight());
				}
			});

			$(window).on('load resize', function() {
				if($(window).innerWidth() < 360) {
					$('.navbar-brand img.logo').attr('src', '{{asset('admin/assets/img/logo-minimal.png')}}');
				} else {
					$('.navbar-brand img.logo').attr('src', '{{asset('admin/assets/img/Logo Abumd.png')}}');
				}
			});

		});

		// toggle function
		$.fn.clickToggle = function( f1, f2 ) {
			return this.each( function() {
				var clicked = false;
				$(this).bind('click', function() {
					if(clicked) {
						clicked = false;
						return f2.apply(this, arguments);
					}

					clicked = true;
					return f1.apply(this, arguments);
				});
			});

		};
	</script>

	<script>
		base_url="{{asset('')}}";

		$(function() {
			$('.dropify').dropify();

			var drEvent = $('#dropify-event').dropify();
			drEvent.on('dropify.beforeClear', function(event, element) {
				return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
			});

			drEvent.on('dropify.afterClear', function(event, element) {
				alert('File deleted');
			});

			$('.dropify-fr').dropify({
				messages: {
					default: 'Glissez-déposez un fichier ici ou cliquez',
					replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
					remove: 'Supprimer',
					error: 'Désolé, le fichier trop volumineux'
				}
			});
		});

		/**** JQuery Next Previouse Tab Button *******/
		jQuery('body').on('click','.next-tab', function(){
		      var next = jQuery('.nav-tabs > .active').next('li');
		      if(next.length){
		        next.find('a').trigger('click');
		      }else{
		        jQuery('#myTabs a:first').tab('show');
		      }
		});

		jQuery('body').on('click','.previous-tab', function(){
		      var prev = jQuery('.nav-tabs > .active').prev('li')
		      if(prev.length){
		        prev.find('a').trigger('click');
		      }else{
		        jQuery('#myTabs a:last').tab('show');
		      }
		});

		/**** JQuery Pilih Tahun Daftar Sampel *******/
		// $(document).ready(function() {
		// 	 $("#tahun_sampel_k3").change(function(){
		// 		// $('select[name="tahun"]').on('change', function(){
		// 		var tahun = $(this).val();
		// 		var x = document.getElementById("daftar_sampel_k3");
		// 		var url = base_url+'daftar_sampel/'+tahun;
		// 		//console.log(url);
		// 		if(tahun){
		// 			console.log(tahun)
		// 			x.style.display = "block";
		// 			window.location = url;
		// 		}else{
		// 			var x = document.getElementById("daftar_sampel_k3");
		// 			x.style.display = "none";
		// 		}
		// 	});
		// });

		/**** JQuery Dinamic Dropdown Pilih Wilayah *******/
		// $(document).ready(function() {
  //   		$('select[name="b1r1"]').on('change', function() {
    		 	
  //   		 	var kode_provinsi = $(this).val();
    		 	
  //   		 	if(kode_provinsi) {

  //   		 		$.ajax({

  //   		 			url: base_url+'provinsi/'+kode_provinsi,
  //   		 			type: 'GET',
  //   		 			dataType: 'json',
  //   		 			success: function(data){
  //   		 				// console.log(data)
  //   		 				$('select[name="b1r2"]').empty();
  //   		 				$('select[name="b1r3"]').empty();
  //   		 				$('select[name="b1r4"]').empty();
  //   		 				$('select[name="b1r2"]').append('<option value="">--- Pilih Kabupaten ---</option>');
  //   		 				$.each(data, function(key, value) {
		// 	                    $('select[name="b1r2"]').append('<option value="'+ key +'">'+ value +'</option>');
		// 	                 });
  //   		 			}
  //   		 		});
  //   		 	}else{
  //   		 		$('select[name="b1r2"]').empty();
  //   		 	}
  //   		});	

  //   	});

    	// $(document).ready(function(){
    	// 	$('select[name="b1r2"]').on('change', function() {
    		 	
    	// 	 	var kode_provinsi = $('select[name="b1r1"]').val();
    	// 	 	var kode_kabupaten = $(this).val();
    	// 	 	// console.log(kode_provinsi)
    	// 	 	// console.log(kode_kabupaten)
    	// 	 	if(kode_kabupaten) {

    	// 	 		$.ajax({

    	// 	 			url: base_url+'kabupaten/'+kode_provinsi+'/'+kode_kabupaten,
    	// 	 			type: 'GET',
    	// 	 			dataType: 'json',
    	// 	 			success: function(data){
    	// 	 				// console.log(data)
    	// 	 				$('select[name="b1r3"]').empty();
    	// 	 				$('select[name="b1r4"]').empty();
    	// 	 				$('select[name="b1r3"]').append('<option value="">--- Pilih Kecamatan ---</option>');
    	// 	 				$.each(data, function(key, value) {
			  //                   $('select[name="b1r3"]').append('<option value="'+ key +'">'+ value +'</option>');
			  //                });
    	// 	 			}
    	// 	 		});
    	// 	 	}else{
    	// 	 		$('select[name="b1r3"]').empty();
    	// 	 	}
    	// 	});
    	// });

    	// $(document).ready(function(){
    	// 	$('select[name="b1r3"]').on('change', function() {
    		 	
    	// 	 	var kode_provinsi = $('select[name="b1r1"]').val();
    	// 	 	var kode_kabupaten = $('select[name="b1r2"]').val();
    	// 	 	var kode_kecamatan = $(this).val();
    	// 	 	// console.log(kode_provinsi)
    	// 	 	// console.log(kode_kabupaten)
    	// 	 	// console.log(kode_kecamatan)
    	// 	 	if(kode_kecamatan) {

    	// 	 		$.ajax({

    	// 	 			url: base_url+'kecamatan/'+kode_provinsi+'/'+kode_kabupaten+'/'+kode_kecamatan,
    	// 	 			type: 'GET',
    	// 	 			dataType: 'json',
    	// 	 			success: function(data){
    	// 	 				// console.log(data)
    	// 	 				$('select[name="b1r4"]').empty();
    	// 	 				$('select[name="b1r4"]').append('<option value="">--- Pilih Desa ---</option>');
    	// 	 				$.each(data, function(key, value) {
			  //                   $('select[name="b1r4"]').append('<option value="'+ key +'">'+ value +'</option>');
			  //                });
    	// 	 			}
    	// 	 		});
    	// 	 	}else{
    	// 	 		$('select[name="b1r4"]').empty();
    	// 	 	}
    	// 	});
    	// });

    	/**** JQuery Autosum Entri K3 *******/
    	$(document).ready(function(){

    		/** BLOK III **/    		
    		$('.form-4k2').change(function(){   

    			var totalSum = 0;
    			$('.form-4k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#4k2').val(totalSum);
    			$('#4k2').trigger("change");     			
    		});

    		$('.form-4k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-4k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#4k3').val(totalSum);
    			$('#4k3').trigger("change");     			
    		});

    		$('.form-41k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-41k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#41k2').val(totalSum);
    			$('#41k2').trigger("change");    			
    		});

    		$('.form-41k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-41k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#41k3').val(totalSum);
    			$('#41k3').trigger("change");     			
    		});

    		$('.form-42k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-42k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#42k2').val(totalSum);
    			$('#42k2').trigger("change");     			
    		});

    		$('.form-42k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-42k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#42k3').val(totalSum);
    			$('#42k3').trigger("change");     			
    		});

    		$('.form-43k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-43k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#43k2').val(totalSum);
    			$('#43k2').trigger("change");     			
    		});

    		$('.form-43k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-43k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#43k3').val(totalSum);
    			$('#43k3').trigger("change");     			
    		});

    		/** BLOK III (1) **/
    		$('.form-5k2').change(function(){   

    			var totalSum = 0;
    			$('.form-5k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			
    // 			var id = "{{request()->segment(2)}}";
    // 			var b3r52k2 = 0;
    // 			var b3r53k2 = 0;
    // 			var b3r54k2 = 0;
    // 			var b3r55k2 = 0;

				// $.ajax({
			 //        url: base_url+'getK3/'+id,
			 //        type: 'GET',
			 //        dataType: 'json',
			 //        success: function(response){  

				//         if(response != null){				            
				//             b3r52k2 = response['data'].b3r52k2;
			 //    			b3r53k2 = response['data'].b3r53k2;
			 //    			b3r54k2 = response['data'].b3r54k2;
			 //    			b3r55k2 = response['data'].b3r55k2;
			    			
			 //    			totalSum = totalSum + b3r52k2 + b3r53k2 + b3r54k2 + b3r55k2;
			 //    			// console.log(totalSum)	<- sesuai

			 //    			$('#5k2').val(totalSum);
			 //    			$('#5k2').trigger("change");  
				//         }
				//     }
			 //    });

			    $('#5k2').val(totalSum);
    			$('#5k2').trigger("change");
				//console.log(totalSum)   	 <- hasilnya balik lagi		
    		});

    		$('.form-5k3').change(function(){    			
    			
    			var totalSum = 0;
    			$('.form-5k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			
    // 			var id = "{{request()->segment(2)}}";
    // 			var b3r52k3 = 0;
    // 			var b3r53k3 = 0;
    // 			var b3r54k3 = 0;
    // 			var b3r55k3 = 0;

				// $.ajax({
			 //        url: base_url+'getK3/'+id,
			 //        type: 'GET',
			 //        dataType: 'json',
			 //        success: function(response){  

				//         if(response != null){				            
				//             b3r52k3 = response['data'].b3r52k3;
			 //    			b3r53k3 = response['data'].b3r53k3;
			 //    			b3r54k3 = response['data'].b3r54k3;
			 //    			b3r55k3 = response['data'].b3r55k3;
			    			
			 //    			totalSum = totalSum + b3r52k3 + b3r53k3 + b3r54k3 + b3r55k3;
			 //    			// console.log(totalSum)	<- sesuai

			 //    			$('#5k3').val(totalSum);
			 //    			$('#5k3').trigger("change");  
				//         }
				//     }
			 //    });

			    $('#5k3').val(totalSum);
    			$('#5k3').trigger("change"); 
				//console.log(totalSum)   	 <- hasilnya balik lagi    			
    		});

    		$('.form-51k2').change(function(){   

    			var totalSum = 0;
    			$('.form-51k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51k2').val(totalSum);
    			$('#51k2').trigger("change");     			
    		});

    		$('.form-51k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-51k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51k3').val(totalSum);
    			$('#51k3').trigger("change");     			
    		});

    		$('.form-511k2').change(function(){   

    			var totalSum = 0;
    			$('.form-511k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#511k2').val(totalSum);
    			$('#511k2').trigger("change");     			
    		});

    		$('.form-511k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-511k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#511k3').val(totalSum);
    			$('#511k3').trigger("change");     			
    		});

    		$('.form-512k2').change(function(){   

    			var totalSum = 0;
    			$('.form-512k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#512k2').val(totalSum);
    			$('#512k2').trigger("change");     			
    		});

    		$('.form-512k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-512k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#512k3').val(totalSum);
    			$('#512k3').trigger("change");     			
    		});

    		$('.form-513k2').change(function(){   

    			var totalSum = 0;
    			$('.form-513k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#513k2').val(totalSum);
    			$('#513k2').trigger("change");     			
    		});

    		$('.form-513k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-513k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#513k3').val(totalSum);
    			$('#513k3').trigger("change");     			
    		});

    		$('.form-514k2').change(function(){   

    			var totalSum = 0;
    			$('.form-514k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#514k2').val(totalSum);
    			$('#514k2').trigger("change");     			
    		});

    		$('.form-514k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-514k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#514k3').val(totalSum);
    			$('#514k3').trigger("change");     			
    		});

    		$('.form-514k2').change(function(){   

    			var totalSum = 0;
    			$('.form-514k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#514k2').val(totalSum);
    			$('#514k2').trigger("change");     			
    		});

    		$('.form-514k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-514k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#514k3').val(totalSum);
    			$('#514k3').trigger("change");     			
    		});

    		$('.form-515k2').change(function(){   

    			var totalSum = 0;
    			$('.form-515k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#515k2').val(totalSum);
    			$('#515k2').trigger("change");     			
    		});

    		$('.form-515k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-515k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#515k3').val(totalSum);
    			$('#515k3').trigger("change");     			
    		});

    		$('.form-5199k2').change(function(){   

    			var totalSum = 0;
    			$('.form-5199k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5199k2').val(totalSum);
    			$('#5199k2').trigger("change");     			
    		});

    		$('.form-5199k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-5199k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5199k3').val(totalSum);
    			$('#5199k3').trigger("change");     			
    		});

    		$('.form-51101k2').change(function(){   

    			var totalSum = 0;
    			$('.form-51101k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51101k2').val(totalSum);
    			$('#51101k2').trigger("change");     			
    		});

    		$('.form-51101k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-51101k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51101k3').val(totalSum);
    			$('#51101k3').trigger("change");     			
    		});

    		$('.form-51105k2').change(function(){   

    			var totalSum = 0;
    			$('.form-51105k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51105k2').val(totalSum);
    			$('#51105k2').trigger("change");     			
    		});

    		$('.form-51105k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-51105k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51105k3').val(totalSum);
    			$('#51105k3').trigger("change");     			
    		});

    		$('.form-51107k2').change(function(){   

    			var totalSum = 0;
    			$('.form-51107k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51107k2').val(totalSum);
    			$('#51107k2').trigger("change");     			
    		});

    		$('.form-51107k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-51107k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51107k3').val(totalSum);
    			$('#51107k3').trigger("change");     			
    		});

    		$('.form-51199k2').change(function(){   

    			var totalSum = 0;
    			$('.form-51199k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51199k2').val(totalSum);
    			$('#51199k2').trigger("change");     			
    		});

    		$('.form-51199k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-51199k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#51199k3').val(totalSum);
    			$('#51199k3').trigger("change");     			
    		});

    		/** BLOK III (2) **/

    		$('.form-52k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-52k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#52k2').val(totalSum);
    			$('#52k2').trigger("change");    			
    		});

    		$('.form-52k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-52k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#52k3').val(totalSum);
    			$('#52k3').trigger("change");     			
    		});

    		$('.form-521k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-521k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#521k2').val(totalSum);
    			$('#521k2').trigger("change");    			
    		});

    		$('.form-521k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-521k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#521k3').val(totalSum);
    			$('#521k3').trigger("change");     			
    		});

    		$('.form-522k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-522k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#522k2').val(totalSum);
    			$('#522k2').trigger("change");    			
    		});

    		$('.form-522k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-522k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#522k3').val(totalSum);
    			$('#522k3').trigger("change");     			
    		});

    		$('.form-523k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-523k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#523k2').val(totalSum);
    			$('#523k2').trigger("change");    			
    		});

    		$('.form-523k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-523k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#523k3').val(totalSum);
    			$('#523k3').trigger("change");     			
    		});

    		$('.form-524k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-524k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#524k2').val(totalSum);
    			$('#524k2').trigger("change");    			
    		});

    		$('.form-524k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-524k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#524k3').val(totalSum);
    			$('#524k3').trigger("change");     			
    		});

    		$('.form-525k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-525k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#525k2').val(totalSum);
    			$('#525k2').trigger("change");    			
    		});

    		$('.form-525k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-525k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#525k3').val(totalSum);
    			$('#525k3').trigger("change");     			
    		});

    		$('.form-526k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-526k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#526k2').val(totalSum);
    			$('#526k2').trigger("change");    			
    		});

    		$('.form-526k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-526k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#526k3').val(totalSum);
    			$('#526k3').trigger("change");     			
    		});

    		$('.form-527k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-527k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#527k2').val(totalSum);
    			$('#527k2').trigger("change");    			
    		});

    		$('.form-527k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-527k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#527k3').val(totalSum);
    			$('#527k3').trigger("change");     			
    		});

    		$('.form-528k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-528k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#528k2').val(totalSum);
    			$('#528k2').trigger("change");    			
    		});

    		$('.form-528k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-528k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#528k3').val(totalSum);
    			$('#528k3').trigger("change");     			
    		});

    		$('.form-5299k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-5299k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5299k2').val(totalSum);
    			$('#5299k2').trigger("change");    			
    		});

    		$('.form-5299k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-5299k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5299k3').val(totalSum);
    			$('#5299k3').trigger("change");     			
    		});

    		$('.form-53k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-53k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});

    // 			var id = "{{request()->segment(2)}}";
    // 			var b3r532k2 = 0;
    // 			var b3r533k2 = 0;
    // 			var b3r534k2 = 0;
    // 			var b3r5399k2 = 0;

				// $.ajax({
			 //        url: base_url+'getK3/'+id,
			 //        type: 'GET',
			 //        dataType: 'json',
			 //        success: function(response){  

				//         if(response != null){				            
				//             b3r532k2 = response['data'].b3r532k2;
			 //    			b3r533k2 = response['data'].b3r533k2;
			 //    			b3r534k2 = response['data'].b3r534k2;
			 //    			b3r5399k2 = response['data'].b3r5399k2;
			    			
			 //    			totalSum = totalSum + b3r532k2 + b3r533k2 + b3r534k2 + b3r5399k2;
			 //    			// console.log(totalSum)	<- sesuai

			 //    			$('#53k2').val(totalSum);
			 //    			$('#53k2').trigger("change");  
				//         }
				//     }
			 //    });  
			    $('#53k2').val(totalSum);
    			$('#53k2').trigger("change"); 			
    		});

    		$('.form-53k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-53k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			
    // 			var id = "{{request()->segment(2)}}";
    // 			var b3r532k3 = 0;
    // 			var b3r533k3 = 0;
    // 			var b3r534k3 = 0;
    // 			var b3r5399k3 = 0;

				// $.ajax({
			 //        url: base_url+'getK3/'+id,
			 //        type: 'GET',
			 //        dataType: 'json',
			 //        success: function(response){  

				//         if(response != null){				            
				//             b3r532k3 = response['data'].b3r532k3;
			 //    			b3r533k3 = response['data'].b3r533k3;
			 //    			b3r534k3 = response['data'].b3r534k3;
			 //    			b3r5399k3 = response['data'].b3r5399k3;
			    			
			 //    			totalSum = totalSum + b3r532k3 + b3r533k3 + b3r534k3 + b3r5399k3;
			 //    			// console.log(totalSum)	<- sesuai

			 //    			$('#53k3').val(totalSum);
			 //    			$('#53k3').trigger("change");  
				//         }
				//     }
			 //    });  
			    $('#53k3').val(totalSum);
    			$('#53k3').trigger("change");  			
    		});

    		$('.form-531k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-531k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#531k2').val(totalSum);
    			$('#531k2').trigger("change");    			
    		});

    		$('.form-531k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-531k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#531k3').val(totalSum);
    			$('#531k3').trigger("change");     			
    		});

    		$('.form-532k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-532k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#532k2').val(totalSum);
    			$('#532k2').trigger("change");    			
    		});

    		$('.form-532k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-532k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#532k3').val(totalSum);
    			$('#532k3').trigger("change");     			
    		});

    		$('.form-533k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-533k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#533k2').val(totalSum);
    			$('#533k2').trigger("change");    			
    		});

    		$('.form-533k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-533k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#533k3').val(totalSum);
    			$('#533k3').trigger("change");     			
    		});

    		$('.form-534k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-534k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#534k2').val(totalSum);
    			$('#534k2').trigger("change");    			
    		});

    		$('.form-534k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-534k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#534k3').val(totalSum);
    			$('#534k3').trigger("change");     			
    		});

    		$('.form-5399k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-5399k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5399k2').val(totalSum);
    			$('#5399k2').trigger("change");    			
    		});

    		$('.form-5399k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-5399k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5399k3').val(totalSum);
    			$('#5399k3').trigger("change");     			
    		});

    		$('.form-54k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-54k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});

    // 			var id = "{{request()->segment(2)}}";
    // 			var b3r547k2 = 0;
    // 			var b3r5499k2 = 0;

				// $.ajax({
			 //        url: base_url+'getK3/'+id,
			 //        type: 'GET',
			 //        dataType: 'json',
			 //        success: function(response){  

				//         if(response != null){				            
				//             b3r547k2 = response['data'].b3r547k2;
			 //    			b3r5499k2 = response['data'].b3r5499k2;
			    			
			 //    			totalSum = totalSum + b3r547k2 + b3r5499k2;
			 //    			// console.log(totalSum)	<- sesuai

			 //    			$('#54k2').val(totalSum);
			 //    			$('#54k2').trigger("change");  
				//         }
				//     }
			 //    });  
			    $('#54k2').val(totalSum);
    			$('#54k2').trigger("change");			
    		});

    		$('.form-54k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-54k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			
    // 			var id = "{{request()->segment(2)}}";
    // 			var b3r547k3 = 0;
    // 			var b3r5499k3 = 0;

				// $.ajax({
			 //        url: base_url+'getK3/'+id,
			 //        type: 'GET',
			 //        dataType: 'json',
			 //        success: function(response){  

				//         if(response != null){				            
				//             b3r547k3 = response['data'].b3r547k3;
			 //    			b3r5499k3 = response['data'].b3r5499k3;
			    			
			 //    			totalSum = totalSum + b3r547k3 + b3r5499k3;
			 //    			// console.log(totalSum)	<- sesuai

			 //    			$('#54k3').val(totalSum);
			 //    			$('#54k3').trigger("change");  
				//         }
				//     }
			 //    });    
			    $('#54k3').val(totalSum);
    			$('#54k3').trigger("change"); 			
    		});

    		$('.form-541k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-541k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#541k2').val(totalSum);
    			$('#541k2').trigger("change");    			
    		});

    		$('.form-541k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-541k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#541k3').val(totalSum);
    			$('#541k3').trigger("change");     			
    		});

    		$('.form-542k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-542k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#542k2').val(totalSum);
    			$('#542k2').trigger("change");    			
    		});

    		$('.form-542k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-542k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#542k3').val(totalSum);
    			$('#542k3').trigger("change");     			
    		});

    		$('.form-543k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-543k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#543k2').val(totalSum);
    			$('#543k2').trigger("change");    			
    		});

    		$('.form-543k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-543k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#543k3').val(totalSum);
    			$('#543k3').trigger("change");     			
    		});

    		$('.form-544k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-544k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#544k2').val(totalSum);
    			$('#544k2').trigger("change");    			
    		});

    		$('.form-544k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-544k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#544k3').val(totalSum);
    			$('#544k3').trigger("change");     			
    		});

    		$('.form-545k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-545k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#545k2').val(totalSum);
    			$('#545k2').trigger("change");    			
    		});

    		$('.form-545k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-545k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#545k3').val(totalSum);
    			$('#545k3').trigger("change");     			
    		});

    		$('.form-546k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-546k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#546k2').val(totalSum);
    			$('#546k2').trigger("change");    			
    		});

    		$('.form-546k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-546k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#546k3').val(totalSum);
    			$('#546k3').trigger("change");     			
    		});

    		$('.form-547k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-547k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#547k2').val(totalSum);
    			$('#547k2').trigger("change");    			
    		});

    		$('.form-547k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-547k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#547k3').val(totalSum);
    			$('#547k3').trigger("change");     			
    		});

    		$('.form-5499k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-5499k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5499k2').val(totalSum);
    			$('#5499k2').trigger("change");    			
    		});

    		$('.form-5499k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-5499k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#5499k3').val(totalSum);
    			$('#5499k3').trigger("change");     			
    		});

    		$('.form-55k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-55k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#55k2').val(totalSum);
    			$('#55k2').trigger("change");    			
    		});

    		$('.form-55k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-55k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#55k3').val(totalSum);
    			$('#55k3').trigger("change");     			
    		});

    		$('.form-6k2').change(function(){    			
    			 var totalSum = 0;
    			$('.form-6k2').each(function(){
    				var inputVal = $(this).val();
    				if(inputVal == $('#62k2').val()){
    					inputVal = -inputVal;
    				}
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});    			

    			$('#6k2').val(Math.abs(totalSum));
    			$('#6k2').trigger("change");    			
    		});

    		$('.form-6k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-6k3').each(function(){
    				var inputVal = $(this).val();
    				if(inputVal == $('#62k3').val()){
    					inputVal = -inputVal;
    				}
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#6k3').val(Math.abs(totalSum));
    			$('#6k3').trigger("change");     			
    		});

    		$('.form-61k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-61k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#61k2').val(totalSum);
    			$('#61k2').trigger("change");    			
    		});

    		$('.form-61k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-61k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#61k3').val(totalSum);
    			$('#61k3').trigger("change");     			
    		});

    		$('.form-62k2').change(function(){    			
    			var totalSum = 0;
    			$('.form-62k2').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#62k2').val(totalSum);
    			$('#62k2').trigger("change");    			
    		});

    		$('.form-62k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-62k3').each(function(){
    				var inputVal = $(this).val();
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#62k3').val(totalSum);
    			$('#62k3').trigger("change");     			
    		});

    		$('.form-7k2').change(function(){    			
    			 var totalSum = 0;
    			$('.form-7k2').each(function(){
    				var inputVal = $(this).val();
    				if(inputVal == $('#5k2').val()){
    					inputVal = -inputVal;
    				}
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});    			

    			$('#7k2').val(totalSum);
    			$('#7k2').trigger("change");    			
    		});

    		$('.form-7k3').change(function(){    			
    			var totalSum = 0;
    			$('.form-7k3').each(function(){
    				var inputVal = $(this).val();
    				if(inputVal == $('#5k3').val()){
    					inputVal = -inputVal;
    				}
    				if($.isNumeric(inputVal)){
    					totalSum += parseFloat(inputVal);
    				}
    			});
    			$('#7k3').val(totalSum);
    			$('#7k3').trigger("change");     			
    		});

    	});

		
		// /**** JQuery Ajax Post Request Simpan Kuesioner K3 *******/
		// // $.ajaxSetup({
	 // //        headers: {
	 // //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 // //        }
	 // //    });   

	 //    $(".btn-keluar").click(function(){

	 //        // var datastring = $("#form_bloki").serialize();
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        //console.log(datastring)
	 //        // $.ajax({
	 //        //    type:'POST',
	 //        //    url:'/entri_data/'+id+'/simpan_bloki/'+blok,
	 //        //    data: datastring,
  //       	//    dataType: "json",	
	 //        //    success:function(data){
	 //        //       alert(data);
	 //        //       console.log(datastring)
	 //        //    }
	 //        // });

	 //        // $(this).parent().parent().attr("action", "/entri_data/"+id+"/simpan_bloki/0");
	        
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/0"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-bloki").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	console.log(blok)
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/1"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokii").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/2"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokiii").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/3"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokiii1").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/3.1"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokiii2").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/3.2"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokiii3").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/3.3"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokiii4").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/3.4"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokiv").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/4"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokv").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/5"
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".btn-blokvi").click(function(){
	 //        var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }	
	 //        var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/6"
	 //        $(this).closest("form").attr("action", url); 
		// });


		// $(".next-blok").click(function(){
		// 	var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
		// 	var key = "0";
		// 	switch (blok) {
		// 	  case "bloki":
		// 	    key = "2";
		// 	    break;
		// 	  case "blokii":
		// 	    key = "3";
		// 	    break;
		// 	  case "blokiii":
		// 	    key = "3.1";
		// 	    break;
		// 	  case "blokiii_1":
		// 	    key = "3.2";
		// 	    break;  
		// 	  case "blokiii_2":
		// 	    key = "3.3";
		// 	    break;  
		// 	  case "blokiii_3":
		// 	    key = "3.4";
		// 	    break;
		// 	  case "blokiii_4":
		// 	    key = "4";
		// 	    break;
		// 	  case "blokiv":
		// 	    key = "5";
		// 	    break;
		// 	  case "blokv":
		// 	    key = "6";
		// 	    break;
		// 	  default:
		// 	    key = "0";
		// 	}
		// 	var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/"+key;
	 //        $(this).closest("form").attr("action", url); 
		// });

		// $(".prev-blok").click(function(){
		// 	var id = "{{request()->segment(2)}}";
	 //        var blok = "{{request()->segment(3)}}";
	 //        if(blok.length > 10 ){
	 //        	blok = blok.substr(7, blok.length);
	 //        }
		// 	// var nama_form = "form_"+blok+"";
		// 	// var form = document.getElementById(nama_form);
		// 	// console.log(nama_form)
		// 	var key = "0";
		// 	switch (blok) {
		// 	  case "blokii":
		// 	    key = "1";
		// 	    break;
		// 	  case "blokiii":
		// 	    key = "2";
		// 	    break;
		// 	  case "blokiii_1":
		// 	    key = "3";
		// 	    break;
		// 	  case "blokiii_2":
		// 	    key = "3.1";
		// 	    break;  
		// 	  case "blokiii_3":
		// 	    key = "3.2";
		// 	    break;  
		// 	  case "blokiii_4":
		// 	    key = "3.3";
		// 	    break;
		// 	  case "blokiv":
		// 	    key = "3.4";
		// 	    break;
		// 	  case "blokv":
		// 	    key = "4";
		// 	    break;
		// 	  case "blokvi":
		// 	    key = "5";
		// 	    break;
		// 	  default:
		// 	    key = "0";
		// 	}
		// 	var url =  base_url+"entri_data/"+id+"/simpan_"+blok+"/"+key;
	 //        $(this).closest("form").attr("action", url); 
		// });
			
	</script>

	<script type="text/javascript">

		/**** JQuery Menu Blok Kuesioner Flip Up/Down *******/
		$(document).ready(function(){
		  $("#flip").click(function(){
		    $(".flip-btn").slideToggle("slow");
		    $(".flip-simbol-right").toggle("slow");
		    $(".flip-simbol-down").toggle("slow");
		  });
		});

		
		/**** JQuery Dinamic Checkbox Pilih Avatar *******/
		$(document).ready(function(){
		    //add/remove checked class
		    $(".image-radio").each(function(){
		        if($(this).find('input[type="radio"]').first().attr("checked")){
		            $(this).addClass('image-radio-checked');
		        }else{
		            $(this).removeClass('image-radio-checked');
		        }
		    });

		    // sync the input state
		    $(".image-radio").on("click", function(e){
				$("#btn-upload-photo").attr("disabled",true);
				$("#gavatar").attr("checked",true);
		        $(".image-radio").removeClass('image-radio-checked');
		        $(this).addClass('image-radio-checked');
		        var $radio = $(this).find('input[type="radio"]');
		        $radio.prop("checked",!$radio.prop("checked"));

		        e.preventDefault();
	    	});

		    //size image validation
		    $("#update").click(function(e) {
			      var logoimg = document.getElementById("btn-upload-photo");

			      let logoSize = logoimg.files[0].size; 

			      if (logoSize > 1000000) {
			          alert("Logo Image Size is exceeding 1 Mb");
			          e.preventDefault();
			      }
			});

	    	//Foto Profile Rule
			$("#gavatar").change(function(){
				if($(this).prop("checked") == true){
					//$("#gfoto").attr("checked",false);
					$("#btn-upload-photo").attr("disabled",true);
					$(".image-radio").fadeIn(); 					
				}
				else if($(this).prop("checked") == false){
					$("#btn-upload-photo").attr("disabled",false);
					$(".img_radio").attr("checked",false);
					$(".image-radio").fadeOut();
				}
			});

			$("#btn-upload-photo").click(function(){
				$("#gfoto").attr("checked",true);
				$("#gavatar").attr("checked",false);
			});
		});
		 
	</script>

	<style type="text/css">	
		.next-blok {border-color: #5c8ed4; }
		
		.next-blok :hover, .next-blok :focus {
		    background-color: #5c8ed4;
		    border-color: #5086d1;
		    color: #fff; }

		.next-blok .disabled ,
		.next-blok .disabled :hover,
		.next-blok .disabled :focus,
		.next-blok .disabled  {
		  border-color: #ddd; }
		.next-blok {border-radius: 24px;}

		.prev-blok {border-color: #5c8ed4; }
		
		.prev-blok :hover, .prev-blok :focus {
		    background-color: #5c8ed4;
		    border-color: #5086d1;
		    color: #fff; }

		.prev-blok .disabled ,
		.prev-blok .disabled :hover,
		.prev-blok .disabled :focus,
		.prev-blok .disabled  {
		  border-color: #ddd; }
		.prev-blok {border-radius: 24px;}
	</style>
	
	

	{{-- <style type="text/css">
		/*Image Radio*/
		.image-radio {
		    cursor: pointer;
		    box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    border: 4px solid transparent;
		    margin-bottom: 0;
		    outline: 0;
		}
		.image-radio input[type="radio"] {
		    display: none;
		}
		.image-radio-checked {
		    border-color: #4783B0;
		}
		.image-radio .glyphicon {
		  position: absolute;
		  color: #4A79A3;
		  background-color: #fff;
		  padding: 10px;
		  top: 0;
		  right: 0;
		}
		.image-radio-checked .glyphicon {
		  display: block !important;
		}
	</style> --}}
</body>

</html>
