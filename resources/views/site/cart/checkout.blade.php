@extends('site.layouts.app')
<!DOCTYPE html>
<html>

<head>
    <title>Elite_Shoppy</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //for-mobile-apps -->
    <link href="site/cart/css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="site/cart/css1/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="site/cart/js1/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="site/cart/js1/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="site/cart/js1/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
    <script src="site/cart/js1/jquery.easing.min.js"></script>
</head>
@section('content')

<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                @foreach ($cartCollection as $cart)
                <tr class="rem1">
                    <td class="invert-closeb">
                        <a href="{{ url("cart/remove/$cart->id") }}"><i class='fa fa-remove'></i></a>
                        <div class="rem">
                            <div class="close1"> </div>
                        </div>
                        {{-- <script>$(document).ready(function(c) { 
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script> --}}
                    </td>
                    <td class="invert-image"><a href="single.html"><img style="height:50px;width=10px"
                                src="{{asset("storage/".$cart->attributes->featured_image)}}" alt=" "
                                class="img-responsive" "/></a></td>
                    <td class=" invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    {{-- <a href="{{ url("cart/remove_one_product/$cart->id") }}"
                                        style="width:50px;height:15px">
                                        <div class="entry value-minus">&nbsp;</div>
                                    </a> --}}
                                    <div class="entry value-minus">&nbsp;</div>

                                    {{-- <div class="entry value"> --}}
                                    <div class="">
                                        <span>
                                            {{-- <div class="entry value"><span>{{ $cart->quantity }}</span></div> --}}
                                    <form action="{{ url("/cart/update_product/$cart->id") }}" method="POST">
                                        @csrf
                                        <input type="number" name="cart_value" id="cart_value" style="width:42px;"
                                            value="{{ $cart->quantity }}">
                                    </form>
                                    </span>
                                </div>
                                <a href="{{ url("cart/add_one_product/$cart->id") }}">
                                    <div class="entry value-plus active">&nbsp;</div>
                                </a>

                            </div>
        </div>
        </td>
        <td class="invert">{{ $cart->name }}</td>
        <td class="invert">{{ $cart->price }}</td>
        </tr>
        @endforeach

        <!--quantity-->
        <script>
            $('.value-plus').on('click', function () {
                var divUpd = $(this).parent().find('.value'),
                    newVal = parseInt(divUpd.text(), 10) + 1;
                divUpd.text(newVal);
            });

            $('.value-minus').on('click', function () {
                var divUpd = $(this).parent().find('.value'),
                    newVal = parseInt(divUpd.text(), 10) - 1;
                if (newVal >= 1) divUpd.text(newVal);
            });

        </script>
        <!--quantity-->
        </table>
    </div>
</div>
</div>
@endsection

<!-- check out -->

@push('scripts')
{{-- <script>
    $('#cart_value').bind('keyup', function () {
        $('#form').submit();
    });
</script> --}}
<script>
    // $(".value-minus").click(function () {
    //     $.ajax({
    //         url: "demo_test.txt",
    //         success: function (result) {
    //             $("#div1").html(result);
    //         }
    //     });
    // });
</script>
@endpush
