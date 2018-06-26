<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


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

    /**
     * Show information of a given user
     *
     * @return view
     */
    public function showUser($id)
    {
        $user = User::where('id', '=', $id)->get();

        if(Auth::user()->isAdmin()) {
            return view('admin.showUser')->with('user', $user[0]);
        }
    }

    /**
     * Delete a given user
     *
     * @return redirect
     */
    public function deleteUser($id)
    {
        $user = User::where('id', '=', $id)->delete();

        return Redirect::route('admin/users');
    }

    /**
     * Edit a given user
     *
     * @return redirect
     */
    public function editUser($id)
    {
        $user = User::where('id', '=', $id)->get();
        if (Input::has('prenom'))
        {
            $user->prenom = Input::get('prenom');
        }

        $user->prenom = 'bonjour';

        return $user->save();
    }
}