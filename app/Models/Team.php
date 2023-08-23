<?php

namespace App\Models;

use App\Models\Manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    public function manages(){
        return $this->hasOne(Manager::class);
    }

    public function playes(){
        return $this->hasMany(Player::class);
    }

    public function scheduled(){
        return $this->hasMany(Schedule::class);
    }

    public function stands(){
        return $this->hasOne(Standing::class);
    }

    public function plays_at(){
        return $this->hasOne(Stadium::class);
    }

}
