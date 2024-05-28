<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('test')->group(function(){
    Route::get('report', [ReportController::class, 'index']);
    Route::get('report/{report_code}/{access_key}', [ReportController::class, 'show']);
});

Route::prefix('/government')->group(function(){
    Route::get('/beranda', function(){
        return view('government.beranda'); });

    Route::prefix('/laporan')->group(function(){
        Route::get('/semua', function(){
            return view('government.laporan_semua'); })->name('gov.laporan_semua');
        Route::get('/belum_unggah', function(){
            return view('government.laporan_belum_unggah'); })->name('gov.laporan_belum_unggah');
    });

    Route::get('/hot_topic', function(){
        return view('government.hot_topic'); });

    Route::prefix('/unggah')->group(function(){
        Route::get('/1', function(){
            return view('government.unggah_1'); })->name('gov.unggah_1');
        Route::get('/2', function(){
            return view('government.unggah_2'); })->name('gov.unggah_2');
        Route::get('/3', function(){
            return view('government.unggah_3'); })->name('gov.unggah_3');
    });
    
});



