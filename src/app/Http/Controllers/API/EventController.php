<?php
namespace App\Http\Controllers\API;


use Auth;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Category;

class EventController extends Controller {

    public function index()
      {
          $events = Event::all();

          $jsonEvents =  $events->toJson();
          return $jsonEvents;
      
      }

    // this could be used to get more information about a single camp
    public function single($id) 
      {
        $event = Event::find($id);
        $jsonEvent =  $event->toJson();
          return $jsonEvent;

      }
}