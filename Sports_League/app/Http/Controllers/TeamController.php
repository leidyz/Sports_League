<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('teams.index',['teams' => $teams]);
    }

    public function create(){
        return view('teams.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'coach' => 'required',
            'points' =>'required|numeric'
        ]);

        $newTeam = Team::create($data);
        return redirect(route('teams.index'));

    }

    public function edit(Team $team){
        return view('teams.edit',['team' => $team]);
    }
    public function update(Request $request, Team $team){
        $data = $request->validate([
            'name' => 'required',
            'coach' => 'required',
            'points' =>'required|numeric'
        ]);
        
        $team->update($data);

        return redirect(route('teams.index'))->with('success','Team Updated Succesfully');
    }

    public function delete(Team $team){
        $team->delete();
        return redirect(route('teams.index'))->with('success','Team Deleted Succesfully');
    }
}
