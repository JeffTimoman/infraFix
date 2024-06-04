<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\isNotLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::prefix('testjeff')->group(function(){
    Route::get('report', [ReportController::class, 'index']);
    Route::get('report/{report_code}/{access_key}', [ReportController::class, 'show']);
});





Route::prefix('auth')->group(function(){
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('auth.login');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('register', [AuthController::class, 'showRegisterPage'])->name('auth.register');
    Route::post('register', [AuthController::class, 'register'])->name('auth.register');
})->middleware(isNotLogin::class);

Route::prefix('admin')->group(function(){
    //pastiin ada dashboard ini buat dipake nanti pas mau redirect dari login
    Route::get('dashboard', function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Selalu bikin controller itu di dalam folder Controller/admin/apagitu
    // Lalu untuk view juga di buat di dalam folder resources/views/admin/apagitu
    // Cssnya tolong pake in line css aja, jangan pake file css
    // Untuk layoutnya, pake layout yang udah gua buat, di /layouts/admin.blade.php
});

Route::prefix('manager')->group(function(){
    //pastiin ada dashboard ini buat dipake nanti pas mau redirect dari login
    Route::get('dashboard', function(){
        return view('manager.dashboard');
    })->name('manager.dashboard');

    // Selalu bikin controller itu di dalam folder Controller/manager/apagitu
    // Lalu untuk view juga di buat di dalam folder resources/views/manager/apagitu
    // Cssnya tolong pake in line css aja, jangan pake file css
    // Untuk layoutnya, pake layout yang udah gua buat, di /layouts/manager.blade.php

    Route::get('/beranda', function(){
        return view('manager.beranda'); });

    Route::prefix('/laporan')->group(function(){
        Route::get('/semua', function(){
            return view('manager.laporan_semua'); })->name('manager.laporan_semua');
        Route::get('/belum_unggah', function(){
            return view('manager.laporan_belum_unggah'); })->name('manager.laporan_belum_unggah');
    });

    Route::get('/hot_topic', function(){
        return view('manager.hot_topic'); });

    Route::prefix('/unggah')->group(function(){
        Route::get('/1', function(){
            return view('manager.unggah_1'); })->name('manager.unggah_1');
        Route::get('/2', function(){
            return view('manager.unggah_2'); })->name('manager.unggah_2');
        Route::get('/3', function(){
            return view('manager.unggah_3'); })->name('manager.unggah_3');
    });
});

Route::prefix("government")->group(function(){
    //pastiin ada dashboard ini buat dipake nanti pas mau redirect dari login
    Route::prefix("perkembangan")->group(function(){

        Route::get('milestone1', function(){
            return view('government.perkembangan.milestone1');
        })->name('perkembangan.milestone1');
    });

    Route::get('dashboard', function(){
        return view('government.dashboard');
    })->name('government.dashboard');

    Route::get('home', function(){
        return view('government.home');
    })->name('government.home');

    Route::get('tindakan', function(){
        return view('government.tindakan');
    })->name('government.tindakan');


    // Selalu bikin controller itu di dalam folder Controller/government/apagitu
    // Lalu untuk view juga di buat di dalam folder resources/views/government/apagitu
    // Cssnya tolong pake in line css aja, jangan pake file css
    // Untuk layoutnya, pake layout yang udah gua buat, di /layouts/manager.blade.php
});
