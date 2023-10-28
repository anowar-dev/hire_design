<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blog_cat;
use Illuminate\Http\Request;
use App\Models\blog as ModelsBlog;
use App\Models\courseCategoryModel;

class blogcontroller extends Controller
{
    public function cat_add(){
        $data1= blog_cat::get();
        return view('pages.backend.blog_cat.blog_cat',compact(['data1']));
    }


    public function cat_submit(Request $request){
        $data= new blog_cat();
        $data->catagory = $request->input('catagory');
        $data->save();
        return redirect('blog-cat-add')->with('submit', 'Data submit');
    }

    public function cat_delete($id){
        $data2= blog_cat::find($id);
        $data2->delete();
        return redirect('blog-cat-add')->with('update', 'Data update');
    }

    public function blog_add(){
        $data3 = blog_cat::get();
        $data5 = blog::get();
        return view('pages.backend.blog.blog_add',compact(['data3','data5']));
    }

    public function blog_submit(Request $request){
        $data4 = new blog();
        $data4->title = $request->input('title');
        $data4->dis = $request->input('dis');
        $data4->blog_cat_id = $request->input('catagory_id');
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data4->image = $imageName;
        // dd($data4);
        $data4->save();
        return redirect('blog-add')->with('submit', 'Data submit');
    }

    public function blog_edit( $id){
        $data6= blog::find($id);
        $data7 = blog_cat::get();
        return view('pages.backend.blog.blog_edit',compact(['data6','data7']));

    }

    public function blog_update(Request $request, $id ){
        $data8 = blog::find($id);
        $data8->title = $request->input('title');
        $data8->dis = $request->input('dis');
        $data8->blog_cat_id = $request->input('catagory_id');
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data8->image = $imageName;
        // dd($data4);
        $data8->save();
        return redirect('blog-add')->with('update', 'Data update');
    }

    public function blog_delete($id){
        $data9 = blog::find($id);
        $data9->delete();
        return redirect('blog-add')->with('update', 'Data delete');
    }




    // frontend

    public function show(){
        // $data = blog_cat::get();
        // $data2 = blog::where('blog_cat_id','=',$data->id)->get();
        $data1 = blog::with('blog_cat')->get();
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        // $data = blog_cat::where('id','=',$data1->blog_cat_id)->get();
        return view('pages.frontend.blog',compact(['data1','dt','dt1']));
    }

    public function blog_single($id){
        $data= blog::with('blog_cat')->find($id);
        $data1= blog_cat::get();
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        return view('pages.frontend.blog_single',compact(['data','data1','dt','dt1']));
    }

    public function cat_blog($id){
        $data1= blog::where('blog_cat_id','=',$id)->get();
        $dt= courseCategoryModel::has('courseinfoModel')->get();
        $dt1= courseCategoryModel::get();
        return view('pages.frontend.cat_blog',compact(['data1','dt','dt1']));
    }
}
