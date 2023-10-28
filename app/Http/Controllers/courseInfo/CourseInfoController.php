<?php

namespace App\Http\Controllers\courseInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courseCategoryModel;
use App\Models\CourseContentModel;
use App\Models\courseInfoModel;
use App\Models\CustomAuthModel;
use App\Models\enroll;
use Illuminate\Support\Facades\Session;

class CourseInfoController extends Controller
{
    //frontend

    public function show($id){
        // $data2 = courseCategoryModel::find($id);
        $data1 = courseInfoModel::where('course_category_id', '=', $id)->get();
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        // $data2 = CourseContentModel::where('course_title_id', '=', 2)->count();
        return view('pages.frontend.course',compact(['data1','dt','dt1']));
        // dd($data1);
    }

    public function course_single($id){
        $item1 = courseInfoModel::find($id);
        $item2 = CourseContentModel::where('course_title_id', '=', $item1->id)->get();
        $item3 = CourseContentModel::where('course_title_id', '=', $item1->id)->count();
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        return view('pages.frontend.course_single',compact(['item1','item2','item3','dt','dt1']));
        // dd($item2);
    }








// backend
    public function courseInfoPageView()
    {
        $courseCateg = courseCategoryModel::all();
        $courseInfo = courseInfoModel::all();
        $userId = Session::get('userid');

        if($userId == 1)
        {
            return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));
        }

        return redirect('/');
    }

    public function courseInfoPageCreate(Request $req)
    {
        $courseInfo = new courseInfoModel;

        $courseInfo->course_title = $req->courseTitle;
        $courseInfo->course_category_id = $req->courseCategory;
        $courseInfo->course_fee = $req->coursefee;

        $path = '';
        if ($req->hasFile('courseImage')) {
            // $file = $req->file('courseImage');
            // $filename = $file->getClientOriginalName();
            // $folder = $courseInfo->course_title;
            // $path = $req->file('courseImage')->storeAs($folder, $filename, 'public');
            $imageName = time().'.'.$req->file('courseImage')->getClientOriginalName();
            $req->file('courseImage')->move(public_path('/images'), $imageName);
        }
        $courseInfo->course_image = $imageName;

        $path = '';
        if ($req->hasFile('courseDocument')) {
            $file = $req->file('courseDocument');
            $filename = $file->getClientOriginalName();
            $folder = $courseInfo->course_title;
            $path = $req->file('courseDocument')->storeAs($folder, $filename, 'public');
        }
        $courseInfo->course_document = '/storage/'.$path;
        $courseInfo->course_duration = $req->courseDuration;
        $courseInfo->course_description = $req->courseDescription;

        $courseInfo->save();

        return redirect('/course-info/view');
    }


    public function courseInfoPageEditView($id)
    {
        $courseCateg = courseCategoryModel::all();
        $courseInfo = courseInfoModel::findOrFail($id);

        $userId = Session::get('userid');

        if($userId == 1)
        {
            return view('pages.backend.courseInfo.edit', compact('courseCateg', 'courseInfo'));
        }

        return redirect('/');

    }

    public function courseInfoPageEditUpdate(Request $req, $id)
    {
        $courseInfo = courseInfoModel::findOrFail($id);

        $courseInfo->course_title = $req->courseTitle;
        $courseInfo->course_category_id = $req->courseCategory;
        $courseInfo->course_fee = $req->coursefee;

        $path = '';
        if ($req->hasFile('courseImage')) {
            // $file = $req->file('courseImage');
            // $filename = $file->getClientOriginalName();
            // $folder = $courseInfo->course_title;
            // $path = $req->file('courseImage')->storeAs($folder, $filename, 'public');
            $imageName = time().'.'.$req->file('courseImage')->getClientOriginalName();
            $req->file('courseImage')->move(public_path('/images'), $imageName);
        }
        $courseInfo->course_image = $imageName;

        $path = '';
        if ($req->hasFile('courseDocument')) {
            $file = $req->file('courseDocument');
            $filename = $file->getClientOriginalName();
            $folder = $courseInfo->course_title;
            $path = $req->file('courseDocument')->storeAs($folder, $filename, 'public');
        }
        $courseInfo->course_document = '/storage/'.$path;
        $courseInfo->course_duration = $req->courseDuration;
        $courseInfo->course_description = $req->courseDescription;

        $courseInfo->save();

        return redirect('/course-info/view');
    }

    public function courseInfoPageDelete($id)
    {
        $courseInfo = courseInfoModel::findOrFail($id);

        $courseInfo->delete();

        return redirect('/course-info/view');
    }


}
