<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\StoreInstitutionAdminRequest;
use App\Http\Requests\StoreInstitutionRequest;
use App\Http\Requests\StoreInstitutionVolunteerRequest;
use App\Http\Requests\UpdateInstitutionRequest;
use App\Http\Resources\InstitutionResource;
use App\Models\Institution;
use App\Models\User;

class InstitutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except([
            'index', 'show'
        ]);
    }

    public function index()
    {
        $institutions = Institution::all();

        return view('institutions.list')->with([
            'institutions' => $institutions
        ]);
    }

    public function create()
    {
        return view('institutions.create');
    }

    public function store(StoreInstitutionRequest $request)
    {
        $this->authorize('create', Institution::class);

        $institution = Institution::create([
            'name' => $request->get('name'),
            'website' => $request->get('website'),
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude')
        ]);

        $institution->save();

        return $this->successJsonResponse('Successfully created institution', $institution);
    }

    public function show(Institution $institution)
    {
        return view('institutions.view')->with([
            'institution' => $institution
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionRequest  $request
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstitutionRequest $request, Institution $institution)
    {
        $this->authorize('update', $institution);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        $this->authorize('delete', $institution);
    }

    public function createAdmin(StoreInstitutionAdminRequest $request, Institution $institution)
    {
        $this->authorize('create', $institution);

        $user = User::create([
            'role' => Role::INSTITUTION,
            ...$request->all()
        ]);

        $user->password = \Hash::make($request->get('password'));
        $user->institution()->associate($institution);
        $user->saveOrFail();

        return $this->successJsonResponse(
            'Created an admin for ' . $institution->name,
            compact('user')
        );
    }

    public function listVolunteer(Institution $institution)
    {
        return view('volunteers.list')->with([
            'volunteers' => $institution->volunteers,
            'institution' => $institution,
        ]);
    }

    public function volunteerForm(Institution $institution)
    {
        $this->authorize('createVolunteer', $institution);

        return view('volunteers.create')->with([
            'institution' => $institution
        ]);
    }

    public function createVolunteer(StoreInstitutionVolunteerRequest $request, Institution $institution)
    {
        $this->authorize('createVolunteer', $institution);

        $user = User::create([
            'role' => Role::VOLUNTEER,
            ...$request->all()
        ]);

        $user->password = \Hash::make($request->get('password'));
        $user->institution()->associate($institution);
        $user->saveOrFail();

        return $this->successJsonResponse(
            'Created an volunteer for ' . $institution->name,
            compact('user')
        );
    }
}
