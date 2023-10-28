<?php

namespace App\Http\Controllers;

use App\Models\courseCategoryModel;
use App\Models\CourseContentModel;
use App\Models\courseInfoModel;
use App\Models\home_fast;
use App\Models\home_forth;
use App\Models\home_second;
use App\Models\home_third;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\about_second;

class home extends Controller
{

    // frontend


    public function show(){
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        $data1 = home_fast::latest()->take(1)->get();
        $data2 = home_second::latest()->take(1)->get();
        $data3 = home_third::latest()->take(4)->get();
        $data4 = home_forth::latest()->take(1)->get();
        $data5 = courseInfoModel::with('CourseContentModel')->latest()->take(2)->get();
        $data6 = courseInfoModel::with('CourseContentModel')->get();
        $data7 = blog::with('blog_cat')->latest()->take(3)->get();
        $data8 = about_second::get();

        // dd($data6);
        return view('pages.frontend.home',compact(['dt','dt1','data1','data2','data3','data4','data5','data6','data7','data8']));
    }









    // backend


   public function home_fast(){
    $data2 = home_fast::latest()->take(1)->get();
    return view('pages.backend.home_fast.home_fast',compact(['data2']));
   }

   public function home_fast_submit(Request $request){
        $data1 = new home_fast();
        $data1->title = $request->input('title');
        $data1->dis= $request->input('dis');
        $data1->save();
        return redirect('home-fast')->with('submit', 'Data submit');
   }

   public function home_fast_edit($id){
        $data3 = home_fast::find($id);
        return view('pages.backend.home_fast.home_fast_edit',compact(['data3']));
   }

   public function home_fast_update(Request $request, $id){
    $data4 = home_fast::find($id);
    $data4->title = $request->input('title');
    $data4->dis= $request->input('dis');
    $data4->save();
    return redirect('home-fast')->with('update', 'Data update');
   }


   public function home_second(){
    $data6= home_second::latest()->take(1)->get();
    return view('pages.backend.home_second.home_second',compact(['data6']));
   }

   public function home_second_submit(Request $request){
    $data5 = new home_second();
    $data5->title = $request->input('title');
    $data5->dis= $request->input('dis');
    $data5->save();
    return redirect('home-second')->with('submit', 'Data submit');
   }

   public function home_second_edit($id){
    $data7= home_second::find($id);
    return view('pages.backend.home_second.home_second_edit',compact(['data7']));
   }

   public function home_second_update(Request $request, $id){
    $data8 = home_second::find($id);
    $data8->title = $request->input('title');
    $data8->dis= $request->input('dis');
    $data8->save();
    return redirect('home-second')->with('update', 'Data update');
   }

   public function home_third(){
    $data10 = home_third::latest()->take(4)->get();
    return view('pages.backend.home_third.home_third',compact(['data10']));
   }

    public function home_third_submit(Request $request){
        $data9 = new home_third();
        $data9->title = $request->input('title');
        $data9->dis= $request->input('dis');
        $data9->save();
        return redirect('home-third')->with('submit', 'Data submit');
    }

    public function home_third_edit($id){
        $data11= home_third::find($id);
        return view('pages.backend.home_third.home_third_edit',compact(['data11']));
    }
    public function home_third_update(Request $request, $id){
        $data12 = home_third::find($id);
        $data12->title = $request->input('title');
        $data12->dis= $request->input('dis');
        $data12->save();
        return redirect('home-third')->with('update', 'Data update');
    }

    public function home_forth(){
        $data14 = home_forth::latest()->take(1)->get();
        return view('pages.backend.home_forth.home_forth',compact(['data14']));
    }


    public function home_forth_submit(Request $request){
        $data13 = new home_forth();

        $data13->iframe= $request->input('iframe');
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data13->image = $imageName;
        $data13->save();
        return redirect('home-forth')->with('submit', 'Data submit');
    }


    public function home_forth_delete($id){
        $data15 = home_forth::find($id);
        $data15->delete();
        return redirect('home-forth');

    }

}
