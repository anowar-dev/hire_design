
@include('pages/frontend/header')

    <!------------------- Slider Section  2------------------------>
    <section class="slider ">
        <div class="container">
            <div class="slider_main">
                <!--<div class="slider_animation_round">-->
                <!--    <img src="frontend/img/background/greeround.png" alt="Animation">-->
                <!--</div>-->
                <div class="slider_animation_doted">
                    <img src="frontend/img/Icins/Lessin.png" alt="Animation">
                </div>
                <div class="sliderTop">
                    
                    <!--Slider Text-->
                    <div class="slider_text">
                        @foreach ($data1 as $data1)
    
    
                        <div class="slider_text_main">
                            <h2 class="heading">{{ $data1->title }}</h2>
                            <p class="paragraph_head">{{ $data1->dis }}</p>
                            <!--<div class="slider_text_btnm">-->
                            <!--    <a href="auth.html" class="btn_red slider_btn_red">-->
                            <!--        <div class="user_icon">-->
                            <!--            <i class="fa-regular fa-user"></i>-->
                            <!--        </div>-->
                            <!--        <div class="user_details">-->
                            <!--            Login/Register-->
                            <!--        </div>-->
                            <!--    </a>-->
                            <!--</div>-->
                        </div>
                        @endforeach
                        
                    </div>
                    
                <!--New Slider-->
                        <div class="distance_left">
                            <div class="distance_slider">
                                <div class="single-item carousel-inner">
                                  <div class="carosel_design">
                                    <div class="bg_red_sign">
                                        <img src="frontend/img/background/Red-quatar12.jpg" alt="">
                                    </div>
                                    <p class="carousel_p">
                                        What impressed me the most about Salman Vai was
                                        his ability to strike the perfect balance between theory and hands-on practice. 
                                        Each concept was thoroughly explained through engaging examples and real-world scenarios, allowing me to grasp the practical examples in various web development projects. 
                                        Salman Vai's step-by-step guidance and willingness to answer all questions ensured that no doubts were left unresolved.s vel facilisis. 
                                        
                                    </p>
                                    <div class="carosel_user">
                                        <div class="carosel_user_img">
                                            <img src="frontend/img/Popular-corse/Alexm.jpg" alt="">
                                        </div>
                                        <div class="carosel_user_data">
                                            <h6>Nobir Hasan</h6>
                                            <p>Web Development Freelancer</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item carosel_design">
                                    <div class="bg_red_sign">
                                        <img src="frontend/img/background/Red-quatar12.jpg" alt="">
                                    </div>
                                    <p class="carousel_p">
                                       Thank you, I learnt an enormous amount from the Django Course.  Thanks for your patient approach" and Thanks for your patient approach"
"Really enjoyed and learnt a lot. Many thanks" 
                                        
                                    </p>
                                    <div class="carosel_user">
                                        <div class="carosel_user_img">
                                            <img src="frontend/img/Popular-corse/saraht.jpg" alt="">
                                        </div>
                                        <div class="carosel_user_data">
                                            <h6>Sabrina Rupa</h6>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item carosel_design">
                                    <div class="bg_red_sign">
                                        <img src="frontend/img/background/Red-quatar12.jpg" alt="">
                                    </div>
                                    <p class="carousel_p">
                                        Project related works are taught here.  The Django course is applicable for beginners and freshers, 
                                        I can say from my experience of two years that I have never found such a teacher anywhere else.
                                    </p>
                                    <div class="carosel_user">
                                        <div class="carosel_user_img">
                                            <img src="frontend/img/Popular-corse/davidw.jpg" alt="">
                                        </div>
                                        <div class="carosel_user_data">
                                            <h6>Monir Hasan</h6>

                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                </div>
                        <!--Slider User-->
    <!--            <div class="slider_user">-->

    <!--                @foreach ($data5 as $data5)-->


    <!--                <div class="slider_user_left card sliderCard">-->
    <!--                    <div class="card_image_main">-->
    <!--                        <img class="card_image_main" src="{{ url('images/'.$data5->course_image)}}" alt="course Image">-->
    <!--                        <div class="price_round">-->
    <!--                            <span>{{ $data5->course_fee }}</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="user_info">-->
    <!--                        {{-- <div class="user_inner_info users">-->
    <!--                            <div class="user_img">-->
    <!--                                <img class="card_image_user" src="frontend/img/Popular-corse/davidw.jpg" alt="User image">-->
    <!--                            </div>-->
    <!--                            <div class="user_name">-->
    <!--                                <h6>Alex Morgan</h6>-->
    <!--                            </div>-->
    <!--                        </div> --}}-->
    <!--                        <div class="user_text">-->
    <!--                            <h4 class="title_h4">-->
    <!--                                <a class="title_link" href="{{ url('course-single/'.$data5->id) }}">{{ $data5->course_title }}</a>-->
    <!--                            </h4>-->
    <!--                            <p class="card_paragraph">-->
    <!--                                {{ $data5->course_description }}-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                        <div class="user_btn">-->
    <!--                            <div class="user_btn_left user_btn_inner">-->
    <!--                                <i class="fa-solid fa-book"></i>-->
    <!--                                <span>{{ $data5->CourseContentModel->count() }} lesson</span>-->
    <!--                            </div>-->

    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                @endforeach-->

    <!--            </div>-->
            </div>
        </div>
    </section>

    <!------------------ Brand Logo -------------------------->
    {{-- <section class="brand_logo">
        <div class="container">
            <div class="brand_logo_main">
                <div class="brand_logo_inner">
                    <img src="img/Brands/br1.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="img/Brands/br2.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="img/Brands/br3.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="img/Brands/br4.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="img/Brands/br5.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="img/Brands/br6.png" alt="Brand Logo">
                </div>
            </div>
        </div>
    </section> --}}

    <!------------- Education section ----------------------->
    <!--<section class="education">-->
    <!--    <div class="container">-->
    <!--        <div class="education_main">-->
    <!--            @foreach ($data2 as $data2)-->


    <!--            <div class="education_title">-->
    <!--                <h6 class="Education_h6 small_title">EDUCATION FOR EVERYONE</h6>-->
    <!--                <h3 class="Education_h3 sub_title">{{ $data2->title }}</h3>-->
    <!--                <p class="education_paragraph">{{ $data2->dis }}</p>-->
    <!--            </div>-->
    <!--            @endforeach-->
    <!--            <div class="education_content">-->

    <!--                @foreach ($data3 as $data3)-->


    <!--                <div class="education_inner_content card_light">-->
    <!--                    <div class="education_icon">-->
    <!--                        <i class="fa-solid fa-gear"></i>-->
    <!--                    </div>-->
    <!--                    <div class="education_inner_title">-->
    <!--                        <h4>{{ $data3->title }}</h4>-->
    <!--                    </div>-->
    <!--                    <div class="education_inner_paragraph">-->
    <!--                        <p>{{ $data3->dis }}</p>-->
    <!--                    </div>-->
    <!--                    <div class="education_inner_btn">-->
    <!--                        <a href="#">Start Now!</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                @endforeach-->


    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


<!--popular course-->




   <section class="popular_course">
        <div class="container">
            <div class="popular_crs_main">
                <div class="popular_crs_title title">
                    <h6 class="small_title">LEARN AT YOUR OWN PACE</h6>
                    <h3 class="sub_title">Innovative Skills Popular Courses</h3>
                    <p class="paragraph">Explore all of our courses and pick your suitable ones to enroll and start learning with us! We ensure that you will never regret it!                    </p>
                </div>
                <div class="popular_crs_content">


                    @foreach ($data6 as $data6)


                    <div class="popular_inner_content pic1 card">
                        <div class="card_image_main">
                            <img class="card_image_main" src="{{ url('images/'.$data6->course_image) }}" alt="course Image">
                            <div class="price_round">
                                <span>{{ $data6->course_fee }}</span>
                            </div>
                        </div>
                        <div class="user_info p-4">
                            {{-- <div class="user_inner_info users">
                                <div class="user_img">
                                    <img class="card_image_user" src="frontend/img/Popular-corse/davidw.jpg" alt="User image">
                                </div>
                                <div class="user_name">
                                    <h6>Alex Morgan</h6>
                                </div>
                            </div> --}}
                            <div class="user_text">
                                <h4 class="title_h4">
                                    <a class="title_link" href="{{ url('course-single/'.$data6->id) }}">{{ $data6->course_title }}</a>
                                </h4>
                                <p class="card_paragraph">
                                    {{ $data6->course_description }}
                                </p>
                            </div>
                            <!--<div class="user_btn">-->
                            <!--    <div class="user_btn_left user_btn_inner">-->
                            <!--        <i class="fa-solid fa-book"></i>-->
                            <!--        <span>{{ $data6->CourseContentModel->count() }} lesson</span>-->
                            <!--    </div>-->
                                <!--<div class="user_btn_right user_btn_inner">-->
                                <!--    <i class="fa-solid fa-users"></i>-->
                                <!--    <span>145 Students</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--<div class="popular_crs_ends">-->
                <!--    <p>Enjoy the top notch learning methods and achieve next level skills! You are the creator of your own career & we will guide you through that. <a href="#">Register Free Now!.</a></p>-->
                <!--</div>-->
            </div>
        </div>
    </section>



       <!-- -------------- Course Advisor Section --------------- -->
    <section class="course_advisor">
        <div class="container">
            <div class="course_advisor_main">
                <div class="course_advisor_title">
                    <h6 class="small_title">INSTRUCTOR</h6>
                    <h3 class="sub_title">Course Advisor</h3>
                    <!--<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                </div>
                <div class="owl-carousel owl-theme">

                       @foreach ($data8 as $data8)

                    <div class="item">
                        <div class="advisor_content">
                            <div class="advisor_inner_content">
                                <div class="avisor_image">
                                    <img src="{{url('images/'.$data8->image)}}" alt="">
                                </div>
                                <div class="avisor_text bg-white p-3">
                                    <h4 class="title_h4">
                                        <a class="title_link" href="#">{{$data8->name}}</a>
                                    </h4>
                                    <h6 class="small_title">{{$data8->position}}</h6>
                                    <p class="paragraph">{{$data8->dis}}</p>
                                    <div class="carousel_social social">
                                        <div class="facebook social_inner">
                                            <a target="_blank" class="bg-light" href="{{$data8->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                        </div>
                                        <!--<div class="twittwer social_inner">-->
                                        <!--    <a href="{{$data8->twitter}}"><i class="fa-brands fa-twitter"></i></a>-->
                                        <!--</div>-->
                                        <!--<div class="instragram social_inner">-->
                                        <!--    <a href="#"><i class="fa-brands fa-instagram"></i></a>-->
                                        <!--</div>-->
                                        <!--<div class="linkedin social_inner">-->
                                        <!--    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>





    <!---------------- Online Learning ----------------------->
    <section class="online_learning">
        <div class="container">
            <div class="online_main">
                <!-- Animations -->
                <div class="animation_red">
                    <img src="frontend/img/background/Red-round.png" alt="Animation">
                </div>
                <div class="animation_red_borders">
                    <img src="frontend/img/background/border-round.png" alt="Animation">
                </div>
                <div class="animation_yellow">
                    <img src="frontend/img/background/Yellow-round.png" alt="Animation">
                </div>
                <div class="animation_bordered">
                    <img src="frontend/img/background/download.png" alt="Animation">
                </div>
                <!-- General Content -->
                <div class="online_img">
                    <div class="online_img_inner">
                        <a href="https://www.facebook.com/groups/138976912425295" target="_blank">
                            <img src="frontend/img/online/freelanching.jpg" alt="online Image">
                            <div class="imageTooltip">
                                <span>Click here for details</span>
                            </div>
                        </a>
                    </div>
                    <div class="online_img_inner">
                        <a href="https://www.facebook.com/groups/138976912425295" target="_blank">
                            <img src="frontend/img/online/jobGuide.jpg" alt="online Image">
                            <div class="imageTooltip">
                                <span>Click here for details</span>
                            </div>
                        </a>
                    </div>
                    <div class="online_img_inner">
                        <a href="https://www.facebook.com/groups/138976912425295" target="_blank">
                            <img src="frontend/img/online/Active.jpg" alt="online Image">
                            <div class="imageTooltip">
                                <span>Click here for details</span>
                            </div>
                        </a>
                    </div>
                    <div class="online_img_inner">
                        <a href="https://www.facebook.com/groups/138976912425295" target="_blank">
                            <img src="frontend/img/online/trainers.jpg" alt="online Image">
                            <div class="imageTooltip">
                                <span>Click here for details</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="online_content">
                    <div class="online_title">
                        <h6 class="small_title">ONLINE LEARNING</h6>
                        <h3 class="sub_title">Develop Your Skills, Learn Something New, and Grow Your Skills From Anywhere in the World!                        </h3>
                        <p class="paragraph">We understand better that online-based learning can make a significant change to reach students from all over the world! Giving options to learn better always can offer the best outcomes!                        </p>
                    </div>
                    <div class="online_light_btns">
                        <div class="online_inner_btns">
                            <div class="btns_icon">
                                <i class="fa-solid fa-arrow-up-right-dots"></i>
                            </div>
                            <div class="btns_text">
                                <h6>Expert Trainers</h6>
                            </div>
                        </div>
                        <div class="online_inner_btns">
                            <div class="btns_icon">
                                <i class="fa-solid fa-light fa-clock"></i>
                            </div>
                            <div class="btns_text">
                                <h6>Lifetime Access</h6>
                            </div>
                        </div>
                        <div class="online_inner_btns">
                            <div class="btns_icon">
                                <i class="fa-solid fa-laptop-file"></i>
                            </div>
                            <div class="btns_text">
                                <h6>Remote Learning</h6>
                            </div>
                        </div>
                        <div class="online_inner_btns">
                            <div class="btns_icon">
                                <i class="fa-solid fa-arrow-up-right-dots"></i>
                            </div>
                            <div class="btns_text">
                                <h6>Self Development</h6>
                            </div>
                        </div>
                    </div>
                    <div class="online_btn">
                        <a href="https://innovativeskillsbd.com/course/4" class="btn_red online_btn_red">
                            <div class="user_icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="user_details">
                                View All Courses
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-------------- DISTANCE LEARNING --------------->
    <section class="distance_learning">
        <div class="container">
            <div class="disnatce_main">
                <!-- Animations -->
                <!--<div class="plus_animation">-->
                <!--    <img src="frontend/img/background/shape8.6bd6914d.svg" alt="">-->
                <!--</div>-->
                <!--<div class="distance_dot_animate">-->
                <!--    <img src="frontend/img/background/download (1).png" alt="">-->
                <!--</div>-->
                <!--<div class="distance_border_animate">-->
                <!--    <img src="frontend/img/background/download.png" alt="">-->
                <!--</div>-->
                <!-- General Content -->
                <!--<div class="distance_top">-->
                <!--    <div class="distance_left">-->
                <!--        <h6 class="small_title">DISTANCE LEARNING</h6>-->
                <!--        <h3 class="sub_title">Flexible Study at Your Own Pace, According to Your Own Needs</h3>-->
                <!--        <p class="paragraph">With the Vdemy, you can study whenever and wherever you choose. We have students in over 175 countries and a global reputation as a pioneer in the field of flexible learning. Our teaching also means, if you travel often or need to relocate, you can continue to study wherever you go.</p>-->
                <!--        <div class="distance_slider">-->
                <!--            <div class="single-item carousel-inner">-->
                <!--              <div class="carosel_design">-->
                <!--                <div class="bg_cotation">-->
                <!--                    <i class="fa-solid fa-quote-right"></i>-->
                <!--                </div>-->
                <!--                <div class="bg_red_sign">-->
                <!--                    <img src="frontend/img/background/Red-quatar12.jpg" alt="">-->
                <!--                </div>-->
                <!--                <p class="carousel_p">-->
                <!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.-->
                <!--                </p>-->
                <!--                <div class="carosel_user">-->
                <!--                    <div class="carosel_user_img">-->
                <!--                        <img src="frontend/img/Popular-corse/Alexm.jpg" alt="">-->
                <!--                    </div>-->
                <!--                    <div class="carosel_user_data">-->
                <!--                        <h6>User Name</h6>-->
                <!--                        <p>Designation</p>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="carousel-item carosel_design">-->
                <!--                <div class="bg_cotation">-->
                <!--                    <i class="fa-solid fa-quote-right"></i>-->
                <!--                </div>-->
                <!--                <div class="bg_red_sign">-->
                <!--                    <img src="frontend/img/background/Red-quatar12.jpg" alt="">-->
                <!--                </div>-->
                <!--                <p class="carousel_p">-->
                <!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.-->
                <!--                </p>-->
                <!--                <div class="carosel_user">-->
                <!--                    <div class="carosel_user_img">-->
                <!--                        <img src="frontend/img/Popular-corse/saraht.jpg" alt="">-->
                <!--                    </div>-->
                <!--                    <div class="carosel_user_data">-->
                <!--                        <h6>User Name</h6>-->
                <!--                        <p>Designation</p>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="carousel-item carosel_design">-->
                <!--                <div class="bg_cotation">-->
                <!--                    <i class="fa-solid fa-quote-right"></i>-->
                <!--                </div>-->
                <!--                <div class="bg_red_sign">-->
                <!--                    <img src="frontend/img/background/Red-quatar12.jpg" alt="">-->
                <!--                </div>-->
                <!--                <p class="carousel_p">-->
                <!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.-->
                <!--                </p>-->
                <!--                <div class="carosel_user">-->
                <!--                    <div class="carosel_user_img">-->
                <!--                        <img src="frontend/img/Popular-corse/davidw.jpg" alt="">-->
                <!--                    </div>-->
                <!--                    <div class="carosel_user_data">-->
                <!--                        <h6>User Name</h6>-->
                <!--                        <p>Designation</p>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--        </div>-->
                        <!--<p class="paragraph">Not a member yet? <a href="#">Register now</a></p>-->
                <!--    </div>-->
                <!--    <div class="distance_right">-->
                <!--        <div class="distance_user">-->
                <!--            <div class="distance_user_left">-->
                <!--                <div class="left_top user_box">-->
                <!--                    <h3 class="user_count">1926</h3>-->
                <!--                    <h4 class="user_task">FINISHED SESSIONS</h4>-->
                <!--                </div>-->
                <!--                <div class="left_botom user_box">-->
                <!--                    <h3 class="user_count">250</h3>-->
                <!--                    <h4 class="user_task">ONLINE INSTRUCTORS</h4>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="distance_user_right">-->
                <!--                <div class="right_top user_box">-->
                <!--                    <h3 class="user_count">3279</h3>-->
                <!--                    <h4 class="user_task">ENROLLED LEARNERS                                    </h4>-->
                <!--                </div>-->
                <!--                <div class="right_botom user_box">-->
                <!--                    <h3 class="user_count">100%                                    </h3>-->
                <!--                    <h4 class="user_task">SATISFACTION RATE</h4>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="distance_bottom">-->
                <!--    @foreach ($data4 as $data4)-->


                <!--    <div class="videos">-->

                <!--        <div class="videos_border_ani">-->
                <!--            <img src="frontend/img/background/border-round.png" alt="">-->
                <!--        </div>-->
                <!--        <div class="image_inner_icon">-->
                <!--            <button type="button" data-bs-toggle="modal" data-bs-target="#video_modal">-->
                <!--                <i class="fa-solid fa-play"></i>-->
                <!--            </button>-->

                <!--        </div>-->
                        <!-------- Modal ------->
                <!--        <div class="modal fade" id="video_modal">-->
                <!--            <div class="modal-dialog modal-dialog-centered modal-lg">-->
                <!--                <div class="modal-content">-->
                <!--                    <div class="modal-header">-->

                <!--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close">&times;</button>-->
                <!--                    </div>-->
                <!--                    <div class="modal-body">-->
                <!--                        <iframe width="100%" height="100%" src="{{ $data4->iframe }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <img src="{{ url('images/'.$data4->image) }}" alt="">-->
                <!--    </div>-->
                <!--    @endforeach-->
                <!--</div>-->
            </div>
        </div>
    </section>

    <!-------------------- Self Development ----------------------------->
    {{-- <section class="self_development">
        <div class="container">
            <div class="self_main">
                <div class="self_developmenr_inner">
                    <!-- Animations -->
                    <div class="self_yellow">
                        <img src="frontend/img/background/yellow_half.png" alt="">
                    </div>
                    <div class="self_red_circle">
                        <img src="frontend/img/background/rb-round.png" alt="">
                    </div>
                    <div class="self_red_br">
                        <img src="frontend/img/background/border-round.png" alt="">
                    </div>
                    <!-- General Content -->
                    <div class="self_content">
                        <h6 class="small_title">GET INSTANT ACCESS TO THE FREE</h6>
                        <h3 class="sub_title">Self Development Course</h3>
                        <p class="paragraph">Innovative Skills' Course can assist you in bringing the significant changes in personal understanding and reshaping the confidence to achieve the best from your career! We trust that learning should be enjoyable, and only that can make substantial changes to someone!</p>
                        <div class="self_btn">
                            <a href="auth.html" class="btn_red self_btn_red">
                                <div class="user_icon">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                <div class="user_details">
                                    Start For Free
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="self_image">
                        <img src="frontend/img/Single/self.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--------------------- NEWS AND BLOGS ---------------------------->
    <!--<section class="blog_section">-->
    <!--    <div class="container">-->
    <!--        <div class="blog_main">-->
    <!--            <div class="blog_title title">-->
    <!--                <h6 class="small_title">NEWS AND BLOGS</h6>-->
    <!--                <h3 class="sub_title">Our Latest Publications</h3>-->
    <!--                <p class="paragraph">We always give extra care to our student's skills improvements and feel excited to share our latest research and learnings! </p>-->
    <!--            </div>-->
    <!--            <div class="blog_content">-->


    <!--                <div class="blog_content_inner">-->

    <!--                    @foreach ($data7 as $data7)-->

    <!--                    <div class="blog_inner_box">-->
    <!--                        <div class="blog_img_main">-->
    <!--                            <img class="blog_img" src="{{ url('images/'.$data7->image) }}" alt="course Image">-->
    <!--                        </div>-->
    <!--                        <div class="user_info">-->
    <!--                            <div class="user_text">-->
    <!--                                <h6><a href="#">{{ $data7->blog_cat->catagory }}</a></h6>-->
    <!--                                <h4 class="title_h4">-->
    <!--                                    <a class="title_link" href="{{ url('blog-single/'.$data7->id) }}">{{ $data7->title }}</a>-->
    <!--                                </h4>-->
    <!--                            </div>-->
    <!--                            <div class="user_btn">-->
    <!--                                {{-- <div class="user_inner_info users">-->
    <!--                                    <div class="user_img">-->
    <!--                                        <img class="blog_image_user" src="frontend/img/Popular-corse/davidw.jpg" alt="User image">-->
    <!--                                    </div>-->
    <!--                                    <div class="user_name">-->
    <!--                                        <h6>Alex Morgan</h6>-->
    <!--                                    </div>-->
    <!--                                </div> --}}-->
    <!--                                <div class="user_btn_right user_btn_inner">-->
    <!--                                    <i class="fa-solid fa-calendar-days"></i>-->
    <!--                                    <span>{{ $data7->created_at->format('d-m-y') }}</span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    @endforeach-->

    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="blog_end">-->
    <!--                <p class="ends">Get into details now? <a href="{{ url('/blog')}}">View all posts</a></p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!---------------------- Attending ----------------------->
    {{-- <section class="attending">
        <div class="container">
            <div class="attending_main">
                <!-- Animations -->
                <div class="top_red_animate">
                    <img src="frontend/img/background/Red-round.png" alt="">
                </div>
                <div class="botom_star">
                    <img src="frontend/img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Content -->
                <div class="attending_text">
                    <div class="attending_text_inner">
                        <h6 class="small_title">DISTANCE LEARNING</h6>
                        <h3 class="sub_title">Feel Like You Are Attending Your Classes Physically!</h3>
                        <p class="paragraph">Innovative Skills training programs can bring you a super exciting experience of learning through online! You never face any negative experience while enjoying your classes virtually by sitting in your comfort zone. Our flexible learning initiatives will help you to learn better and quicker than the traditional ways of learning skills.   </p>
                        <div class="attending_inner_btn mt-4">
                            <a href="course.html" class="btn_red">
                                <div class="user_icon">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <div class="user_details">
                                    View Courses
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="attending_image">
                    <div class="attending_image_inner">
                        <img src="frontend/img/background/man-with-laptop.878cf545.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!---------------- CERTIFICATION ------------------------------>
    {{-- <section class="certification">
        <div class="container">
            <div class="certification_main">
                <!-- Animations -->
                <div class="certification_rb">
                    <img src="frontend/img/background/red-border.png" alt="">
                </div>
                <div class="certification_yr">
                    <img src="frontend/img/background/Yellow-round.png" alt="">
                </div>
                <div class="certification_rr">
                    <img src="frontend/img/background/border-round.png" alt="">
                </div>
                <!-- General Content -->
                <div class="title">
                    <h6 class="small_title">AFFORDABLE CERTIFICATION</h6>
                    <h3 class="sub_title">Get Your Quality Skills Certificate Through Online Exam</h3>
                    <p class="paragraph">Students friendly pricing for the certificate programs helps individuals to get their skill certificate easier than ever!</p>
                </div>
                <div class="certification_btn">
                    <a href="#" class="btn_red mx-auto mt-4">
                        <div class="user_icon">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="user_details">
                            Get Started Now
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!--------------------- 4th industrial it service ---------------->
    <section class="industrial">
        {{-- Animation --}}
        <div class="animation_yellow">
            <img src="frontend/img/background/Yellow-round.png" alt="Animation">
        </div>
        <div class="animation_red">
            <img src="frontend/img/background/Red-round.png" alt="Animation">
        </div>
        {{-- General Content --}}
        <div class="container">
            <div class="industrial_main">
                <div class="industrial_title">
                    <h3 class="sub_title">4th Industrial  IT Service</h3>
                </div>
                <div class="industrial_content">
                    <div class="indus_cont_inner">
                        <span><i class="fa-solid fa-robot"></i></span>
                        <p class="title_h3">Machine & Deep Learning based Product Development</p>
                    </div>
                    <div class="indus_cont_inner">
                        <span><i class="fa-solid fa-gear"></i></span>
                        <p class="title_h3">IoT Product Development</p>
                    </div>
                    <div class="indus_cont_inner">
                        <span><i class="fa-solid fa-computer"></i></span>
                        <p class="title_h3">Computer Vision</p>
                    </div>
                    <div class="indus_cont_inner">
                        <span><i class="fa-solid fa-database"></i></span>
                        <p class="title_h3">Data Analytics</p>
                    </div>
                    <div class="indus_cont_inner">
                        <span><i class="fa-sharp fa-solid fa-database"></i></span>
                        <p class="title_h3">Data Engineering</p>
                    </div>
                    <div class="indus_cont_inner">
                        <span><i class="fa-sharp fa-solid fa-blog"></i></span>
                        <p class="title_h3">ML Based Web Development</p>
                    </div>
                    <div class="indus_cont_inner">
                        <span><i class="fa-solid fa-wand-sparkles"></i></span>
                        <p class="title_h3">Automation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- -------------client Success -------------->
    <section class="client_section">
        <div class="container">
            <div class="client_main">
                <div class="client_title">
                    <h3 class="sub_title">Client's Feedbacks</h3>
                </div>
                <div id="carouselExampleAutoplaying" class="carousel client_cMain slide" data-bs-ride="carousel">
                    <div class="carousel-inner client_carousel">

                    {{-- Carousel Content --}}
                        <div class="carousel-item active">
                          <img src="{{ asset('frontend/img/clints/clint1.jpg') }}" class="d-block" alt="...">
                          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, adipisci sequi. Quidem in nulla perferendis ex illum, placeat, iste distinctio, aspernatur doloremque deleniti ut consectetur asperiores ab inventore aliquid cupiditate?</p>
                        <h3 class="title_h3 client_name">Client Name</h3>
                        <h5 class="country_main">Country: <span class="country">Bangladesh</span></h5>
                        <div class="client_rating">
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="de_active"><i class="fa-regular fa-star"></i></span>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('frontend/img/clints/clint2.jpg') }}" class="d-block" alt="...">
                          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, adipisci sequi. Quidem in nulla perferendis ex illum, placeat, iste distinctio, aspernatur doloremque deleniti ut consectetur asperiores ab inventore aliquid cupiditate?</p>
                        <h3 class="title_h3 client_name">Client Name</h3>
                        <h5 class="title_h5">Country: <span class="country">Bangladesh</span></h5>
                        <div class="client_rating">
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="de_active"><i class="fa-regular fa-star"></i></span>
                        </div>
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('frontend/img/clints/clint1.jpg') }}" class="d-block" alt="...">
                          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, adipisci sequi. Quidem in nulla perferendis ex illum, placeat, iste distinctio, aspernatur doloremque deleniti ut consectetur asperiores ab inventore aliquid cupiditate?</p>
                          <h3 class="title_h3 client_name">Client Name</h3>
                          <h5 class="title_h5">Country: <span class="country">Bangladesh</span></h5>
                          <div class="client_rating">
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="active"><i class="fa-solid fa-star"></i></span>
                            <span class="de_active"><i class="fa-regular fa-star"></i></span>
                        </div>
                        </div>
                    </div>
                  <button class="carousel-control-prev cPrev_icon" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next cNext_icon" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
        </div>
    </section>

    {{----------- Our portfolio ---------------}}
    <section class="popular_course portfolio_section">
        <div class="container">
            <div class="popular_crs_main">
                <div class="popular_crs_title title">
                    <h3 class="sub_title">Innovative Skills Portfolio</h3>
                    <p class="paragraph">View our Portfolios for know our work quality</p>
                </div>
                <div class="popular_crs_content">
                    <a href="{{ url('portfolio_details') }}" class="protfolio_div">
                        <div class="popular_inner_content pic1 card protfolio_card">
                            <div class="card_image_main">
                                <img class="card_image_main" src="{{ asset('frontend/img/portfolio/45 PM.jpeg') }}" alt="course Image">
                            </div>
                            <div class="user_info p-4">
                                <div class="user_text">
                                    <h4 class="title_h3">
                                       AI Based Web Development with Django
                                    </h4>
                                    <p class="card_paragraph">
                                    Strategic social media marketing is a discipline that focuses on utilizing social media platforms as a part of an overall marketing strategy to achieve specific business objectives. It involves developing and implementing a comprehensive plan to effectively leverage social media channels to connect with target audiences, build brand awareness, drive website traffic, and ultimately, achieve desired marketing outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tooltip">
                            <span>Click here for details</span>
                        </div>
                    </a>
                    <a href="#" class="protfolio_div">
                        <div class="popular_inner_content pic1 card protfolio_card">
                            <div class="card_image_main">
                                <img class="card_image_main" src="{{ asset('frontend/img/portfolio/45 PM.jpeg') }}" alt="course Image">
                            </div>
                            <div class="user_info p-4">
                                <div class="user_text">
                                    <h3 class="title_h3">AI Based Web Development with Django</h3>
                                    <p class="card_paragraph">
                                    Strategic social media marketing is a discipline that focuses on utilizing social media platforms channels to connect with target audiences, build brand awareness, drive website traffic, and ultimately, achieve desired marketing outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tooltip">
                            <span>Click here for details</span>
                        </div>
                    </a>
                    <a href="#" class="protfolio_div">
                        <div class="popular_inner_content pic1 card protfolio_card">
                            <div class="card_image_main">
                                <img class="card_image_main" src="{{ asset('frontend/img/portfolio/45 PM.jpeg') }}" alt="course Image">
                            </div>
                            <div class="user_info p-4">
                                <div class="user_text">
                                    <h4 class="title_h3">
                                       AI Based Web Development with Django
                                    </h4>
                                    <p class="card_paragraph">
                                    Strategic social media marketing is a discipline that focuses on utilizing social media platforms as a part of an overall marketing strategy to achieve specific business objectives. It involves developing and implementing a comprehensive plan to effectively leverage social media channels to connect with target audiences, build brand awareness, drive website traffic, and ultimately, achieve desired marketing outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tooltip">
                            <span>Click here for details</span>
                        </div>
                    </a>
                    <a href="#" class="protfolio_div">
                        <div class="popular_inner_content pic1 card">
                            <div class="card_image_main">
                                <img class="card_image_main" src="{{ asset('frontend/img/portfolio/Course.jpeg') }}" alt="course Image">
                            </div>
                            <div class="user_info p-4">
                                <div class="user_text">
                                    <h3 class="title_h3">AI Based Web Development with Django</h3>
                                    <p class="card_paragraph">
                                    Strategic social media marketing is a discipline that focuses on utilizing social media platforms as a part of an overall marketing strategy to achieve specific business objectives. It involves developing and implementing a comprehensive plan to effectively leverage social media channels to connect with target audiences, build brand awareness, drive website traffic, and ultimately, achieve desired marketing outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tooltip">
                            <span>Click here for details</span>
                        </div>
                    </a>
                    <a href="#" class="protfolio_div">
                        <div class="popular_inner_content pic1 card">
                            <div class="card_image_main">
                                <img class="card_image_main" src="{{ asset('frontend/img/portfolio/AM.jpeg') }}" alt="course Image">
                            </div>
                            <div class="user_info p-4">
                                <div class="user_text">
                                    <h4 class="title_h3">
                                       AI Based Web Development with Django
                                    </h4>
                                    <p class="card_paragraph">
                                    Strategic social media marketing is a discipline that focuses on utilizing social media platforms as a part of an overall marketing strategy to achieve specific business objectives. It involves developing and implementing a comprehensive plan to effectively leverage social media channels to connect with target audiences, build brand awareness, drive website traffic, and ultimately, achieve desired marketing outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tooltip">
                            <span>Click here for details</span>
                        </div>
                    </a>
                    <a href="#" class="protfolio_div">
                        <div class="popular_inner_content pic1 card">
                            <div class="card_image_main">
                                <img class="card_image_main" src="{{ asset('frontend/img/portfolio/45 PM.jpeg') }}" alt="course Image">
                            </div>
                            <div class="user_info p-4">
                                <div class="user_text">
                                    <h3 class="title_h3">AI Based Web Development with Django</h3>
                                    <p class="card_paragraph">
                                    Strategic social media marketing is a discipline that focuses on utilizing social media platforms as a part of an overall marketing strategy to achieve specific business objectives. It involves developing and implementing a comprehensive plan to effectively leverage social media channels to connect with target audiences, build brand awareness, drive website traffic, and ultimately, achieve desired marketing outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tooltip">
                            <span>Click here for details</span>
                        </div>
                    </a>
                </div>
                <!--<div class="popular_crs_ends">-->
                <!--    <p>Enjoy the top notch learning methods and achieve next level skills! You are the creator of your own career & we will guide you through that. <a href="#">Register Free Now!.</a></p>-->
                <!--</div>-->
            </div>
        </div>
    </section>

     <!------------------------- Footer Section --------------------------------->
   
@include('pages/frontend/footer')