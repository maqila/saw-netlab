<?php

namespace App\Http\Controllers;

use App\Models\Proses;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Alternatif;
use App\Models\Normalisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DashboardProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $normalisasis = Normalisasi::all();
        $penilaians = Penilaian::all();
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();
        return view('dashboard.proses.index', compact('normalisasis','penilaians', 'alternatifs', 'kriterias'));
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
    public function show(Proses $proses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proses $proses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proses $proses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proses $proses)
    {
        //
    }

    // export
    public function exportpdf()
    {
        $PDF = PDF::loadView('dashboard.proses.report')->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-proses.pdf');
    }
}
