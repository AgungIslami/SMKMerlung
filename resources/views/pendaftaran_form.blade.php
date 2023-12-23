@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card">
        <div class="card-header">
            {{ $judul }}
        </div>
            <div class="card-body">
                <form action="/pendaftaran" method="POST">
                    @method('POST')
                    @csrf
                    <div class="form-group mt-1">
                        <label for="kode_pendaftaran">Kode Pendaftaran</label>
                        <input class="form-control" type="text" name="kode_pendaftaran" value="{{ old('kode_pendaftaran') }}">
                        <span class="text-danger">{{ $errors->first('kode_pendaftaran') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama_calon_siswa">Nama Calon Siswa</label>
                        <input class="form-control" type="text" name="nama_calon_siswa" value="{{ old('nama_calon_siswa') }}">
                        <span class="text-danger">{{ $errors->first('nama_calon_siswa') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tanggal_lahir" value="{{ old('tempat_lahir') }}">
                        <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input class="form-control" type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                        <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input class="form-control" type="text" name="asal_sekolah" value="{{ old('asal_sekolah') }}">
                        <span class="text-danger">{{ $errors->first('asal_sekolah') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nomor_hp">Nomor HP</label>
                        <input class="form-control" type="text" name="nomor_hp" value="{{ old('nomor_hp') }}">
                        <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>                        
                    </div>
                </form>
        </div>
    </div>
    </div>
</div>
</div>
@endsection