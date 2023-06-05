<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;
use PDF;

class DashboardPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penilaians = Penilaian::all();
        return view('dashboard.penilaian.index', compact('penilaians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Penilaian $penilaian)
    {
        $penilaian->delete();

        return redirect('/dashboard/penilaian')->with('success', 'Data Penilaian berhasil dihapus!');
    }

    //report
    public function exportpdf()
    {
        $data = Penilaian::all();
        $PDF = PDF::loadView('dashboard.penilaian.report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-Nilai.pdf');
    }
}
