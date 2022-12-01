@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">TAMBAH DATA CHAPTER</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">

        <form action="{{ route('Admin.store.chapter') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="logo_image" class="col-sm-2 label-selects col-form-label">Logo Chapter </label>
            <div class="col-sm-9">
                <input class="form-control"
                type="file" name="logo_image" id="logo_image"  onchange="previewImage()" required>
            </div>

            <div class="mt-2 col-sm-5">
                <img class="img-fluid img-preview mb-3 col-sm-5" width="56%" height="100px">
            </div>

            <label for="nama_chapter" class="col-sm-2 label-selects col-form-label">Nama Chapter</label>
            <div class="col-sm-9">
                <input class="form-control" value="{{ old('nama_chapter') }}" placeholder="nama chapter" type="text" name="nama_chapter" id="nama_chapter" required>
            </div>
            <label for="nama_provinsi" class="col-sm-2 mt-2 label-selects col-form-label">Nama Provinsi</label>
            <div class="col-sm-9">
                <select class="form-control @error('nama_provinsi') is-invalid @enderror" value="{{ old('nama_provinsi') }}" type="text" name="nama_provinsi" id="nama_provinsi">
                    <option value="" disabled selected>Nama Provinsi</option>
                    @foreach ($provinsi as $provinsiD )
                    <option value="{{ $provinsiD->name }}">{{ $provinsiD->name}}</option>
                    @endforeach
            <!-- error message untuk title -->
                @error('nama_chapter')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
                @enderror
            </select>
            </div>

        </div>
            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>TambahData</span>
            </button>
            <a href="{{ route('Admin.index.chapter') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

