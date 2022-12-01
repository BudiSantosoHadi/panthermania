@extends('layouts.appmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Begin Page Content -->
    <div class="g-white p-5 rounded">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EDIT DATA MEMBER</h1>
        </div>
        <hr>
        <div class="mb-3 mt-3 row">

        <form action="{{ route('Admin.update.member',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="photos_members" class="col-sm-2 label-selects col-form-label">Photos member</label>
            <div class="col-sm-9">
                <input class="form-control @error('logo_image') is-invalid @enderror"
                type="file" name="photos_members" id="photos_members" onchange="previewImagePhotos_member()">

                @error('photos_members')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-4">
                <img class="img-fluid photos_members mb-3 col-sm-5" width="56%" height="100px">
            </div>

            <label for="photos_ktp" class="col-sm-2 label-selects col-form-label">Photos KTP</label>
            <div class="col-sm-9">
                <input class="form-control @error('photos_ktp') is-invalid @enderror"
                type="file" name="photos_ktp" id="photos_ktp" onchange="previewImagePhotos_ktp()" >

                @error('photos_ktp')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-4">
                <img class="img-fluid photos_ktp mb-3 col-sm-5" width="56%" height="100px">
            </div>

            <label for="photos_sim" class="col-sm-2 label-selects col-form-label">Photos SIM</label>
            <div class="col-sm-9">
                <input class="form-control @error('photos_sim') is-invalid @enderror"
                type="file" name="photos_sim" id="photos_sim" onchange="previewImagePhotos_sim()" >

                @error('photos_sim')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-4">
                <img class="img-fluid photos_sim mb-3 col-sm-5" width="56%" height="100px">
            </div>


            <label for="photos_bukti_tranfer" class="col label-selects col-form-label">Photos Bukti Tranfer</label>
            <div class="col-sm-9">
                <input class="form-control @error('photos_bukti_tranfer') is-invalid @enderror"
                type="file" name="photos_bukti_tranfer" id="photos_bukti_tranfer" onchange="previewImagePhotos_bukti_transfer()" >

                @error('photos_bukti_tranfer')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-4">
                <img class="img-fluid photos_bukti_tranfer mb-3 col-sm-5" width="56%" height="100px">
            </div>


            <label for="photos_stnk" class="col-sm-2 label-selects col-form-label">Photos STNK</label>
            <div class="col-sm-9">
                <input class="form-control @error('photos_stnk') is-invalid @enderror"
                type="file" name="photos_stnk" id="photos_stnk" onchange="previewImagePhotos_stnk()" >

                @error('photos_stnk')
                <span class="alert alert-danger mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-2 col-sm-4">
                <img class="img-fluid photos_stnk col-sm-5" width="56%" height="100px">
            </div>
            <hr>
            <h4 class=" bg-primary rounded text-light p-2">Data Identitas</h4>
            <hr>
            <label for="status_members" class="col-sm-2 mt-3  label-selects col-form-label">Status Member</label>
            <div class="col-sm-9">
            <select class="form-control @error('status_members') is-invalid @enderror" value="{{ old('status_members',$data->status_members) }}" name="status_members" id="status_members" required>
                <option value="{{ old('status_members',$data->status_members) }}" selected disabled>{{ old('status_members', $data->status_members) }}</option>
                <option value="lengkap">sudah lengkap</option>
                <option value="belumlengkap">belum lengkap</option>
            </select>
            <!-- error message untuk title -->
            @error('status_members')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="nama_lengkap" class="col mt-3  label-selects col-form-label">Nama lengkap <span style="font-size: 16px;">(sesuai ktp)</span></label>
            <div class="col-sm-9">
            <input class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap',$data->nama_lengkap) }}" name="nama_lengkap" id="nama_lengkap" required>
            <!-- error message untuk title -->
            @error('nama_lengkap')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <label for="email" class="col-sm-2 mt-2 label-selects col-form-label">email member</label>
            <div class="col-sm-9">
                <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$data->email) }}" type="text" name="email" id="email" required>
            <!-- error message untuk title -->
            @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col">
                        <label for="no_punggung" class="mt-2 label-selects col-form-label">nomor punggung</label>
                        <input class="form-control @error('no_punggung') is-invalid @enderror" type="text"  name="no_punggung" id="no_punggung" value="{{ old('no_punggung',$data->no_punggung) }} " required>
                        @error('no_punggung')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="nama_korwil" class="mt-2 label-selects col-form-label">Nama Korwil</label>
                            <select class="form-control @error('nama_korwil') is-invalid @enderror" value="{{ old('nama_korwil', $data->nama_korwil) }}" type="text" name="nama_korwil" id="nama_korwil" required>
                                <option value="{{ old('korwil', $data->nama_korwil) }}" disabled selected>{{ old('nama_korwil', $data->nama_korwil) }}</option>
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

                    <div class="col">
                        <label for="jenis_kelamin" class="mt-2 label-selects col-form-label">jenis kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" type="text"  name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin',$data->jenis_kelamin) }}" required>
                            <option value="{{ old('jenis_kelamin',$data->jenis_kelamin) }}">{{ old('jenis_kelamin',$data->jenis_kelamin) }}</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                            @error('jenis_kelamin')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="ukuran_baju" class="mt-2 label-selects col-form-label">ukuran baju</label>
                        <select class="form-control @error('ukuran_baju') is-invalid @enderror" type="text"  name="ukuran_baju" id="ukuran_baju" value="{{ old('ukuran_baju',$data->ukuran_baju) }}" required>
                            <option value="{{ old('ukuran_baju',$data->ukuran_baju) }}">{{ old('ukuran_baju',$data->ukuran_baju) }}</option>
                            <option value="XL">XL</option>
                            <option value="L">L</option>
                            <option value="XLL">XLL</option>
                            <option value="M">M</option>
                        </select>
                            @error('jenis_kelamin')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="tempat_lahir" class="mt-2 label-selects col-form-label">tempat lahir</label>
                        <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text"  name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir',$data->tempat_lahir) }}" required>
                        @error('tempat_lahir')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            <div class="col">
                <label for="tanggal_lahir" class="mt-2 label-selects col-form-label">tanggal lahir</label>
                <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date"  name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir',$data->tanggal_lahir) }}" required>
                @error('tanggal_lahir')
                <span class="alert alert-danger mt-2">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col">
                <label for="agama" class="mt-2 label-selects col-form-label">Agama</label>
                <input class="form-control @error('agama') is-invalid @enderror" type="text"  name="agama" id="agama" value="{{ old('agama',$data->agama) }}" required>
                @error('agama')
                <span class="alert alert-danger mt-2">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col">
                <label for="status_menikah" class="mt-2 label-selects col-form-label">Status Menikah</label>
                <select class="form-control @error('status_menikah') is-invalid @enderror" type="text"  name="status_menikah" id="status_menikah" value="{{ old('status_menikah',$data->status_menikah) }}" required>
                    <option value="{{ old('status_menikah',$data->status_menikah) }}">{{ old('status_menikah',$data->status_menikah) }}</option>
                    <option value="belum menikah">belum menikah</option>
                    <option value="sudah menikah">sudah menikah</option>
                </select>
                    @error('status_menikah')
                <span class="alert alert-danger mt-2">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            </div>
         </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="provinsi" class="mt-2 label-selects col-form-label">Nama Provinsi</label>
                        <select class="form-control @error('nama_kabupaten') is-invalid @enderror" value="{{ old('provinsi') }}" type="text" name="provinsi" id="provinsi" required>
                            <option value="{{ old('provinsi',$data->provinsi) }}" selected disabled>{{ old('provinsi',$data->provinsi) }}</option>
                            @foreach ($provinsi as $prov )
                            <option value="{{ $prov->name }}">{{ $prov->name}}</option>
                            @endforeach
                    <!-- error message untuk title -->
                        @error('provinsi')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                    </select>

                </div>
                    <div class="col">
                        <label for="kabupaten_kota" class="mt-2 label-selects col-form-label">Nama Kabupaten</label>
                        <select class="form-control @error('kabupaten_kota') is-invalid @enderror" type="text" name="kabupaten_kota" id="kabupaten_kota" required>
                        <option value="{{ old('kabupaten_kota',$data->kabupaten_kota) }}" selected disabled>{{ old('kabupaten_kota',$data->kabupaten_kota) }}</option >
                            @foreach ($kabupaten as $kab )
                            <option value="{{ $kab->name }}">{{ $kab->name}}</option>
                            @endforeach
                    <!-- error message untuk title -->
                        @error('kabupaten_kota')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                    </select>
                    </div>

                    <div class="col">
                        <label for="kecamatan" class="mt-2 label-selects col-form-label">kecamatan</label>
                        <input class="form-control @error('kecamatan') is-invalid @enderror" type="text"  name="kecamatan" id="kecamatan" value="{{ old('kecamatan',$data->kecamatan) }}" required>
                        @error('kecamatan')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="kelurahan" class="mt-2 label-selects col-form-label">kelurahan</label>
                        <input class="form-control @error('kelurahan') is-invalid @enderror" type="text"  name="kelurahan" id="kelurahan" value="{{ old('kelurahan',$data->kelurahan) }}" required>
                        @error('kelurahan')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>


            <label for="alamat_lengkap" class="col mt-3 label-selects col-form-label">Alamat Lengkap</label>
            <div class="col-sm-10">
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="alamat_lengkap" required>{{ old('alamat_lengkap',$data->alamat_lengkap) }}</textarea>
                    @error('alamat_lengkap')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
            </div>



            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="no_telp" class="mt-2 label-selects col-form-label">nomor telp</label>
                        <input class="form-control @error('no_telp') is-invalid @enderror" type="number"  name="no_telp" id="no_telp" value="{{ old('no_telp',$data->no_telp) }}" required>
                        @error('no_telp')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="no_whatsapp" class="mt-2 label-selects col-form-label">no whatsapp</label>
                        <input class="form-control @error('no_whatsapp') is-invalid @enderror" type="text"  name="no_whatsapp" id="no_whatsapp" value="http://wa.me/{{ old('no_whatsapp',$data->no_whatsapp) }}" required>
                        @error('no_whatsapp')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="kontak_darurat" class="mt-2 label-selects col-form-label">kontak darurat</label>
                        <input class="form-control @error('no_telp') is-invalid @enderror" type="number"  name="kontak_darurat" id="kontak_darurat" value="{{ old('kontak_darurat',$data->kontak_darurat) }}" >
                        @error('kontak_darurat')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="no_telp_kantor" class="mt-2 label-selects col-form-label">nomor telp kantor</label>
                        <input class="form-control @error('no_telp_kantor') is-invalid @enderror" type="number"  name="no_telp_kantor" id="no_telp_kantor" value="{{ old('no_telp_kantor',$data->no_telp_kantor) }}" >
                        @error('no_telp_kantor')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="pekerjaan" class="mt-2 label-selects col-form-label">pekerjaan</label>
                        <input class="form-control @error('pekerjaan') is-invalid @enderror" type="text"  name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan',$data->pekerjaan) }}" required>
                        @error('pekerjaan')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="nama_perusahaan" class="mt-2 label-selects col-form-label">nama perusahaan</label>
                        <input class="form-control @error('nama_perusahaan') is-invalid @enderror" type="text"  name="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan',$data->nama_perusahaan) }}" required>
                        @error('nama_perusahaan')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="sekolah_universitas" class="mt-2 label-selects col-form-label">sekolah / universitas</label>
                        <input class="form-control @error('sekolah_universitas') is-invalid @enderror" type="text"  name="sekolah_universitas" id="sekolah_universitas" value="{{ old('sekolah_universitas',$data->sekolah_universitas) }}" required>
                        @error('sekolah_universitas')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
            </div>

            <label for="alamat_perusahaan" class="col mt-3 label-selects col-form-label">Alamat Lengkap perusahaan</label>
            <div class="col-sm-10">
                    <textarea class="form-control @error('alamat_perusahaan') is-invalid @enderror" id="alamat_perusahaan" name="alamat_perusahaan" required>{{ old('alamat_perusahaan',$data->alamat_perusahaan) }}</textarea>
                    @error('alamat_perusahaan')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
            </div>
            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-5">
                        <label for="no_ktp" class="mt-2 label-selects col-form-label">no KTP</label>
                        <input class="form-control @error('no_ktp') is-invalid @enderror" type="number"  name="no_ktp" id="no_ktp" value="{{ old('no_ktp',$data->no_ktp) }}" required>
                        @error('no_ktp')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-5">
                        <label for="no_sim" class="mt-2 label-selects col-form-label">no SIM</label>
                        <input class="form-control @error('no_sim') is-invalid @enderror" type="text"  name="no_sim" id="no_sim" value="{{ old('no_sim',$data->no_sim) }}" required>
                        @error('no_sim')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <h4 class=" bg-primary rounded text-light p-2">Data Kendaraan</h4>
            <hr>

            <div class="container-fluid mt-3">

                <div class="row">

                    <div class="col">
                        <label for="type_kendaraan" class="mt-2 label-selects col-form-label">type Kendaraan</label>
                        <input class="form-control @error('no_ktp') is-invalid @enderror" type="number"  name="type_kendaraan" id="type_kendaraan" value="{{ old('type_kendaraan',$data->type_kendaraan) }}" required>
                        @error('type_kendaraan')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="tahun_kendaraan" class="mt-2 label-selects col-form-label">tahun Kendaraan</label>
                        <input class="form-control @error('tahun_kendaraan') is-invalid @enderror" type="date"  name="tahun_kendaraan" id="tahun_kendaraan" value="{{ old('tahun_kendaraan',$data->tahun_kendaraan) }}" required>
                        @error('tahun_kendaraan')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="no_polisi" class="mt-2 label-selects col-form-label">no Polisi</label>
                        <input class="form-control @error('no_polisi') is-invalid @enderror" type="text"  name="no_polisi" id="no_polisi" value="{{ old('no_polisi',$data->no_polisi) }}" required>
                        @error('no_polisi')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                </div>
            </div>

            <div class="container-fluid mt-3">

                <div class="row">

                    <div class="col">
                        <label for="warna_kendaraan" class="mt-2 label-selects col-form-label">warna Kendaraan</label>
                        <input class="form-control @error('warna_kendaraan') is-invalid @enderror" type="text"  name="warna_kendaraan" id="warna_kendaraan" value="{{ old('warna_kendaraan',$data->warna_kendaraan) }}" required>
                        @error('warna_kendaraan')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="no_chasis" class="mt-2 label-selects col-form-label">nomor chasis Kendaraan</label>
                        <input class="form-control @error('no_chasis') is-invalid @enderror" type="text"  name="no_chasis" id="no_chasis" value="{{ old('no_chasis',$data->no_chasis) }}" required>
                        @error('no_chasis')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="no_engine" class="mt-2 label-selects col-form-label">no engine kendaraan</label>
                        <input class="form-control @error('no_engine') is-invalid @enderror" type="text"  name="no_engine" id="no_engine" value="{{ old('no_engine',$data->no_engine) }}" required>
                        @error('no_engine')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="tanggal_pajak" class="mt-2 label-selects col-form-label">no pajak kendaraan</label>
                        <input class="form-control @error('tanggal_pajak') is-invalid @enderror" type="date"  name="tanggal_pajak" id="tanggal_pajak" value="{{ old('tanggal_pajak',$data->tanggal_pajak) }}" required>
                        @error('tanggal_pajak')
                        <span class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                </div>
            </div>

            <button class="ml-2 mr-2 mt-4 mb-4 btn btn-success" type="submit">
            <span>UpdateData</span>
            </button>
            <a href="{{ route('Admin.index.member') }}" class="btn mt-4 mb-4 btn-danger">
            <span>batal</span></a>
            </form>

        </div>
    </div>
@endsection

