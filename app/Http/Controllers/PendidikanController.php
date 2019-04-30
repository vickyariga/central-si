<?php

namespace App\Http\Controllers;

use App\UserPendidikan;
use Illuminate\Http\Request;


class PendidikanController extends Controller
{
     public function index()
    {
        $pendidikans = UserPendidikan::paginate(25);
        return view('backend.pendidikan.index', compact('pendidikans'));
    }
}
