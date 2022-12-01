@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA AGENDA KEGIATAN</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">
            @csrf
            @method('PUT')

            <label for="nama_korwil" class="col label-selects col-form-label">Logo Agenda Kegiatan</label>

            <div class="mt-2 mb-5 ">
                <img class="rounded shadow-lg " src="{{ asset('data/uploads/photoAgendaKegiatan/'. $data->images)  }}" width="36%" height="228px" id="img_output">
            </div>
            <label for="nama_agendak" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Nama Agenda</label>
            <div class="col-sm-9">
                <input class="form-control mt-2 mb-3 @error('nama_agendak') is-invalid @enderror" value="{{ old('nama_agendak', $data->nama_agendak) }}" type="text" name="nama_agendak" id="nama_agendak" readonly>
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

            <label for="nama_korwil" class="col-sm-2 mt-2 mb-3 label-selects col-form-label">Nama korwil</label>
            <div class="col-sm-9">
            <input class="form-control mt-2 mb-3 @error('nama_korwil') is-invalid @enderror" type="text"  name="nama_korwil" id="nama_korwil" value="{{ old('nama_korwil', $data->nama_korwil) }}" style="width: 51%;" readonly>
            @error('nama_korwil')
            <span class="alert alert-danger mt-2">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>

        </div>
            {{-- <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>EditData</span>
            </button> --}}
            <a href="{{ route('Admin.index.agendak') }}" class="btn mt-4 mb-4 btn-primary">
            <span>back</span></a>

        </div>
    </div>
@endsection

