<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function display(){
        //dd(Stadium::all());
        return view('more',['stadiums'=>Stadium::all()]);
    }

    public function add_stadium(){
        return view('add_stadium');
    }

    public function upload_stadium(Request $request){
        $stadium=new Stadium;
        $stadium->name=$request->name;
        $stadium->location=$request->location;
        $stadium->team_id=$request->team_id;
        $stadium->capacity=$request->capacity;
        $stadium->save();
        return back();
    }
}
