@extends('site.layouts.app')
@section('content')
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="single-pro">
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    @foreach ($mens_product as $mens) 
                    <div class="men-thumb-item">
                        <img src="{{ asset("storage/$mens->featured_image") }}" alt=""
                            class="pro-image-front">
                        <img src="{{ asset("storage/$mens->featured_image") }}" alt=""
                            class="pro-image-back"> 
                        <span class="product-new-top">New</span>
                    </div>

                    <div class="item-info-product ">
                       <h4><a href="{{ url("/product/$mens->id") }}">{{ $mens->name }}</a></h4>
                       <div class="info-product-price">
                        <span class="item_price">${{ $mens->price - $mens->discount_amount;}}</span>
                        @if ($mens->discount_amount > 0)
                        <del> {{ $mens->price }}</del>
                        @endif
                    </div> 
                        {{-- <div
                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2"> --}}
                            <div class="item-info-product ">
                            <div>  
                                <a href="{{ url("/add_product/$mens->id")  }}"> Add to cart </a>  
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
