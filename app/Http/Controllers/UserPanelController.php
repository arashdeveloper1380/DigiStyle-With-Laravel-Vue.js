<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\company;
use App\listproduct;
use App\product;
class UserPanelController extends Controller
{
  

	public function editprofile(Request $request){

	 	$Dateofbirth =$request->year .'/'. $request->month .'/' .$request->day;

		$user_id=Auth::user()->id;

		$user=User::where('id',$user_id)->update([

		'name'=>$request->fname,

		'lname'=>$request->lname,

		'NationalCode'=>$request->NationalCode,

		'mobile'=>$request->mobile,
		'phone'=>$request->phones,

		'Dateofbirth'=>$Dateofbirth,

		'gender'=>$request->gender,
		'state'=>$request->states,
		'city'=>$request->city,
		'banknumber'=>$request->banknumber,

 	 




		]);


		

		if ($request->addsazmani) {
		

			$com=company::where('user_id',$user_id)->first()->get();


			if ($com) {
				

		$user=company::where('user_id',$user_id)->update([

		'name'=>$request->namesazmani,

		'code'=>$request->code,

		'nationalcode'=>$request->nationalcode,

		'number'=>$request->number,
		'phone'=>$request->phone,

		'state'=>$request->statesazmani,

		'city'=>$request->citysazmani,
		
		'user_id'=>$user_id,
		

 	 




		]);



			}else{
				$company=new company();

				$company->name=$request->namesazmani;
				$company->code=$request->code;
				$company->nationalcode=$request->nationalcode;
				$company->number=$request->number;
				$company->phone=$request->phone;
				$company->state=$request->statesazmani;
				$company->city=$request->citysazmani;
				$company->user_id=$user_id;
				$company->save();
			}

				


		}

		
	return redirect('/updateprofile');
		
	

	}


	public function addlist(Request $request){

		$user_id=Auth::user()->id;
		$list=new listproduct();

		$list->product_id=$request->id;
		$list->size=$request->size;
		$list->user_id=$user_id;

$lists=listproduct::where('product_id',$request->id)->where('user_id',$user_id)->first();

	if ($lists) {

	return 'no';

	

		}else{


	if($list->save()){

			
			return $list;
			
				



			}

			
		}

		

	}



	public function deletelist(Request $request){

		$list=listproduct::find($request->id)->delete();

			if ($list) {

			return 'true';

			}
	}


	public function search(Request $request){



		if ($request->name) {
			# code...
	
$result='';
		 	$product=product::where('name','LIKE','%'.$request->name.'%')->get();

		 	foreach ($product as $key => $products) {
		 		

$result.=' <br/>  <a href="/singleproduct/'.$products->id.'/'.$products->category_id.'"><span class="search_name">'.$products->name.' </span> </a>';

		 	}

		 return $result;

			
	}else{

		return '<span style="color:red;">نتیجه ای یافت نشد !!!</span>';
	}




	}

}
