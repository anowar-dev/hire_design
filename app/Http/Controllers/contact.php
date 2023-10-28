<?php

namespace App\Http\Controllers;

use App\Models\contactform;
use Illuminate\Http\Request;
use App\Models\courseCategoryModel;

class contact extends Controller
{
    public function contact_form_data_view(){
        $data2 = contactform::get();
        return view('pages.backend.contactform.contact_form_data_show',compact(['data2']));
    }

    public function contact_form_data_submit(Request $request){
        $data= new contactform();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->number= $request->input('number');
        $data->massage= $request->input('massage');
        $data->save();
        return redirect()->back()->with('submit', 'Massage Send');


    }

    public function contact_form_data_delete($id){
        $data1 = contactform::find($id);
        $data1->delete();
        return redirect()->back();
    }


    public function show(){
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        return view('pages.frontend.contact',compact(['dt','dt1']));
    }
}
