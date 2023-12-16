
@extends('layouts.nav')
@section('content')
<form action="{{ url('update_post_data',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

h
        <div class="">
            <label for="">Post Title</label>
        <input type="text" name="title" value="{{ $data->title }}">
        </div>
        <div class="">
            <label for="">Post Description</label>
            <textarea name="description" value="{{ $data->description }}" id="" cols="30" rows="10">

            </textarea>
        </div>
        <div class="">
            <label for="">Old Image</label>
            <img src="/postimage/{{ $data->image }}" alt="" srcset="">
        </div>
        <div class="">
            <label for="">Add Image</label>
            <input type="file" name="image">
        </div>
        <div class="">
            <input type="submit" class="btn btn-primary">
        </div>

   </form>
@endsection