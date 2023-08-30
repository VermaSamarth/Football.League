<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function is_player_of(){
        return $this->hasOne(Team::class,'id','team_id');
    }

    public function was_subbed_in(){
        return $this->hasOne(Substitution::class);
    }

    public function was_subbed_out(){
        return $this->hasOne(Substitution::class);
    }

}
