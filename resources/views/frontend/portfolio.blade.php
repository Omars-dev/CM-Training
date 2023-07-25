@extends('frontend.layouts.main')

@section('main-container')       
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Our Portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        <!-- Start Portfolio Section -->
        <section id="portfolio" class="portfolio-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- Start Portfolio items -->
                    <ul id="portfolio-list">
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                            <div class="portfolio-item">
                                <div class="title-course">
                                    <h3>Web Development</h3>
                                </div>
                                <img src="images/portfolio/image-gallery.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Web Development</h4>
                                    <p>It's A Blog Website.</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                            <div class="portfolio-item">
                                <div class="title-course">
                                    <h3>Software Development</h3>
                                </div>
                                <img src="images/portfolio/image-gallery.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Software Development</h4>
                                    <p>Online Admission System. Department, Faculty, Alumni, staff information, News, Blog, Notice, Result, Routine.</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">
                            <div class="portfolio-item">
                                <div class="title-course">
                                    <h3>Search Engine Optimization</h3>
                                </div>
                                <img src="images/portfolio/image-gallery.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Search Engine Optimization</h4>
                                    <p>Qatar Based repair and Services provider company.</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">
                            <div class="portfolio-item">
                                <div class="title-course">
                                    <h3>Graphic Design</h3>
                                </div>
                                <img src="images/portfolio/image-gallery.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Graphic Design</h4>
                                    <p>Resort information, Booking system, blog</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1500ms">
                            <div class="portfolio-item">
                                <div class="title-course">
                                    <h3>Microsoft Office</h3>
                                </div>
                                <img src="images/portfolio/image-gallery.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Microsoft Office</h4>
                                    <p>Product, services information based website</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1800ms">
                            <div class="portfolio-item">
                                <div class="title-course">
                                    <h3>CCNA Networking</h3>
                                </div>
                                <img src="images/portfolio/image-gallery.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>CCNA Networking</h4>
                                    <p>Ambulance information, Rent List, ambulance Booking</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                    <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        
                        
                    </ul>
                    <!-- End Portfolio items -->
                </div>
            </div>
        </div>
    </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
        @endsection 