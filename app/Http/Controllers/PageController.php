<?php

namespace App\Http\Controllers;

use App\Project;

class PageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
    }

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
}
