<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

        if(Auth::user()->isAdmin()) {
            return view('admin')->with('users', $data);
        }
        
    }
}