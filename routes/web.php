<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StatisticsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome1');
});


Route::get('calculate-statistics-command', [StatisticsController::class, 'calculateStatistics'])
            ->name('calculate.statis');
            
Route::get('get-data', [StatisticsController::class, 'retrieveCache'])
            ->name('retrieve.cache');
