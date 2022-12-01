@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700 font-semibold">DATA USER</h1>
            {{-- <a href="{{ route('Admin.create.member') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a> --}}
        </div>
        <hr>
        <div class="container-fluid ">
            <form action="{{ route('Admin.search.user') }}" class="form-inline" method="GET">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" name="search" placeholder="cari nama user" aria-label="Search" aria-describedby="search-addon" />
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

                <th scope="col">No</th>

                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email Member</th>
                <th scope="col">EditData</th>

            </tr>
            </thead>
            <tbody>
                @forelse ($data as $no => $user )
                <tr>

                    <td class="">
                        {{ $no+1 }}
                    </td>

                    <td class="">
                        {{ $user->nama_lengkap }}
                    </td>
                    <td class="">
                        {{ $user->email }}
                    </td>

                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus??')" action="" method="POST">
                            <a href="{{ route('Admin.edit.users',$user->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @empty
                <div class="alert alert-danger">
                    Data User Panther Mania belum Tersedia.
                </div>
                @endforelse

            </tbody>


        </table>
        <div class="paginate" style="float: right;">
            {{ $data->links() }}
        </div>

    </div>
@endsection

