<?php

namespace App\Http\Controllers;

use App\Models\Aslab;
use App\Models\Lab;
use Illuminate\Http\Request;
use PDF;

class DashboardAslabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aslabs = Aslab::all();
        return view('dashboard.aslab.index', compact('aslabs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $labs = Lab::all();
        return view('dashboard.aslab.create', compact('labs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aslab = Aslab::create([
            'lab_id' => $request->lab_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('dashboard/aslab')->with('success', 'Data Asisiten Laboratorium berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aslab $aslab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aslab = Aslab::find($id);
        $labs = Lab::all();
        return view('dashboard.aslab.edit', compact('aslab', 'labs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aslab = Aslab::find($id);
        $aslab->update([
            'lab_id' => $request->lab_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/dashboard/aslab');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aslab $aslab)
    {
        Aslab::destroy($aslab->id);
        return redirect('/dashboard/aslab')->with('Success', 'Data Asisten Laboratorium Berhasil Di hapus!');
    }

    //report
    public function exportpdf()
    {
        $data = Aslab::all();
        $PDF = PDF::loadView('dashboard.aslab.report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-aslab.pdf');
    }
}
