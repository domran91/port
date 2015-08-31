<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Skill;
use Illuminate\Support\Facades\Auth;


class SkillsController extends Controller
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
        return view('skills.AddSkills');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $authid = Auth::id();
        Auth::user()->skills()->save(new Skill($request->all()));
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
        $skill = Skill::findOrFail($id);
        return view('skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $authid = Auth::id();
        $redirectUrl = 'resume/'.$authid.'/edit';
        $skill = Skill::findOrFail($id);
        $skill->update($request->all());
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
