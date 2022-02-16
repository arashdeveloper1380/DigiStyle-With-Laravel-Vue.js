<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
use App\product;
use App\category;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $category = category::where('parent_id',0)->get();

        return view('admin.brand.index',['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand=brand::orderby('id','desc')->paginate(10);
    
    return view('admin.brand.show',['brand'=>$brand]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $name=$request->brandName;
       $country=$request->brandcountry;
       $image=$request->image;
       $categoryid=$request->categoryid;
         $product=product::latest()->first();

       $brand=new brand();

       $brand->name=$name;
       $brand->country=$country;
       $brand->image=$image;
      
       $brand->category_id=$categoryid;


       if ($brand->save()) {
           
        $product=product::latest()->first();

        $product->brands()->attach($brand->id);

        return $brand;

       }

    }


    public function uploadimage(Request $request){

        $file=$request->file('file');
       $filename=time().$file->getClientOriginalName();
       $file->move('imagebrand',$filename);

       return  $filename;

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
    public function destroy($id)
    {
   $brand=brand::find($id)->delete();


   if ($brand) {
   return 'true';
   }
    }
}
