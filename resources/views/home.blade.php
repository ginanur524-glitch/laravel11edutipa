<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>EduLearn - Perpustakaan Digital</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(180deg, #c7d2fe 0%, #a5b4fc 40%, #e0e7ff 90%);
      background-attachment: fixed;
      overflow-x: hidden;
    }
    .title-font {
      font-family: 'Playfair Display', serif;
    }
    .glass {
      background: rgba(255, 255, 255, 0.78);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }
    .magic-border {
      border: 1px solid rgba(147, 197, 253, 0.6);
    }
  </style>
</head>
<body class="min-h-screen flex flex-col">

  <!-- 🔹 NAVBAR -->
  <nav class="bg-gradient-to-r from-indigo-700 via-blue-700 to-indigo-600 text-white shadow-lg py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
      <h1 class="text-2xl title-font tracking-wide flex items-center gap-2">
        📘 <span>EduLearn Library</span>
      </h1>
      <a href="/" class="hover:underline">Beranda</a>
    </div>
  </nav>

  <!-- 🔹 HEADER -->
  <header class="text-center mt-12 mb-8">
    <h2 class="text-5xl title-font font-bold text-indigo-900">Perpustakaan Digital EduLearn</h2>
    <div class="flex justify-center my-3">
      <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 via-blue-400 to-indigo-500 rounded-full shadow-md"></div>
    </div>
    <p class="text-gray-700 text-lg italic leading-relaxed">
      Sumber pengetahuan modern untuk mendukung proses belajar tanpa batas 📚<br>
      <span class="text-indigo-800 font-medium">
        💬 Kirim pesanmu dan jadilah bagian dari komunitas pembelajar EduLearn!
      </span>
    </p>
  </header>

  <!-- 💌 FORM KIRIM PESAN -->
  <!-- 💌 Form kirim pesan -->
<section class="flex flex-col items-center mt-6 mb-6">
  <div class="bg-white/70 backdrop-blur-lg border border-indigo-100 rounded-xl px-6 py-4 w-11/12 md:w-2/3 lg:w-1/2 shadow-md">
    <p class="text-center text-indigo-800 font-semibold text-base bg-indigo-100 px-4 py-2 rounded-full shadow-sm border border-indigo-200 mb-3">
      🌟 Selamat datang di <span class="font-bold">EduLearn Library!</span> 🌟
    </p>

    <form action="{{ route('send.message') }}" method="POST" class="flex justify-center items-center gap-3">
      @csrf
      <input 
        type="text" 
        name="message" 
        placeholder="Tulis pesanmu di sini..." 
        class="border border-indigo-300 rounded-full px-4 py-2 w-3/4 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition text-sm"
      >
      <button 
        type="submit" 
        class="bg-indigo-600 text-white px-5 py-2 rounded-full hover:bg-indigo-700 transition font-medium shadow-sm text-sm">
        Kirim
      </button>
    </form>
  </div>
</section>



  <!-- 📚 DAFTAR BUKU -->
  <main class="flex-grow flex justify-center items-start">
    <div class="glass magic-border rounded-2xl p-8 w-11/12 md:w-3/4 lg:w-2/3 mb-12 shadow-xl">
      <table class="w-full border-collapse text-center">
        <thead>
          <tr class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white rounded-t-xl">
            <th class="py-3 px-4">#</th>
            <th class="py-3 px-4">Judul Buku</th>
            <th class="py-3 px-4">Penulis</th>
            <th class="py-3 px-4">Tahun Terbit</th>
          </tr>
        </thead>
        <tbody>
          @foreach($books as $index => $book)
            <tr class="border-b hover:bg-indigo-100 transition duration-200">
              <td class="py-3 px-4 font-semibold text-indigo-700">{{ $index + 1 }}</td>
              <td class="py-3 px-4 text-gray-800">{{ $book['judul'] }}</td>
              <td class="py-3 px-4 text-gray-700">{{ $book['penulis'] }}</td>
              <td class="py-3 px-4 text-gray-700">{{ $book['tahun'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>

  <!-- 🔹 FOOTER -->
  <footer class="bg-gradient-to-r from-indigo-700 to-blue-700 text-white text-center py-5 mt-auto shadow-inner">
    <p class="italic">© {{ date('Y') }} EduLearn | Belajar Cerdas, Menjelajah Ilmu Tanpa Batas 🌍</p>
  </footer>

</body>
</html>
