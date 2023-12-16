@extends('layouts.nav')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <form action="{{ url('user_post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="" class="form-label">Title</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="">
                    <label for="">Add image</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="">
                    
                    <input class="btn btn-primary" type="submit" value="add post here" >
                </div>
                
    
            </form>
        </div>
    </div>

</div>
@endsection