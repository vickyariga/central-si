<?php

namespace App\Http\Controllers;

use App\UserPendidikan;
use Illuminate\Http\Request;


class Mahasiswa2Controller extends Controller
{
     public function index()
    {
        $mahasiswa2s = UserPendidikan::paginate(25);
        return view('backend.mahasiswa2.index', compact('mahasiswa2s'));
    }
}
