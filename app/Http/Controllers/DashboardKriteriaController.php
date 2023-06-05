<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class DashboardKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::All();
        return view('dashboard.kriteria.index', compact('kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datakriteria = Kriteria::pluck('nama', 'id');
        $model = new Kriteria();
        $kodeBaru = $model->generateKode();
        return view('dashboard.kriteria.create', compact('kodeBaru', 'datakriteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kriteria = Kriteria::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'bobot' => $request->bobot,
        ]);

        return redirect('dashboard/kriteria')->with('success', 'Data Kriteria berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        return view('dashboard.kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'bobot' => $request->bobot,
        ]);
        return redirect('/dashboard/kriteria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();
        return redirect('/dashboard/kriteria')->with('Success', 'Data Kriteria Berhasil Dihapus!');
    }
}
