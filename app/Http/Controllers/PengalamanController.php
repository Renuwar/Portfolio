<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function index($biodataId)
    {
        $pengalaman = Pengalaman::where('biodata_id', $biodataId)->get();
        return view('pengalaman.index', compact('pengalaman'));
    }
}
