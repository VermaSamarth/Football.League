<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Imports\SchedulesImport;
use Maatwebsite\Excel\Facades\Excel;

class ScheduleImportController extends Controller
{
    public function import(Request $request) 
    {
        dd("Upload schedule file");
        Excel::import(new SchedulesImport,$request->file('file'));
        
        return redirect('/')->with('success', 'All good!');
    }
}
