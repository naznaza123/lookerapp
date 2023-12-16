@extends('layouts.adminnav')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close " data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>        
    @endif
    <table class="table table-hover">
        <tr>
            <th>Post title</th>
            <th>Description</th>
            <th>Post by</th>
            <th>Post Status</th>
            <th>UserType</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Edit</th>
            <th>Post Accept</th>
            <th>Post Reject</th>
        </tr>
        @foreach ($post as $post)
            
        
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->post_status }}</td>
            <td>{{ $post->usertype }}</td>
            <td>
                <img src="postimage/{{ $post->image }}" class="image" width="100" height="100" alt="" srcset="">
            </td>
            <td>
                <a href="{{ url('delete_post',$post->id) }}" onclick="return confirm('Hapus data ini?')" class="btn btn-danger">delete</a>
            </td>
            <td>
                <a href="{{ url('edit_post',$post->id) }}" class="btn btn-success">edit</a>
            </td>
            <td>
                <a href="{{ url('accept_post',$post->id) }}" class="btn btn-primary">Accept</a>
            </td>
            <td>
                <a onclick="return confirm('tolak status ini?')" href="{{ url('reject_post',$post->id) }}" class="btn btn-danger">Reject</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection