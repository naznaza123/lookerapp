@extends('layouts.nav')
@section('content')
@if (session()->has('message'))
<div class="alert alert-danger">
    <button type="button" class="close " data-dismiss="alert" aria-hidden="true">X</button>
    {{ session()->get('message') }}
</div>        
@endif

    @foreach ($data as $data)

        
    <div class="">
        <img src="/postimage/{{ $data->image }}" alt="" srcset="">
        <h4>{{ $data->title }}</h4>
        <p>{{ $data->description }}</p>
        <a href="{{ url('my_post_del',$data->id) }}" 
            onclick="return confirm('Hapus data ini?')" class="btn btn-danger ">Delete</a>
        <a href="{{ url('post_update_page',$data->id) }}" class="btn btn-primary">Edit</a>
    </div>
    @endforeach
@endsection