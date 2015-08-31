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
        $user = User::findOrFail($id);
        return view('resumes.resume', compact('user'));
    }
    public function update()

    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        return view('resumes.edit', compact('user'));

    }

}
