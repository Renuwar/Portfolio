<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keahlian;

class KeahlianController extends Controller
{
    public function index($biodataId)
    {
        // Fetch skills for this biodata
        $keahlian = Keahlian::where('biodata_id', $biodataId)->get();

        // Pass to the view
        return view('keahlian.index', compact('keahlian'));
    }
}
