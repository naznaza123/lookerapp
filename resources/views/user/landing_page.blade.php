@extends('layouts.usernav')
@section('usercontent')
@foreach ($post as $post)
    <div class="card">
        <div class="card-header">
            <strong>
                <h4>@ {{ $post->name }}</h4>
            </strong>
            <hr>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <center>

                        <div class="img">
                            <img src="/postimage/{{ $post->image }}" class="rounded"  width="300" height="300" alt="">
        
                        </div>
                    </center>
                </div>
                <div class="col-md-6">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>

                    <button class="btn btn-primary">
                    <a class="text-white" href="{{ url('detail_post',$post->id) }}">Detail</a>
                    </button>
                </div>
            </div>

        </div>
    </div>
@endforeach
        
@endsection