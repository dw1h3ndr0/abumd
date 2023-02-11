@extends('layouts.master')

@section('content')

<div id="main-content">
	<div class="container-fluid">
		<div class="panel">
			<div class="section-heading">
				<h1 class="page-title">Video Tutorial Penggunaan Aplikasi</h1>
			</div>
			<div class="row">	
				<div class="col-md-10">						
					<div style="text-align:center" class="embed-responsive embed-responsive-16by9">			
						{{-- <video width="640" height="480" controls >
						      <source src="{{URL::asset("/video/tutorial.mp4")}}" type="video/mp4">
						    Your browser does not support the video tag.
						</video> --}}
						<div class="embed-responsive embed-responsive-16by9">
					      	<iframe class="embed-responsive-item" src="{{url('https://www.youtube.com/embed/qkGTC9zB3ro')}}" frameborder="0" allowfullscreen></iframe>
					    	Your browser does not support the video tag.
					    </div>
					</div>					
				</div>			
			</div>
		</div>							
	</div>
</div>

@stop