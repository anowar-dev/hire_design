@extends('pages.layouts.master')


@section('title', 'Course Info - Edit')


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
                <div class="row">
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course Info</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="/course-info/edit/update/{{ $courseInfo['id'] }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="courseTitle">Course Title</label>
                                        <input type="text" class="form-control" id="courseTitle" name="courseTitle"
                                            placeholder="courseTitle" value="{{ $courseInfo->course_title }}">
                                    </div>
                                <div class="form-group">
                                    <label for="courseTitle">Course Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" aria-label="Default select example" style="color: black"
                                            name="courseCategory" id="courseCategory">
                                            <option selected value="">Select Course Category</option>
                                            @foreach ($courseCateg as $categ)
                                            <option value="{{ $categ->id }}" @if ($categ->id == $courseInfo->course_category_id) selected @endif>{{ $categ->course_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="courseImage">Course Image</label>
                                    <input type="file" name="courseImage" id="courseImage" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="courseDocument">Course Document</label>
                                    <input type="file" name="courseDocument" id="courseDocument" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="courseDuration">Course Duration</label>
                                    <input type="text" class="form-control" id="courseDuration" name="courseDuration"
                                        placeholder="courseDuration" value="{{ $courseInfo->course_duration }}">
                                </div>
                                <div class="form-group">
                                    <label for="coursefee">Course Fee</label>
                                    <input type="text" class="form-control" id="coursefee" name="coursefee"
                                        placeholder="Course Fee" value="{{ $courseInfo->course_fee }}">
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3" for="courseDescription">Course Description<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="ckeditor form-control" id="courseDescription" placeholder="Write Your Post"
                                            name="courseDescription" rows="17" cols="70">{{ $courseInfo->course_description }}</textarea>
                                    </div>
                                </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                        </div>
                    </div>
                    {{-- <div>
                        <table class="table table-striped">Course-Category Table
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Title</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($courseInfo as $key => $course)
                              <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $course->course_title }}</td>
                                <td><a href="{{ url('/course-info/edit/view', $course['id']) }}"
                                    class="edit btn btn-primary" type="button"
                                    data-id="{{ $course->id }}">Edit</a>
                                    <a href="{{ url('/course-info/delete', $course['id']) }}" class="delete btn btn-danger"
                                    type="button" data-id="{{ $course->id }}" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div> --}}
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
@endsection

@push('js')
@endpush
