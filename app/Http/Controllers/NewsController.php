<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        // Ambil data berita dari database
        $news = News::orderBy('created_at', 'desc')->get();

        // Kirim data $news ke view 'index' (bukan 'news.index')
        return view('index', compact('news'));
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|string',
        ]);
    
        // Isi user_id secara otomatis
        News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $validated['image'] ?? null,
            'user_id' => Auth::id(), // ID pengguna yang login
        ]);
    
        return redirect()->back()->with('success', 'Berita berhasil ditambahkan.');
    }
}
