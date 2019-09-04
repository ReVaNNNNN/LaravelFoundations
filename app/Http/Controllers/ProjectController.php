<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = new Project();

        request()->validate([
            'title' => 'required'
        ]);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }
}
