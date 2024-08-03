<?php

use App\Http\Controllers\Admin\CaseController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\admin\DamageTypeController;
use App\Http\Controllers\admin\KecamatanController;
use App\Http\Controllers\admin\KelurahanController;
use App\Http\Controllers\Admin\MilestoneController as AdminMilestoneController;
use App\Http\Controllers\admin\ProvinceController;
use App\Http\Controllers\Admin\ReportController as AdminReportController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\HotTopicController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\Manager\HotTopicController as ManagerHotTopicController;
use App\Http\Controllers\Manager\ManagerController;
use App\Http\Controllers\Manager\ManagerHotTopicController as ManagerManagerHotTopicController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isNotLogin;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\isLogin;
use Illuminate\Http\Request as HttpRequest;

Route::get('/', [HotTopicController::class, 'index'])->name('hottopic.index');
Route::get('/about', [MainController::class, 'about'])->name('main.about');


Route::prefix('report')->group(function () {
    Route::get('', [ReportController::class, 'index'])->name('report.index');
    Route::post('', [ReportController::class, 'store'])->name('report.store');

    Route::get('/show', [ReportController::class, 'show'])->name('report.show');
    Route::post('/show', [ReportController::class, 'showPost'])->name('report.show');

    Route::get('/show_kota', [ReportController::class, 'showKota'])->name('report.show_kota');
    Route::get('/show_kecamatan', [ReportController::class, 'showKecamatan'])->name('report.show_kecamatan');
    Route::get('/show_kelurahan', [ReportController::class, 'showKelurahan'])->name('report.show_kelurahan');
});


Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('auth.login');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('register', [AuthController::class, 'showRegisterPage'])->name('auth.register');
    Route::post('register', [AuthController::class, 'register'])->name('auth.register');
})->middleware(isNotLogin::class);

Route::prefix('admin')->group(function () {
    //pastiin ada dashboard ini buat dipake nanti pas mau redirect dari login
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //User
    Route::prefix('user')->group(function () {
        Route::get('', [AdminUserController::class, 'index'])->name('user.index');
        Route::get('create', [AdminUserController::class, 'create'])->name('user.create');
        Route::get('store', [AdminUserController::class, 'store'])->name('user.store');
        Route::get('{id}', [AdminUserController::class, 'edit'])->name('user.edit');
        Route::get('/{id}/update', [AdminUserController::class, 'update'])->name('user.update');
        Route::get('/{id}/details', [AdminUserController::class, 'details'])->name('user.details');
        Route::get('/{id}/destroy', [AdminUserController::class, 'destroy'])->name('user.destroy');
    });

    //Case
    Route::prefix('case')->group(function () {
        Route::get('', [CaseController::class, 'index'])->name('case.index');
        Route::get('create', [CaseController::class, 'create'])->name('case.create');
        Route::get('store', [CaseController::class, 'store'])->name('case.store');
        Route::get('{id}', [CaseController::class, 'edit'])->name('case.edit');
        Route::get('/{id}/update', [CaseController::class, 'update'])->name('case.update');
        Route::get('/{id}/details', [CaseController::class, 'details'])->name('case.details');
        Route::get('/{id}/destroy', [CaseController::class, 'destroy'])->name('case.destroy');
    });

    //Report
    Route::prefix('report')->group(function () {
        Route::get('', [AdminReportController::class, 'index'])->name('admin.report.index');
        Route::get('/{id}/details', [AdminReportController::class, 'details'])->name('admin.report.details');
        Route::get('create', [AdminReportController::class, 'create'])->name('admin.report.create');
        Route::get('store', [AdminReportController::class, 'store'])->name('admin.report.store');
        Route::get('{id}', [AdminReportController::class, 'edit'])->name('admin.report.edit');
        Route::get('/{id}/update', [AdminReportController::class, 'update'])->name('admin.report.update');
        Route::get('/{id}/destroy', [AdminReportController::class, 'destroy'])->name('admin.report.destroy');
    });

    //Damage
    Route::prefix('damage')->group(function () {
        Route::get('', [DamageTypeController::class, 'index'])->name('damage_type.index');
        Route::get('create', [DamageTypeController::class, 'create'])->name('damage_type.create');
        Route::get('store', [DamageTypeController::class, 'store'])->name('damage_type.store');
        Route::get('{id}', [DamageTypeController::class, 'edit'])->name('damage_type.edit');
        Route::get('/{id}/update', [DamageTypeController::class, 'update'])->name('damage_type.update');
        Route::get('/{id}/destroy', [DamageTypeController::class, 'destroy'])->name('damage_type.destroy');
    });

    //Province
    Route::prefix('province')->group(function () {
        Route::get('', [ProvinceController::class, 'index'])->name('province.index');
        Route::get('create', [ProvinceController::class, 'create'])->name('province.create');
        Route::get('store', [ProvinceController::class, 'store'])->name('province.store');
        Route::get('{id}', [ProvinceController::class, 'edit'])->name('province.edit');
        Route::get('/{id}/update', [ProvinceController::class, 'update'])->name('province.update');
        Route::get('/{id}/destroy', [ProvinceController::class, 'destroy'])->name('province.destroy');
    });

    //City
    Route::prefix('city')->group(function () {
        Route::get('', [CityController::class, 'index'])->name('city.index');
        Route::get('create', [CityController::class, 'create'])->name('city.create');
        Route::get('store', [CityController::class, 'store'])->name('city.store');
        Route::get('{id}', [CityController::class, 'edit'])->name('city.edit');
        Route::get('/{id}/update', [CityController::class, 'update'])->name('city.update');
        Route::get('/{id}/destroy', [CityController::class, 'destroy'])->name('city.destroy');
    });

    //Kecamatan
    Route::prefix('kecamatan')->group(function () {
        Route::get('', [KecamatanController::class, 'index'])->name('kecamatan.index');
        Route::get('create', [KecamatanController::class, 'create'])->name('kecamatan.create');
        Route::get('store', [KecamatanController::class, 'store'])->name('kecamatan.store');
        Route::get('{id}', [KecamatanController::class, 'edit'])->name('kecamatan.edit');
        Route::get('/{id}/update', [KecamatanController::class, 'update'])->name('kecamatan.update');
        Route::get('/{id}/details', [KecamatanController::class, 'details'])->name('kecamatan.details');
        Route::get('/{id}/destroy', [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');
    });

    //Kelurahan
    Route::prefix('kelurahan')->group(function () {
        Route::get('', [KelurahanController::class, 'index'])->name('kelurahan.index');
        Route::get('', [KelurahanController::class, 'index'])->name('kelurahan.index');
        Route::get('create', [KelurahanController::class, 'create'])->name('kelurahan.create');
        Route::get('store', [KelurahanController::class, 'store'])->name('kelurahan.store');
        Route::get('{id}', [KelurahanController::class, 'edit'])->name('kelurahan.edit');
        Route::get('/{id}/update', [KelurahanController::class, 'update'])->name('kelurahan.update');
        Route::get('/{id}/details', [KelurahanController::class, 'details'])->name('kelurahan.details');
        Route::get('/{id}/destroy', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');
    });

    Route::prefix('milestone')->group(function () {
        Route::get('', [AdminMilestoneController::class, 'index'])->name('milestone.index');
        Route::get('', [AdminMilestoneController::class, 'index'])->name('milestone.index');
        Route::get('create', [AdminMilestoneController::class, 'create'])->name('milestone.create');
        Route::get('store', [AdminMilestoneController::class, 'store'])->name('milestone.store');
        Route::get('{id}', [AdminMilestoneController::class, 'edit'])->name('milestone.edit');
        Route::get('/{id}/update', [AdminMilestoneController::class, 'update'])->name('milestone.update');
        Route::get('/{id}/details', [AdminMilestoneController::class, 'details'])->name('milestone.details');
        Route::get('/{id}/destroy', [AdminMilestoneController::class, 'destroy'])->name('milestone.destroy');
    });

    Route::prefix('comment')->group(function () {
        Route::get('', [CommentController::class, 'index'])->name('comment.index');
        Route::get('', [CommentController::class, 'index'])->name('comment.index');
        Route::get('create', [CommentController::class, 'create'])->name('comment.create');
        Route::get('store', [CommentController::class, 'store'])->name('comment.store');
        Route::get('{id}', [CommentController::class, 'edit'])->name('comment.edit');
        Route::get('/{id}/update', [CommentController::class, 'update'])->name('comment.update');
        Route::get('/{id}/details', [CommentController::class, 'details'])->name('comment.details');
        Route::get('/{id}/destroy', [CommentController::class, 'destroy'])->name('comment.destroy');
    });

    // Selalu bikin controller itu di dalam folder Controller/admin/apagitu
    // Lalu untuk view juga di buat di dalam folder resources/views/admin/apagitu
    // Cssnya tolong pake in line css aja, jangan pake file css
    // Untuk layoutnya, pake layout yang udah gua buat, di /layouts/admin.blade.php
});

Route::prefix('profile')->group(function () {
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/changePassword', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
});

Route::prefix('manager')->group(function () {
    //pastiin ada dashboard ini buat dipake nanti pas mau redirect dari login
    Route::get('dashboard', [ManagerController::class, 'dashboard'])->name('manager.dashboard');

    Route::prefix('/laporan')->group(function () {
        Route::get('/semua', [ManagerController::class, 'laporan_semua'])->name('manager.laporan_semua');
        Route::get('/belum_unggah', [ManagerController::class, 'laporan_belum'])->name('manager.laporan_belum_unggah');
    });

    // Route::get('/filter', [ManagerController::class, 'filterData'])->name('manager.filter');
    Route::get('/seach/laporan', [ManagerController::class, 'searchLaporan'])->name('manager.search_laporan');
    Route::get('/seach/kasus', [ManagerController::class, 'searchHotTopic'])->name('manager.search_hot_topic');

    Route::prefix('/kasus')->group(function () {
        Route::get('/semua', [ManagerController::class, 'hot_topic'])->name('manager.hot_topic');
        Route::post('/unggah', [ManagerManagerHotTopicController::class, 'storeHotTopic'])->name('manager.hot_topic_posted');
        Route::get('/{case}/edit', [ManagerManagerHotTopicController::class, 'editHotTopic'])->name('manager.hot_topic_edit');

        Route::prefix('/edit')->group(function () {
            Route::post('/{case}/ringkasan', [ManagerManagerHotTopicController::class, 'showRingkasan'])->name('manager.edit_2');
            Route::put('/{case}/perbarui', [ManagerManagerHotTopicController::class, 'updateHotTopic'])->name('manager.postupdateHotTopic');
        });
    });

    Route::prefix('/unggah')->group(function () {
        Route::post('/1', [ManagerManagerHotTopicController::class, 'viewSelectedLaporans'])->name('manager.unggah_1');
        Route::get('/clearSelecetedIds', [ManagerManagerHotTopicController::class, 'clearSelectedLaporans'])->name('manager.clearSelectedIds');
        Route::post('/2', [function () {
            return view('manager.unggah_kasus.unggah_2');
        }])->name('manager.unggah_2');
        Route::get('/3', [function () {
            return view('manager.unggah_kasus.unggah_3');
        }])->name('manager.unggah_3');

        Route::prefix('/scroll')->group(function () {
            Route::get('/isi', [ManagerManagerHotTopicController::class, 'dropdown_unggah'])->name('manager.scroll_isi_kasus');
        });
    });

    Route::prefix('/tambah')->group(function () {
        Route::post('/1', [ManagerManagerHotTopicController::class, 'viewSelectedReports'])->name('manager.tambah_1');
        Route::post('/ubah/case_id', [ManagerManagerHotTopicController::class, 'update_case_id'])->name('manager.updateHotTopic');
        Route::get('/clearSelecetedIds', [ManagerManagerHotTopicController::class, 'clearSelectedLaporans'])->name('manager.clearSelectedIds');
    });
});

Route::prefix("government")->group(function () {
    //pastiin ada dashboard ini buat dipake nanti pas mau redirect dari login
    // Route::prefix("perkembangan")->group(function(){

    //     Route::get('/{id}', [GovernmentController::class, 'perkembangan'])->name('perkembangan.milestone1');
    // });

    Route::get('perkembangan/{id}', [GovernmentController::class, 'milestone'])->name('government.milestone');

    // Route::get('search', [GovernmentController::class, 'search'])->name('government.search');

    Route::get('dashboard', [GovernmentController::class, 'home'])->name('government.dashboard');

    // Route::get('home', [GovernmentController::class, 'home'])->name('government.home');

    Route::get('tindakan', [GovernmentController::class, 'tindakan'])->name('government.tindakan');

    Route::post('store', [GovernmentController::class, 'tindakanStore'])->name('government.store');

    Route::post('destroy', [GovernmentController::class, 'tindakanDestroy'])->name('government.destroy');
});

Route::prefix('hottopic')->group(function () {
    Route::get('/', [HotTopicController::class, 'index'])->name('hottopic.index');
    Route::get('/{case_number}/detail', [HotTopicController::class, 'detail'])->name('hottopic.detail');
    Route::get('/bookmarks', [HotTopicController::class, 'bookmarks'])->name('hottopic.bookmarks')->middleware([isLogin::class]);
    Route::post('/add_comment', [HotTopicController::class, 'addComment'])->name('hottopic.add_comment');
    Route::post('/click_like', [HotTopicController::class, 'click_like'])->name('hottopic.click_like')->middleware([isLogin::class]);
    Route::post('/click_bookmark', [HotTopicController::class, 'click_bookmark'])->name('hottopic.click_bookmark')->middleware([isLogin::class]);
    Route::post('/report', [HotTopicController::class, 'report'])->name('hottopic.report')->middleware([isLogin::class]);
});


Route::get('/coba', function () {
    return view('cobaBugGambar');
});

Route::get('/coba2', function (HttpRequest $request) {
    // dump($request->all());
    return view('test.omg');
});
Route::post('/coba2', function (HttpRequest $request) {
    dump($request->all());
    echo $request->input('title');
    echo $request->input('damage_type');
    echo $request->input('address');
    return view('test.omg');
});
