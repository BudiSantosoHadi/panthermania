@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA PRODUCTS</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
            @csrf
            @method('PUT')

            <label for="gambar_products" class="col-sm-2 label-selects col-form-label">Gambar Products</label>

            <div class="mt-2 mb-5 ">
                <img class="rounded" style="background-repeat: no-repeat; background-size: cover;" src="{{ asset('/data/uploads/photoProducts/'. $data->gambar_products) }}" width="23%" height="190px" id="img_output">
            </div>
            
            <label for="nama_products" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Nama Products</label>
            <div class="col-sm-9">
                <input class="form-control mt-2 mb-3 @error('nama_products') is-invalid @enderror" value="{{ old('nama_products', $data->nama_products) }}" type="text" name="nama_products" id="nama_products" readonly>
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


            <label for="harga_products" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Harga Products</label>
            <div class="col-sm-9">
                <input class="form-control mt-2 mb-3 @error('harga_products') is-invalid @enderror" value="{{ old('harga_products', $data->harga_products) }}" type="text" name="harga_products" id="harga_products" readonly>
            <!-- error message untuk title -->
            @error('harga_products')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="kontak_admin" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">kontak_admin</label>
            <div class="col-sm-9">
            <input class="form-control mt-2 mb-3 @error('kontak_admin') is-invalid @enderror" type="text"  name="kontak_admin" id="kontak_admin" value="{{ old('kontak_admin', $data->kontak_admin) }}" style="width: 51%;" readonly>
            @error('kontak_admin')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        </div>
            {{-- <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>EditData</span>
            </button> --}}
            <a href="{{ route('Admin.index.products') }}" class="btn mt-4 mb-4 btn-primary">
            <span>back</span></a>

        </div>
    </div>
@endsection

