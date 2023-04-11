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
            'deskripsi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_start' => 'required|date',
            'project_end' => 'required|date|after_or_equal:project_start',
            'tech' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);



        $project = new projects();
        $project->name = $validatedData['name'];
        $project->deskripsi = $validatedData['deskripsi'];
        $project->kategori = $validatedData['kategori'];
        $project->project_start = $validatedData['project_start'];
        $project->project_end = $validatedData['project_end'];
        $project->tech = $validatedData['tech'];
        $project->link = $validatedData['link'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . "1" . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
            $image->move(public_path('images'), $filename);
            $project->image = $filename;
        }

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $filename1 = time() . "2" . '.' . $image1->getClientOriginalExtension();
            $path1 = public_path('images/' . $filename1);
            $image1->move(public_path('images'), $filename1);
            $project->image1 = $filename1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $filename2 = time() . "3" . '.' . $image2->getClientOriginalExtension();
            $path2 = public_path('images/' . $filename2);
            $image2->move(public_path('images'), $filename2);
            $project->image2 = $filename2;
        }


        $project->save();

        return redirect('/')->with('success', 'Project berhasil ditambahkan.');
    }

    public function detail($id)
    {
        $projects = projects::findOrFail($id);
        return view('projects.detail', ['projects' => $projects]);
    }
}
