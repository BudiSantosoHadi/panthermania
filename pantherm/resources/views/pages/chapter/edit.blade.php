@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EDIT DATA CHAPTER</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
            <span class="text-danger font-monospace">Perhatian Data Harus Diisi(update).. Semua Tidak Boleh Ada Yang kosong/Tidak Di-isi!!</span>
        <form action="{{ route('chapterAdmin.update.chapter', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="logo_image" class="col-sm-2 label-selects col-form-label">Logo Chapter </label>
            <div class="col-sm-9">
                <input class="form-control @error('logo_image') is-invalid @enderror"
                type="file" name="logo_image" id="logo_image" required>

                @error('logo_image')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2">
                <img src="" id="img_output">
            </div>
            <label for="nama_chapter" class="col-sm-2 label-selects col-form-label">Nama Chapter</label>
            <div class="col-sm-9">
                <input class="form-control @error('nama_chapter') is-invalid @enderror" value="{{ old('nama_chapter', $data->nama_chapter) }}" type="text" name="nama_chapter" id="nama_chapter" required>
                <span class=""><p class=" px-3 bg-gradient-primary text-light">harus Huruf Besar !!</p></span>
                <!-- error message untuk title -->
            @error('nama_chapter')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="nama_provinsi" class="col-sm-2 mt-2 label-selects col-form-label">Nama Provinsi</label>
            <div class="col-sm-9">
            <input class="form-control @error('nama_provinsi') is-invalid @enderror" type="text"  name="nama_provinsi" id="nama_provinsi" value="{{ old('nama_provinsi', $data->nama_provinsi) }}" style="width: 51%;" required>
            <span class=""><p class=" px-3 bg-gradient-primary text-light">harus Huruf Besar !!</p></span>  
            @error('nama_provinsi')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

        </div>
            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>EditData</span>
            </button>
            <a href="{{ route('chapterAdmin.index.chapter') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

