@extends('layouts.appmain')
@section('container')
<div class="container-fluid rounded bg-white mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{ asset('admin/admin2/img/undraw_profile.svg') }}">
                <span class="text-black50 bg-danger px-2 mt-2 text-light rounded">
                    {{ Auth::user()->levels }}</span>
                <span class="mt-2 font-weight-bold">
                    {{ Auth::user()->name }}</span>
                <span class="text-black-50">
                    {{ Auth::user()->email }}</span>

                </span>
                <span class="mt-2" style="font-size: 13px;" @disabled(true)>--!!Profile Tidak Bisa Diubah Harap Hubungi Admin!!--</span>
            </div>
        </div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"><span class=" btn-primary px-3 rotate-15 fa-rotate-270 rounded">View</span>  Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nama Lengkap</label><input type="text"
                            class="form-control" placeholder="first name" value="{{ Auth::user()->name }}"></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Email ID</label><input type="text" class="form-control"
                            placeholder="enter email id" value="{{ Auth::user()->email }}">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Password</label><input type="text" class="form-control"
                            placeholder="password" value="{{ Auth::user()->password }}">
                    </div>
                </div>

                <div style=" float: right;" class="row mr-3 mb-5 mt-5">

                        <a class="text-light rounded btn-logout" style="text-decoration: none;
                        " href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout<i class="fa-solid ml-2 fa-right-from-bracket"></i>

                        </a>

                </div>


            </div>
        </div>
        <div class="col bg-primary md-1">
            <div class="p-3 py-5">

            </div>
        </div>
    </div>
</div>
@endsection
