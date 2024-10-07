<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Models\Activitie;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visitor = new Visitor();
        $visitor->view = 1;
        $visitor->save();
        
        
        $activities = Activitie::all();
        $teams = Team::all();
        return view('welcome', compact('activities', 'teams'));
    }
}
