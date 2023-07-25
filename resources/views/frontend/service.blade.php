@extends('frontend.layouts.main')

@section('main-container')
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Our Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->


       <!-- Start Service Section -->
       <section id="service-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Our Services & Solution</h2>
                        <!-- <p>Duis aute irure dolor in reprehenderit in voluptate</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-skyatlas"></i></a>
                        <h2>Graphics Design</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-magic"></i></a>
                        <h2>Domain & Hosting</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-gift"></i></a>
                        <h2>Web Apps Development</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-diamond"></i></a>
                        <h2>POS Software Development</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-wordpress"></i></a>
                        <h2>Professional Skills Training</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-forumbee"></i></a>
                        <h2>Industrial Attachment</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-bicycle"></i></a>
                        <h2>Website Development</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-post">
                        <a href="#"><i class="fa fa-foursquare"></i></a>
                        <h2>RESPONSIVE DESIGN</h2>
                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Service Section -->


        <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Files uploaded</h3>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Projects completed</h3>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-code"></i>
                        <div class="timer" id="item3" data-to="18745" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Lines of code written</h3>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInRight" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Happy clients</h3>
                      </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->


    <!-- Start Pricing Section -->
<section id="pricing-section" class="pricing-section">
    <div class="container">
       <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                    <h2>Pricing</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="pricing">
                    <div class="pricing-header">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="pricing-body">
                        <h3 class="pricing-title">E-Commerce</h3>
                        <h4 style="margin-bottom: 15px; color: teal;">Web design Module</h4>
                        <p><i class="fa fa-check"></i>1 home page with Attractive view</p>
                        <p><i class="fa fa-check"></i>Unique Design</p>
                        <p><i class="fa fa-check"></i>100% Responsive</p>
                        <p><i class="fa fa-check"></i>Unlimited Sliding picture animation</p>
                        <p><i class="fa fa-check"></i>Unlimited Link pages with image editing</p>
                        <p><i class="fa fa-times"></i> Option to add unlimited products to stock and inventory</p>
                        <p><i class="fa fa-check"></i>Upload products and additional pictures using the admin panel</p>
                        <p><i class="fa fa-check"></i>Easy to add, edit and remove products, price list and description by yourself</p>
                        <p><i class="fa fa-check"></i>Product image zoom-in / Zoom-out capability</p>
                        <a href="#" class="btn btn-primary">Price: 60000/ $750</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing">
                    <div class="pricing-header">
                        <i class="fa fa-diamond"></i>
                    </div>
                    <div class="pricing-body">
                        <h3 class="pricing-title">Individual Web Module Price</h3>
                        <h4 style="margin-bottom: 15px; color: teal;">Web design Module</h4>
                        <p><i class="fa fa-check"></i>1 home page with Attractive view</p>
                        <p><i class="fa fa-check"></i>Unique Design</p>
                        <p><i class="fa fa-check"></i>100% Responsive</p>
                        <p><i class="fa fa-check"></i>Unlimited Sliding picture animation</p>
                        <p><i class="fa fa-check"></i>Unlimited Link pages with image editing</p>
                        <p><i class="fa fa-times"></i> Option to add unlimited products to stock and inventory</p>
                        <p><i class="fa fa-check"></i>Upload products and additional pictures using the admin panel</p>
                        <p><i class="fa fa-check"></i>Easy to add, edit and remove products, price list and description by yourself</p>
                        <p><i class="fa fa-check"></i>Product image zoom-in / Zoom-out capability</p>
                        <a href="#" class="btn btn-primary">Price: 60000/ $750</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing">
                    <div class="pricing-header">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <div class="pricing-body">
                        <h3 class="pricing-title">Domain, Hosting and Email</h3>
                        <h4 style="margin-bottom: 15px; color: teal;">Web design Module</h4>
                        <p><i class="fa fa-check"></i>1 home page with Attractive view</p>
                        <p><i class="fa fa-check"></i>Unique Design</p>
                        <p><i class="fa fa-check"></i>100% Responsive</p>
                        <p><i class="fa fa-check"></i>Unlimited Sliding picture animation</p>
                        <p><i class="fa fa-check"></i>Unlimited Link pages with image editing</p>
                        <p><i class="fa fa-times"></i> Option to add unlimited products to stock and inventory</p>
                        <p><i class="fa fa-check"></i>Upload products and additional pictures using the admin panel</p>
                        <p><i class="fa fa-check"></i>Easy to add, edit and remove products, price list and description by yourself</p>
                        <p><i class="fa fa-check"></i>Product image zoom-in / Zoom-out capability</p>
                        <a href="#" class="btn btn-primary">Price: 60000/ $750</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Section -->



        <!-- Start Testimonial Section -->
        <section id="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->


        <!-- Start Client Section -->
        <div id="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-box">
                            <ul class="client-list">
                                <li><a href="#"><img src="{{url('frontend/images/clients/client1.png')}}" class="img-responsive" alt="Clients Logo"></a></li>
                                <li><a href="#"><img src="{{url('frontend/images/clients/client2.png')}}" class="img-responsive" alt="Clients Logo"></a></li>
                                <li><a href="#"><img src="{{url('frontend/images/clients/client3.png')}}" class="img-responsive" alt="Clients Logo"></a></li>
                                <li><a href="#"><img src="{{url('frontend/images/clients/client4.png')}}" class="img-responsive" alt="Clients Logo"></a></li>
                                <li><a href="#"><img src="{{url('frontend/images/clients/client5.png')}}" class="img-responsive" alt="Clients Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Client Section -->
        @endsection
