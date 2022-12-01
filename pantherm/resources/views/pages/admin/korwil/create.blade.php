@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">TAMBAH DATA KORWIL</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
        <form action="{{ route('Admin.store.korwil') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="logo_image" class="col-sm-2 label-selects col-form-label">Logo Korwil </label>
            <div class="col-sm-9">
                <input class="form-control @error('logo_image') is-invalid @enderror"
                type="file" name="logo_image" id="logo_image" onchange="previewImage()">

                @error('logo_image')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-5">
                <img class="img-fluid img-preview mb-3 col-sm-5" width="56%" height="100px">
            </div>

            <br>
            <label for="nama_korwil" class="col-sm-2 label-selects col-form-label">Nama Korwil</label>
            <div class="col-sm-9">
                <input class="form-control @error('nama_korwil') is-invalid @enderror" placeholder="nama korwil" value="{{ old('nama_korwil') }}" type="text" name="nama_korwil" id="nama_korwil" required>
            <!-- error message untuk title -->
            @error('nama_korwil')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="nama_korwil" class="col-sm-2 mt-2 label-selects col-form-label">Nama Chapter</label>
            <div class="col-sm-9">
                <select class="form-control @error('nama_chapter') is-invalid @enderror" value="{{ old('nama_chapter') }}" type="text" name="nama_chapter" id="nama_chapter">
                    <option value="" disabled selected>Nama Chapter</option>
                    @foreach ($chapter as $chapters )
                    <option value="{{ $chapters->nama_chapter }}">{{ $chapters->nama_chapter }}</option>
                    @endforeach
            <!-- error message untuk title -->
                @error('nama_chapter')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
                @enderror
            </select>
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

            <label for="nama_kabupaten" class="col-sm-2 mt-2 label-selects col-form-label">Nama Kabupaten</label>
            <div class="col-sm-9">
                <select class="form-control @error('nama_kabupaten') is-invalid @enderror" value="{{ old('nama_kabupaten') }}" type="text" name="nama_kabupaten" id="nama_kabupaten">
                    <option value="" disabled selected>Nama Kabupaten</option>
                    @foreach ($kabupaten as $kab )
                    <option value="{{ $kab->name }}">{{ $kab->name}}</option>
                    @endforeach
            <!-- error message untuk title -->
                @error('nama_chapter')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
                @enderror
            </select>
            </div>

            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>TambahData</span>
            </button>
            <a href="{{ route('Admin.index.korwil')}}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

