@extends('layouts.nav')
@section('content')
    {{-- @foreach ($post as $post) --}}
    <div class="container-fluid">

        <div class="product">
            <div class="product-img">
            <img src="/postimage/{{ $post->image }}" class="img-thumbnail" width="550px" height="440px" alt="">
            <div class="product-label">
                {{-- <span class="sale">-30%</span> --}}
                <span class="new">NEW</span>
            </div>
        </div>
        <div class="product-body">
            <p class="product-category">Admin</p>
            <h3 class="product-name"><a href="#">{{ $post->title }}</a></h3>
            <h3 class="product-name"><a href="#">{{ $post->description }}</a></h3>
            {{-- <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4> --}}
            <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="product-btns">
                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
            </div>
        </div>
        
    </div> 
</div>
    {{-- @endforeach --}}
    
@endsection