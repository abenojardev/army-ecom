<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Redirect;

class AuthController extends Controller
{ 
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request; 
    }

    public function index()
    {
        return view('login');
    }

    public function verify()
    { 
        if(Auth::attempt($this->request->except('_token'))) {
            if(Auth::user()->account_type == 'admin'){
                return Redirect::route('cms.products');
            }

            return Redirect::route('home');
        }

        return back()->withError('Account not found!');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login');
    }
}
