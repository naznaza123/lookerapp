@extends('layouts.usernav')
@section('usercontent')
    <h4>hai</h4>
    <div class="container">
        <div class="card">
            <div class="card-header">  
                <h1>Tambah data baru</h1>
            </div>
            <div class="card-body">
                <button class="btn btn-primary">

                    <a class="text-white" href="{{ url('data_diri_add') }}">
                    Tambah data mu disini
                    </a>
                </button>
            </div>
        </div>
    </div>
    @foreach ($datadiri as $datadiri)
        
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="/datadiriimage/{{ $datadiri->image }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $datadiri->nama }}</h5>
              <p class="card-text">{{ $datadiri->alamat }}</p>
              <p class="card-text">Lulusan Tahun {{ $datadiri->lulusan }}</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Informasi Lengkap
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <b>

                <h5>Nama : {{ $datadiri->nama }}</h5>
            </b>
            <p>Alamat : {{ $datadiri->alamat }}</p>
            <p>Tanggal Lahir : {{ $datadiri->tanggal }} </p>
            <p>Lulusan Tahun : 
                <b>
                    {{ $datadiri->lulusan }}
                </b>
            </p>
            <p>Keahlian/kelebihan
                 <b>
                    {{ $datadiri->keahlian }}
                 </b>
            </p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>    
            </div>
          </div>
    </div>
    @endforeach
   
    @endsection