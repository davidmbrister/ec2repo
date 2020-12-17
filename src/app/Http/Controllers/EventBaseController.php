<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;

use App\Http\Requests\CreateCampRequest;
use App\Http\Requests\UpdateCampRequest;
use App\Repositories\CampRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use App\Models\Category;


class EventBaseController extends AppBaseController {
  /** @var  EventRepository */
  protected $eventRepository;

  public function __construct(EventRepository $eventRepo) {

    $this->eventRepository = $eventRepo;
  }

   /**
     * Store a newly created Camp in storage.
     *
     * @param EventInputRequest (not defined anywhere) $input 
     */
  protected function storeEvent($input){
    $newEvent = $this->eventRepository->create($input);
    //return the event_id to the calling subclass
    return $newEvent->id;
  }



}