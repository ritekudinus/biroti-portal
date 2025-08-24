<?php

namespace App\Http\Controllers\Bendahara;

use App\Http\Controllers\Controller;
use App\Models\DompetKas;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DompetKasController extends Controller
{
    public function index()
    {
        $dompet = DompetKas::all();
        return view('bendahara.dompet.index', compact('dompet'));
    }

    public function create()
    {
        return view('bendahara.dompet.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:dompet_kas,name',
            'balance' => 'required|numeric|min:0',
        ]);

        // Simpan dompet kas baru
        $dompet = DompetKas::create([
            'name' => $request->name,
            'balance' => $request->balance,
        ]);

        // Jika saldo awal lebih dari 0, otomatis catat sebagai pemasukan
        if ($request->balance > 0) {
            Transaksi::create([
                'dompet_kas_id' => $dompet->id,
                'type' => 'pemasukan',
                'amount' => $request->balance,
                'description' => 'Saldo awal ' . $request->name,
            ]);
        }

        return redirect()->route('bendahara.dompet.index')
            ->with('success', 'Dompet kas berhasil ditambahkan.');
    }
}
