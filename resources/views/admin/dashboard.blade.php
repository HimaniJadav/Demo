@extends('layouts.admin')
@section('main_content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">TOTAL USER</p>
                 
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">TOTAL CATEGORY</p>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">TOTAL PRODUCTS</p>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">TOTAL FEEDBACKS</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- report -->
   
</div>
<!-- Sale & Revenue End -->


<!--  -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!-- <div class="col-sm-12 col-md-6 col-xl-4">
            ahj
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            abdc
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            abc
        </div> -->
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Testimonial</h6>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/jeel.jpeg" style="width: 100px; height: 100px;">
                        <h5 class="mb-1" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">JEEL PATEL</h5>
                        <p>DESIGNER</p>
                        <!-- <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p> -->
                        <p class="mb-0"> This project is a web based online site.
                            This is a online shopping site named “Firangi”.
                            Basically, it is a shopping website of men’s outfit.
                            It has many product under different categories</p>


                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/dev.jpeg" style="width: 100px; height: 100px;">
                        <h5 class="mb-1" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">SHAH DEV</h5>
                        <p>DEVELOPER </p>
                        <p class="mb-0"> It has also some men’s accessories like wallets, belt, watches, sunglasses etc.
                            This project has been developed into LARAVEL & MySQL in backend.
                        </p>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/keyur.jpeg" style="width: 100px; height: 100px;">
                        <h5 class="mb-1" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">KEYUR PARMAR</h5>
                        <p>DOCUMENT-MAKER</p>
                        <p class="mb-0">24/7 Availability: Unlike a physical store, a website is accessible 24/7. Customers can browse, shop, and place orders at any time, increasing convenience and potentially boosting sales.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <!-- <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe> -->
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0574706195307!2d71.6290927752258!3d22.72610517938269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39594144a350230d%3A0xc3e80ec1b1f3f474!2sAapni%20dukan!5e0!3m2!1sen!2sin!4v1699375228140!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0574706195307!2d71.6290927752258!3d22.72610517938269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39594144a350230d%3A0xc3e80ec1b1f3f474!2sAapni%20dukan!5e0!3m2!1sen!2sin!4v1699375228140!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <!--  -->
            </div>
        </div>
    </div>
</div>
<!-- Widget End -->





@endsection