<?php

namespace App\Http\Controllers;

use App\Models\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        $biodata = Biodata::first();

        // fallback if no data
        if (!$biodata) {
            $biodata = (object)[
                'nama' => 'Your Name',
                'email' => 'email@example.com',
                'telepon' => '08123456789',
                'alamat' => 'Your Address',
            ];
        }

        // pass $biodata to the view
        return view('biodata.index', compact('biodata'));
    }
}
