@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA USER</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
            @csrf
            @method('PUT')

            <label for="nama_korwil" class="col-sm-2 label-selects col-form-label">Logo Korwil</label>

            <div class="mt-2 mb-5 ">
                <img class="rounded shadow-lg " src="{{ asset('/data/uploads/photoKorwil/'. $data->logo_image) }}" width="23%" height="197px" id="img_output">
            </div>
            <label for="nama_korwil" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Nama Chapter</label>
            <div class="col-sm-9">
                <input class="form-control mt-2 mb-3 @error('nama_korwil') is-invalid @enderror" value="{{ old('nama_korwil', $data->nama_korwil) }}" type="text" name="nama_chapter" id="nama_chapter" readonly>
            <!-- error message untuk title -->
            @error('nama_korwil')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>


            <label for="nama_chapter" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Nama Chapter</label>
            <div class="col-sm-9">
                <input class="form-control mt-2 mb-3 @error('nama_chapter') is-invalid @enderror" value="{{ old('nama_chapter', $data->nama_chapter) }}" type="text" name="nama_chapter" id="nama_chapter" readonly>
            <!-- error message untuk title -->
            @error('nama_chapter')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="nama_provinsi" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Nama Provinsi</label>
            <div class="col-sm-9">
            <input class="form-control mt-2 mb-3 @error('nama_provinsi') is-invalid @enderror" type="text"  name="nama_provinsi" id="nama_provinsi" value="{{ old('nama_provinsi', $data->nama_provinsi) }}" style="width: 51%;" readonly>
            @error('nama_provinsi')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

            <label for="nama_kabupaten" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Nama Kabupaten</label>
            <div class="col-sm-9">
            <input class="form-control mt-2 mb-3 @error('nama_kabupaten') is-invalid @enderror" type="text"  name="nama_kabupaten" id="nama_kabupaten" value="{{ old('nama_kabupaten', $data->nama_kabupaten) }}" style="width: 51%;" readonly>
            @error('nama_kabupaten')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

        </div>
            {{-- <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>EditData</span>
            </button> --}}
            <a href="{{ route('Admin.index.korwil') }}" class="btn mt-4 mb-4 btn-primary">
            <span>back</span></a>

        </div>
    </div>
@endsection

