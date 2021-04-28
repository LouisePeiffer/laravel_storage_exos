<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home() {
        $allFiles = File::all();
        return view('home', compact('allFiles'));
    }
}
