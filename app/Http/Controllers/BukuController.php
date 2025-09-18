<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    // READ - pakai Eloquent
    public function index()
    {
        $bukus = Buku::all(); // Eloquent
        return view('buku.index', compact('bukus'));
    }

    // CREATE form
    public function create()
    {
        return view('buku.create');
    }

    // STORE - pakai Eloquent
    public function store(Request $request)
    {
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        return redirect()->route('buku.index');
    }

    // EDIT form
    public function edit($id)
    {
        $buku = DB::table('bukus')->where('id', $id)->first(); // Query Builder
        return view('buku.edit', compact('buku'));
    }

    // UPDATE - pakai Query Builder
    public function update(Request $request, $id)
    {
        DB::table('bukus')->where('id', $id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
            'updated_at' => now(),
        ]);

        return redirect()->route('buku.index');
    }

    // DELETE - pakai Query Builder
    public function destroy($id)
    {
        DB::table('bukus')->where('id', $id)->delete();
        return redirect()->route('buku.index');
    }
}
