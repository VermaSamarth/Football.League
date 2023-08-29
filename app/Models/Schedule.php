<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model 
{
    use HasFactory;

    public function refereed_by(){
        return $this->hasMany(Referee::class);
    }

    public function home_team(){
        return $this->hasOne(Team::class,'id', 'home_id' );
    }

    public function away_team(){
        return $this->hasOne(Team::class,'id', 'away_id' );
    }
}
