@include('pages/frontend/header')


    <!------------------------- Authenticatio Section ---------------------->
    <section class="auth__title_section">
        <div class="container">
            <div class="auth_title">
                <!-- Animations -->
                <div class="auth_stra_animate">
                    <img src="{{ asset('frontend/img/background/shape8.6bd6914d.svg') }}" alt="">
                </div>
                <!-- General Cpntent -->
                <div class="auth_title_home">
                    <p><a class="auth_home" href="index.html">Home</a>/  Welcome to Enroll</p>
                </div>
                <div class="auth_title_content">
                    <h3 class="sub_title">Course Enroll</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- Course body --}}
    <section class="auth_body_section enrollSection">
          @if (session('submit'))
                <div class="alert alert-success">
                  {{ session('submit') }}
                </div>
                @endif
        <div class="container">
            <div class="auth_body">
                <!-- Animations -->
                <div class="animation_red_borders">
                    <img src="{{asset('frontend/img/background/border-round.png')}}" alt="Animation">
                </div>
                <div class="animation_yellow">
                    <img src="{{asset('frontend/img/background/Yellow-round.png')}}" alt="Animation">
                </div>
                <!-- main content -->
                <div class="auth_body_main">
                    <div class="register courseSubmit">
                      <form class="enrollForm" action="{{url('enrol-sub')}}" method="post">
                        @csrf
                        <h3 class="sub_title">Admission Booking Form</h3>
                        <p>Course</p>
                        <input type="text" name="course" value="{{ $item1->course_title }}" readonly>
                        <p>Name</p>
                         <input type="text" name="name" id="name" placeholder="Name" required>
                        <p>Email</p>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <p>Number</p>
                        <input type="text"  name="number" id="number" placeholder="Number" required>

                        <button type="submit" class="btn_red w-100"><h6>Submit</h6><button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <!------------------------- Footer Section --------------------------------->
    @include('pages/frontend/footer')