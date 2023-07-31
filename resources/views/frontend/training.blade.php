@extends('frontend.layouts.main')

@section('main-container')
<!-- Start Post Software Details -->

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
        {{-- <div class="row">
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
        </div> --}}


        <div class="row">
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/computer-and-telecommunication')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/computer.jpg')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Computer & Telecommunication Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/civil-and-architecture')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/civil.jpg')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Civil & Architecture Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/electrical')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/electrical.jpg')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Electrical Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/electronics')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/electronics.jpg')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Electronics Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/mechanical')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/mechanical.webp')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Mechanical Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/power')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/power.png')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Power Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/power')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/power.png')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Power Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end course item -->
            <!-- course item -->
            <div class="col-md-6 col-lg-3">
                <div class="industrial-courses-item">
                    <a href="{{url('/power')}}" class="link">
                        <div class="industrial-course-item-inner">
                            <div class="img-box">
                                <img src="{{url('frontend/images/courses/power.png')}}" alt="course img">
                            </div>
                            <div class="inner-details">
                                <div class="industrial-course-title-height">
                                    <h3 class="industrial-course-title">Power Technology</h3>
                                </div>
                            <div class="instructor">
                                <img src="{{url('frontend/images/team/team.jpg')}}" alt="" style="width:30px;border-radius:50%;margin-right:5px">
                                <span class="instructor-name">Md. Alomgir Hossain</span>
                            </div>
                            <div class="rating">
                                <span class="average-rating">(5)</span>
                                <span class="average-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="reviews">(142)</span>
                            </div>
                            <div class="more-option">
                                <button class="btn btn-primary btn-block">View Details</button>
                            </div>
                            </div>
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
