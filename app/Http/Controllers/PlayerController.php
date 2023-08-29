<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Imports\PlayersImport;
use Maatwebsite\Excel\Facades\Excel;

class PlayerController extends Controller
{
    public function add_player(Request $request){
        // dd($request->all());
        $player=new Player;
        $player->fname=$request->first_name;
        $player->lname=$request->last_name;
        $player->jersey=$request->jersey_number;
        $player->position=$request->play_position;
        $player->dob=$request->date_of_birth;
        $player->nationality=$request->nationality;
        $player->team_id=$request->team_id;

        $player->save();
       return redirect()->to('/admin/player-list');
    } 

    function plaueList() {
        $player=Player::all();
        return view('players',['players'=>$player]);
    }

    public function display_players(){
        $player=Player::all();
        return view('players',['players'=>$player]);
    }

    public function import(Request $request) 
    {
        dd("Upload player file");
        Excel::import(new PlayersImport,$request->file('file'));
        
        return redirect('/')->with('success', 'All good!');
    }
}
