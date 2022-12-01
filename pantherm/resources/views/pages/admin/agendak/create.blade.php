@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">TAMBAH DATA AGENDA KEGIATAN</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
        <form action="{{ route('Admin.store.agendak') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="images" class="col mt-2 label-selects col-form-label">Gambar Agenda Kegiatan</label>
            <div class="col-sm-9">
                <input class="form-control @error('images') is-invalid @enderror"
                type="file" name="images"  id="logo_image" onchange="previewImage()" >

                @error('images')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col">
                <img class="img-fluid img-preview mb-1 mt-2 col-sm-5" width="100%" height="200px">
            </div>

            <br>
            <label for="nama_agendak" class="col label-selects col-form-label">Nama Agenda/Kegiatan</label>
            <div class="col-sm-9">
                <input class="form-control @error('nama_agendak') is-invalid @enderror" value="{{ old('nama_agendak') }}" type="text" name="nama_agendak" id="nama_agendak" >
                <span class=""><p class=" px-3 bg-gradient-secondary text-light">harus Huruf besar semua !!</p></span>
                <!-- error message untuk title -->
            @error('nama_agendak')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="nama_korwil" class="col mt-2 label-selects col-form-label">Nama Korwil</label>
            <div class="col-sm-9">
                <select class="form-control @error('nama_chapter') is-invalid @enderror" value="{{ old('nama_korwil') }}" type="text" name="nama_korwil" id="nama_korwil">
                    <option value="" disabled selected>Nama Korwil</option>
                    @foreach ($korwil as $korwils )
                    <option value="{{ $korwils->nama_korwil }}">{{ $korwils->nama_korwil }}</option>
                    @endforeach
            <!-- error message untuk title -->
                @error('nama_korwil')
                <div class="alert alert-danger mt-2">
                {{ $message }}
                </div>
                @enderror
            </select>
            </div>

            <label for="nama_korwil" class="col mt-2 label-selects col-form-label">Nama Chapter</label>
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

            <hr>
            <label for="keterangan" class="col mt-1 label-selects col-form-label">Keterangan Agenda/Kegiatan</label>
            <div class="col-sm-9">
                <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" >{{ old('keterangan') }}</textarea>
            @error('keterangan')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>


        </div>
            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>TambahData</span>
            </button>
            <a href="{{ route('Admin.index.agendak') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

