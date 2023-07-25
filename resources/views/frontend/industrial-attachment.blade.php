@extends('frontend.layouts.main')

@section('main-container')

<section class="industrial-section">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="industrial-section-title">
                        <h2 class="industrial-title">ইন্ডাস্ট্রিয়াল এটাচমেন্ট</h2>
                        <p class="industrial-sub-title">পলিটেকনিক ছাত্রদের জন্য ইন্ডাস্ট্রিয়াল এটাচমেন্ট করার সুযোগ সি এম ট্রেনিং ইন্সটিটিউটে</p>
                        <span class="promo-badge btn-info"><i class="fa fa-graduation-cap"></i> Skill Development</span>
                        <span class="promo-badge btn-success"><i class="fa fa-play"></i> Live Courses</span>
                        <span class="promo-badge btn-warning"><i class="fa fa-certificate"></i> Certificates</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- course item -->
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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


        </div>
    </div>
</section>

<!-- End Industrial attachment -->
@endsection
