@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EDIT USER</h1>
        </div>
        <hr>
        <form action="{{ route('Admin.update.users',$data->id) }}" enctype="multipart/form-data">
            @csrf

            <label for="nama_lengkap" class="col mt-3  label-selects col-form-label">Nama lengkap <span style="font-size: 16px;">(sesuai ktp)</span></label>
            <div class="col-sm-9">
            <input class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap',$data->nama_lengkap) }}" name="nama_lengkap" id="nama_lengkap" disabled>
            <!-- error message untuk title -->
            @error('nama_lengkap')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="email" class="col mt-3  label-selects col-form-label">Email User</label>
            <div class="col-sm-9">
            <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$data->email) }}" name="email" id="email" required>
            <!-- error message untuk title -->
            @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="password" class="col mt-3  label-selects col-form-label">Password User</label>
            <div class="col-sm-9">
            <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password',$data->password) }}" name="password" id="password" required>
            <!-- error message untuk title -->
            @error('password')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

        </div>
            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>Edit Users</span>
            </button>
            <a href="{{ route('Admin.index.users') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

