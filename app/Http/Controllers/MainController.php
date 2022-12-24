<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index()
    {
     return view('login');
    }

    function checklogin(Request $request)
    {
        $messages = [
            "name.required" => "Please Enter Your Name",
            "password.required" => "Please Enter Your Password",
           
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            // attempt to log
            if (Auth::attempt(['name' => $request->name, 'password' => $request->password ])) {
                // if successful -> redirect forward
                return view('successlogin');
            }
    
            // if unsuccessful -> redirect back
            return redirect()->back()->withInput($request->only('password'))->withErrors([
                'password' => 'Wrong password',
            ]);
        }


    }

    function logout()
    {
     Auth::logout();
     return redirect('/');  
    }
}
