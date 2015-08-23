<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('jobs.addJob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\AddJobRequest $request)
    {
        $authid = Auth::id();
        $job = new Job;
        $job->job = $request['job'];
        $job->job_position = $request['job_position'];
        $job->started_on = $request['started_on'];
        $job->ended_on = $request['ended_on'];
        $job->job_description = $request['job_description'];
        $job->user_id = Auth::id();
        $job->save();
        $redirectUrl = 'resume/'.$authid.'/edit';

        Return redirect($redirectUrl);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit', compact('job'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\AddJobRequest $request, $id)
    {
        $authid = Auth::id();
        $redirectUrl = 'resume/'.$authid.'/edit';
        $job = Job::findOrFail($id);
        $job->update($request->all());
        return redirect($redirectUrl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
