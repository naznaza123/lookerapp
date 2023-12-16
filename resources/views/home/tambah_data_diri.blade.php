@extends('layouts.nav')
@section('content')
    <div class="">
        <form action="{{ url('buat_data_diri') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="">
            <label for="form-label">nama</label>
            <input class="form-label" type="text" name="nama">
        </div>
        <div class="">
            <label for="form-label">tanggal lahir</label>
            <input class="form-label" type="date" name="tanggal">
        </div>
        <div class="">
            <label for="form-label">Alamat</label>
            <input class="form-label" type="text" name="alamat">
        </div>
        <div class="">
            <label for="form-label">Usia</label>
            <input class="form-label" type="text" name="usia">
        </div>
        <div class="">
            <label for="form-label">Lulusan</label>
            <input class="form-label" type="text" name="lulusan">
        </div>
        <div class="">
            <label for="form-label">Keahlian</label>
            <input class="form-label" type="text" name="keahlian">
        </div>
        <div class="">
            <label for="form-label">image</label>
            <input class="form-label" type="file" name="image">
        </div>
        <div class="">
                
            <input type="submit" value="add post here" >
        </div>

        
        </form>
    </div>
@endsection