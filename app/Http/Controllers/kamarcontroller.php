<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kamarcontroller extends Controller
{

    public function show()
    {
    return view('datakamaradmin.data_kamar');
    }
}
