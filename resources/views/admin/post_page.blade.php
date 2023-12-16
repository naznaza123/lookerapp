<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   @extends('layouts.adminnav') 
   @section('content')
   <div class="container">

       @if (session()->has('message'))
       <div class="alert alert-success">
           <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>
            
        @endif
        <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            

            <div class="">
                <label for="form-label">Post Title</label>
                <input class="form-control" type="text" name="title">
            </div>
            <div class="">
                <label for="form-label">Post Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">

                </textarea>
            </div>
            <div class="">
                <label for="">Add Image</label>
                <input class="form-control" type="file" name="image">
            </div>
            <div class="">
                <input type="submit" class="btn btn-primary">
            </div>
            
        </form>
    </div>
   @endsection
</body>
</html>