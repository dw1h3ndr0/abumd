@extends('layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Ganti Password {{$pegawai->nama}}</h4>
            </div>
            
            <form method="POST" action="{{ asset(route('change.password.post', ['id'=>$pegawai->user_id,'page'=>'change'], false)) }}">
            <div class="modal-body">
                <div class="auth-box">
                <div class="content">
                @csrf 

                @foreach ($errors->all() as $error)
                    <p class="text-danger" >{{ $error }}</p>
                @endforeach 

                @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-check-circle"></i> {{session('sukses')}}
                    </div>
                @endif

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
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.location.href = '{{ asset(route('dashboard', [], false)) }}'"><i class="fa fa-times-circle"></i> Keluar</button>
                <button type="submit" id="btn-update-password" class="btn btn-primary"><i class="fa fa-check-circle"></i> Update Password</button>
            </div>

            </form>
        </div>
    </div>
        </div>
    </div>
</div>

@endsection