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
use App\Models\User;
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

        return view(
            'manager.laporan.laporan_semua',
            [
                'laporans' => $laporans
            ]
        );
    }
    public function laporan_belum()
    {
        $laporans = Report::where('case_id', null)->paginate(9);

        return view(
            'manager.laporan.laporan_belum_unggah',
            [
                'laporans' => $laporans
            ]
        );
    }

    public function hot_topic()
    {
        $cases = ThisCase::paginate(13);
        return view(
            'manager.hot_topic.hot_topic',
            [
                'cases' => $cases,
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

    public function searchLaporan(Request $request)
    {
        $search = $request->input('search');

        $laporans = Report::where(function ($query) use ($search) {
            $query->where('report_code', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
                ->orWhereHas('damage_type', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })
                ->orWhere('created_at', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhereHas('kelurahan', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                        ->orWhereHas('kecamatan', function ($q) use ($search) {
                            $q->where('name', 'like', '%' . $search . '%')
                                ->orWhereHas('kota', function ($q) use ($search) {
                                    $q->where('name', 'like', '%' . $search . '%')
                                        ->orWhereHas('provinsi', function ($q) use ($search) {
                                            $q->where('name', 'like', '%' . $search . '%');
                                        });
                                });
                        });
                });
        })->paginate(9);
        return view('manager.laporan.laporan_belum_unggah', ['laporans' => $laporans, 'search' => $search]);
    }

    public function searchHotTopic(Request $request)
    {
        $search = $request->input('search');

        $cases = ThisCase::with(['damage_type', 'kelurahan.kecamatan.kota.provinsi', 'creator', 'government'])
            ->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhereHas('damage_type', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhere('created_at', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhereHas('kelurahan', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%')
                            ->orWhereHas('kecamatan', function ($q) use ($search) {
                                $q->where('name', 'like', '%' . $search . '%')
                                    ->orWhereHas('kota', function ($q) use ($search) {
                                        $q->where('name', 'like', '%' . $search . '%')
                                            ->orWhereHas('provinsi', function ($q) use ($search) {
                                                $q->where('name', 'like', '%' . $search . '%');
                                            });
                                    });
                            });
                    });
            })
            ->paginate(9);

        return view('manager.hot_topic.hot_topic', ['cases' => $cases, 'search' => $search]);
    }
}
