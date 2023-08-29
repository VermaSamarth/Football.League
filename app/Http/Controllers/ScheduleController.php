<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Imports\SchedulesImport;
use Maatwebsite\Excel\Facades\Excel;

class ScheduleController extends Controller
{
    public function add_schedule(Request $request){
        // dd($request->all());
        $schedule=new Schedule;
        $schedule->home_id=$request->home_id;
        $schedule->away_id=$request->away_id;
        $schedule->match_date=$request->matchday;
        $schedule->venue=$request->venue;
        $schedule->home_goals=$request->home_goals;
        $schedule->away_goals=$request->away_goals;
        $schedule->referee1=$request->referee1;
        $schedule->referee2=$request->referee2;
        $schedule->status=$request->status;
        $schedule->winner_id=$request->winner_id;
        $schedule->save();
        return back();
    } 

    public function update_schedule($id){
        return view('update_schedule',['schedule'=>Schedule::find($id)]);
    }

    public function store_updated_schedule(Request $request){
        $schedule=Schedule::find($request->id);
        $schedule->home_id=$request->home_id;
        $schedule->away_id=$request->away_id;
        $schedule->match_date=$request->matchday;
        $schedule->venue=$request->venue;
        $schedule->home_goals=$request->home_goals;
        $schedule->away_goals=$request->away_goals;
        $schedule->referee1=$request->referee1;
        $schedule->referee2=$request->referee2;
        $schedule->status=$request->status;
        $schedule->winner_id=$request->winner_id;
        $schedule->save();
        return back();
    }

    public function display_schedule(){
        $schedule =  Schedule::orderBy('match_date','desc')->get();
        // dd($schedule);
        // dd($schedule->all());
        return view('fixtures',['schedules'=>$schedule]);
    }

    public function import(Request $request) 
    {
        dd("Upload schedule file");
        Excel::import(new SchedulesImport,$request->file('file'));
        
        return redirect('/')->with('success', 'All good!');
    }
}
