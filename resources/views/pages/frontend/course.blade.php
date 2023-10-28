@include('pages/frontend/header')

    <!------------------------- Course Title Section ---------------------->
    <section class="auth__title_section">
        <div class="container">
            <div class="auth_title">
                <!-- Animations -->
                <div class="auth_stra_animate">
                    <img src="img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="index.html">Home</a>/  Course</p>
                </div>
                <div class="auth_title_content">
                    <h3 class="sub_title">Course</h3>
                </div>
            </div>
        </div>
    </section>

    <!------------------- Course Body ----------------------->
    <section class="course_body_section">
        <div class="container">
            <div class="course_body_main">
                <div class="course_sub_title">
                    {{-- <div class="course_massage">
                        <p class="paragraph">We found <b>12</b> courses available for you</p>
                    </div> --}}
                    {{-- <div class="course_filter">
                        <h2>Short By:</h2>
                        <div class="course_filter_select">
                            <form action="#">
                                <select name="#" id="#">
                                    <option value="#" selected>Defoult</option>
                                    <option value="#">Popularity</option>
                                    <option value="#">Letest</option>
                                    <option value="#">Price: low to high</option>
                                    <option value="#">Price: high to low</option>
                                </select>
                            </form>
                        </div>
                    </div> --}}
                </div>
                <div class="popular_crs_content course_body_inner">


                    @foreach ($data1 as $data1)


                    <div class="popular_inner_content pic1 card">
                        <div class="card_image_main">
                            <a href="{{ url('course-single/'.$data1->id) }}">
                                <img class="card_image_main" src="{{ url('images/'.$data1->course_image) }}" alt="course Image">
                            </a>
                            <div class="price_round">
                                <span>{{ $data1->course_fee }}</span>
                            </div>
                        </div>
                        <div class="user_info p-4">
                            <div class="user_inner_info users">
                                {{-- <div class="user_img">
                                    <img class="card_image_user" src="frontend/img/Popular-corse/davidw.jpg" alt="User image">
                                </div> --}}
                                <div class="user_name">
                                    <h6>{{ $data1->course_duration }}</h6>
                                </div>
                            </div>
                            <div class="user_text">
                                <h4 class="title_h4">
                                    <a class="title_link" href="{{ url('course-single/'.$data1->id) }}">{{ $data1->course_title }}</a>
                                </h4>
                                <p class="card_paragraph">
                                  {{ $data1->course_description }}
                                </p>
                            </div>
                            {{-- <div class="user_btn">
                                <div class="user_btn_left user_btn_inner">
                                    <i class="fa-solid fa-book"></i>
                                    <span>15 Lessons</span>
                                </div>
                                <div class="user_btn_right user_btn_inner">
                                    <i class="fa-solid fa-users"></i>
                                    <span>145 Students</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--<div class="paginate mx-auto course_paginate mt-5">-->
                <!--    <a href="#"><<</a>-->
                <!--    <a href="#" class="">1</a>-->
                <!--    <a href="#">2</a>-->
                <!--    <a href="#">3</a>-->
                <!--    <a href="#">4</a>-->
                <!--    <a href="#">5</a>-->
                <!--    <a href="#">>></a>-->
                <!--</div>-->
            </div>
        </div>
    </section>


     <!------------------------- Footer Section --------------------------------->
   @include('pages/frontend/footer')