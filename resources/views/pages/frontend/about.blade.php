@include('pages/frontend/header')


<!--  -->
    <!-- Start About Section -->
    <!-- ------------------------ About Title ------------------------ -->
    <section class="auth__title_section about_section">
        <div class="container">
            <div class="auth_title about_title">
                <!-- Animations -->
                <div class="auth_stra_animate">
                    <img src="frontend/img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="index.html">Home</a>/  About Us</p>
                </div>
                <div class="auth_title_content">
                    <h3 class="sub_title">About Us</h3>
                </div>
            </div>
        </div>
    </section>
<!--  -->
<!--  -->
    <!-- ----------------- Distance Learning Top Section ------------------------ -->
    <section class="online_learning distance_learning_top">
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
                        </a>
                    </div>
                    <div class="online_img_inner">
                        <a href="https://www.facebook.com/groups/138976912425295" target="_blank">
                            <img src="frontend/img/online/jobGuide.jpg" alt="online Image">
                        </a>
                    </div>
                    <div class="online_img_inner">
                        <a href="https://www.facebook.com/groups/138976912425295" target="_blank">
                            <img src="frontend/img/online/Active.jpg" alt="online Image">
                        </a>
                    </div>
                    <div class="online_img_inner">
                        <a href="https://www.facebook.com/groups/138976912425295" target="_blank">
                            <img src="frontend/img/online/trainers.jpg" alt="online Image">
                        </a>
                    </div>
                </div>
                @foreach ($data as $data)


                <div class="online_content">
                    <div class="online_title">
                        <h6 class="small_title">INNOVATIVE LEARNING</h6>
                        <h3 class="sub_title">{{ $data->title }}</h3>
                        <p class="paragraph">{{ $data->dis }}</p>

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
                </div>
                @endforeach


            </div>
        </div>
    </section>
<!--  -->
    <!-- ----------------------- Distance Learning ----------------------------- -->
    <!--<section class="distance_learning">-->
    <!--    <div class="container">-->
    <!--        <div class="disnatce_main">-->
                <!-- Animations -->
    <!--            <div class="plus_animation">-->
    <!--                <img src="frontend/img/background/shape8.6bd6914d.svg" alt="">-->
    <!--            </div>-->
    <!--            <div class="distance_dot_animate">-->
    <!--                <img src="frontend/img/background/download (1).png" alt="">-->
    <!--            </div>-->
    <!--            <div class="distance_border_animate">-->
    <!--                <img src="frontend/img/background/download.png" alt="">-->
    <!--            </div>-->
                <!-- General Content -->
    <!--            {{-- <div class="distance_top">-->
    <!--                <div class="distance_left">-->
    <!--                    <h6 class="small_title">DISTANCE LEARNING</h6>-->
    <!--                    <h3 class="sub_title">Flexible Study at Your Own Pace, According to Your Own Needs</h3>-->
    <!--                    <p class="paragraph">With the Vdemy, you can study whenever and wherever you choose. We have students in over 175 countries and a global reputation as a pioneer in the field of flexible learning. Our teaching also means, if you travel often or need to relocate, you can continue to study wherever you go.</p>-->
    <!--                    <div class="distance_slider">-->
    <!--                        <div class="single-item">-->
    <!--                            <div class=" carosel_design">-->
    <!--                              <div class="bg_cotation">-->
    <!--                                  <i class="fa-solid fa-quote-right"></i>-->
    <!--                              </div>-->
    <!--                              <div class="bg_red_sign">-->
    <!--                                  <img src="frontend/img/background/Red-quatar12.jpg" alt="">-->
    <!--                              </div>-->
    <!--                              <p class="carousel_p">-->
    <!--                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.-->
    <!--                              </p>-->
    <!--                              <div class="carosel_user">-->
    <!--                                  <div class="carosel_user_img">-->
    <!--                                      <img src="frontend/img/Popular-corse/Alexm.jpg" alt="">-->
    <!--                                  </div>-->
    <!--                                  <div class="carosel_user_data">-->
    <!--                                      <h6>User Name</h6>-->
    <!--                                      <p>Designation</p>-->
    <!--                                  </div>-->
    <!--                              </div>-->
    <!--                            </div>-->
    <!--                            <div class=" carosel_design">-->
    <!--                              <div class="bg_cotation">-->
    <!--                                  <i class="fa-solid fa-quote-right"></i>-->
    <!--                              </div>-->
    <!--                              <div class="bg_red_sign">-->
    <!--                                  <img src="frontend/img/background/Red-quatar12.jpg" alt="">-->
    <!--                              </div>-->
    <!--                              <p class="carousel_p">-->
    <!--                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.-->
    <!--                              </p>-->
    <!--                              <div class="carosel_user">-->
    <!--                                  <div class="carosel_user_img">-->
    <!--                                      <img src="frontend/img/Popular-corse/saraht.jpg" alt="">-->
    <!--                                  </div>-->
    <!--                                  <div class="carosel_user_data">-->
    <!--                                      <h6>User Name</h6>-->
    <!--                                      <p>Designation</p>-->
    <!--                                  </div>-->
    <!--                              </div>-->
    <!--                            </div>-->
    <!--                            <div class=" carosel_design">-->
    <!--                              <div class="bg_cotation">-->
    <!--                                  <i class="fa-solid fa-quote-right"></i>-->
    <!--                              </div>-->
    <!--                              <div class="bg_red_sign">-->
    <!--                                  <img src="frontend/img/background/Red-quatar12.jpg" alt="">-->
    <!--                              </div>-->
    <!--                              <p class="carousel_p">-->
    <!--                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.-->
    <!--                              </p>-->
    <!--                              <div class="carosel_user">-->
    <!--                                  <div class="carosel_user_img">-->
    <!--                                      <img src="frontend/img/Popular-corse/davidw.jpg" alt="">-->
    <!--                                  </div>-->
    <!--                                  <div class="carosel_user_data">-->
    <!--                                      <h6>User Name</h6>-->
    <!--                                      <p>Designation</p>-->
    <!--                                  </div>-->
    <!--                              </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <p class="paragraph">Not a member yet? <a href="auth.html">Register now</a>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="distance_right">-->
    <!--                    <div class="distance_user">-->
    <!--                        <div class="distance_user_left">-->
    <!--                            <div class="left_top user_box">-->
    <!--                                <h3 class="user_count">1926</h3>-->
    <!--                                <h4 class="user_task">FINISHED SESSIONS</h4>-->
    <!--                            </div>-->
    <!--                            <div class="left_botom user_box">-->
    <!--                                <h3 class="user_count">250</h3>-->
    <!--                                <h4 class="user_task">ONLINE INSTRUCTORS</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="distance_user_right">-->
    <!--                            <div class="right_top user_box">-->
    <!--                                <h3 class="user_count">3279</h3>-->
    <!--                                <h4 class="user_task">ENROLLED LEARNERS          </h4>-->
    <!--                            </div>-->
    <!--                            <div class="right_botom user_box">-->
    <!--                                <h3 class="user_count">100%</h3>-->
    <!--                                <h4 class="user_task">SATISFACTION RATE</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div> --}}-->
    <!--            <div class="distance_bottom">-->

    <!--                @foreach ($data1 as $data1)-->


    <!--                <div class="videos">-->
    <!--                    <div class="videos_border_ani">-->
    <!--                        <img src="frontend/img/background/border-round.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="image_inner_icon">-->
    <!--                        <button type="button" data-bs-toggle="modal" data-bs-target="#video_modal">-->
    <!--                            <i class="fa-solid fa-play"></i>-->
    <!--                        </button>-->

    <!--                    </div>-->
                        <!-- ------ Modal ----- -->
    <!--                    <div class="modal fade" id="video_modal">-->
    <!--                        <div class="modal-dialog modal-dialog-centered modal-lg">-->
    <!--                            <div class="modal-content">-->
    <!--                                <div class="modal-header">-->

    <!--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close">&times;</button>-->
    <!--                                </div>-->
    <!--                                <div class="modal-body">-->
    <!--                                    <iframe width="100%" height="100%" src="{{ $data1->iframe }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <img src="{{ url('images/'.$data1->image) }}" alt="">-->
    <!--                </div>-->
    <!--                @endforeach-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
<!--  -->
    <!-- ------------------- Education section for about page ---------------- -->
    <!--<section class="education education_for_about">-->
    <!--    <div class="container">-->
    <!--        <div class="education_main education_main_for_about">-->
    <!--            <div class="education_title">-->
    <!--                <h6 class="Education_h6 small_title">EDUCATION FOR EVERYONE</h6>-->
    <!--                <h3 class="Education_h3 sub_title">Online Coaching Lessons For Remote Learning</h3>-->
    <!--                <p class="education_paragraph">Finding your own space and utilize better learning options can result in faster than the traditional ways. Enjoy the beauty of eLearning!                    </p>-->
    <!--            </div>-->
    <!--            <div class="education_content">-->

    <!--                @foreach ($data2 as $data2)-->


    <!--                <div class="education_inner_content card_light">-->
    <!--                    <div class="education_icon">-->
    <!--                        <i class="fa-solid fa-gear"></i>-->
    <!--                    </div>-->
    <!--                    <div class="education_inner_title">-->
    <!--                        <h4>{{ $data2->title }}</h4>-->
    <!--                    </div>-->
    <!--                    <div class="education_inner_paragraph">-->
    <!--                        <p>{{ $data2->dis }}</p>-->
    <!--                    </div>-->
    <!--                    <div class="education_inner_btn">-->
    <!--                        <a href="auth.html">Start Now!</a>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                @endforeach-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
<!--  -->
    <!-- -------------- Course Advisor Section --------------- -->
    <!--<section class="course_advisor">-->
    <!--    <div class="container">-->
    <!--        <div class="course_advisor_main">-->
    <!--            <div class="course_advisor_title">-->
    <!--                <h6 class="small_title">INSTRUCTOR</h6>-->
    <!--                <h3 class="sub_title">Course Advisor</h3>-->
    <!--                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
    <!--            </div>-->
    <!--            <div class="owl-carousel owl-theme">-->
    <!--                <div class="item">-->
    <!--                    <div class="advisor_content">-->
    <!--                        <div class="advisor_inner_content">-->
    <!--                            <div class="avisor_image">-->
    <!--                                <img src="frontend/img/Advisor/img1.974e1acf.jpg" alt="">-->
    <!--                            </div>-->
    <!--                            <div class="avisor_text bg-white p-3">-->
    <!--                                <h4 class="title_h4">-->
    <!--                                    <a class="title_link" href="#">Jonh Smith</a>-->
    <!--                                </h4>-->
    <!--                                <h6 class="small_title">Agile Project Expert</h6>-->
    <!--                                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
    <!--                                <div class="carousel_social social">-->
    <!--                                    <div class="facebook social_inner">-->
    <!--                                        <a class="bg-light" href="#"><i class="fa-brands fa-facebook-f"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="twittwer social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="instragram social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="linkedin social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="item">-->
    <!--                    <div class="advisor_content">-->
    <!--                        <div class="advisor_inner_content">-->
    <!--                            <div class="avisor_image">-->
    <!--                                <img src="frontend/img/Advisor/sarahtf.jpg" alt="">-->
    <!--                            </div>-->
    <!--                            <div class="avisor_text bg-white p-3">-->
    <!--                                <h4 class="title_h4">-->
    <!--                                    <a class="title_link" href="#">Sarah Taylor</a>-->
    <!--                                </h4>-->
    <!--                                <h6 class="small_title">Agile Project Expert</h6>-->
    <!--                                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
    <!--                                <div class="carousel_social social">-->
    <!--                                    <div class="facebook social_inner">-->
    <!--                                        <a class="bg-light" href="#"><i class="fa-brands fa-facebook-f"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="twittwer social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="instragram social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="linkedin social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="item">-->
    <!--                    <div class="advisor_content">-->
    <!--                        <div class="advisor_inner_content">-->
    <!--                            <div class="avisor_image">-->
    <!--                                <img src="frontend/img/Advisor/jamesa.jpg" alt="">-->
    <!--                            </div>-->
    <!--                            <div class="avisor_text bg-white p-3">-->
    <!--                                <h4 class="title_h4">-->
    <!--                                    <a class="title_link" href="#">James Andy</a>-->
    <!--                                </h4>-->
    <!--                                <h6 class="small_title">Agile Project Expert</h6>-->
    <!--                                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
    <!--                                <div class="carousel_social social">-->
    <!--                                    <div class="facebook social_inner">-->
    <!--                                        <a class="bg-light" href="#"><i class="fa-brands fa-facebook-f"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="twittwer social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="instragram social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>-->
    <!--                                    </div>-->
    <!--                                    <div class="linkedin social_inner">-->
    <!--                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
<!--  -->
    <!-- -------------- CERTIFICATION ---------------------------- -->
    {{-- <section class="certification about_access">
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
                    <h6 class="small_title">GO AT YOUR OWN PACE</h6>
                    <h3 class="sub_title">Give their limitless potential unlimited access</h3>
                    <p class="paragraph">Students friendly pricing for the certificate programs helps individuals to get their skill certificate easier than ever!</p>
                </div>
                <div class="certification_btn">
                    <a href="#" class="btn_red mx-auto mt-4">
                        <div class="user_icon">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="user_details">
                            Give Premium Access
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
<!--  -->
    <!-- ---------------- Brand Logo ------------------------ -->
    {{-- <section class="brand_logo">
        <div class="container">
            <div class="brand_logo_main">
                <div class="brand_logo_inner">
                    <img src="frontend/img/Brands/br1.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="frontend/img/Brands/br2.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="frontend/img/Brands/br3.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="frontend/img/Brands/br4.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="frontend/img/Brands/br5.png" alt="Brand Logo">
                </div>
                <div class="brand_logo_inner">
                    <img src="frontend/img/Brands/br6.png" alt="Brand Logo">
                </div>
            </div>
        </div>
    </section> --}}
<!--  -->
<!--  -->
     <!-- ----------------------- Footer Section ------------------------------- -->
     @include('pages/frontend/footer')
 