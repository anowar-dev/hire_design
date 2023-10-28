 <section class="footer">
        <div class="container">
            <div class="footer_main">
                <!-- Animations -->
                <div class="footer_left_animation"></div>
                <div class="footer_middle_animation"></div>
                <div class="footer_right_animation"></div>
                <!-- General Content -->
                <div class="footer_top">
                    <div class="footer_top_about">
                        <div class="footer_logo">
                            <a href="{{url('/')}}"><img src="{{ asset('frontend/img/background/Innovation4.png')}}" alt=""></a>
                        </div>
                        <div class="footer_paragraph">
                            <p>Working to bring significant changes in online-based learning by doing extensive research for course curriculum preparation, student engagements, and looking forward to the flexible education!</p>
                        </div>
                        <div class="footer_social social">
                            <div class="facebook social_inner">
                                <a href="https://web.facebook.com/profile.php?id=100090066431203" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                            <div class="youtube social_inner">
                                <a href="#"><i class="https://www.youtube.com/@InnovativeSkillsBD" target="_blank"></i></a>
                            </div>
                            <div class="linkedin social_inner">
                                <a href="https://www.linkedin.com/in/salman-md-sultan-88b70a104/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_top_explore">
                        <h4>Explore</h4>
                        <h6><a href="{{ url('/') }}">Home</a></h6>
                        <h6><a href="{{ url('about') }}">About</a></h6>
                        <h6><a href="https://innovativeskillsbd.com/course/4">Courses</a></h6>
                        <h6><a href="{{ url('contact') }}">Contact</a></h6>
                    </div>
                    <div class="footer_top_resource">
                        <h4>Resources</h4>
                        <h6><a href="https://www.facebook.com/groups/138976912425295" target="_blank">Freelancing Support</a></h6>
                        <h6><a href="https://www.facebook.com/groups/138976912425295" target="_blank">Job Guidance Support</a></h6>
                        <h6><a href="https://www.facebook.com/groups/138976912425295" target="_blank">Active Learners</a></h6>
                        <h6><a href="https://www.facebook.com/groups/138976912425295" target="_blank">Expert Trainers</a></h6>
                    </div>
                    <div class="footer_top_address">
                        <h4>Address</h4>
                        <div class="address_location address_inner">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>693, West Shewrapara, Mirpur - 1216</h6>
                        </div>
                        <div class="address_mobile address_inner">
                            <i class="fa-solid fa-phone-volume"></i>
                            <h6><a href="tel: +88 (017) 05 644008">01705644008</a></h6>
                        </div>
                        <div class="address_email address_inner">
                            <i class="fa-solid fa-envelope"></i>
                            <h6><a href="mailto: innovativeskillsbd@gmail.com">innovativeskillsbd@gmail.com</a></h6>
                        </div>
                        <!--<div class="address_fax address_inner">-->
                        <!--    <i class="fa-solid fa-fax"></i>-->
                        <!--    <h6><a href="tel: +55 785 4578964">+55 785 4578964</a></h6>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="powredby">
                        <p> © 2023 The website developed by <a href="{{ url('/') }}">Innovative Skills</a></p>
                    </div>
                    <div class="privecy">
                        <a href="{{ url('privacy/') }}">Privacy Policy</a>
                        <p>|</p>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="back-top" onclick="topFunction()" id="topBtn">
        <a href="#" class="top"><i class="fa-solid fa-chevron-up"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!----------- jQuery js ------------>
    <script src="{{ asset('frontend/assets/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    
    <!------ Owl Carousel ------->
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <!---------- Slick Slider ----------->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <!---------- Custom JS ---------------->
    <script src="{{ asset('frontend/assets/js/index.js') }}"></script>



</html>