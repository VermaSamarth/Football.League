<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PlayersImport;
use Maatwebsite\Excel\Facades\Excel;

class PlayerImportController extends Controller
{
    public function import(Request $request) 
    {
        dd("Upload player file");
        Excel::import(new PlayersImport,$request->file('file'));
        
        return redirect('/')->with('success', 'All good!');
    }
}
