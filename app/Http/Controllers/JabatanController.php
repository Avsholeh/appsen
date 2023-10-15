<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

    class JabatanController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //

            $jabatans = Jabatan::with('users:id,jabatan_id')->select('id','deskripsi','nama')->paginate();
            // $users = Jabatan->users();
            // dd($jabatans);
            return view('jabatan.index',compact('jabatans'));
        }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi

        // dd($request);
       
        $request->validate([
            'nama'=>'required',
            'deskripsi'=>'required',

        ]);
        //simpan
        $jabatan = new Jabatan;
        $jabatan->nama = $request->nama;
        $jabatan->deskripsi = $request->deskripsi;
        $jabatan->save();

        return redirect()->route('jabatan.index')
        ->with('message','Data berhasil  ditambahkan');
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

        //
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit',compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->input());
        //
        $request->validate([
            'nama'=>'required',
            'deskripsi'=>'required',

        ]);
        //simpan
        // dd($jabatan)
        $jabatan = Jabatan::find($request->id);
        $jabatan->nama = $request->nama;
        $jabatan->deskripsi = $request->deskripsi;
        $jabatan->save();

        return redirect()->route('jabatan.index')
        ->with('message','Data berhasil  diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return redirect()->route('jabatan.index')
        ->with('message','Data berhasil  dihapus');
    }
}
