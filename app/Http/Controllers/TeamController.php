<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Carbon\Carbon;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add_team(Request $request){
        // dd($request->all());
        $team=new Team;
        $team->name=$request->name;
        $team->location=$request->location;
        // $team->stadium=$request->stadium;
        $date = Carbon::parse($team->year);
        $year=$date->year;
        $team->year=$year;
        $team->stadium_name=$request->stadium;
        $team->division=$request->division;
        $imageName=time().".".$request->logo->getClientOriginalExtension();
        $request->logo->move(public_path('other_images'),$imageName);
        $team->logo=$imageName;
        $team->save();
       return redirect()->to('/admin/teamlist');
    } 

    function teamlist() {
        $team=Team::all();
        return view('teams',['teams'=>$team]);
    }

    public function display_teams(){
        $team=Team::all();
        $manager=Manager::all();
        return view('teams',['teams'=>$team,'managers'=>$manager]);
    }
}
