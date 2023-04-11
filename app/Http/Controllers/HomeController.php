<?php

namespace App\Http\Controllers;
use App\Models\projects;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = projects::all();
        return view('home', ['projects' => $projects]);
    }
    public function index2()
    {
        $projects = projects::all();
        return view('indo', ['projects' => $projects]);
    }
}
