<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article; // Menggunakan namespace yang benar untuk model Article

class WebController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Menggunakan variabel $articles (bentuk jamak) yang lebih deskriptif
        return view('article', ['articles' => $articles]); // Menggunakan tanda petik tunggal pada 'article' dan menggunakan variabel $articles pada array
    }
}
