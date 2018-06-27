<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Calendar;
use Auth;
use App\Disponibilite;

class EventController extends Controller

{

    public function index()
    {
       $events = [];
       $data = Disponibilite::all();

       if($data->count())
       {
          foreach ($data as $key => $value) 
          {
            $events[] = Calendar::event(
                $value->title,
                true,
                new \DateTime($value->start_date),
                new \DateTime($value->end_date.' +1 day')
            );
          }
       }

      $calendar = Calendar::addEvents($events); 

      return view('planningnounou', compact('calendar'));

    }

    public function nounouPlanning()
    {
        $events = [];

        $first = DB::table('users')
            ->join('avoir2', 'users.id', '=', 'avoir2.users_id')
            ->join('garde', 'avoir2.garde_id', '=', 'garde.id')
            ->select('garde.*')
            ->where('users.id', Auth::user()->id);

        $data = DB::table('users')
            ->join('avoir', 'users.id', '=', 'avoir.users_id')
            ->join('disponibilite', 'avoir.disponibilite_id', '=', 'disponibilite.id')
            ->select('disponibilite.*')
            ->where('users.id', Auth::user()->id)
            ->union($first)
            ->get();

        if($data->count())
         {
            foreach ($data as $key => $value) 
            {
              $events[] = Calendar::event(
                  $value->title,
                  true,
                  new \DateTime($value->start_date),
                  new \DateTime($value->end_date)
              );
            }
         }

      $calendar = Calendar::addEvents($events); 

      return view('planningnounou', compact('calendar'));
    }

    public function addDispo() {
      return view('addDispo');
    }

    public function addDisponibilite() {
      $dispo = new Disponibilite();
      $dispo->id = 3;
      $dispo->title = Input::get('title');
      $dispo->start_date = Input::get('startDate');
      $dispo->end_date = Input::get('endDate');
      $dispo->save();

      return Redirect::route('nounou.planning');
    }
}