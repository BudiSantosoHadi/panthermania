@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA AGENDA KEGIATAN</h1>
            <a href="{{ route('Admin.create.agendak') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-light "></i> Tambah Kegiatan</a>
        </div>
        <hr>
        <div class="container-fluid ">
            <form action="{{ route('Admin.search.agendak') }}" class="form-inline" method="GET">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" name="search" placeholder="cari agenda kegiatan" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group" id="search-addon">
                    <button class="btn btn-primary ml-1 mb-2" type="submit">
                        <i class="fas text-light fa-search"></i>
                    </button>

                </span>
                </div>
            </form>
        </div>

        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col">Edit</th>
                <th scope="col">No</th>
                <th scope="col">Gambar Agenda</th>
                <th scope="col">Agenda Kegiatan</th>
                <th scope="col">Chapter</th>
                <th scope="col">Korwil</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($data as $no => $agendak )
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus??')" action="{{ route('Admin.destroy.agendak', $agendak->id) }}">
                        <a href="{{ route('Admin.edit.agendak', $agendak->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ route('Admin.show.agendak', $agendak->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                    </td>
                <td class="">
                    {{ $no+1 }}
                </td>
                <td class="text-center">
                    <img src="{{ asset('data/uploads/photoAgendaKegiatan/'. $agendak->images)  }}" style="background-size: cover;" class="rounded" width="60%" height="87px">
                </td>
                <td class="">
                    {{ $agendak->nama_agendak }}
                </td>
                <td class="">
                    {{ $agendak->nama_chapter }}
                </td>
                <td class="">
                    {{ $agendak->nama_korwil }}
                </td>

                @empty
                <div class="alert alert-danger">
                    Data Agenda Kegiatan belum Tersedia.
                </div>
                @endforelse

            </tbody>

        </table>
        <div class="paginate" style="float: right;">
            {{ $data->links() }}
        </div>

    </div>
@endsection

