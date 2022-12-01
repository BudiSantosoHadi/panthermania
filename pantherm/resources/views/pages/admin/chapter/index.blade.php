@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA CHAPTER</h1>
            <a href="{{ route('Admin.create.chapter') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
        </div>
        <hr>

        <table class="table table-borderless">
            <thead>
            <tr>

                <th scope="col">No</th>
                <th scope="col">Logo Chapter</th>
                <th scope="col">Nama Chapter</th>
                <th scope="col">Provinsi</th>
                <th scope="col">EditData</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($data as $no => $chapter )
                <tr>

                    <td class="">
                        {{ $no+1 }}
                    </td>
                    <td class="text-center">
                    <img src="{{ asset('data/uploads/photoChapter/'. $chapter->logo_image)  }}" style="background-size: cover;" class="rounded" width="70px">
                    </td>
                    <td class="">
                        {{ $chapter->nama_chapter }}
                    </td>
                    <td class="">
                        {{ $chapter->nama_provinsi }}
                    </td>
                    <td>

                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus??')" action="{{ route('Admin.destroy.chapter', $chapter->id) }}">
                            @csrf
                            <a href="{{ route('Admin.edit.chapter', $chapter->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('Admin.show.chapter', $chapter->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @empty
                <div class="alert alert-danger">
                    Data Chapter belum Tersedia.
                </div>
                @endforelse

            </tbody>


        </table>
        <div class="paginate" style="float: right;">
            {{ $data->links() }}
        </div>

    </div>
@endsection

