@include('pages/frontend/header')


    <!--------------- Blog Title -------------------->
    <section class="auth__title_section blog_title">
        <div class="container">
            <div class="auth_title">
                <!-- Animations -->
                <div class="auth_stra_animate">
                    <img src="img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="index.html">Home</a>/  Blog</p>
                </div>
                <div class="auth_title_content">
                    <h3 class="sub_title">Blog</h3>
                </div>
            </div>
        </div>
    </section>

    <!------------------- Blog Content -------------------->
    <section class="blog_content_body">
        <div class="container">
            <div class="blog_body_main">
                <div class="blog_content blog_body">
                    <div class="blog_content_inner blog_body_inner">

                        @foreach ($data1 as $data1)


                        <div class="blog_inner_box blog_body_box">
                            <div class="blog_img_main">
                                <a href="{{ url('blog-single/'.$data1->id) }}">
                                    <img class="blog_img" src="{{ url('images/'.$data1->image) }}" alt="course Image">
                                </a>
                            </div>
                            <div class="user_info pb-4">
                                <div class="user_text">
                                    <h6><a href="#">{{ $data1->blog_cat->catagory }}</a></h6>
                                    <h4 class="title_h4">
                                        <a class="title_link" href="{{ url('blog-single/'.$data1->id) }}">{{ $data1->title }}</a>
                                    </h4>
                                </div>
                                <div class="user_btn">
                                    {{-- <div class="user_inner_info users">
                                        <div class="user_img">
                                            <img class="blog_image_user" src="/frontend/img/Popular-corse/davidw.jpg" alt="User image">
                                        </div>
                                        <div class="user_name">
                                            <h6>Alex Morgan</h6>
                                        </div>
                                    </div> --}}
                                    <div class="user_btn_right user_btn_inner">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>{{ $data1->created_at->format('d-m-y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="paginate">
                        <a href="#"><<</a>
                        <a href="#" class="">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">>></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!------------------------- Footer Section --------------------------------->
   @include('pages/frontend/footer')