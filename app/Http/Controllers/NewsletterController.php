<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Validator;

class NewsletterController extends Controller
{
    public function create(){
        return view('blog.index');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|regex:/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('success', 'Thanks for subcribe');
        }
        return redirect('/')->with('failure', 'Sorry, This Email already for Subcribe');
    }
}
