@extends('frontend.layouts.main')

@section('main-container')
<!-- Start Post Software Details -->

<!-- <section id="pos-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="pos-title">Training</h3>
            </div>
            <div class="col-md-12">
                <div class="pos-banner container-fluid">
                    <img src="images/pos.jpg" alt="">
                </div>
            </div>

            <div class="col-md-12">
                <div class="pos-about">
                    <h4 class="about-pos-title"><i class="fa fa-info-circle"></i> About Software</h4>
                    <p>CM Training provides a full-range of ICT Consulting Services including Software Solutions, Web Design & Development & Infrastructure support for startup. Best ICT Consultancy firm in Bangladesh, we also provide different type of ICT training of general people inside or outside of our office</p>

                </div>
            </div>

        </div>
    </div>
</section> -->

<!-- Start course section -->
<section class="courses-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="course-section-title text-center">
                    <h2 class="title">Courses</h2>
                    <p class="sub-title">Find the right courses for you</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="{{url('/course-details')}}" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/outsourcing-1.jpeg')}}" alt="course img">
                            </div>
                            <h3 class="course-title">Freelancing & Outsourcing</h3>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(12)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="{{url('/hardware-and-networking')}}" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/hardware.jpg')}}" alt="course img">
                            </div>
                            <h3 class="course-title">Hardware & Networking</h3>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(12)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="/routing-and-switching" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/routing.jpg')}}" alt="course img">
                            </div>
                            <h3 class="course-title">Routing & Switching</h3>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(12)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="{{url('/network-security')}}" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/network-security.png')}}" alt="course img">
                            </div>
                            <h3 class="course-title">Network Security</h3>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(12)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="{{url('/system-administration')}}" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/system.webp')}}" alt="course img">
                            </div>
                            <h3 class="course-title">System Administration</h3>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(12)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="{{url('/web-development')}}" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/web-design-dev.png')}}" alt="course img">
                            </div>
                            <h3 class="course-title">Website Design & Development</h3>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(12)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="{{url('/software-development')}}" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/software.webp')}}" alt="course img">
                            </div>
                            <h3 class="course-title">Software Development</h3>
                            <div class="instructor">
                                <img src="frontend/images/team/team.jpg" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(22)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="courses-item">
                    <a href="{{url('/cloud-visualization')}}" class="link">
                        <div class="course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/cloud.png')}}" alt="course img">
                            </div>
                            <h3 class="course-title">Cloud & Virtualization </h3>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="">
                                <span class="instructor-name">John DOe</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span>
                                <span class="reviews">(52)</span>
                            </div>
                            <div class="price">BDT</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
        </div>
        <div class="row">

        </div>
    </div>
</section>
@endsection
