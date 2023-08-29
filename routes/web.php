<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Middleware\EnsureIsAdmin;
use App\Http\Middleware\EnsureIsUser;
use App\Models\Schedule;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth','verified'])->group(function(){

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Players Display
    Route::get('/players',[PlayerController::class,'display_players'])->name('players');

    // Teams/Clubs Display
    Route::get('/teams',[TeamController::class,'display_teams'])->name('teams');

    // Fixtures
    Route::get('/fixtures',[ScheduleController::class,'display_schedule'])->name('fixtures');

    // Points Table
    Route::get('/table',[PointsController::class,'get_points'])->name('table');

    // News
    Route::get('/news',function(){
        return view('news');
    })->name('news');

    // About us
    Route::get('/about',function(){
        return view('about');
    })->name('about');

    // More about kickoff
    Route::get('/more',[ManagerController::class,'display_manager'])->name('more');
});



Route::middleware(['auth','verified',EnsureIsAdmin::class])->group(function(){

    // Add a team
    Route::get('/admin/teams/add',function(){
        return view('admin_add_team');
    })->name('admin_add_team');

    Route::post('/admin/teams/add/new',[TeamController::class,'add_team'])->name('add_new_team');
    
    Route::get('admin/teamlist', [TeamController::class, 'teamlist']);

    // Fixtures
    Route::get('/admin/schedule/add',function(){
        return view('add_fixtures');
    })->name('add_fixtures');

    Route::post('/admin/schedule/add/new',[ScheduleController::class,'add_schedule'])->name('add_new_schedule');

    Route::get('/admin/schedule/update/{id}',[ScheduleController::class,'update_schedule'])->name('update_schedule');

    Route::put('/admin/schedule/update/{id}/store',[ScheduleController::class,'store_updated_schedule'])->name('store_schedule');

    // Add a Manager
    Route::get('/admin/add/manager',[ManagerController::class,'add_manager'])->name('add_manager');

    Route::post('/admin/add/manager/new',[ManagerController::class,'upload_manager'])->name('add_new_manager');

    // Add a Stadium
    Route::get('/admin/add/stadium',[StadiumController::class,'add_stadium'])->name('add_stadium');

    Route::post('/admin/add/stadium/new',[StadiumController::class,'upload_stadium'])->name('add_new_stadium');

    // Points Table
    Route::get('/admin/table',function(){
        return view('admin_table');
    })->name('admin_table');

    // Add a player
    Route::get('/admin/players/add',function(){
        return view('admin_add_player');
    })->name('admin_add_player');

    Route::post('/admin/players/add/new',[PlayerController::class,'add_player'])->name('add_new_player');

    Route::get('admin/player-list', [PlayerController::class, 'plaueList']);

    // Upload Document Page
    Route::get('/excel/players',function(){
        return view('excel_players');
    })->name('excel_players');

    Route::get('/excel/schedules',function(){
        return view('excel_schedule');
    })->name('excel_schedule');

    Route::post('/excel/player/file/upload',[PlayerController::class,'import'])->name('import_player');

    Route::post('/excel/schedule/file/upload',[ScheduleController::class,'import'])->name('import_schedule');
});



Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
