<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $allTransaksi = transaksi::all();
        $pemasukkan = transaksi::where('tipe', 1)->sum('nominal');
        $pengeluaran = transaksi::where('tipe', 0)->sum('nominal');
        $totalTransaksiPemasukkan = transaksi::where('tipe', 1)->count();
        $totalTransaksiPengeluaran = transaksi::where('tipe', 0)->count();

        return view('transaksi.index', compact(
            'allTransaksi',
            'pemasukkan',
            'pengeluaran',
            'totalTransaksiPemasukkan',
            'totalTransaksiPengeluaran'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nominal' => 'required',
            'deskripsi' => 'required',
            'tipe' => 'required',
        ]);
        transaksi::create([
            'nominal' => $request->nominal,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
        ]);
        return redirect('/');
    }

    public function getById($id)
    {
        $transaksi = transaksi::find($id);
        return view('transaksi.update', compact(
            'transaksi',
        ));
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            abort(404);
        }
        $validatedData = $request->validate([
            'nominal' => 'required',
            'deskripsi' => 'required',
            'tipe' => 'required|in:0,1',
        ]);

        $transaksi->update($validatedData);
        return redirect('/');
    }

    public function destroy($id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->delete();
        return redirect('/');
    }
}
