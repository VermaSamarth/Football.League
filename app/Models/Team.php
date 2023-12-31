<?php

namespace App\Models;

use App\Models\Manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    public function manages(){
        return $this->belongsTo(Manager::class,'id','team_id');
    }

    public function scheduled(){
        return $this->hasMany(Schedule::class);
    }

    public function stands(){
        return $this->belongsTo(Standing::class);
    }

    public function plays_at(){
        return $this->hasOne(Stadium::class);
    }

}
