@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EDIT DATA AGENDA KEGIATAN</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
            <span class="text-danger font-monospace">Perhatian Data Harus Diisi(update).. Semua Tidak Boleh Ada Yang kosong/Tidak Di-isi!!</span>
        <form action="{{ route('Admin.update.agendak', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="images" class="col-sm-2 label-selects col-form-label">Gambar Agenda Kegiatan </label>
            <div class="col-sm-9">
                <input class="form-control @error('images') is-invalid @enderror"
                type="file" name="images" id="logo_image" onchange="previewImage()" required>

                @error('images')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="mt-2 col">
                <img class="img-fluid img-preview mb-1 mt-2 col-sm-5" width="100%" height="200px">
            </div>

            <div class="mt-2">
                <img src="" id="img_output">
            </div>
            <label for="nama_agendak" class="col-sm-2 label-selects col-form-label">Nama Agenda</label>
            <div class="col-sm-9">
                <input class="form-control @error('nama_agendak') is-invalid @enderror" value="{{ old('nama_agendak', $data->nama_agendak) }}" type="text" name="nama_agendak" id="nama_agendak" required>
            <!-- error message untuk title -->
            @error('nama_agendak')
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


            <label for="nama_korwil" class="col-sm-2 mt-2 label-selects col-form-label">Nama Korwil</label>
            <div class="col-sm-9">
                <select class="form-control @error('nama_korwil') is-invalid @enderror" value="{{ old('nama_korwil', $data->nama_korwil) }}" type="text" name="nama_korwil" id="nama_korwil" required>
                    <option value="{{ $data->nama_korwil }}" disabled selected>{{ $data->nama_korwil }}</option>
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

            <label for="nama_chapter" class="col-sm-2 mt-2 label-selects col-form-label">Nama Chapter</label>
            <div class="col-sm-9">
                <select class="form-control @error('nama_chapter') is-invalid @enderror" value="{{ old('nama_chapter', $data->nama_chapter) }}" type="text" name="nama_chapter" id="nama_chapter" required>
                    <option value{{ $data->nama_chapter }} disabled selected>{{ $data->nama_chapter }}</option>
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

        </div>
            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>EditData</span>
            </button>
            <a href="{{ route('Admin.index.agendak') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

