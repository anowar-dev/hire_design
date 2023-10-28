<?php

namespace App\Http\Controllers;

use App\Models\about_fast;
use App\Models\home_forth;
use App\Models\home_third;
use App\Models\about_second;
use Illuminate\Http\Request;
use App\Models\courseCategoryModel;

class about extends Controller
{


    public function show_about(){
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        $data= about_fast::latest()->take(1)->get();
        $data1 = home_forth::latest()->take(1)->get();
        $data2= home_third::latest()->take(4)->get();
        return view('pages.frontend.about',compact(['data','data1','data2','dt','dt1']));
    }




    public function about_fast(){
        $data1 = about_fast::get();
        return view('pages.backend.about_fast.about_fast',compact(['data1']));
    }

    public function about_fast_submit(Request $request){
        $data= new about_fast();
        $data->title = $request->input('title');
        $data->dis = $request->input('dis');
        $data->save();
        return redirect('about-fast')->with('submit', 'Data submit');
    }

    public function about_fast_edit($id){
        $data2 = about_fast::find($id);
        return view('pages.backend.about_fast.about_fast_edit',compact(['data2']));
    }

    public function about_fast_update(Request $request, $id){
        $data3 = about_fast::find($id);
        $data3->title = $request->input('title');
        $data3->dis = $request->input('dis');
        $data3->save();
        return redirect('about-fast')->with('update', 'Data update');
    }



    public function about_second(){
        $data5= about_second::get();
        return view('pages.backend.about_second.about_second',compact(['data5']));
    }

    public function about_second_submit(Request $request){
        $data4= new about_second();
        $data4->name = $request->input('name');
        $data4->position = $request->input('position');
        $data4->dis = $request->input('dis');
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data4->image = $imageName;
        $data4->facebook = $request->input('facebook');
        $data4->twitter= $request->input('twitter');
        $data4->save();
        return redirect('about-second')->with('submit', 'Data submit');

    }


    public function about_second_edit($id){
        $data6=about_second::find($id);
        return view('pages.backend.about_second.about_second_edit',compact(['data6']));
    }

    public function about_second_update(Request $request ,$id){
        $data7 = about_second::find($id);
        $data7->name = $request->input('name');
        $data7->position = $request->input('position');
        $data7->dis = $request->input('dis');
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data7->image = $imageName;
        $data7->facebook = $request->input('facebook');
        $data7->twitter= $request->input('twitter');
        $data7->save();
        return redirect('about-second')->with('submit', 'Data update');
    }

    public function about_second_delete($id){
        $data9= about_second::find($id);
        $data9->delete();
        return redirect('about-second')->with('submit', 'Data delete');

    }
}
