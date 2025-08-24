<?php

namespace App\Http\Controllers\Bendahara;
use App\Http\Controllers\Controller;
use App\Models\DompetKas;
use App\Models\Transaksi;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $saldoKas = DompetKas::sum('balance');

        $bulanIni = Carbon::now()->month;
        $tahunIni = Carbon::now()->year;

        $pemasukanBulanIni = Transaksi::where('type', 'pemasukan')
            ->whereMonth('created_at', $bulanIni)
            ->whereYear('created_at', $tahunIni)
            ->sum('amount');

        $pengeluaranBulanIni = Transaksi::where('type', 'pengeluaran')
            ->whereMonth('created_at', $bulanIni)
            ->whereYear('created_at', $tahunIni)
            ->sum('amount');

        return view('bendahara.dashboard', compact('saldoKas', 'pemasukanBulanIni', 'pengeluaranBulanIni'));
    }
}

