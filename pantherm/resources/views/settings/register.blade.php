@extends('layouts.app-admin')
@section('container')
<div class="container-fluid rounded bg-white mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">

            </div>
        </div>


        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Register Accounts</h4>
                </div>


            <form method="POST" action="{{ route('register') }}">


                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nama Lengkap</label>
                        <input type="text"
                        class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Email</label><input type="text" class="form-control"
                            placeholder="email" value="">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Password</label><input type="text" class="form-control"
                            placeholder="password" value="">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">ConfirmPassword</label><input type="text" class="form-control"
                            placeholder="password" value="">
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">
                        Create Akun</button>
                    </div>

            </form>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">

        </div>
    </div>
</div>
@endsection
