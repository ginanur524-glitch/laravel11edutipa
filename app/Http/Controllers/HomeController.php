<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $books = [
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Andi Saputra', 'tahun' => 2023],
            ['judul' => 'Belajar PHP Modern', 'penulis' => 'Dewi Lestari', 'tahun' => 2022],
            ['judul' => 'Mastering JavaScript', 'penulis' => 'Rudi Hartono', 'tahun' => 2021],
            ['judul' => 'Panduan HTML & CSS', 'penulis' => 'Nina Kartika', 'tahun' => 2020],
            ['judul' => 'Membangun Web Dinamis', 'penulis' => 'Budi Santoso', 'tahun' => 2024],
        ];

        $message = session('message', "✨ Selamat datang di EduLearn Library! 🌟 Nikmati perjalanan membaca dan temukan inspirasi baru setiap hari.");

        return view('home', compact('books', 'message'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Tidak mengirim notifikasi sukses, langsung kembali ke halaman utama
        return redirect()->route('home');
    }
}