<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request)  {
       // dd('abc');
       // dd($request);
        // dd($request->email);
        // validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|confirmed'
        ]);
        dd('store');
        // store user
        // sign the user in
        //redirect
    }
}
