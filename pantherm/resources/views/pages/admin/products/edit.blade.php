@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EDIT DATA PRODUCTS</h1>   
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
            <form action="{{ route('Admin.update.products', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="gambar_products" class="col-sm-2 label-selects col-form-label">gambar Products</label>
            <div class="col-sm-9">
                <input class="form-control @error('gambar_products') is-invalid @enderror"
                type="file" name="gambar_products" id="logo_image" onchange="previewImage()">

                @error('logo_image')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-5">
                <img class="img-fluid img-preview mb-1 mt-2 col-sm-5" width="67%" height="130px">
            </div>

            <label for="nama_products" class="col-sm-2 label-selects col-form-label">Nama Products</label>
            <div class="col-sm-9">
                <input class="form-control @error('nama_products') is-invalid @enderror" value="{{ old('nama_products', $data->nama_products) }}" type="text" name="nama_products" id="nama_products" >
            <!-- error message untuk title -->
            @error('nama_products')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="keterangan" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">keterangan</label>
            <div class="col-sm-9">
            <textarea class="form-control mt-2 mb-3 @error('keterangan') is-invalid @enderror" type="text" id="keterangan"  name="keterangan" value="{{ old('keterangan', $data->keterangan) }}" style="width: 51%;" readonly>{{ $data->keterangan }}</textarea>
            @error('keterangan')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

            <label for="harga_products" class="col-sm-2 mt-2 label-selects col-form-label">Harga Products</label>
            <div class="col-sm-9">
                <input class="form-control @error('harga_products') is-invalid @enderror" value="{{ old('harga_products', $data->harga_products) }}" type="text" name="harga_products" id="harga_products" >
                <span class=""><p class=" px-3 bg-gradient-secondary text-light">harus angka !!</p></span>
            <!-- error message untuk title -->
                @error('harga_products')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
                @enderror
            </div>


            <label for="kontak_admin" class="col-sm-2 mt-2 label-selects col-form-label">Kontak Admin</label>
            <div class="col-sm-9">
            <input class="form-control @error('kontak_admin') is-invalid @enderror" type="text"  name="kontak_admin" id="kontak_admin" value="{{ old('kontak_admin', $data->kontak_admin) }}" style="width: 51%;">
            @error('kontak_admin')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

        </div>
            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>TambahData</span>
            </button>
            <a href="{{ route('Admin.index.products') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

