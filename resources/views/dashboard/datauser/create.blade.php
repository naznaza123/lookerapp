@extends('layouts.nav')
@section('content')
    <form action="{{ $action }}" method="post">
    @csrf
    <div class="form-group">
        <div class="col-mb-3">
            <label class="form-label fw-bold" for="">Nama Lengkap</label>
            <input class="form-control hvr-grow  shadow-lg @error('nama') is-invalid @enderror"  name="nama" id="nama" value="{{ old('nama') }} {{ $data_users->nama }}"
             placeholder="Masukkan Nama Lengkap Mu">
        </div>
        @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="form-group">
        <div class="col-mb-3">
            <label class="form-label fw-    bold" for="">Alamat</label>
            <input class="form-control hvr-grow  shadow-lg @error('alamat_lengkap') is-invalid 
            @enderror"  name="alamat_lengkap" id="alamat_lengkap" value="{{ old('alamat_lengkap') }} 
            {{ $data_users->alamat_lengkap }}"
             placeholder="Masukkan Alamat lengkap Mu">
        </div>
        @error('alamat_lengkap')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="form-group">
        <div class="col-mb-3">
            <label class="form-label fw-bold" for="">Nomor Hp/Whatsapp</label>
            <input class="form-control hvr-grow  shadow-lg @error('nomor_hp') is-invalid 
            @enderror"  name="nomor_hp" id="nomor_hp" value="{{ old('nomor_hp') }} 
            {{ $data_users->nomor_hp }}"
             placeholder="Masukkan Nomor Hp mu">
        </div>
        @error('nomor_hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="form-group">
        <div class="col-mb-3">
            <label class="form-label fw-bold" for="">Lulusan</label>
            <input class="form-control hvr-grow  shadow-lg @error('lulusan') is-invalid 
            @enderror"  name="lulusan" id="lulusan" value="{{ old('lulusan') }} 
            {{ $data_users->lulusan }}"
             placeholder="Kamu lulusan Tahun Berapa?">
        </div>
        @error('lulusan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="form-group text-center">
        <div class="pt-3">
            {{-- <a href="" value="{{ $tombol }}" type="submit" class=" btn form-control hvr-underline-from-center">SIMPAN</a> --}}
            <button class="btn hvr-float-shadow">
                <input class=" form-control btn btn-primary text" type="submit" value="{{ $tombol }}">

            </button>
        </div>
    </div>
    
    </form>
@endsection