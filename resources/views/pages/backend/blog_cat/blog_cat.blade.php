@extends('pages.layouts.master')


@section('title', 'Course Batch')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">



                    <li class="nav-item">
                        <i class="mdi mdi-file-document-box-outline menu-icon costom2"></i>
                        <span class="menu-title costom1">Home</span>

                    <div class="dropdown-content">
                    <a href="{{ url('/home-fast') }}">Home 1st section</a>
                    <a href="{{ url('/home-second') }}">Home 2nd section</a>
                    <a href="{{ url('/home-third') }}">Home 3rd section</a>
                    <a href="{{ url('/home-forth') }}">Home 4th section</a>

                    </div>
                    </li>



                    <li class="nav-item">
                        <i class="mdi mdi-file-document-box-outline menu-icon costom2"></i>
                        <span class="menu-title costom1">About</span>

                    <div class="dropdown-content">
                    <a href="{{ url('/about-fast') }}">About 1st section</a>
                    <a href="{{ url('/about-second') }}">About 2nd section</a>



                    </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog-cat-add') }}">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Blog Category</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog-add') }}">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Blog</span>
                        </a>
                    </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin-home-page') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact-form-data') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Contact form Data</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/course-category/view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Course Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/course-info/view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Course Info</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/course-content/view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Course Content</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/course-batch/view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Course Batch</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/student-admit/view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Student Admission</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/assign-batch/view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Assign Batch</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/enroll-view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Enrolled Student</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/custom-auth-user/view') }}">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">All User</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session('submit'))
                <div class="alert alert-success">
                  {{ session('submit') }}
                </div>
                @endif

                @if (session('update'))
                <div class="alert alert-success">
                  {{ session('update') }}
                </div>
                @endif

                <form action="{{ url('/blog-cat-submit') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="Catagory">Blog Catagory</label>
                      <input type="text" name="catagory" class="form-control" id="Catagory" aria-describedby="emailHelp" placeholder="Enter Catagory">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->

            <h2>view data</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Catagory</th>


                    <th scope="col">Action</th>

                  </tr>
                </thead>

                <tbody>
                    @foreach ($data1 as $data1)
                    <tr>
                      <th>{{ $data1->id }}</th>
                      <td>{{ $data1->catagory }}</td>


                      <td><a class="btn btn-warning" href="blog-cat-delete/{{ $data1->id }}">Delete</a></td>

                    </tr>
                    @endforeach
                  </tbody>


              </table>

        </div>
        <!-- main-panel ends -->
    </div>
@endsection

@push('js')
@endpush
