@extends('frontend.layouts.main')

@section('main-container')
    <!-- Start Course details section -->
    <section class="courses-deatils section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Courses header -->
                    <div class="courses-header box" style="background-color: #FFEFDF;border-radius: 8px;">
                        <h2 class="text-capitalize">Hardware & Networking</h2>
                        <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </span>
                            <span class="reviews">(330 Reviews)</span>
                        </div>
                        <ul>
                            <li>enrolled students - <span>320</span></li>
                            <li>created by - <span>john doe</span></li>
                            <li>last updated - <span>10/06/2023</span></li>
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
                                        <span style="float: right; margin-right: 20px;">3 Bundle Course | 360 Hour</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Course Overview <span style="float: right;">20 Min</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion 1 -->

                        <!-- Start Accordion 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
                                        <i class="fa fa-angle-left control-icon"></i> IT Essential
                                        <span style="float: right; margin-right: 20px;">Length: 70 hours</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Install, configure, and troubleshoot computers and mobile devices. <span style="float: right;"> 10 hours</span></li>
                                        <li><i class="fa fa-play-circle"></i> Identify common security threats like phishing and spoofing. <span style="float: right;">15 Hour</span></li>
                                        <li><i class="fa fa-play-circle"></i> Develop critical thinking and problem-solving skills using both real equipment and Cisco Packet Tracer. <span style="float: right;">25 Hour</span></li>
                                        <li><i class="fa fa-play-circle"></i> Prepare for CompTIA A+ Certification.<span style="float: right;">20 Hour</span></li>
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
                                        <i class="fa fa-angle-left control-icon"></i> Linux Essential
                                        <span style="float: right; margin-right: 20px;"> 82 lectures • 7h 21m total length</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Introduction<span style="float: right;"> 9 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> Course Overview<span style="float: right;">2 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> About Linux Essential <span style="float: right;"> 7 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> Evolution o Linux <span style="float: right;"> 51 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> Open Source Application <span style="float: right;"> 30 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> The Linux Environment <span style="float: right;"> 18 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> The Command Line <span style="float: right;"> 28 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> Directories and Files <span style="float: right;"> 44 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> Search and Extracting Data from Files and Archiving <span style="float: right;"> 48 Min</span></li>
                                        <li><i class="fa fa-play-circle"></i> Scripting Basics <span style="float: right;"> 49 Min</span></li>
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
                                        <i class="fa fa-angle-left control-icon"></i> Networking 101
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-play-circle"></i> Networking 101 Overview <span style="float: right;">36 Hour Video Lecture</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion 4 -->

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
                                        <h4>John Doe <span>Freelancer</span></h4>
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
                        <!-- price -->
                        <!-- <div class="price align-items-center" style="display: flex; margin-bottom: 20px;">
                            <span class="price-old"><del>12000 BDT</del></span>
                            <span class="price-new">9600</span>
                            <span class="price-discount">20% Off</span>
                        </div> -->
                        <!-- price -->
                        <h3 class="mb-3" style="margin-bottom: 30px;">Course Feature</h3>
                        <ul class="course-features-list">
                            <li>IT Essential </li>
                            <li>Linux Essential </li>
                            <li>Networking 101</li>
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

