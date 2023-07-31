@extends('frontend.layouts.main')

@section('main-container')
<!-- Start Post Software Details -->

<section class="industrial-course section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <!-- Courses header -->
                <div class="industrial-courses-header box">
                    <h2 class="text-capitalize" style="margin-bottom: 40px">COMPUTER & TELECOMMUNICATION TECHNOLOGY</h2>
                    <p>
                        কোর্সটি ইন্ডাস্ট্রিয়াল অ্যাটাচমেন্টের জন্য। এই কোর্সে প্রশিক্ষণপ্রাপ্ত শিক্ষার্থীদের কম্পিউটার এবং টেলিযোগাযোগ প্রযুক্তিতে আগ্রহী হওয়ার সুযোগ প্রদান করা হয়। এই প্রশিক্ষণের মাধ্যমে শিক্ষার্থীরা সম্পূর্ণরূপে কম্পিউটার এবং টেলিযোগাযোগ প্রযুক্তি নির্ভর প্রতিষ্ঠানগুলির অভিজ্ঞতা অর্জন করতে পারবে।
                    </p>
                </div>
                <!-- End Courses header -->

                {{-- promo box --}}
                    <div class="promo-section">
                        <div class="ind-promo-box d-flex align-items-center">
                            <div class="left-box" style="padding-right:15px">
                                <div class="img-box">
                                    <img src="{{url('frontend/images/courses/orientation.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="right-box">
                                <h4>Free Orientation Class</h4>
                                <span><i class="fa fa-calendar"></i> </span>
                                <span>Stay with us to know the batch schedule</span>
                            </div>
                        </div>
                    </div>
                {{-- End of promo box --}}

                <div class="courses-header box" style="background-color: #FFEFDF; border-radius: 8px;padding:30px">
                    <div class="rating">
                        <span class="average-rating">(4.5)</span>
                        <span class="average-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </span>
                        <span class="reviews">(230 Reviews)</span>
                    </div>
                    <ul>
                        <li>enrolled students - <span>120</span></li>
                        <li>created by - <span>john doe</span></li>
                        <li>last updated - <span>10/07/2023</span></li>
                        <li>language - <span>bangla</span></li>
                    </ul>
                </div>

                {{-- batch box --}}
                {{-- <div class="days-section">
                    <div class="ind-days-box d-flex align-items-center">
                        <div class="left-box">
                            <div class="btn-box">
                                <span>Batch No1</span>
                            </div>
                        </div>
                        <div class="right-box box">
                            <h4><i class="fa fa-calendar-o" aria-hidden="true"></i> Starting Date</h4>
                            <span>DD/MM/YY</span>
                        </div>
                        <div class="end-box box">
                            <h4><i class="fa fa-calendar"></i> Class Schedule</span></h4>
                            <span>Day ( 00:00 PM - PM)</span>
                        </div>
                    </div>
                </div> --}}
            {{-- End of batch box --}}

                <!-- course tab -->
                <div class="course-tabs">
                    <ul class="nav nav-pills">
                        <li class="active"><a class="tabs-link" data-toggle="pill" href="#course-instructor">Instructor</a></li>
                        <li><a class="tabs-link" data-toggle="pill" href="#course-curriculum">Curriculum</a></li>
                        <li><a class="tabs-link" data-toggle="pill" href="#course-description">Description</a></li>
                        <li><a class="tabs-link" data-toggle="pill" href="#course-reviews">Reviews</a></li>
                    </ul>
                </div>
                <!-- End course tab -->

                <!-- tab paanel start -->
                <div class="tab-content">
                    <div id="course-curriculum" class="tab-pane fade" style="background-color: #FFEFDF;border-radius: 8px;">
                      <div class="course-curriculum box">
                        <h3 class="text-capitalize">course curriculum</h3>
                      </div>
                    </div>

                    <div id="course-description" class="tab-pane fade" style="background-color: #FFEFDF;border-radius: 8px;">
                      <div class="course-description box">
                        <h3 class="text-capitalize">Description</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, voluptates. Aliquid cupiditate laborum reprehenderit quod tempora libero officiis esse dolores.</p>
                        <h4>For who is this course designed ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, asperiores quasi eum aliquam accusantium ab ea animi deleniti, minus provident architecto! Ipsam dolorem nemo quisquam perferendis necessitatibus ducimus delectus explicabo!</p>
                        <h4>Why shoul you take this course ?</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius aspernatur beatae tenetur, provident expedita, perferendis sint laborum blanditiis et ad sequi doloribus, autem eos corrupti libero ducimus velit qui. Quibusdam mollitia ipsa dolorum sit. Molestias porro necessitatibus voluptas illo sunt.</p>

                      </div>
                    </div>

                    <div id="course-instructor" class="tab-pane fade in active" style="background-color: #FFEFDF;border-radius: 8px;">
                      <div class="course-instructor box">
                        <h3 class="mb-3 text-capitalize" style="margin-bottom: 30px;">Instructor</h3>
                        <div class="instructor-details">
                            <div class="details-warp d-flex align-items-center" style="display:flex;">
                                <div class="left-box">
                                    <div class="img-box">
                                        <img src="{{url('frontend/images/instructor.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="right-box">
                                    <h4>John Doe <span>(Freelancer)</span></h4>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.5 Rating</li>
                                        <li><i class="fa fa-play-circle"></i> 5 Courses</li>
                                        <li><i class="fa fa-certificate"></i> 200 Reviews</li>
                                        <li><i class="fa fa-play-circle"></i> 2 Live Course</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, dolorum tempore porro vitae soluta fugit quos, repellat recusandae omnis sequi praesentium adipisci quod aperiam, blanditiis iste corrupti dicta molestias rerum! Exercitationem deleniti maiores temporibus quo alias quod aliquid ipsam, impedit magnam ad perspiciatis pariatur quae possimus amet nihil laborum soluta.</p>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div id="course-reviews" class="tab-pane fade" style="background-color: #FFEFDF;border-radius: 8px;">
                        <div class="course-review box">
                            <h3 class="text-capitalize">Reviews</h3>
                            <p>No reviews available right now</p>
                        </div>
                    </div>

                  </div>
                <!-- tab paanel end -->

                <!--  -->

            </div>
            <div class="col-lg-5">
                <!-- course slider -->
                <div class="course-slider box" style="background-color: #FFEFDF;border-radius: 8px;">
                    <div class="img-box">
                        <img src="{{url('frontend/images/courses/outsourcing-1.jpeg')}}" alt="">
                        <div class="play-icon">
                            <i class="fa fa-play"></i>
                        </div>
                        <p class="text-center">Course Preview</p>
                    </div>
                    <!-- course price -->
                    <!-- <div class="price align-items-center" style="display: flex; margin-bottom: 20px;">
                        <span class="price-old"><del>4000 BDT</del></span>
                        <span class="price-new">3500</span>
                        <span class="price-discount">20% Off</span>
                    </div> -->
                    <!-- course price -->
                    <h3 class="mb-3" style="margin-bottom: 30px;">Course Feature</h3>
                    <ul class="course-features-list">
                        <li>Website Design & Development</li>
                        <li>Hardware & Networking</li>
                        <li>CCNA Routing & Switching Training</li>
                        <li>MikroTik Certified Network Administrator (MTCNA)</li>
                        <li>Mobile Apps Development</li>
                        <li>Windows Server 2019/2022</li>
                        <li>RedHat Certified System Administrator (RHCSA)</li>
                    </ul>
                    <div class="btn-wrap">
                        <button class="btn btn-primary btn-block" style="margin-top:20px; font-weight: 600;">
                            <i class="fa fa-whatsapp" style="float:left;font-size: 28px;"></i>
                            +880 1706841282
                        </button>
                    </div>
                </div>
                <!-- End course slider -->
            </div>
        </div>
    </div>
</section>

<!-- End Post Software Details -->
@endsection
