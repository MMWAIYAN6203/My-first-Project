<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->paginate(8);
        return view('teams.list', compact('teams'));
    }

    public function show(Team $team)
    {
        return view('teams.detail', compact('team'));
    }
}
