<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function show($id)
    {
        $jobs = Job::where('countrie_id', $id)->get();
        $c = Country::findOrFail($id);
        return view('job.show', compact('jobs', 'c'));
    }
}
