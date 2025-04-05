<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public  function index()
    {
        $title = 'Available Jobs';
        $jobs = [
            'Software Engineer',
            'Web Developer',
            'Data Scientist',
        ];
        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(string $id)
    {
       return "Showing job $id";
    }

    public function store(request $request){
        $title = $request->input('title');
        $description = $request->input('description');
    }
}
