@include('pages/frontend/header')


    <!-- Content -->
    <!------------------------ Contact Title Section ---------------------------->
    <section class="contact_home_section">
        <div class="container">
            <div class="contact_title">
                <!-- Animations -->
                <div class="contact_star_animate">
                    <img src="img/background/shape8.6bd6914d.svg" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="index.html">Home</a>/  Contact</p>
                </div>
                <div class="auth_title_content">
                    <h3 class="sub_title">Contact</h3>
                </div>
            </div>
        </div>
    </section>

    <!-------------- Contact Details ------------------->
    <section class="contact_body card-body">
       
        <div class="container">
            <div class="contact_main">
                <div class="contact_details">
                    <div class="contact_details_title">
                        <h6 class="small_title">CONTACT DETAILS</h6>
                        <h3 class="sub_title">Get in Touch</h3>
                        <!--<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>-->
                    </div>
                    <div class="contact_details_info">
                        <div class="contact_inner_info">
                            <div class="inner_icon">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                            </div>
                            <div class="inner_text">
                                <h3>Our Address</h3>
                                <p>693, West Shewrapara, Mirpur - 1216</p>
                            </div>
                        </div>
                        <div class="contact_inner_info middle">
                            <div class="inner_icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="inner_text">
                                <h3>Contact</h3>
                                <p>Mobile: <a href="tel: +88 (017) 05 644008">01705644008</a></p>
                                <p>Mail: <a href="mailto: innovativeskillsbd@gmail.com">innovativeskillsbd@gmail.com</a></p>
                            </div>
                        </div>
                        <!--<div class="contact_inner_info">-->
                        <!--    <div class="inner_icon">-->
                        <!--        <i class="fa-solid fa-light fa-clock"></i>-->
                        <!--    </div>-->
                        <!--    <div class="inner_text">-->
                        <!--        <h3>Hours of Operation</h3>-->
                        <!--        <p>Monday - Friday: 09:00 - 20:00</p>-->
                        <!--        <p>Sunday & Saturday: 10:30 - 22:00</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="contact_form">
                     @if (session('submit'))
                    <div class="alert alert-primary text-center fw-bold">
                         {{ session('submit') }}
                    </div>
                    @endif
                    <h2>Ready to Get Started?</h2>
                    <p>Your email address will not be published. Required fields are marked *</p>

                    <form action="{{ url('/contact-form-data-submit') }}" method="POST">
                        @csrf
                        <input type="text" name="name" id="#" placeholder="Your Name" required>
                        <input type="email" name="email" id="#" placeholder="Your Email Address" required>
                        <input type="text" name="number" id="#" placeholder="Your Number" required>
                        <textarea name="massage" id="massage" placeholder="Your Massage" required></textarea>
                        <input class="contactMassageSend" type="submit" value="Send Massage">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!------------ Google map --------------->
    <section class="google_map">
        <div class="map">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=mirpur 10&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
        </div>
    </section>


     <!------------------------- Footer Section --------------------------------->
  @include('pages/frontend/footer')