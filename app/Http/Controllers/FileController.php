<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // INDEX
    public function index() {
        $allFiles = File::all();
        return view('backend.admin', compact('allFiles'));
    }
    // CREATE
    public function create () {
        return view('backend.pages.addFile');
    }
    // STORE
    public function store (Request $request) {
        // STORAGE
        Storage::put('public/img/', $request->file('img'));
        //DB
        $img = new File();
        $img->src = $request->file('img')->hashName();
        $img->save();
        return redirect()->back();
    }
    // DELETE
    public function destroy (File $id) {
        // Delete storage
        Storage::delete('public/img/' . $id->img);
        // Delete DB
        $id->delete();
        return redirect()->back();
    }
}
