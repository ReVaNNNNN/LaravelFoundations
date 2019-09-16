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
            'title' => 'required|min: 5',
            'description' => 'required|min: 15'
        ]);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function update(Project $project)
    {
        request()->validate([
            'title' => 'min: 5',
            'description' => 'min: 15'
        ]);

        $project->title =  request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }
}
