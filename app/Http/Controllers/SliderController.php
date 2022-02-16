<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bannerimage;
use App\brand;
use App\category;
use App\slide;
use App\banner;
class SliderController extends Controller
{

     public function uploadimage(){

        $brands=brand::all();
        $category=category::where('parent_id',0)->get();
        return view('admin.slide.index',['brands'=>$brands ,'category'=>$category]);
    }




    public function upload(Request $request){


      $file=$request->file('file');
       $filename=time().$file->getClientOriginalName();
       $file->move('slider',$filename);


       $slide=new slide();
       $slide->image=$filename;
       $slide->category_id=$request->category_id;
       $slide->brand_id=$request->brand_id;
       $slide->name=$request->name;
       $slide->text=$request->text;

       if ($slide->save()) {
        return $slide;
       }
    }


    public function uploadbanner(Request $request){

       $file=$request->file('file');
       $filename=time().$file->getClientOriginalName();
       $file->move('banner',$filename);


       $banner=new banner();
       $banner->image=$filename;
       $banner->category_id=$request->category_id1;
    
       if ($banner->save()) {
        return $banner;
       }

    }
}