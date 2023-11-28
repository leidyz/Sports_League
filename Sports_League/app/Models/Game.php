<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'date',
        'local_team' ,
        'guest_team',
        'local_score',
        'guest_score'
    ];

    //One to Many relationship(inverse)
    public function localTeam(){
        return $this->belongsTo(Team::class,'local_team');
    }

    public function guestTeam(){
        return $this->belongsTo(Team::class,'guest_team');
    }
}
