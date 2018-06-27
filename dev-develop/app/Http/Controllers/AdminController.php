<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


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
            return 'Vous etes pas admin';
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


        if (Input::has('prenom'))
        {
            $prenom = Input::get('prenom');
        }
        
        DB::table('users')
            ->where('id', $id)
            ->update(['prenom' => $prenom]);

        return Redirect::route('admin.showUser', array('id' => $id));
    }

    /**
     * Edit a given user
     *
     * @return redirect
     */
    public function showCandidatures()
    {      
        $data = User::where([
                        ['role', '=', 'nounou'],
                        ['valide', '=', '0'],
                    ])->get();

        if(Auth::user()->isAdmin()) {
            return view('admin.candidatures')->with('candidatures', $data);
        }
    }

    /**
     * Accept a nounou
     *
     * @return redirect
     */
    public function accepterNounou($id)
    {      
        DB::table('users')
            ->where('id', $id)
            ->update(['valide' => 1]);

        return Redirect::route('admin.candidatures');
    }

    /**
     * Delete a nounou
     *
     * @return redirect
     */
    public function refuserNounou($id)
    {      
        DB::table('users')
            ->where('id', $id)
            ->delete();

        return Redirect::route('admin.candidatures');
    }

}