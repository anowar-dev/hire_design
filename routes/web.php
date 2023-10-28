<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\file\FileController;
use App\Http\Controllers\courseCategory\CourseCategoryController;
use App\Http\Controllers\courseInfo\CourseInfoController;
use App\Http\Controllers\content\ContentController;
use App\Http\Controllers\courseContent\CourseContentController;
use App\Http\Controllers\courseBatch\CourseBatchController;
use App\Http\Controllers\customAuth\CustomAuthController;
use App\Http\Controllers\studentAdmission\StudentAdmissionController;
use App\Http\Controllers\assignBatch\AssignBatchController;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\home;
use App\Http\Controllers\about;
use App\Http\Controllers\contact;
use App\Http\Controllers\enrollcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('privacy/', function () {
    return view('pages/frontend/privacy_policy');
});
Route::get('/file-up/view', [FileController::class, 'fileUpPageView'])->name('fileUp');
Route::post('file-up/create', [FileController::class, 'fileUpPageCreate']);
Route::get('/file-up/edit/view/{id}', [FileController::class, 'fileUpPageEditView']);
Route::post('/file-up/edit/update/{id}', [FileController::class, 'fileUpPageEditUpdate']);
Route::get('/file-up/delete/{id}', [FileController::class, 'fileUpPageDelete']);


Route::get('/course-category/view', [CourseCategoryController::class, 'courseCategoryPageView']);
Route::post('/course-category/create', [CourseCategoryController::class, 'courseCategoryPageCreate']);
Route::get('/course-category/edit/view/{id}', [CourseCategoryController::class, 'courseCategoryPageEditView']);
Route::post('/course-category/edit/update/{id}', [CourseCategoryController::class, 'courseCategoryPageEditUpdate']);
Route::get('/course-category/delete/{id}', [CourseCategoryController::class, 'courseCategoryPageDelete']);


Route::get('/course-info/view', [CourseInfoController::class, 'courseInfoPageView']);
Route::post('/course-info/create', [CourseInfoController::class, 'courseInfoPageCreate']);
Route::get('/course-info/edit/view/{id}', [CourseInfoController::class, 'courseInfoPageEditView']);
Route::post('/course-info/edit/update/{id}', [CourseInfoController::class, 'courseInfoPageEditUpdate']);
Route::get('/course-info/delete/{id}', [CourseInfoController::class, 'courseInfoPageDelete']);

Route::get('/course-content/view', [CourseContentController::class, 'courseContentPageView']);
Route::post('/course-content/create', [CourseContentController::class, 'courseContentPageCreate']);
Route::get('/course-content/edit/view/{id}', [CourseContentController::class, 'courseContentPageEditView']);
Route::post('/course-content/edit/update/{id}', [CourseContentController::class, 'courseContentPageEditUpdate']);
Route::get('/course-content/delete/{id}', [CourseContentController::class, 'courseContentPageDelete']);

Route::get('/course-batch/view', [CourseBatchController::class, 'courseBatchPageView']);
Route::post('/course-batch/create', [CourseBatchController::class, 'courseBatchPageCreate']);
Route::get('/course-batch/edit/view/{id}', [CourseBatchController::class, 'courseBatchPageEditView']);
Route::post('/course-batch/edit/update/{id}', [CourseBatchController::class, 'courseBatchPageEditUpdate']);
Route::get('/course-batch/delete/{id}', [CourseBatchController::class, 'courseBatchPageDelete']);

Route::get('/student-admit/view', [StudentAdmissionController::class, 'studentAdmissionView']);
Route::post('/student-admit/create', [StudentAdmissionController::class, 'studentAdmissionCreate']);
Route::get('/student-admit/accept/{id}', [StudentAdmissionController::class, 'studentAdmissionAccept']);
Route::get('/student-admit/edit/view/{id}', [StudentAdmissionController::class, 'studentAdmissionEditView']);
Route::post('/student-admit/edit/update/{id}', [StudentAdmissionController::class, 'studentAdmissionEditUpdate']);
Route::get('/student-admit/delete/{id}', [StudentAdmissionController::class, 'studentAdmissionDelete']);

Route::get('/assign-batch/view', [AssignBatchController::class, 'assignBatchPageView']);
Route::post('/assign-batch/create', [AssignBatchController::class, 'assignBatchPageCreate']);

Route::get('/custom-regist/view', [CustomAuthController::class, 'customRegistrationView']);
Route::post('custom-regist/create', [CustomAuthController::class, 'customRegistrationCreate']);
Route::get('/innovativeskills/login', [CustomAuthController::class, 'customLoginView']);
Route::post('custom-login/create', [CustomAuthController::class, 'customLoginCreate']);
Route::post('/custom-logout', [CustomAuthController::class, 'customLogout']);
Route::get('/custom-auth/edit/view/{id}', [CustomAuthController::class, 'customLoginRegistEditView']);
Route::post('/custom-auth/edit/update/{id}', [CustomAuthController::class, 'customLoginRegistEditUpdate']);
Route::get('/custom-auth/delete/{id}', [CustomAuthController::class, 'customLoginRegistDelete']);
Route::get('/custom-auth-user/view', [CustomAuthController::class, 'customUserCredentialInfo']);


Route::get('/home-fast', [home::class, 'home_fast']);
Route::post('/home-fast-submit', [home::class, 'home_fast_submit']);
Route::get('/home-fast-edit/{id}', [home::class, 'home_fast_edit']);
Route::post('/home-fast-update/{id}', [home::class, 'home_fast_update']);


Route::get('/home-second', [home::class, 'home_second']);
Route::post('/home-second-submit', [home::class, 'home_second_submit']);
Route::get('/home-second-edit/{id}', [home::class, 'home_second_edit']);
Route::post('/home-second-update/{id}', [home::class, 'home_second_update']);



Route::get('/home-third', [home::class, 'home_third']);
Route::post('/home-third-submit', [home::class, 'home_third_submit']);
Route::get('/home-third-edit/{id}', [home::class, 'home_third_edit']);
Route::post('/home-third-update/{id}', [home::class, 'home_third_update']);

Route::get('/home-forth', [home::class, 'home_forth']);
Route::post('/home-forth-submit', [home::class, 'home_forth_submit']);
Route::get('/home-forth-delete{id}', [home::class, 'home_forth_delete']);

Route::get('/blog-cat-add', [blogcontroller::class, 'cat_add']);
Route::post('/blog-cat-submit', [blogcontroller::class, 'cat_submit']);
Route::get('/blog-cat-delete/{id}', [blogcontroller::class, 'cat_delete']);


Route::get('/blog-add', [blogcontroller::class, 'blog_add']);
Route::post('/blog-submit', [blogcontroller::class, 'blog_submit']);
Route::get('/blog-edit/{id}', [blogcontroller::class, 'blog_edit']);
Route::post('/blog-update/{id}', [blogcontroller::class, 'blog_update']);
Route::get('/blog-delete/{id}', [blogcontroller::class, 'blog_delete']);

Route::get('/about-fast', [about::class, 'about_fast']);
Route::post('/about-fast-submit', [about::class, 'about_fast_submit']);
Route::get('/about-fast-edit/{id}', [about::class, 'about_fast_edit']);
Route::post('/about-fast-update/{id}', [about::class, 'about_fast_update']);

Route::get('/about-second', [about::class, 'about_second']);
Route::post('/about-second-submit', [about::class, 'about_second_submit']);
Route::get('/about-second-edit/{id}', [about::class, 'about_second_edit']);
Route::post('/about-second-update/{id}', [about::class, 'about_second_update']);
Route::get('/about-second-delete/{id}', [about::class, 'about_second_delete']);

Route::get('/enroll-view', [enrollcontroller::class, 'enroll_view']);
Route::get('/enroll-delete/{id}', [enrollcontroller::class, 'enroll_delete']);

Route::get('/contact-form-data', [contact::class, 'contact_form_data_view']);
Route::post('/contact-form-data-submit', [contact::class, 'contact_form_data_submit']);
Route::get('/contact-form-data-delete/{id}', [contact::class, 'contact_form_data_delete']);





// frontend
Route::get('/', [home::class, 'show']);
Route::get('/course/{id}', [CourseInfoController::class, 'show']);
Route::get('/course-single/{id}', [CourseInfoController::class, 'course_single']);
Route::get('/blog', [blogcontroller::class, 'show']);
Route::get('/blog-single/{id}', [blogcontroller::class, 'blog_single']);
Route::get('/cat-blog/{id}', [blogcontroller::class, 'cat_blog']);

Route::post('/enrol-sub', [enrollcontroller::class, 'enrol_sub']);
Route::get('/about', [about::class, 'show_about']);
Route::get('/enroll/{id}', [enrollcontroller::class, 'enroll_view_frontend']);

Route::get('/contact', [contact::class, 'show']);

