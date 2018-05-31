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
     * Show the dashboard of the admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if(Auth::user()->isAdmin()) {
            return view('admin.dashboard');
        } else {
            return 'pas admin';
        }
    }

    /**
     * Show the users of the app.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $data = User::all();

        if(Auth::user()->isAdmin()) {
            return view('admin.users')->with('users', $data);
        }
    }
}