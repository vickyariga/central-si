<?php

namespace App\Http\Controllers;

use App\UserPendidikan;
use Illuminate\Http\Request;


class Dosen2Controller extends Controller
{
     public function index()
    {
        $dosen2s = UserPendidikan::paginate(25);
        return view('backend.dosen2.index', compact('dosen2s'));
    }

     public function create()
    {
        return view('backend.dosen2.create');
    }
}
