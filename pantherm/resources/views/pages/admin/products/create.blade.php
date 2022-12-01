@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">TAMBAH DATA PRODUCTS</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
        <form action="{{ route('Admin.store.products') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="gambar_products" class="col label-selects col-form-label">Photos Products</label>
            <div class="col-sm-9">
                <input class="form-control @error('gambar_products') is-invalid @enderror"
                type="file" name="gambar_products" id="logo_image" onchange="previewImage()" required>

                @error('gambar_products')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-5">
                <img class="img-fluid img-preview mb-1 mt-2 col-sm-5" width="67%" height="130px">
            </div>

            <div class="mt-2">
                <img src="" id="img_output">
            </div>
            <label for="nama_products" class="col label-selects col-form-label">Nama Products</label>
            <div class="col-sm-9">
                <input class="form-control @error('nama_products') is-invalid @enderror" type="text" name="nama_products" id="nama_products" value="{{ old('nama_products') }}" required>
                <span class=""><p class=" px-3 bg-gradient-secondary text-light">harus Huruf besar semua !!</p></span>
                <!-- error message untuk title -->
            @error('nama_products')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>


            <hr>
            <label for="keterangan" class="col mt-1 label-selects col-form-label">Keterangan Products</label>
            <div class="col-sm-9">
                <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" >{{ old('keterangan') }}</textarea>
            @error('keterangan')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>


            <label for="harga_products" class="col mt-2 label-selects col-form-label">Harga Products</label>
            <div class="col-sm-9">
            <div class="row">
                <div class="col-2">
                    <span>Rp</span>
                </div>
                <div class="col-10">
                    <input class="form-control" type="number" name="harga_products" id="harga_products" value="{{ old('harga_products') }}" style="width: 40%;" required>
                </div>
                <span class=""><p class=" px-3 bg-gradient-secondary text-light">harus nominal angka !!</p></span>

                </div>
                @error('harga_products')
                <span class="alert alert-danger mt-2">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <label for="kontak_admin" class="col mt-2 label-selects col-form-label">Kontak Admin</label>

            <div class="col-sm-9">
            <input class="form-control" type="text" name="kontak_admin" value="http://wa.me/{{ old('kontak_admin') }}" id="kontak_admin" style="width: 51%;" required>
            <span><p class="mt-2 text-danger font-monospace">--- nomor harus depan (62) ---</p></span>
            @error('kontak_admin')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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

