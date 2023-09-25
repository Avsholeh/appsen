<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    function index()
    {
        $departemens = Departemen::query()->paginate(5);
        return view('departemen.index', compact('departemens'));
    }
}
