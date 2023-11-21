<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'coach',
        'points'
    ];

    //One to many relationship
    public function localgame(){
        return $this->hasMany(Game::class, 'local_team');
    }

    public function guestgame(){
        return $this->hasMany(Game::class, 'guest_team');
    }
     
}
