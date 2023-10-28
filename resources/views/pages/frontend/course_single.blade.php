@include('pages/frontend/header')

    <!------------------------- Course Details Title Section ---------------------->
    <section class="auth__title_section course_details_title">
        <div class="container">
            <div class="auth_title">
                <!-- Animations -->
                <div class="auth_stra_animate">
                    <img src="frontend/img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="{{url('/')}}">Home</a> / course / {{$item1->course_title  }}</p>
                </div>
                <div class="auth_title_content course_details_title_rating">
                    <h3 class="sub_title">{{ $item1->course_title }}</h3>
                    {{-- <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <div class="rating_count">
                            <span>4.0 (1 rating)</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-------------------- Course Details Body ----------------------->
    <section class="course_details_body">
        <div class="coures_details_slider">
            <!--<img src="{{ url('images/'.$item1->course_image) }}" alt="">-->
        </div>
        <div class="container">
            <div class="course_details_main">
                <div class="course_details_content">
                    <div class="course_details_tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class=" active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true">Overview
                                <div class="border_bottom"></div>
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="" id="pills-curriculum-tab" data-bs-toggle="pill" data-bs-target="#pills-curriculum" type="button" role="tab" aria-controls="pills-curriculum" aria-selected="false">Curriculum
                                <div class="border_bottom"></div>
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="" id="pills-instructor-tab" data-bs-toggle="pill" data-bs-target="#pills-instructor" type="button" role="tab" aria-controls="pills-instructor" aria-selected="false">Instructor
                                <div class="border_bottom"></div>
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="" id="pills-feedback-tab" data-bs-toggle="pill" data-bs-target="#pills-feedback" type="button" role="tab" aria-controls="pills-feedback" aria-selected="false">Course Feedback
                                <div class="border_bottom"></div>
                              </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab" tabindex="0">
                                <div class="course_overview_inner">
                                    <h3 class="sub_title2">Course Description</h3>
                                    <p class="paragraph2">{{ $item1->course_description }}</p>
                                    {{-- <h3 class="sub_title2">Certification</h3>
                                    <p class="paragraph2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p> --}}
                                    <!--<h3 class="sub_title2">Who this course is for</h3>-->
                                    <!--<p class="paragraph2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-curriculum" role="tabpanel" aria-labelledby="pills-curriculum-tab" tabindex="0">
                                @foreach ($item2 as $item2)


                                <div class="course_curriculum_inner card-body">
                                    <h3 class="course_curi_title">{{ $item2->course_content_title }}</h3>
                                    <ul>
                                        <li>
                                            <p>
                                                <div class="course_tab_inner">
                                                    <div class="course_introduction">
                                                        <i class="fa-solid fa-newspaper"></i>
                                                        <span class="course_name">
                                                            {{ $item2->course_content_link }}
                                                        </span>
                                                    </div>
                                                
                                                    <!--<div class="course_meta mt-2">-->
                                                    <!--    <span class="question">5 questions</span>-->
                                                    <!--    <span class="duration"> 01 hours</span>-->
                                                    <!--    <span class="status">Preview</span>-->
                                                    <!--</div> -->
                                                </div>
                                            </p>
                                        </li>
                                    </ul>
                                    {{-- <h3 class="course_curi_title">Stepping into the World of Python</h3>
                                    <ul>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name"> NumPy Introduction</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">15 min</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner bg-white">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Getting Started</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration"> 30 min</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Creating Arrays</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration"> 45 min</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner bg-white">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Array Indexing</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="question">4 questions</span>
                                                    <span class="duration">1 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">NumPy Array Slicing</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">1.5 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                    </ul>
                                    <h3 class="course_curi_title">Python MySQL</h3>
                                    <ul>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">Python MySQL</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">01 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner bg-white">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">Python MySQL Create Database</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="question">3 question</span>
                                                    <span class="duration">1.1 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="course_tab_inner">
                                                <div class="course_introduction">
                                                    <i class="fa-solid fa-newspaper"></i>
                                                    <span class="course_name">Python MySQL Create Table</span>
                                                </div>
                                                <div class="course_meta">
                                                    <span class="duration">1.5 hour</span>
                                                    <span class="status_locked">
                                                        <i class="fa-solid fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a></li>
                                    </ul> --}}
                                </div>
                                @endforeach
                            </div>
                            {{-- Corse instructor --}}
                            <div class="tab-pane fade" id="pills-instructor" role="tabpanel" aria-labelledby="pills-instructor-tab" tabindex="0">
                                <div class="course_details_instractor">
                                    <div class="instructorHeading">
                                        <div class="instructor_img">
                                            <img src="{{ asset('frontend/img/Advisor/Anower.jpg') }}" alt="Farhan">
                                        </div>
                                        <div class="instructor_Hcontent">
                                            <h2 class="ins_name">Md. Farhan Shadiq</h2>
                                            <h3 class="ins_email"><i class="fa-solid fa-envelope"></i> <a href="mailto: mdfarhanshaciq01@gmail.com">mdfarhanshaciq01@gmail.com</a></h3>
                                            <h3 class="ins_github"><i class="fa-brands fa-github"></i> <a target="_blank" href="https://github.com/mdfarhansadiq">https://github.com/mdfarhansadiq</a></h3>
                                            <h3 class="ins_phone"><i class="fa-solid fa-phone"></i> <a href="tel: +8801990000922">01990000922</a></h3>
                                            <div class="ins_social">
                                                <div class="s_title">
                                                    <h2 class="s_follow">Follow me on</h2>
                                                </div>
                                                <div class="details_instractor_social social">
                                                    <div class="facebook social_inner">
                                                        <a target="_blank" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                    </div>
                                                    <div class="twittwer social_inner">
                                                        <a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                                                    </div>
                                                    <div class="instragram social_inner">
                                                        <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                                                    </div>
                                                    <div class="linkedin social_inner">
                                                        <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="career_objective">
                                        <h2 class="career_title">Career Objective</h2>
                                        <p class="career_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum voluptatibus magni aperiam fugit quae? Neque vitae id dolorum. Omnis, culpa! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo hic, eum ullam quia recusandae dignissimos est nesciunt dolor sunt odit!</p>
                                    </div>
                                    {{-- <div class="education">
                                        <div class="ins_titles">
                                            <h2 class="cv_inner_titles">Education</h2>
                                        </div>
                                        <div class="ins_contents">
                                            <table class="table table-bordered bg-white">
                                                <thead>
                                                    <tr class="text-center bg-light">
                                                        <th colspan="2" class="h5 fw-bold text-danger">Bachelor of Science (BSc)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Degree Title</td>
                                                        <td>Bachelor of Science (BSc)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duration</td>
                                                        <td>4 Years</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Passing Year</td>
                                                        <td>2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Depertment</td>
                                                        <td>Computer Sience & Engineering (CSE)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Organization</td>
                                                        <td>Univercity of Asia Pacific</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location</td>
                                                        <td>Dhaka Bangladesh</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered bg-white">
                                                <thead>
                                                    <tr class="text-center bg-light">
                                                        <th colspan="2" class="h5 fw-bold text-danger">Bachelor of Science (BSc)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Degree Title</td>
                                                        <td>Bachelor of Science (BSc)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duration</td>
                                                        <td>4 Years</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Passing Year</td>
                                                        <td>2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Depertment</td>
                                                        <td>Computer Sience & Engineering (CSE)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Organization</td>
                                                        <td>Univercity of Asia Pacific</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location</td>
                                                        <td>Dhaka Bangladesh</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered bg-white">
                                                <thead>
                                                    <tr class="text-center bg-light">
                                                        <th colspan="2" class="h5 fw-bold text-danger">Bachelor of Science (BSc)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Degree Title</td>
                                                        <td>Bachelor of Science (BSc)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duration</td>
                                                        <td>4 Years</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Passing Year</td>
                                                        <td>2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Depertment</td>
                                                        <td>Computer Sience & Engineering (CSE)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Organization</td>
                                                        <td>Univercity of Asia Pacific</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location</td>
                                                        <td>Dhaka Bangladesh</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}
                                    <div class="ins_skills">
                                        <div class="ins_titles">
                                            <h2 class="cv_inner_titles">Skills</h2>
                                        </div>
                                        <div class="skills-data">
                                            <span>C/C++</span>
                                            <span>javaScript</span>
                                            <span>PHP</span>
                                            <span>Git</span>
                                        </div>
                                    </div>
                                    <div class="ins_experience">
                                        <div class="ins_titles">
                                            <h2 class="cv_inner_titles">Experience</h2>
                                        </div>
                                        <div class="experience_data">
                                            <table class="table table-bordered bg-white">
                                                <thead>
                                                    <tr class="text-center bg-light">
                                                        <th colspan="2" class="h5 fw-bold text-danger">Laravel Developer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>job Title</td>
                                                        <td>Laravel Developer</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duration</td>
                                                        <td>4 Years</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Depertment</td>
                                                        <td>Admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Organization</td>
                                                        <td>Innovative Skills</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location</td>
                                                        <td>Dhaka Bangladesh</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered bg-white">
                                                <thead>
                                                    <tr class="text-center bg-light">
                                                        <th colspan="2" class="h5 fw-bold text-danger">Online Trainer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>job Title</td>
                                                        <td>Online Trainer</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duration</td>
                                                        <td>4 Years</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Organization</td>
                                                        <td>Eshikhon.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Location</td>
                                                        <td>Dhaka Bangladesh</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="ins_projects">
                                        <div class="ins_titles">
                                            <h2 class="cv_inner_titles">Projects</h2>
                                        </div>
                                        <div class="project_links">
                                            <p><a href="https://github.com/mdfarhansadiq" target="_blank" class="btn_red">Ecommerce</a></p>
                                            <p><a href="https://github.com/mdfarhansadiq" target="_blank" class="btn_red">Portfolio</a></p>
                                            <p><a href="https://github.com/mdfarhansadiq" target="_blank" class="btn_red">Inventory</a></p>
                                            <p><a href="https://github.com/mdfarhansadiq" target="_blank" class="btn_red">News Portal</a></p>
                                        </div>
                                    </div>
                                    <div class="ins_achievement">
                                        <div class="ins_titles">
                                            <h2 class="cv_inner_titles">Achievements</h2>
                                        </div>
                                        <div class="achievement_content">
                                            <ul>
                                                <li><span>Google KickStart 2020 - Round H ( Rank: 1424 out 4300)</span></li>
                                                <li><span>Facebook Hacker Cup 2020 - Qualified in Qualification Round.</span></li>
                                                <li><span>IEEE Xtreme 13 2019 - Our team achieved position 6 in Bangladesh and 1165 position in all countries</span></li>
                                                <li><span>Inter-Department Programming Contest 2018 - 2nd Runner Up</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-feedback" role="tabpanel" aria-labelledby="pills-feedback-tab" tabindex="0">
                                <div class="course_details_feedback">
                                    <div class="contact_form">
                                        <h2>Please share your valuable feedback</h2>
                                        <p>Your email address will not be published. Required fields are marked *</p>

                                        <form action="#" method="POST">
                                            @csrf
                                            <input type="text" name="name" id="#" placeholder="Your Name" required>
                                            <input type="email" name="email" id="#" placeholder="Your Email Address" required>
                                            <input type="text" name="number" id="#" placeholder="Your Number" required>
                                            <textarea name="massage" id="massage" placeholder="Your Massage" required></textarea>
                                            <input class="contactMassageSend" type="submit" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!----------- Course Details Sitebar ------------>

                <div class="course_details_sidebar">
                    <div class="course_details_sidebar_video">
                        <div class="course_details_video_img">
                            <button id="preview">
                                <img src="{{ url('images/'.$item1->course_image) }}" alt="">
                                {{-- <i class="fa-solid fa-play"></i> --}}
                                {{-- <h3>Course Preview</h3> --}}
                            </button>
                        </div>
                        {{-- <!-------- Modal -------> --}}
                        <div class="video_player" id="video_popup">
                            <div class="video_player_header">
                                <div class="video_close">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                            <div class="video_player_body">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bk7McNUjWgw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="course_details_sidebar_price">
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-tag"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Price</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h2>{{ $item1->course_fee }}</h2>
                            </div>
                        </div>
                        {{-- <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-user-secret"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Instructor</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>Sarah Taylor</h5>
                            </div>
                        </div> --}}
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-light fa-clock"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Duration</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>{{ $item1->course_duration }}</h5>
                            </div>
                        </div>
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-computer"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Lessons</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>{{ $item3 }}</h5>
                            </div>
                        </div>
                        {{-- <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-cash-register"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Enrolled</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>255 Students</h5>
                            </div>
                        </div> --}}
                        <div class="course_price_inner">
                            <div class="course_price_inner_left">
                                <div class="price_inner_left_icon">
                                    <i class="fa-solid fa-key"></i>
                                </div>
                                <div class="price_inner_left_text">
                                    <h4>Access</h4>
                                </div>
                            </div>
                            <div class="course_price_inner_right">
                                <h5>Lifetime</h5>
                            </div>
                        </div>
                    </div>
                    <div class="course_details_sidebar_btns">
                        <div class="add_to_cat_btn">
                            <a class="btn_red border-0 w-100 edit" href="{{url('enroll/'.$item1->id)}}">
                                <div class="btn_inner">
                                    <div class="user_icon">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                    <div class="user_details">
                                       Book your seat
                                    </div>
                                </div>
                            </a>


                            <!-- <button class="btn_red border-0 w-100 edit" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                            <!--    <div class="btn_inner">-->
                            <!--        <div class="user_icon">-->
                            <!--            <i class="fa-solid fa-cart-shopping"></i>-->
                            <!--        </div>-->
                            <!--        <div class="user_details">-->
                            <!--           Book your seat-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</button>-->


                        </div>
                        {{-- <div class="buy_now_btn">
                            <button type="submit" class="btn_white w-100">
                                <div class="btn_inner">
                                    <div class="user_icon">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                    <div class="user_details">
                                        Buy Now
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="share_btn">
                            <div class="btn_share_title">
                                <h5>Share This Course</h5>
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="btn_share_icons social">
                                <div class="facebook social_inner">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                                <div class="twittwer social_inner">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                                <div class="instragram social_inner">
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="linkedin social_inner">
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div> --}}



















                    </div>
                </div>
            </div>
        </div>
    </section>

     <!------------------------- Footer Section --------------------------------->
  @include('pages/frontend/footer')