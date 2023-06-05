<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Normalisasi;
use Illuminate\Http\Request;

class DashboardNormalisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $normalisasis = Normalisasi::all();
        return view('dashboard.normalisasi.index', compact('normalisasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriterias = Kriteria::all(); // Mengambil semua data kriteria
        return view('dashboard.normalisasi.create', ['kriterias' => $kriterias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $normalisasi = Normalisasi::create([
            'kriteria_id' => $request->kriteria_id,
            'pilihan' => $request->pilihan,
        ]);

        return redirect('dashboard/normalisasi')->with('success', 'Data Normalisasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Normalisasi $normalisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $normalisasi = Normalisasi::findOrFail($id); // Mengambil data normalisasi berdasarkan ID
        $kriterias = Kriteria::all(); // Mengambil semua data kriteria
        return view('dashboard.normalisasi.edit', compact('normalisasi', 'kriterias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Normalisasi $normalisasi)
    {
        $normalisasi->update([
            'kriteria_id' => $request->kriteria_id,
            'pilihan' => $request->pilihan,
        ]);

        return redirect('/dashboard/normalisasi')->with('success', 'Data Normalisasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Normalisasi $normalisasi)
    {
        $normalisasi->delete();

        return redirect('/dashboard/normalisasi')->with('success', 'Data Normalisasi berhasil dihapus!');
    }
}
