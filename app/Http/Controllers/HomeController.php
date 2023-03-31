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
}
