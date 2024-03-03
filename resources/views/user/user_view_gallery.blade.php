@extends('layouts.user')
@section('user_main')
<section class="bg-img1 txt-center p-lr-15 p-tb-92">
    <h2 class="ltext-105 cl0 txt-center" style="color:black;">
        OUR GALLERY
    </h2>
</section>


<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="row isotope-grid">
            @foreach($gat as $gat)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0" style="width: 100%; height: 250px; overflow: hidden;">
                        <img style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" src="{{ url('/gallery') }}/{{ $gat->photo }}" alt="Image Description">


                        <!-- Add the 'object-fit' style to control how the image is resized within the container.
                'object-fit: cover' will make the image cover the container while maintaining its aspect ratio.
                'width: 100%; height: 100%;' ensures a fixed size without changing the image's aspect ratio. -->
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l">
                            <a href="{{route('user.user_view_products')}}" style="text-align: center; font-size: large; font-weight: 600; justify-content: center; margin-left: 50%;" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$gat->name}}
                            </a>

                            <span class="stext-105 cl3">
                                <!-- $16.64 -->
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <!-- Add your additional content here -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('user.user_view_products')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>
    </div>
</div>


@endsection