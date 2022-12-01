@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA PRODUCTS</h1>

            <a href="{{ route('Admin.create.products') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
        </div>
        <hr>
        <span class="h5 border rounded p-2 d-flex justify-content-end mr-4" aria-readonly="true">Order Products : <span class="btn-sm mx-2 text-light-600  btn-warning">{{ $dataOrder }}</span></span>
        <div class="container-fluid ">
            <form action="{{ route('Admin.search.products') }}" class="form-inline" method="GET">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" name="search" placeholder="cari nama products" aria-label="Search" aria-describedby="search-addon" />
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
                <th scope="col">EditData</th>
                <th scope="col">No</th>
                <th scope="col">Photos Products</th>
                <th scope="col">Nama Products</th>
                <th scope="col">Harga Products</th>
                <th scope="col">Kontak Admin</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($data as $no => $products )
                <tr>
                    <td>

                        <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus??')" action="{{ route('Admin.destroy.products', $products->id) }}">
                            @csrf
                            <a href="{{ route('Admin.edit.products', $products->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('Admin.show.products', $products->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>

                    <td class="">
                        {{ $no+1 }}
                    </td>
                    <td class="text-center">
                    <img src="{{ asset('/data/uploads/photoProducts/' . $products->gambar_products) }}" style="background-size: cover;" class="rounded" width="80%" height="86px">
                    </td>
                    <td class="">
                        {{ $products->nama_products }}
                    </td>
                    <td class="">
                        {{ $products->harga_products }}
                    </td>
                    <td class="">
                        {{ $products->kontak_admin }}
                    </td>

                    <!-- view History --->


                </tr>
                @empty
                <div class="alert alert-danger">
                    Data Products belum Tersedia.
                </div>
                    @endforelse

            </tbody>

        </table>
        <div class="paginate" style="float: right;">
            {{ $data->links() }}
        </div>

    </div>
@endsection

