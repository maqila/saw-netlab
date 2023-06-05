<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;
use PDF;

class DashboardAlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('dashboard.alternatif.index', [
            'alternatifs' => Alternatif::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.alternatif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alternatif = Alternatif::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect('dashboard/alternatif')->with('success', 'Data Alternatif berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        return view('dashboard.alternatif.edit', compact('alternatif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect('/dashboard/alternatif');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alternatif $alternatif)
    {
        Alternatif::destroy($alternatif->id);
        return redirect('/dashboard/alternatif')->with('Success', 'Data Alternatif Berhasil Di hapus!');
    }
    
    // export
    public function exportpdf()
    {
        $data = Alternatif::all();
        $PDF = PDF::loadView('dashboard.alternatif.report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-alternatif.pdf');
    }
}
