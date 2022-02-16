<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\parents;
use Session;
use helpers;
class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $categorys=category::all();
        return view('admin.category.create',['categorys'=>$categorys]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $parent_id=$request->id;
    $name=$request->name;

    $category=new category();
    $category->name=$name;
    $category->parent_id=$parent_id;

    if ( $category->save()) {
        flash("با موفقیت انجام شد!", "دسته ها ذخیره شدند.");
      
    return  $category;
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

       $id=$request->id;

       $category=category::find($id)->delete();
       
       
return 'true';


    }

    public function Mcategory(Request $request){

      $name=$request->name;

        $parent=new parents();
        $parent->name=$name;

        if ( $parent->save()) {
          
            return  $parent;


        }

    }


    
}
