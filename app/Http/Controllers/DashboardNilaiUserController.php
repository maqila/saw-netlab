<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\NilaiUser;
use App\Models\Normalisasi;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class DashboardNilaiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penilaians = Penilaian::all();
        return view('dashboard.nilaiUser.index', compact('penilaians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penilaians = Penilaian::all();
        $alternatifs = Alternatif::all();
        $normalisasis = Normalisasi::all();
        return view('dashboard.nilaiUser.create', compact('penilaians', 'alternatifs', 'normalisasis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $normalisasiIds = (array) $request->input('normalisasi_id');
        $nilais = (array) $request->input('nilai');

        // Get the count of rows
        $rowCount = count($normalisasiIds);

        // Loop through each row of data
        for ($i = 0; $i < $rowCount; $i++) {
            $penilaian = Penilaian::create([
                'alternatif_id' => $request->alternatif_id,
                'normalisasi_id' => $normalisasiIds[$i],
                'nilai' => $nilais[$i],
            ]);
        }

        return redirect('dashboard/nilai')->with('success', 'Data Penilaian berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($penilaian)
    {
        // $penilaian->delete();

        // return redirect('/dashboard/nilai')->with('success', 'Data Penilaian berhasil dihapus!');
        $penilaian = Penilaian::find($penilaian);

        if ($penilaian) {
            $penilaian->delete();
            return redirect('/dashboard/nilai')->with('success', 'Data Penilaian berhasil dihapus!');
        } else {
            // Handle jika penilaian tidak ditemukan
        }
    }
}
