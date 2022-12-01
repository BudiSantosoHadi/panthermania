@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA BPO</h1>
        </div>
        <a href="{{ route('bpoAdmin.create.bpo') }}" class="d-block float-right d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
        <hr>

        @forelse ($data as $no => $bpo )

            <a href="{{ route('bpoAdmin.edit.bpo', $bpo->id) }}" class="d-block d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
            span class="fas fa-download fa-sm text-white-50"></i> Update Data</a>
                <br>
                <span class="mt-2 mb-2 text-danger text-center"><p>--jika data sudah ada jangan ditambah jika ingin menambah data Update saja--</p></span>
            <div class="mb-3 mt-3 row">
        <div class="mb-3 mt-3 row">
            <label for="data_penasehat" class="col-2 label-selects col-form-label">Penasehat</label>
            <div class="col-sm-9">
                <input class="form-control @error('data_penasehat') is-invalid @enderror" value="{{ $bpo->data_penasehat }}" type="text" name="data_pembina" id="data_pembina" readonly>
            </div>
            </div>

            <div class="mb-3 mt-3 row">
                <label for="data_pembina" class="col-2 label-selects col-form-label">Pembina</label>
                <div class="col-sm-9">
                    <input class="form-control @error('data_pembina') is-invalid @enderror" value="{{ $bpo->data_pembina }}" type="text" name="data_pembina" id="data_pembina" readonly>
                </div>
                </div>

                    <div class="mb-3 mt-3 row">
                        <label for="data_ketua_umum" class="col-2 label-selects col-form-label">Ketua Umum</label>
                        <div class="col-sm-9">
                            <input class="form-control @error('data_ketua_umum') is-invalid @enderror" value="{{ $bpo->data_ketua_umum }}" type="text" name="data_ketua_umum" id="data_ketua_umum" readonly>

                        </div>
                    </div>
                        <div class="mb-3 mt-3 row">
                            <label for="data_wakil_ketua_umum" class="col-2 label-selects col-form-label">Wakil Ketua Umum</label>
                            <div class="col-sm-9">
                                <input class="form-control @error('data_wakil_ketua_umum') is-invalid @enderror" value="{{ $bpo->data_wakil_ketua_umum }}" type="text" name="data_wakil_ketua_umum" id="data_wakil_ketua_umum" readonly>

                            </div>
                        </div>
                            <div class="mb-3 mt-3 row">
                                <label for="data_sekertaris_umum" class="col-2 label-selects col-form-label">Sekretaris Umum</label>
                                <div class="col-sm-9">
                                    <input class="form-control @error('data_sekertaris_umum') is-invalid @enderror" value="{{ $bpo->data_sekretaris_umum }}"  type="text" name="data_sekertaris_umum" id="data_sekertaris_umum" readonly>

                                </div>
                            </div>
                                <div class="mb-3 mt-3 row">
                                    <label for="data_bendahara_umum" class="col-2 label-selects col-form-label">Bendhara Umum</label>
                                    <div class="col-sm-9">
                                        <input class="form-control @error('data_bendahara_umum') is-invalid @enderror" value="{{ $bpo->data_bendahara_umum }}"  type="text" name="data_bendahara_umum" id="data_bendahara_umum" readonly>

                                    </div>
                                </div>
                                    <div class="mb-3 mt-3 row">
                                        <label for="data_keanggotaan" class="col-2 label-selects col-form-label">Keanggotaan</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('data_keanggotaan') is-invalid @enderror" value="{{ $bpo->data_keanggotaan }}"  type="text" name="data_keanggotaan" id="data_keanggotaan" readonly>

                                        </div>
                                    </div>
                                        <div class="mb-3 mt-3 row">
                                            <label for="data_koordinator_ibu_ibu" class="col-2 label-selects col-form-label">Koordinator Ibu-Ibu</label>
                                            <div class="col-sm-9">
                                                <input class="form-control @error('data_koordinator_ibu_ibu') is-invalid @enderror" value="{{ $bpo->data_kordinator_ibu_ibu }}" type="text" name="data_koordinator_ibu_ibu" id="data_koordinator_ibu_ibu" readonly>

                                            </div>
                                        </div>
                                        @empty
                                        <div class="alert mt-5 alert-danger">
                                            Data Bpo belum Tersedia.
                                        </div>
                                        @endforelse


        </div>
@endsection

