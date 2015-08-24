<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Skill;
use App\Task;
use App\School;
use App\Job;
use App\User;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::All();
        return view('resumes.resumes', compact('users'));
    }

    public function show($id)
    {
        $users = User::where('id',$id)->get();
        $skills = Skill::where('user_id',$id)->get();
        $jobs = Job::where('user_id',$id)->get();
        $school = School::where('user_id',$id)->get();
        $tasks = Task::where('job_id','1')->get();
        return view('resumes.resume', compact('skills','jobs','school','tasks','users'));
    }
    public function update($id)

    {
        $userId = Auth::id();
        $users = User::findOrFail($userId);
        $skills = Skill::where('user_id',$userId)->get();
        $jobs = Job::where('user_id',$userId)->get();
        $school = School::where('user_id',$userId)->get();
        //$jobIds = $jobs->id;
        //$tasks = Task::where('job_id',$jobIds)->get();
        return view('resumes.edit', compact('skills','jobs','school','tasks','users'));

    }

}
