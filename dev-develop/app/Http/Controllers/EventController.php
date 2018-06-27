<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

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
}