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
        <form action="{{ route('chapterAdmin.store.chapter') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="logo_image" class="col-sm-2 label-selects col-form-label">Logo Chapter </label>
            <div class="col-sm-9">
                <input class="form-control"
                type="file" name="logo_image" id="logo_image" required>
            </div>

            <div class="mt-2">
                <img src="" id="img_output">
            </div>
            <label for="nama_chapter" class="col-sm-2 label-selects col-form-label">Nama Chapter</label>
            <div class="col-sm-9">
                <input class="form-control" value="{{ old('nama_chapter') }}" type="text" name="nama_chapter" id="nama_chapter" required>
                <span class=""><p class=" px-3 bg-gradient-primary text-light">harus Huruf Besar !!</p></span>
            </div>

            <label for="nama_provinsi" class="col-sm-2 mt-2 label-selects col-form-label">Nama Provinsi</label>
            <div class="col-sm-9">
            <input class="form-control" type="text"  name="nama_provinsi" id="nama_provinsi" value="{{ old('nama_provinsi') }}" style="width: 51%;" required>
            <span class=""><p class=" px-3 bg-gradient-primary text-light">harus Huruf Besar !!</p></span>
            </div>

        </div>
            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>TambahData</span>
            </button>
            <a href="{{ route('chapterAdmin.index.chapter') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

