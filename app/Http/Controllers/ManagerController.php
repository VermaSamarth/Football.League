<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Stadium;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function add_manager(){
        return view('add_manager');
    }

    public function display_manager(){
        return view('more',['managers'=>Manager::all(),'stadiums'=>Stadium::all()]);
    }

    public function upload_manager(Request $request){
        $manager=new Manager;
        // dd($request->all());
        $manager->fname=$request->fname;
        $manager->lname=$request->lname;
        $manager->nationality=$request->nationality;
        $manager->team_id=$request->team_id;

        $manager->save();
        return back();
    }
}
