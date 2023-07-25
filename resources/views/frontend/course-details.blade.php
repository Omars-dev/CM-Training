@extends('frontend.layouts.main')

@section('main-container')
 <!-- Start Course details section -->
    <section class="courses-deatils section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Courses header -->
                    <div class="courses-header box" style="background-color: #FFEFDF; border-radius: 8px;">
                        <h2 class="text-capitalize">Freelancing & Outsourcing</h2>
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
                    <!-- End Courses header -->

                    <!-- course tab -->
                    <div class="course-tabs">
                        <ul class="nav nav-pills">
                            <li class="active"><a class="tabs-link" data-toggle="pill" href="#course-curriculum">Curriculum</a></li>
                            <li><a class="tabs-link" data-toggle="pill" href="#course-description">Description</a></li>
                            <li><a class="tabs-link" data-toggle="pill" href="#course-instructor">Instructor</a></li>
                            <li><a class="tabs-link" data-toggle="pill" href="#course-reviews">Reviews</a></li>
                        </ul>
                    </div>
                    <!-- End course tab -->

                    <!-- tab paanel start -->
                    <div class="tab-content">
                        <div id="course-curriculum" class="tab-pane fade in active" style="background-color: #FFEFDF;border-radius: 8px;">
                          <div class="course-curriculum box">
                            <h3 class="text-capitalize">course curriculum</h3>
                            <!-- Start Accordion Section -->
                        <div class="panel-group" id="accordion">

                        <!-- Start Accordion 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                                        <i class="fa fa-angle-left control-icon"></i> Course Introduction
                                        <span style="float: right; margin-right: 20px;">7 Bundle Course | 360 Hour</span>
                                    </a>
                                    <!-- <div class="tag-line">
                                        <span><i class="fa fa-video-camera"></i> 2 Projects</span>
                                        <span>1 Assignment</span>
                                        <span>2 Exam</span>
                                    </div> -->
                                </h4>

                            </div>
                            <div id="collapse-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Course Overview <span style="float: right;">4 Min</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion 1 -->

                        <!-- Start Accordion 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2"
                                        class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> Website Design With Freelancing & Outsourcing
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Website Design <span style="float: right;">48 Hour</span></li>
                                        <li><i class="fa fa-play-circle"></i> Website Development <span style="float: right;">72 Hour</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion 2 -->

                        <!-- Start Accordion 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3"
                                        class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> Advanced SEO course with CMS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Search Engine Optimization <span style="float: right;">6 Hour</span></li>
                                        <li><i class="fa fa-play-circle"></i> Advanced Search Engine Optimization <span style="float: right;">10 Hour</span></li>
                                        <li><i class="fa fa-play-circle"></i> CMS (Content Management System) <span style="float: right;">10 Hour</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion 3 -->

                        <!-- Start Accordion 4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4"
                                        class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> Digital Marketing With Freelancing & Outsourcing
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Digital Marketing Overview <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Introduction Meta Marketing <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Facebook Ads Campaign <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Facebook Page Management <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Business Page Management <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Instagram Marketing <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Pinterest Marketing <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Youtube Marketing <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Google Ads Management <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Marketplace Overview <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Fiverr Account Setup <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Upwork Account Setup <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Freelancer.com Account Setup <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Generate more orders from marketplace <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Client generate outside of marketplace <span style="float: right;">36 Hour Video Lecture</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion 4 -->

                        <!-- Start Accordion 5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-5"
                                        class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> Graphics Design with Freelancing
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Graphic Design Overview <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Basic of Adobe Photoshop <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Basic of Adobe Illustrator <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Basic of Adobe XD <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Branding Design <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Promotional Banner Design <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Marketplace Overview <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Fiverr Account Setup <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Upwork Account Setup <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Freelancer.com Account Setup <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Generate more orders from marketplace <span style="float: right;">36 Hour Video Lecture</span></li>
                                        <li><i class="fa fa-play-circle"></i> Client generate outside of marketplace <span style="float: right;">36 Hour Video Lecture</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion 5 -->

                    </div>
                    <!-- End Accordion section -->

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

                        <div id="course-instructor" class="tab-pane fade" style="background-color: #FFEFDF;border-radius: 8px;">
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
                <div class="col-lg-4">
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
                        <h3 class="mb-3" style="margin-bottom: 30px;">Corse Feature</h3>
                        <ul class="course-features-list">
                            <li>Website Design With Freelancing & Outsourcing</li>
                            <li>SEO (Search Engine Optimization)</li>
                            <li>Advanced SEO course with CMS</li>
                            <li>Digital Marketing With Freelancing & Outsourcing</li>
                            <li>Graphics Design with Freelancing</li>
                            <li>Auto CAD 2D 3D</li>
                            <li>Auto CAD Design with 3D studio Max</li>
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
    <!-- End Course details section -->

@endsection
