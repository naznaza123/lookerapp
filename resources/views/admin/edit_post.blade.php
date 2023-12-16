 @extends('layouts.adminnav')
@section('content')
<form action="{{ url('update_post',$post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf


        <div class="">
            <label for="">Post Title</label>
        <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div class="">
            <label for="">Post Description</label>
            <textarea name="description" value="{{ $post->description }}" id="" cols="30" rows="10">

            </textarea>
        </div>
        <div class="">
            <label for="">Old Image</label>
            <img src="/postimage/{{ $post->image }}" alt="" srcset="">
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