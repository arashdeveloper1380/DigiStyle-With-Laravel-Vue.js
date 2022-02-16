<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attributegroup;
use App\attribute;
use App\attributeitem;
use App\size;
class atributecontroller extends Controller
{
  


	public function attributegroup(Request $request){

		$id=$request->id;
		$name=$request->name;


		$attributegroup=new attributegroup();

		$attributegroup->name=$name;

		$attributegroup->category_id=$id;

		if ($attributegroup->save()) {
		

			return $attributegroup;


		}

	}




		public function attribute(Request $request){

		$id=$request->id;
		$name=$request->name;


		$attribute=new attribute();

		$attribute->name2=$name;

		$attribute->attributegroup_id=$id;

		if ($attribute->save()) {
		

			return $attribute;


		}

	}



		public function attributeitem(Request $request){

		$id=$request->id;
		$name=$request->name;


		$attributeitem=new attributeitem();

		$attributeitem->name1=$name;

		$attributeitem->attribut_id=$id;

		if ($attributeitem->save()) {
		  

			return $attributeitem;


		}

	}


	public function size(Request $request){

		$id=$request->id;
		$name=$request->name;


		$size=new size();

		$size->size=$name;

		$size->attributgroup_id=$id;

		if ($size->save()) {
		

			return $size;


		}

	}

}
