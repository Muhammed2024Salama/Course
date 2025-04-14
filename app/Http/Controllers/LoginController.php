<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('login');
    }

    public function handleLogin(LoginRequest $request)
    {
//        $request->validate([
//            'name' => 'required|alpha:|max:15|min:6',
//            'email' => 'required|email',
//            'password' => 'required'
//        ],[
//            'name.required' => 'The user name field is required!',
//            'name.alpha' => 'User Name should only contains letters',
//            'email.email' => 'Hello This is not an email',
//        ]);

        return $request;
    }
}
