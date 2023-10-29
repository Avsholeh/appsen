<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemens = Departemen::paginate(10);
        return view('departemen.index', compact('departemens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departemen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $departemen = new Departemen;
        $departemen->nama = $request->nama;
        $departemen->deskripsi = $request->deskripsi;
        $departemen->save();

        return redirect()->route('departemen.index')
            ->with('message', 'Departemen berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departemen = Departemen::find($id);
        return view('departemen.edit', compact('departemen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $departemen = Departemen::find($id);
        $departemen->nama = $request->nama;
        $departemen->deskripsi = $request->deskripsi;
        $departemen->save();

        return redirect()->route('departemen.index')
            ->with('message', 'Departemen berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departemen = Departemen::find($id);
        $departemen->delete();

        return redirect()->route('departemen.index')
            ->with('message', 'Departemen berhasil dihapus');
    }
}
