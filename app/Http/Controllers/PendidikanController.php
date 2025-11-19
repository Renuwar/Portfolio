<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index($biodataId)
    {
        $pendidikan = Pendidikan::where('biodata_id', $biodataId)->get();
        return view('pendidikan.index', compact('pendidikan'));
    }
}
