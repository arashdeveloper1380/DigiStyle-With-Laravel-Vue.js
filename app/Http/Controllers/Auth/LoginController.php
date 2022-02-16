<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth;
use Socialite;
use Exception;
use Redirect;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  public function redirectToGoggle(){

    return Socialite::driver('google')->redirect();

  }

  public function handleGoogleCallback(){


    try{

        $user=Socialite::driver('google')->user();
       }catch(Exception $e){

        return Redirect::to('auth/google');
       }

       $authuser=$this->create($user);

       Auth::login($authuser ,true);

       return Redirect::to('/');
  }

  public function create($google_id){


        if ($authuser=User::Where('google_id',$google_id->id)->first()) {
           return $authuser;
        }

         return User::create([
            'name' =>$google_id->name,
            'email' => $google_id->email,
            'google_id' =>$google_id->id,
            'password' => bcrypt('milad215'),
        ]);


  }

}
