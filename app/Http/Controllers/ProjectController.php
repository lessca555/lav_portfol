<?php

namespace App\Http\Controllers;
use App\Models\projects;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.cms');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_start' => 'required|date',
            'project_end' => 'required|date|after_or_equal:project_start',
            'tech' => 'required|string|max:255',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $project = new projects();
        $project->name = $validatedData['name'];
        $project->kategori = $validatedData['kategori'];
        $project->image = $imageName;
        $project->project_start = $validatedData['project_start'];
        $project->project_end = $validatedData['project_end'];
        $project->tech = $validatedData['tech'];
        $project->save();

        return redirect('/project')->with('success', 'Project berhasil ditambahkan.');
    }

    public function detail($id)
    {
        $projects = projects::findOrFail($id);
        return view('projects.detail', ['projects' => $projects]);
    }
}
