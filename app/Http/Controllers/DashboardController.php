<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

        $jabatan = Jabatan::find(5);
        // dd($jabatan);
        return view('dashboard',compact('jabatan'));
    }
}
