<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Schedule;
use App\Models\Standing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class PointsController extends Controller
{
    public function get_points(){
        $teams=Team::all();
        // dd($teams);
        $schedules=Schedule::all();
       
        foreach($teams as $team){
            $team_id=$team->id;
            $match_count=0;
            $win_count=0;
            $loss_count=0;
            $draw_count=0;
            $goal_count=0;
            $concede_count=0;
            $points_count=0;
            //dd($team_id);
            $standing = Standing::where('team_id', $team_id)->first(); 
            if(!$standing){
                
                $points=new Standing;
                $points->team_id=$team_id;
                //dd($points->team_id);
                foreach($schedules as $fixture){
                    if($fixture->status){
                        if(($points->team_id==$fixture->home_id)||($points->team_id==$fixture->away_id)){
                            $match_count++;
                            if($points->team_id == $fixture->winner_id){
                                $win_count++;
                                $goal_count=$goal_count+max($fixture->home_goals,$fixture->away_goals);
                                $concede_count=$concede_count+min($fixture->home_goals,$fixture->away_goals);
                            }
                            elseif($fixture->home_goals == $fixture->away_goals)
                                $draw_count++;
                            else{
                                $loss_count++;
                                $goal_count=$goal_count+min($fixture->home_goals,$fixture->away_goals);
                                $concede_count=$concede_count+max($fixture->home_goals,$fixture->away_goals);
                            }
                        }
                    }
                }
                $points->matches_played=$match_count;
                $points->wins=$win_count;
                $points->losses=$loss_count;
                $points->draws=$draw_count;
                $points->goals_scored=$goal_count;
                $points->goals_conceded=$concede_count;
                $points_count=($win_count*3)+$draw_count;
                $points->points=$points_count;
                $points->save();
            }
            else{
                foreach($schedules as $fixture){
                    if($fixture->status){
                        if(($standing->team_id==$fixture->home_id)||($standing->team_id==$fixture->away_id)){
                            $match_count++;
                            if($standing->team_id == $fixture->winner_id){
                                $win_count++;
                                $goal_count=$goal_count+max($fixture->home_goals,$fixture->away_goals);
                                $concede_count=$concede_count+min($fixture->home_goals,$fixture->away_goals);
                            }
                            elseif($fixture->home_goals == $fixture->away_goals)
                                $draw_count++;
                            else{
                                $loss_count++;
                                $goal_count=$goal_count+min($fixture->home_goals,$fixture->away_goals);
                                $concede_count=$concede_count+max($fixture->home_goals,$fixture->away_goals);
                            }
                        }
                    }
                }
                $standing->matches_played=$match_count;
                $standing->wins=$win_count;
                $standing->losses=$loss_count;
                $standing->draws=$draw_count;
                $standing->goals_scored=$goal_count;
                $standing->goals_conceded=$concede_count;
                $points_count=($win_count*3)+$draw_count;
                $standing->points = $points_count;
                $standing->save();
            }    
                // $points=Standing::all();
                
                
                //dd($points);
            
        }
        $points=Standing::orderBy('points','desc')->get();
        // dd($points->all());
        return view('table',['points'=>$points]);
    }
}
