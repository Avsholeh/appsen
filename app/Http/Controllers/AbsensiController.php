<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        $selectedDate = Carbon::today();
        try {
            if (!empty($request->tanggal)) {
                $selectedDate = Carbon::createFromFormat('Y-m-d', $request->tanggal);
            }
        } catch (\Exception $th) {}
        
        $users = User::with([
            'absensi' => function ($q) use ($selectedDate) {
                $q->where('tanggal', $selectedDate->format('Y-m-d'));
            }
        ]);

        $absensi = $users->get()->pluck('absensi');
        
        // Menghitung jumlah karyawan yang hadir
        $hadir = count($absensi->filter(function($absensi) {
            return count($absensi) > 0;
        }));
        
        // Menghitung jumlah karyawan yang izin
        $izin = count($absensi->filter(function($absensi) {
            return count($absensi) === 0;
        }));
        
        $users = $users->paginate(10)->withQueryString();
        return view('absensi.index', compact('users', 'selectedDate', 'hadir', 'izin'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Absensi $absensi)
    {
        //
    }

    public function edit(Absensi $absensi)
    {
        //
    }

    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect()->route('absensi.index')->with([
            'message' => 'Absensi berhasil dihapus'
        ]);
    }
}
