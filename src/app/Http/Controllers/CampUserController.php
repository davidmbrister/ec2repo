<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampUserRequest;
use App\Http\Requests\UpdateCampUserRequest;
use App\Repositories\CampUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CampUserController extends AppBaseController
{
    /** @var  CampUserRepository */
    private $campUserRepository;

    public function __construct(CampUserRepository $campUserRepo)
    {
        $this->campUserRepository = $campUserRepo;
    }

    /**
     * Display a listing of the CampUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $campUsers = $this->campUserRepository->all();

        return view('camp_users.index')
            ->with('campUsers', $campUsers);
    }

    /**
     * Show the form for creating a new CampUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('camp_users.create');
    }

    /**
     * Store a newly created CampUser in storage.
     *
     * @param CreateCampUserRequest $request
     *
     * @return Response
     */
    public function store(CreateCampUserRequest $request)
    {
        $input = $request->all();

        $campUser = $this->campUserRepository->create($input);

        Flash::success('Camp User saved successfully.');

        return redirect(route('campUsers.index'));
    }

    /**
     * Display the specified CampUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $campUser = $this->campUserRepository->find($id);

        if (empty($campUser)) {
            Flash::error('Camp User not found');

            return redirect(route('campUsers.index'));
        }

        return view('camp_users.show')->with('campUser', $campUser);
    }

    /**
     * Show the form for editing the specified CampUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $campUser = $this->campUserRepository->find($id);

        if (empty($campUser)) {
            Flash::error('Camp User not found');

            return redirect(route('campUsers.index'));
        }

        return view('camp_users.edit')->with('campUser', $campUser);
    }

    /**
     * Update the specified CampUser in storage.
     *
     * @param int $id
     * @param UpdateCampUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampUserRequest $request)
    {
        $campUser = $this->campUserRepository->find($id);

        if (empty($campUser)) {
            Flash::error('Camp User not found');

            return redirect(route('campUsers.index'));
        }

        $campUser = $this->campUserRepository->update($request->all(), $id);

        Flash::success('Camp User updated successfully.');

        return redirect(route('campUsers.index'));
    }

    /**
     * Remove the specified CampUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $campUser = $this->campUserRepository->find($id);

        if (empty($campUser)) {
            Flash::error('Camp User not found');

            return redirect(route('campUsers.index'));
        }

        $this->campUserRepository->delete($id);

        Flash::success('Camp User deleted successfully.');

        return redirect(route('campUsers.index'));
    }
}
