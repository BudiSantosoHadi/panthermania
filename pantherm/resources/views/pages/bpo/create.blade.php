@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">CREATE DATA BPO</h1>
        </div>
        <hr>
            <form action="{{ route('bpoAdmin.store.bpo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-3 row">
                    <label for="data_penasehat" class="col-2 label-selects col-form-label">penasehat</label>
                    <div class="col-sm-9">
                        <select class="form-control @error('data_penasehat') is-invalid @enderror" value="{{ old('data_penasehat') }}" type="text" name="data_penasehat" id="data_penasehat" required>
                            <option value="" disabled selected>--pilih penasehat--</option>
                            @foreach ($member as $members)
                                <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                            @endforeach
                        </select>
                        </div>
                </div>

            <div class="mb-3 mt-3 row">
                <label for="data_pembina" class="col-2 label-selects col-form-label">Pembina</label>
                <div class="col-sm-9">
                    <select class="form-control @error('data_pembina') is-invalid @enderror" value="{{ old('data_pembina') }}" type="text" name="data_pembina" id="data_pembina" required>
                        <option value="" disabled selected>--pilih pembina--</option>
                        @foreach ($member as $members)
                            <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

                    <div class="mb-3 mt-3 row">
                        <label for="data_ketua_umum" class="col-2 label-selects col-form-label">Ketua Umum</label>
                        <div class="col-sm-9">
                        <select class="form-control @error('data_ketua_umum') is-invalid @enderror" value="{{ old('data_ketua_umum') }}" type="text" name="data_ketua_umum" id="data_ketua_umum" required>
                            <option value="" disabled selected>--pilih ket
                                ua umum--</option>
                            @foreach ($member as $members)
                                <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                        <div class="mb-3 mt-3 row">
                            <label for="data_wakil_ketua_umum" class="col-2 label-selects col-form-label">Wakil Ketua Umum</label>
                            <div class="col-sm-9">
                                <select class="form-control @error('data_wakil_ketua_umum') is-invalid @enderror" value="{{ old('data_wakil_ketua_umum') }}" type="text" name="data_wakil_ketua_umum" id="data_wakil_ketua_umum" required>
                                    <option value="" disabled selected>--pilih wakil ketua umum--</option>
                                    @foreach ($member as $members)
                                        <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <div class="mb-3 mt-3 row">
                                <label for="data_sekretaris_umum" class="col-2 label-selects col-form-label">Sekretaris Umum</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('data_sekretaris_umum') is-invalid @enderror" value="{{ old('data_sekretaris_umum') }}"  type="text" name="data_sekretaris_umum" id="data_sekretaris_umum" required>
                                        <option value="" disabled selected>--pilih sekretariat umum--</option>
                                        @foreach ($member as $members)
                                            <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                <div class="mb-3 mt-3 row">
                                    <label for="data_bendahara_umum" class="col-2 label-selects col-form-label">Bendhara Umum</label>
                                    <div class="col-sm-9">
                                        <select class="form-control @error('data_bendahara_umum') is-invalid @enderror" value="{{ old('data_bendahara_umum') }}"  type="text" name="data_bendahara_umum" id="data_bendahara_umum" required>
                                            <option value="" disabled selected>--pilih bendahara umum--</option>
                                            @foreach ($member as $members)
                                                <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                                            @endforeach
                                    </select>
                                    </div>
                                </div>
                                    <div class="mb-3 mt-3 row">
                                        <label for="data_keanggotaan" class="col-2 label-selects col-form-label">Keanggotaan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('data_keanggotaan') is-invalid @enderror" value="{{ old('data_keanggotaan') }}"  type="text" name="data_keanggotaan" id="data_keanggotaan" required>
                                                <option value="" disabled selected>--pilih keaanggotaan--</option>
                                                @foreach ($member as $members)
                                                    <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                        <div class="mb-3 mt-3 row">
                                            <label for="data_kordinator_ibu_ibu" class="col-2 label-selects col-form-label">Koordinator Ibu-Ibu</label>
                                            <div class="col-sm-9">
                                                <select class="form-control @error('data_kordinator_ibu_ibu') is-invalid @enderror" value="{{ old('data_kordinator_ibu_ibu') }}" type="text" name="data_kordinator_ibu_ibu" id="data_kordinator_ibu_ibu" required>
                                                    <option value="" disabled selected>--pilih kordinator ibu-ibu --</option>
                                                    @foreach ($member as $members)
                                                        <option value="[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}">[{{ $members->no_punggung }}] {{ $members->nama_lengkap }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                    <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
                <span>TambahData</span>
                </button>
            <a href="{{ route('bpoAdmin.index.bpo') }}" class="btn mt-4 mb-4 btn-danger">
        <span>batal</span></a>
        </form>


        </div>
@endsection

