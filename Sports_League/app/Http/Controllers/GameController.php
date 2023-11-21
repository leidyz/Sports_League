<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('games.index',['games' => $games]);
    }

    public function create(){
        return view('games.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'local_team' => 'required',
            'guest_team' => 'required|different:local_team',
            'local_score' => 'required',
            'guest_score' => 'required'
        ]);

        $newGame = Game::create($data);
        return redirect(route('games.index'));

    }

    public function edit(Game $game){
        return view('games.edit',['game' => $game]);
    }
    public function update(Request $request, Game $game){
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'local_team' => 'required',
            'guest_team' => 'required|different:local_team',
            'local_score' => 'required',
            'guest_score' => 'required'
        ]);
        
        $game->update($data);

        return redirect(route('games.index'))->with('success','Game Updated Succesfully');
    }

    public function delete(Game $game){
        $game->delete();
        return redirect(route('games.index'))->with('success','Game Deleted Succesfully');
    }
}
