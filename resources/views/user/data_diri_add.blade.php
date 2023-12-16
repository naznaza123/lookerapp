@extends('Layouts.usernav')
@section('usercontent')
<div class="">
    <form action="{{ url('data_diri_create') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="">
        <label for="form-label">nama</label>
        <input class="form-control" type="text" name="nama">
    </div>
    <div class="">
        <label for="form-label">tanggal lahir</label>
        <input class="form-control" type="date" name="tanggal">
    </div>
    <div class="">
        <label for="form-label">Alamat</label>
        <input class="form-control" type="text" name="alamat">
    </div>
    <div class="">
        <label for="form-label">Usia</label>
        <input class="form-control" type="text" name="usia">
    </div>
    <div class="">
        <label for="form-label">Lulusan</label>
        <input class="form-control" type="text" name="lulusan">
    </div>
    <div class="">
        <label for="form-label">Keahlian</label>
        <input class="form-control" type="text" name="keahlian">
    </div>
    <div class="">
        <label for="form-label">image</label>
        <input class="form-control" type="file" name="image">
    </div>
    <div class="">
            
        <input class="btn btn-outline-primary" type="submit" value="add post here" >
    </div>

    
    </form>
</div>
@endsection