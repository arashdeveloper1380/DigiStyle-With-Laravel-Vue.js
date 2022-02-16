<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Redirect;
use Session;
class UserController extends Controller
{
    
	public function index(){


		return view('admin.user.index');

	}

public function store(Request $request){

	$user=new User();

	$user->name=$request->fname;
	$user->lname=$request->lname;
	$user->roule=$request->roule;
	$user->email=$request->email;
	$user->password=bcrypt($request->password);
	$user->image=$request->image;

	if ($user->save()) {
	
		return  $user; 


	}



}
public function test(){
	return view ( 'test' );
}




public function uloaduser(Request $request){

	$image=$request->file('file');

	$filename=time().$image->getClientOriginalName();

	$image->move('imageusers',$filename);

	return $filename;

}


	public function create(){

		$users=User::orderby('id','desc')->paginate(5);
		return view('admin.user.show',['users'=>$users]);

	}

	public function approved(Request $request){

		$id=$request->id;


		 $status =User::find($id)->status  ;


		if ($status==1) {
			

			$user=User::where('id',$id)->where('status',$status)->update(['status'=>0]);


		}else if($status==0){

			$user=User::where('id',$id)->where('status',$status)->update(['status'=>1]);

		}

     return $user;

	}

	public function getusers(){

		return User::all();

	}



	public function deleteuser($id){

		$user=User::find($id)->delete();
		if ($user) {
		return 'true';
		}



	}

	public function update($id){

		return User::find($id);

	}

	public function updateuser(Request $request){

		$fname=$request->fname1;
	    $lname=$request->lname1;
		$email=$request->email1;
		$roule=$request->roule1;
		$image=$request->image1;
		$id=$request->id;

		


		$users=User::find($id);

			$users->name=$fname;
			$users->lname=$lname;
			$users->email=$email;
			$users->image=$image;
			$users->roule=$roule;


				if ($users->update()) {

				return $users;


				}
	}



	   
        public function googleLogin(Request $request)  {
            $google_redirect_url = route('glogin');
            $gClient = new \Google_Client();
            $gClient->setApplicationName(config('services.google.app_name'));
            $gClient->setClientId(config('services.google.client_id'));
            $gClient->setClientSecret(config('services.google.client_secret'));
            $gClient->setRedirectUri($google_redirect_url);
            $gClient->setDeveloperKey(config('services.google.api_key'));
            $gClient->setScopes(array(
                'https://www.googleapis.com/auth/plus.me',
                'https://www.googleapis.com/auth/userinfo.email',
                'https://www.googleapis.com/auth/userinfo.profile',
            ));
            $google_oauthV2 = new \Google_Service_Oauth2($gClient);
            if ($request->get('code')){
                $gClient->authenticate($request->get('code'));
                $request->session()->put('token', $gClient->getAccessToken());
            }
            if ($request->session()->get('token'))
            {
                $gClient->setAccessToken($request->session()->get('token'));
            }
            if ($gClient->getAccessToken())
            {
                //For logged in user, get details from google using access token
                $guser = $google_oauthV2->userinfo->get();  
                   
                    $request->session()->put('name', $guser['name']);
                    if ($user =User::where('email',$guser['email'])->first())
                    {
                        //logged your user via auth login
                    }else{
                        //register your user with response data
                    }               
             return redirect()->route('user.glist');          
            } else
            {
                //For Guest user, get google login url
                $authUrl = $gClient->createAuthUrl();
                return redirect()->to($authUrl);
            }
        }
	
	

}
