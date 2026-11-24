<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;

class CatatanController extends Controller
{
    public function index()
    {
        return view('catatan.index');
    }

    public function store(Request $request)
    {
        Catatan::create($request->only(['judul', 'isi']));

        return redirect('/catatan')->with('sukses', 'Catatan berhasil disimpan!');
    }
}