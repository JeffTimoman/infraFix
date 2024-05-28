<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('testjeff')->group(function(){
    Route::get('report', [ReportController::class, 'index']);
    Route::get('report/{report_code}/{access_key}', [ReportController::class, 'show']);
});

Route::prefix('auth')->group(function(){

});
