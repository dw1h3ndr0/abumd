@extends('layouts.master')

@section('content')
<div id="main-content">

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    {{-- <div class="container-fluid"> --}}
       {{-- <div class="center"> --}}
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                {{-- <div class="container-fluid"> --}}
                    <!-- box-intro -->

                    <section class="box-intro">

                        <div class="table-cell">
                            <img src="{{asset('admin/assets/img/Logo KisahDesa.jpg')}}" alt="Logo KisahDesa">
                            <h1 class="box-headline letters rotate-2">
                                <span class="box-words-wrapper">
                                    <b class="is-visible">Aplikasi.</b>
                                    <b>&nbsp;ABUMD.</b>
                                    {{-- <b>K3-Desa.</b> --}}
                                </span>
                            </h1>
                            <h5>Aplikasi Survei Statistik Keuangan Badan Usaha Milik Daerah</h5>
                        </div>
                        <!-- end box-intro -->
                    </section>
                    <!-- end box-intro -->
                {{-- </div> --}}
                <!-- portfolio div -->

                <!-- portfolio masukin disini div -->
                <!-- end portfolio div -->

			</div>    <!-- align middle -->
        </div> 
 {{-- </div> --}}  <!-- align center -->
    </div>
{{-- </div> --}}

<script src="{{asset('admin/assets/js/animated-headline.js')}}"></script>
<script src="{{asset('admin/assets/js/isotope.pkgd.min.js')}}"></script>
<!--  custom script -->
<script src="{{asset('admin/assets/js/custom.js')}}"></script>
<script src="{{asset('admin/assets/js/modernizr.js')}}"></script>
@stop