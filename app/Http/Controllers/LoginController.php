<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;



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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    public function postLogin(Request $request){
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])) { 
            return redirect('about');
        }

        return redirect('news');
    }

    public function postRegister(Request $request){
        $this->Validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'provider' => 'null',
            'provider_id' => 'null'
        ]);

        return redirect()->back();
    }





    
    /**
     * Create a new controller instance.
     *
     * @return void
     */


}
