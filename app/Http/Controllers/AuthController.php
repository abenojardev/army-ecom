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

        }

        return back()->withError('Account not found!');
    }
}
