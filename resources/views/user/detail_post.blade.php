@extends('layouts.usernav')
@section('usercontent')
    <div class="card">
        <div class="card-header">
            <h5>Di posting oleh {{ $post->name }}</h5>
        </div>
        <hr>
        <div class="card-body">
            <center>
                <img src="/postimage/{{ $post->image }}" class="rounded"  width="300" height="300" alt="">
                <br>
                <b>
                    {{ $post->name }}
                </b>
                <h3>
                    {{ $post->title }}
                </h3>
                <h6>{{ $post->created_at }}</h6>
                <p>{{ $post->description }}</p>
                <div class="">
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <select class="form-control" name="datadiri" id="datadiri">
                                    @foreach ($datadiri as $datadiri)
                                    <option value=""></option>
                                    <option value="{{ $datadiri->nama }}">
                                        {{ $datadiri->nama }}
                                    </option>

                                    @endforeach
                               </select>
                              Show a second modal and hide this one with the button below.
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-dismiss="modal">Lamar Pekerjaan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Hide this modal and show the first with the button below.
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                      <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Lamar</a>
                    {{-- <button class="btn btn-success">
                        <a class="text-white" href="{{ url('lamar') }}">Lamar</a>
                    </button> --}}
                    <span>
                        <button class="btn btn-danger">
                            <a class="text-white" href="{{ url('landing_page') }}">Kembali</a>
                        </button>
                    </span>
                </div>
            </center>
        </div>

    </div>
@endsection