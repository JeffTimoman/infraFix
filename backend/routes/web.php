<?php

use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\DamageTypeController;
use App\Http\Controllers\admin\KecamatanController;
use App\Http\Controllers\admin\KelurahanController;
use App\Http\Controllers\admin\ProvinceController;
use App\Http\Controllers\Admin\ReportController as AdminReportController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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

    //User
    Route::prefix('user')->group(function(){
        Route::get('', [AdminUserController::class, 'index'])->name('user.index');
    });

    //Report
    Route::prefix('report')->group(function(){
        Route::get('', [AdminReportController::class, 'index'])->name('report.index');
    });

    //Damage
    Route::prefix('damage')->group(function(){
        Route::get('', [DamageTypeController::class, 'index'])->name('damage_type.index');
    });

    //Province
    Route::prefix('province')->group(function(){
        Route::get('', [ProvinceController::class, 'index'])->name('province.index');
    });

    //City
    Route::prefix('city')->group(function(){
        Route::get('', [CityController::class, 'index'])->name('city.index');
        Route::get('create', [CityController::class, 'create'])->name('city.create');

    });

     //Kecamatan
     Route::prefix('kecamatan')->group(function(){
        Route::get('', [KecamatanController::class, 'index'])->name('kecamatan.index');
    });

    //Kelurahan
    Route::prefix('kelurahan')->group(function(){
        Route::get('', [KelurahanController::class, 'index'])->name('kelurahan.index');
    });

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
});

Route::prefix("government")->group(function(){
    //pastiin ada dashboard ini buat dipake nanti pas mau redirect dari login
    Route::get('dashboard', function(){
        return view('government.dashboard');
    })->name('government.dashboard');

    // Selalu bikin controller itu di dalam folder Controller/government/apagitu
    // Lalu untuk view juga di buat di dalam folder resources/views/government/apagitu
    // Cssnya tolong pake in line css aja, jangan pake file css
    // Untuk layoutnya, pake layout yang udah gua buat, di /layouts/manager.blade.php
});
