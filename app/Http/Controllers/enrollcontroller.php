<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enroll;
use App\Models\courseInfoModel;
use App\Models\courseCategoryModel;

class enrollcontroller extends Controller
{
    public function enrol_sub(Request $request){
        $data = new enroll();
        $data->course = $request->input('course');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->number = $request->input('number');
        $data->addres = "Empty";
        $data->occupation = "empty";
        $data->save();
        return redirect()->back()->with('submit', 'Your Seat has been Booked Successfully');

     }

    public function enroll_delete($id){
          $data1 = enroll::find($id);
          $data1->delete();
          return redirect('/enroll-view');
          
    }

     public function enroll_view(){
        $data1= enroll::get();
        return view('pages.backend.enroll.enroll',compact(['data1']));
     }
     
     
     public function enroll_view_frontend($id){
          $item1 = courseInfoModel::find($id);
           $dt= courseCategoryModel::has('courseinfoModel')->get();
         $dt1= courseCategoryModel::get();
           return view('pages.frontend.enroll',compact(['item1','dt','dt1']));
     }
}
