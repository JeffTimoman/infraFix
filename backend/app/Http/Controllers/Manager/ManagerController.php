<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\DamageType;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Report;
use App\Models\ThisCase;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function dashboard()
    {
        $laporans_count = Report::count();
        $laporans_belum_count = Report::where('case_id', null)->count();
        $hot_topics_count = ThisCase::count();
        $recent_reports = Report::orderBy('created_at', 'desc')->paginate(11);
        return view(
            'manager.dashboard',
            [
                'laporans_count' => $laporans_count,
                'laporans_belum_count' => $laporans_belum_count,
                'hot_topics_count' => $hot_topics_count,
                'recent_reports' => $recent_reports
            ]
        );
    }

    public function laporan_semua()
    {
        $laporans = Report::paginate(13);
        $filter = $this->filter();
        return view(
            'manager.laporan.laporan_semua',
            [
                'laporans' => $laporans,
                'filter' => $filter
            ]
        );
    }
    public function laporan_belum()
    {
        $laporans = Report::where('case_id', null)->paginate(9);
        $filter = $this->filter();
        return view(
            'manager.laporan.laporan_belum_unggah',
            [
                'laporans' => $laporans,
                'filter' => $filter
            ]
        );
    }

    public function hot_topic()
    {
        $cases = ThisCase::paginate(13);
        $filter = $this->filter();
        return view(
            'manager.hot_topic',
            [
                'cases' => $cases,
                'filter' => $filter
            ]
        );
    }

    public function filter()
    {
        $datas = [
            'damage_type' => DamageType::all(),
            'kelurahan' => Kelurahan::all(),
            'kecamatan' => Kecamatan::all(),
            'kota' => Kota::all(),
            'provinsi' => Provinsi::all()
        ];
        return $datas;
    }
}
