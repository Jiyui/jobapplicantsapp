<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::all();
        return view('applicant.index')->with('applicants', $applicants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicantRequest $request)
    {
        $request->validate([
            'id' => 'required',
            'Region' => 'required',
            'Province' => 'required',
            'City' => 'required',
            'Firstname' => 'required',
            'Lastname' => 'required',
            'Sex' => 'required',
            'Age' => 'required',
            'Maritalstatus' => 'required',
            'course' => 'required'

        ]);

        Applicant::create($request->all());

        return redirect()->route('applicants.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        return view('applicant.show', compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
       return view('applicant.edit', compact('applicant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicantRequest  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        $request->validate([
            'id' => 'required',
            'Region' => 'required',
            'Province' => 'required',
            'City' => 'required',
            'Firstname' => 'required',
            'Lastname' => 'required',
            'Sex' => 'required',
            'Age' => 'required',
            'Maritalstatus' => 'required',
            'course' => 'required',
            'accountstatus' => 'required'
        ]);
        $applicant->update($request->all());

        return redirect()->route('applicants.index')
            ->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();

        return redirect()->route('applicants.index')
            ->with('success', 'Project deleted successfully');
    }
}
