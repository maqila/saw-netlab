<?php

namespace App\Http\Controllers;

use App\Models\Aslab;
use App\Models\Lab;
use Illuminate\Http\Request;

class DashboardLabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labs = Lab::all();
        return view('dashboard.lab.index',compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aslab = Aslab::all(); // Mengambil semua data aslab
        return view('dashboard.lab.create', compact('aslab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lab = Lab::create([
            'nama' => $request->nama,
        ]);

        return redirect('dashboard/lab')->with('success', 'Data Laboratorium berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lab $lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lab = Lab::findOrFail($id); // Mengambil data lab berdasarkan ID
        return view('dashboard.lab.edit', compact('lab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lab $lab)
    {
        $lab->update([
            'nama' => $request->nama,
        ]);

        return redirect('/dashboard/lab')->with('success', 'Data Laboratorium berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lab $lab)
    {
        $lab->delete();

        return redirect('/dashboard/lab')->with('success', 'Data Laboratorium berhasil dihapus!');
    }
}
