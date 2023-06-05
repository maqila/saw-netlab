<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;
use PDF;

class DashboardHasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.hasil.index');
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
    public function show(Hasil $hasil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hasil $hasil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hasil $hasil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hasil $hasil)
    {
        //
    }

    public function exportpdf()
    {
        $PDF = PDF::loadView('dashboard.hasil.report')->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-Hasil.pdf');
    }
}
