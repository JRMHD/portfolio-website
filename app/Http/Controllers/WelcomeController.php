<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        return view('welcome', ['projects' => $projects]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'label' => 'required',
            'time' => 'required',
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
        ]);
        // dd($request);
        // Create a new project with the validated data
        $project = Project::create($validatedData);
        // dd($project);
        // Redirect back to the homepage with a success message
        return redirect('/')->with('success', 'Project updated successfully.');
    }
}
