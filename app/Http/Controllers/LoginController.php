<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
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

    
    public function getLogin() {
        return view('blog.index', ['login' => 'Please login for access some menu']);
    }

    public function postLogin(Request $request){
        // $messages = [
        //     'lemail.required' => "Email tidak boleh kosong",
        //     'lemail.email' => "Email tidak valid",
        //     'lemail.exists' => "Email tidak ditemukan",
        //     'lpassword.required'=> "Password tidak boleh kosong",
        //     'lpassword.min' => "Password minimal 6 karakter"
        // ];

        //Validate form data 
        $validator = Validator::make($request->all(), [
            'lemail' => 'required|email|exists:users,email',
            'lpassword' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            // attempt to log
            if (Auth::attempt(['email' => $request->lemail, 'password' => $request->lpassword ], $request->remember)) {
                // if successful -> redirect forward
                return redirect()->intended(route('news'));
            }

            // if unsuccessful -> redirect back
            return redirect()->back()->withInput($request->only('lemail', 'remember'))->withErrors([
                'lpassword' => 'Wrong Password',
            ]);
        }

        // $validate = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        // if(!$validate) { 
        //     return redirect()->back();
        // }

        // return redirect('news');
    }

    public function postRegister(Request $request){

        // $messages = [
        //     'name.min' => "Nama Minimal 3 Huruf",
        //     'email.email' => "Email tidak valid",
        //     'email.unique' => "Email Sudah ada",
        //     'password.required'=> "Password tidak boleh kosong",
        //     'password.min' => "Password minimal 6 karakter"
        // ];

        $validator = $this->Validate($request,[
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
        
        if(!$validator) {
            return back()->withErrors($validator)->withInput();
        }else{
            return redirect('news');
        }

    }

    public function getRegister() {
        return view('blog.index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }





    
    /**
     * Create a new controller instance.
     *
     * @return void
     */


}
