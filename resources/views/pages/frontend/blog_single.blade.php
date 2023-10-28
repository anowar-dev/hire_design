@include('pages/frontend/header')


    <!------------------------- Blog Details title Section ---------------------->
    <section class="auth__title_section blog_details_page">
        <div class="container">
            <div class="auth_title">
                <!-- Animations -->
                <div class="auth_stra_animate">
                    <img src="img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="index.html">Home</a>/  Blog Details</p>
                </div>
                <div class="auth_title_content">
                    <h3 class="sub_title">Blog Details</h3>
                </div>
            </div>
        </div>
    </section>

    <!----------------- Blog Details Body ------------>
    <section class="blog_body_section">
        <div class="container">
            <div class="blog_body_main">
                <div class="blog_contents">
                    <div class="blog_body_inner">
                        <div class="blog_content_top">
                            <div class="blog_top_img">
                                <img src="{{ url('images/'.$data->image) }}" alt="blog image">
                            </div>
                            <div class="blog_top_users">
                                <div class="top_user_count_main">
                                    <div class="blog_user_count">
                                        <div class="blog_user_icon">
                                            <i class="fa-solid fa-folder"></i>
                                        </div>
                                        <div class="blog_user_content">
                                            <h6 class="small_title">CATEGORY</h6>
                                            <a href="#">{{ $data->blog_cat->catagory }}</a>
                                        </div>
                                    </div>
                                    {{-- <div class="blog_user_count">
                                        <div class="blog_user_icon">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="blog_user_content">
                                            <h6 class="small_title">View</h6>
                                            <a href="#">813,454</a>
                                        </div>
                                    </div> --}}
                                    <div class="blog_user_count">
                                        <div class="blog_user_icon">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                        <div class="blog_user_content">
                                            <h6 class="small_title">LAST UPDATED</h6>
                                            <a href="#">{{ $data->created_at->format('d-m-y') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="blog_titles">{{ $data->title }}</h4>
                                <p class="paragraph my-3">{{ $data->dis }}</p>

                            </div>
                        </div>
                        {{-- <div class="blog_major_elements">
                            <div class="blog_mejor_img">
                                <div class="blog_mejor_img_inner">
                                    <img src="img/course photo/img1-r.jpg" alt="">
                                </div>
                                <div class="blog_mejor_img_inner">
                                    <img src="img/course photo/img2.20a28e7f.jpg" alt="">
                                </div>
                                <div class="blog_mejor_img_inner">
                                    <img src="img/course photo/img4.cf60a458.jpg" alt="">
                                </div>
                            </div>
                            <h4 class="blog_titles mb-4">Four major elements that we offer:</h4>
                            <div class="blog_service_list">
                                <div class="blog_service_icon">
                                    <i class="fa-solid fa-check-double"></i>
                                </div>
                                <div class="blog_service_text">
                                    <p class="paragraph">Scientific skills for getting a better result</p>
                                </div>
                            </div>
                            <div class="blog_service_list">
                                <div class="blog_service_icon">
                                    <i class="fa-solid fa-check-double"></i>
                                </div>
                                <div class="blog_service_text">
                                    <p class="paragraph">Communication skills to getting in touch</p>
                                </div>
                            </div>
                            <div class="blog_service_list">
                                <div class="blog_service_icon">
                                    <i class="fa-solid fa-check-double"></i>
                                </div>
                                <div class="blog_service_text">
                                    <p class="paragraph">A career overview opportunity available</p>
                                </div>
                            </div>
                            <div class="blog_service_list">
                                <div class="blog_service_icon">
                                    <i class="fa-solid fa-check-double"></i>
                                </div>
                                <div class="blog_service_text">
                                    <p class="paragraph">A good work environment for work</p>
                                </div>
                            </div>
                            <h4 class="blog_titles mb-4">Setting the mood with incense</h4>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <h4 class="blog_titles my-4">The rise of marketing and why you need it</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                        <div class="blog_content_travels">
                            <div class="blog_travel_top">
                                <div class="blog_content_tags">
                                    <p><i class="fa-solid fa-tag"></i>
                                        <a href="#">Fashion,</a>
                                        <a href="#">Games,</a>
                                        <a href="#">Travel</a>
                                    </p>
                                </div>
                                <div class="blog_content_social">
                                    <div class="blog_social_title">
                                        <h4>Share:</h4>
                                    </div>
                                    <div class="blog_social_icons">
                                        <div class="inner_fb">
                                            <a href="$">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </div>
                                        <div class="inner_twitter">
                                            <a href="#">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="inner_linkedin">
                                            <a href="#">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                        <div class="inner_instragram">
                                            <a href="#">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_travel_middle">
                                <div class="blog_profile_image">
                                    <img src="img/Popular-corse/Alexm.jpg" alt="">
                                </div>
                                <div class="blog_profile_text">
                                    <h3 class="blog_titles mt-3">Chris Orwig</h3>
                                    <h5 class="paragraph">Photographer, Author, Writer</h5>
                                    <p class="paragraph">Chris Orwig is a celebrated photographer, author, and writer who brings passion to everything he does.</p>
                                </div>
                            </div>
                            <div class="blog_travel_bottom mt-4">
                                <div class="travel_bottom_left">
                                    <a href="#">
                                        <div class="travel_bottom_image">
                                            <img src="img/Videos/video-img1.3438654c.jpg" alt="">
                                            <div class="preview">
                                                <h2>PREV</h2>
                                            </div>
                                        </div>
                                        <div class="travel_left_text">
                                                <a href="#">
                                                    <h4 class="blog_post_title">What Is The MLB Summer Slugger Program?</h4>
                                                </a>
                                            <p class="paragraph">January 21, 2021</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="travel_bottom_right">
                                    <a href="#">
                                        <div class="travel_right_text">
                                                <a href="#">
                                                    <h4 class="blog_post_title">28 Student-Centered Instructional Strategies</h4>
                                                </a>
                                            <p class="paragraph">January 19, 2021</p>
                                        </div>
                                        <div class="travel_bottom_image">
                                            <img src="img/Videos/video-img1.3438654c.jpg" alt="">
                                            <div class="next">
                                                <h2>NEXT</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_view_comments">
                            <h4 class="blog_titles">2 Comments:</h4>
                            <!-- -- Main Comment ---->
                            <div class="blog_commenter_info">
                                <div class="blog_commenter_image">
                                    <img src="img/Popular-corse/Alexm.jpg" alt="">
                                </div>
                                <div class="blog_commenter_text">
                                    <div class="blog_commenter_name">
                                        <h5>John Jones</h5>
                                        <a href="#">APRIL 24, 2019 AT 10:59 AM</a>
                                    </div>
                                    <div class="blog_commenter_massage">
                                        <p class="paragraph">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                    </div>
                                    <div class="blog_commenter_btn">
                                        <a href="#" class="btn_capsule">REPLY</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Replyer Info -->
                            <div class="blog_commenter_info ms-4">
                                <div class="blog_commenter_image">
                                    <img src="img/Popular-corse/saraht.jpg" alt="">
                                </div>
                                <div class="blog_commenter_text">
                                    <div class="blog_commenter_name">
                                        <h5>Steven Smith</h5>
                                        <a href="#">APRIL 24, 2019 AT 10:59 AM</a>
                                    </div>
                                    <div class="blog_commenter_massage">
                                        <p class="paragraph">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                    </div>
                                    <div class="blog_commenter_btn">
                                        <a href="#" class="btn_capsule">REPLY</a>
                                    </div>
                                </div>
                            </div>
                            <!-- -- Main Comment ---->
                            <div class="blog_commenter_info">
                                <div class="blog_commenter_image">
                                    <img src="img/Popular-corse/davidw.jpg" alt="">
                                </div>
                                <div class="blog_commenter_text">
                                    <div class="blog_commenter_name">
                                        <h5>David Warner</h5>
                                        <a href="#">APRIL 24, 2019 AT 10:59 AM</a>
                                    </div>
                                    <div class="blog_commenter_massage">
                                        <p class="paragraph">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                    </div>
                                    <div class="blog_commenter_btn">
                                        <a href="#" class="btn_capsule">REPLY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog_submit_comments">
                            <h3 class="sub_title">Leave a Reply</h3>
                            <p class="paragraph">
                                Your email address will not be published. Required fields are marked <span>*</span></p>
                            <form action="#">
                                <div class="horizontal_input">
                                    <div class="commenter_name_input">
                                        <input type="text" placeholder="Your Name *">
                                    </div>
                                    <div class="commenter_email_input">
                                        <input type="email" placeholder="Your Email *">
                                    </div>
                                </div>
                                <input type="text" placeholder="Your Website">
                                <textarea name="#" id="#" placeholder="Your Commetn..."></textarea>
                                <div class="commenter_checkbox">
                                    <div class="checkbox_bd">
                                        <input type="checkbox" name="#" id="comments">
                                    </div>
                                    <div class="label_bd mb-3">
                                        <label for="comments" class="paragraph">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="blog_comments_submit">
                                    <button class="btn_red" type="submit">POST A COMMENT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="blog_sidebar">
                    <div class="bolg_sidebar_search">
                        <h4 class="blog_titles">Search
                            <div class="red_border"></div>
                        </h4>
                        <div class="serach_bar search1">
                            <form action="#">
                                <input class="search" type="search" name="#" id="#" placeholder="Search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </form>
                        </div>
                    </div>
                    <div class="bolg_sidebar_posts">
                        <h4 class="blog_titles">Popular Posts
                            <div class="red_border"></div>
                        </h4>
                        <div class="sidebar_post_inner">
                            <div class="sidebar_post_image">
                                <a href="#"><img src="img/course photo/img1-r.jpg" alt=""></a>
                            </div>
                            <div class="sidebar_post_text">
                                <p>JUNE 10, 2021</p>
                                <a href="#">
                                    <h4 class="blog_post_title">Ultimate Bali Guide + Where to stay in Bali 2021</h4>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar_post_inner">
                            <div class="sidebar_post_image">
                                <a href="#"><img src="img/course photo/img2.20a28e7f.jpg" alt=""></a>
                            </div>
                            <div class="sidebar_post_text">
                                <p>JUNE 10, 2021</p>
                                <a href="#">
                                    <h4 class="blog_post_title">Ultimate Bali Guide + Where to stay in Bali 2021</h4>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar_post_inner">
                            <div class="sidebar_post_image">
                                <a href="#"><img src="img/course photo/img4.cf60a458.jpg" alt=""></a>
                            </div>
                            <div class="sidebar_post_text">
                                <p>JUNE 10, 2021</p>
                                <a href="#">
                                    <h4 class="blog_post_title">Ultimate Bali Guide + Where to stay in Bali 2021</h4>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    <br><br>
                    <div class="bolg_sidebar_categories">
                        <h4 class="blog_titles">Categories
                            <div class="red_border"></div>
                        </h4>
                        <div class="sidebar_category_list">
                            <ul>
                                @foreach ($data1 as $data1)
                                <li><a href="{{ url('cat-blog/'.$data1->id) }}">{{ $data1->catagory }}</a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    {{-- <div class="bolg_sidebar_tags">
                        <h4 class="blog_titles">Popular Tags
                            <div class="red_border"></div>
                        </h4>
                        <div class="sidebar_tags_inner">
                            <a href="#">Business <span>(03)</span></a>
                            <a href="#">Design  <span>(05)</span></a>
                            <a href="#">Fashion <span>(08)</span></a>
                            <a href="#">Braik <span>(02)</span></a>
                            <a href="#">Travel <span>(09)</span></a>
                            <a href="#">Marketing <span>(03)</span></a>
                            <a href="#">Tips <span>(01)</span></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>



     <!------------------------- Footer Section --------------------------------->
   @include('pages/frontend/footer')