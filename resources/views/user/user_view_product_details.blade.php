@extends('layouts.user')
@section('user_main')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92">
    <h2 class="ltext-105 cl0 txt-center">
        DETAILS FOR PRODUCTTS
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h2 class="mtext-111 cl2 p-b-16">
                        {{$product->name}}
                    </h2>
                    <h3 class="mtext-111 cl2 p-b-16">
                        &#x20B9; {{$product->price}}
                    </h3>
                    <h5 style="font-weight: bolder;">
                        DETAILS
                    </h5>

                    <p class="stext-113 cl6 p-b-26">
                        {{$product->detail}}
                    </p>
                    <h5 style="font-weight: bolder;">
                        DESCRIPTIION
                    </h5>

                    <p class="stext-113 cl6 p-b-26">
                        {{$product->description}}
                    </p>
                   
                    <form action="#" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{request('id')}}">
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="quantity" type="text" pattern="[a-zA-Z0-9]*$" name="quantity" placeholder="Your quantity">
                            <!-- <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON"> -->
                        </div>
                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            ADD TO CART
                        </button>
                    </form>
                  


                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{url('product')}}//{{$product->image}}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection