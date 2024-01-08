<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{
    public $guestTeam;
    public $localTeam;

    public function index(){
        $games = Game::all();
        return view('games.index',['games' => $games]);
    }

    public function home(){
        $games = Game::all();
        return view('games.home',['games' => $games]);
    }

    public function create(){
        $teams = Team::all(); 
        return view('games.create', ['teams' => $teams]);
    }
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'local_team' => 'required',
            'guest_team' => 'required|different:local_team',
            'local_score' => 'required|numeric|gt:0',
            'guest_score' => 'required|numeric|gt:0'
        ]);

        $newGame = Game::create($data);
        return redirect(route('games.index'));

    }

    public function edit(Game $game){
        $teams = Team::all(); 
        $this->getLocalTeam($game);
        $this->getGuestTeam($game);
        return view('games.edit',[
            'game' => $game, 
            'teams' => $teams,
            'localTeam' => $this->localTeam,
            'guestTeam' => $this->guestTeam,

        ]);
    }
    public function update(Request $request, Game $game){
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'local_team' => 'required',
            'guest_team' => 'required|different:local_team',
            'local_score' => 'required|numeric|gt:0',
            'guest_score' => 'required|numeric|gt:0'
        ]);
        
        $game->update($data);

        return redirect(route('games.index'))->with('success','Game Updated Succesfully');
    }

    public function delete(Game $game){
        $game->delete();
        return redirect(route('games.index'))->with('success','Game Deleted Succesfully');
    }

    public function getLocalTeam(Game $game){
        if ($game->local_team) {
            $localTeam = Team::find($game->local_team);
            $this->localTeam = $localTeam ? $localTeam->name : null;
        }
    }

    public function getGuestTeam(Game $game){
        if($game->guest_team){
            $guestTeam = Team::find($game->guest_team);
            $this->guestTeam = $guestTeam ? $guestTeam->name :null;
        }
    }
}
