<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use Verta;
use Auth;
use App\User;
use DB;
class CommentController extends Controller
{
    

    public function store(Request $request ){


  $v=new Verta();

  $text=$request->text;
  $subject=$request->subject;
  $size=$request->size;
  $product_id=$request->id;

$comment=new comment();
$comment->status=0;
$comment->name=$subject;
$comment->product_id=$product_id;
$comment->text=$text;
$comment->parent_id=0;
$comment->user_id=Auth::user()->id;
$comment->size=$size;
$comment->date=$v->formatJalaliDate();

if ($comment->save()) {
	return $comment;
}

    }



		public function send(Request $request){


  $v=new Verta();

  $user_id=$request->id;
  $comment=$request->comment;
  $parent_id=$request->parent_id;
  $product_id=$request->products;

$comments=new comment();
$comments->status=0;
$comments->product_id=$product_id;
$comments->text=$comment;
$comments->parent_id=$parent_id;
$comments->user_id=$user_id;
$comments->date=$v->formatJalaliDate();

if ($comments->save()) {
	return $comments;
}


		}
    public function show(){


    	$comment=comment::orderby('id','desc')->paginate(10);
    	return view('admin.comment.index',['comment'=>$comment]);
    }

    public function fetch(){
    	return comment::all();
    }


    public function approvedcomment(Request $request){

		$id=$request->id;


		 $status =comment::find($id)->status  ;


		if ($status==1) {
			

			$comment=comment::where('id',$id)->where('status',$status)->update(['status'=>0]);


		}else if($status==0){

			$comment=comment::where('id',$id)->where('status',$status)->update(['status'=>1]);

		}

     return $comment;
    }




    public function deletecomment(Request $request){

    	$comment=comment::find($request->id)->delete();



    	if($comment){


    		return 'true';
    	}
    }



    public function getcomment(){

     $comment=DB::table('comments as t1')->where('t1.status','0')->selectRaw("t1.*,t2.*")

     ->join("users AS t2" ,"t2.id","=","t1.user_id")->get();



     return $comment;
    }



    public function getorders(){

     $orders=DB::table('orders as t1')->where('t1.status','1')->selectRaw("t1.*,t2.*")

     ->join("users AS t2" ,"t2.id","=","t1.user_id")->get();



     return $orders;
    }



}

