<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\User;
use App\Admin;
use App\UserCustom;



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


    // public function postLogin(){
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     ///bcrypt pas
    //     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
    //         // if successful, then redirect to their intended location
    //         return redirect()->intended('/');
    //     } elseif (Auth::guard('usercustom')->attempt(['email' => $request->email, 'password' => $request->password])) {
    //         return redirect()->intended('/news');
    //     }
    //     if (Auth::guard('admin')->check()) {
    //     Auth::guard('admin')->logout();
    //     } elseif (Auth::guard('usercustom')->check()) {
    //     Auth::guard('usercustom')->logout();
    //     }
    
    //     return redirect('/');
    // }











    // protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    // public function __construct() {
    //     $this->middleware('guest')->except('logout');
    // }
    // public function redirectToFacebook() {
    //     return Socialite::driver('facebook')->redirect();
    // }
    // public function handleFacebookCallback() {
    //     try {
    //         $user = Socialite::driver('facebook')->user();
    //         $finduser = User::where('facebook_id', $user->id)->first();
    //         if ($finduser) {
    //             Auth::login($finduser);
    //             return redirect('/');
    //         } else {
    //             $newUser = User::create(['name' => $user->name, 'email' => $user->email, 'facebook_id' => $user->id]);
    //             Auth::login($newUser);
    //             return redirect()->back();
    //         }
    //     }
    //     catch(Exception $e) {
    //         return redirect('auth/facebook');
    //     }
    // }


}
