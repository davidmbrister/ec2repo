<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampRequest;
use App\Http\Requests\UpdateCampRequest;
use App\Repositories\CampRepository;
use App\Repositories\EventRepository;
use App\Http\Controllers\EventBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use App\Models\Category;

class CampController extends EventBaseController
{
    /** @var  CampRepository */
    private $campRepository;
    /** @var  EventRepository */

    public function __construct(CampRepository $campRepo, EventRepository $eventRepo)
    {
      $this->campRepository = $campRepo;
      parent::__construct($eventRepo);
    }

    /**
     * Display a listing of the Camp.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $camps = $this->campRepository->all();

        return view('camps.index')
            ->with('camps', $camps);
    }

    /**
     * Show the form for creating a new Camp.
     *
     * @return Response
     */
    public function create()
    {
      $categories = Category::all();
      $input['user_id'] = Auth::user()->id;
      $camp = null;
      return view('camps.create')->with('categories', $categories)->with('camp', $camp);
    }

    /**
     * Store a newly created Camp in storage.
     *
     * @param CreateCampRequest $request
     *
     * @return Response
     */
    public function store(CreateCampRequest $request)
    {
      //dd($request);
      $input = $request->all();
      $input['user_id'] = Auth::user()->id;
      $eventInput = [
        "title" => $request->title,
        "start" => $request->start,
        "end" => $request->end,
        "allDay" => $request->allDay,
        "description" => $request->description,
        "type" => "test",
    ];
      // also create the new Event here ?
      // this class allows the storeEvent method of it's parent, which has access to the Event repository 
      $input['event_id'] = $this->storeEvent($eventInput);
      //dd($input);
      $camp = $this->campRepository->create($input);

      Flash::success('Camp saved successfully.');

      return redirect(route('camps.index'));
    }

    /**
     * Display the specified Camp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $camp = $this->campRepository->find($id);

        if (empty($camp)) {
            Flash::error('Camp not found');

            return redirect(route('camps.index'));
        }

        return view('camps.show')->with('camp', $camp);
    }

    /**
     * Show the form for editing the specified Camp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $camp = $this->campRepository->find($id);

        if (empty($camp)) {
            Flash::error('Camp not found');

            return redirect(route('camps.index'));
        }

        return view('camps.edit')->with('camp', $camp);
    }

    /**
     * Update the specified Camp in storage.
     *
     * @param int $id
     * @param UpdateCampRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampRequest $request)
    {
        $camp = $this->campRepository->find($id);

        if (empty($camp)) {
            Flash::error('Camp not found');

            return redirect(route('camps.index'));
        }

        $camp = $this->campRepository->update($request->all(), $id);

        Flash::success('Camp updated successfully.');

        return redirect(route('camps.index'));
    }

    /**
     * Remove the specified Camp from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $camp = $this->campRepository->find($id);

        if (empty($camp)) {
            Flash::error('Camp not found');

            return redirect(route('camps.index'));
        }

        $this->campRepository->delete($id);

        Flash::success('Camp deleted successfully.');

        return redirect(route('camps.index'));
    }
}
