@extends('site.layouts.app')
@section('content')


<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="single-pro">
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    @foreach ($womens_product as $womens) 
                    <div class="men-thumb-item">
                        <img src="{{ asset("storage/$womens->featured_image") }}" alt=""
                            class="pro-image-front">
                        <img src="{{ asset("storage/$womens->featured_image") }}" alt=""
                            class="pro-image-back"> 
                        <span class="product-new-top">New</span>
                    </div>

                    <div class="item-info-product ">
                       <h4><a href="{{ url("/product/$womens->id") }}">{{ $womens->name }}</a></h4>
                       <div class="info-product-price">
                        <span class="item_price">${{ $womens->price - $womens->discount_amount;}}</span>
                        @if ($womens->discount_amount > 0)
                        <del> {{ $womens->price }}</del>
                        @endif
                    </div>
                        {{-- <div
                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2"> --}}
                            <div class="item-info-product ">
                            <div>  
                                <a href="{{ url("/add_product/$womens->id")  }}"> Add to cart </a>  
                            </div> 
                        {{-- </div> --}}
                        
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!--//single_page-->
@endsection
