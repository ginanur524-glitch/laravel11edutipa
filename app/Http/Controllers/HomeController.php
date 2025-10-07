<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Andi Saputra', 'tahun' => 2023],
            ['judul' => 'Belajar PHP Modern', 'penulis' => 'Dewi Lestari', 'tahun' => 2022],
            ['judul' => 'Mastering JavaScript', 'penulis' => 'Rudi Hartono', 'tahun' => 2021],
            ['judul' => 'Panduan HTML & CSS', 'penulis' => 'Nina Kartika', 'tahun' => 2020],
            ['judul' => 'Membangun Web Dinamis', 'penulis' => 'Budi Santoso', 'tahun' => 2024],
        ];

        return view('home', compact('books'));
    }
}
