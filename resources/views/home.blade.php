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
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .magic-border {
      border: 1px solid rgba(147, 197, 253, 0.6);
    }
    .star {
      position: absolute;
      width: 3px;
      height: 3px;
      background: white;
      border-radius: 50%;
      opacity: 0.8;
      animation: twinkle 3s infinite ease-in-out;
    }
    @keyframes twinkle {
      0%, 100% { opacity: 0.3; transform: scale(1); }
      50% { opacity: 1; transform: scale(1.4); }
    }

    .nav-link {
      position: relative;
      padding: 0.5rem 1rem;
      transition: all 0.3s ease;
      font-weight: 500;
      letter-spacing: 0.5px;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0%;
      height: 2px;
      background: linear-gradient(to right, #a5b4fc, #93c5fd);
      transition: all 0.4s ease;
      border-radius: 2px;
    }

    .nav-link:hover {
      color: #e0e7ff;
      text-shadow: 0 0 8px rgba(165, 180, 252, 0.8);
    }

    .nav-link:hover::after {
      width: 70%;
    }
  </style>
</head>
<body class="min-h-screen flex flex-col relative">

  <!-- Background stars -->
  <div class="absolute inset-0 overflow-hidden z-0">
    <div class="star" style="top:10%; left:20%; animation-delay:0s"></div>
    <div class="star" style="top:40%; left:80%; animation-delay:1s"></div>
    <div class="star" style="top:70%; left:60%; animation-delay:2s"></div>
    <div class="star" style="top:30%; left:50%; animation-delay:0.5s"></div>
    <div class="star" style="top:80%; left:10%; animation-delay:1.5s"></div>
  </div>

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-indigo-700 via-blue-700 to-indigo-600 text-white shadow-lg py-4 relative z-10">
    <div class="container mx-auto flex justify-between items-center px-6">
      <h1 class="text-2xl title-font tracking-wide flex items-center gap-2">
        📘 <span>EduLearn Library</span>
      </h1>
      <a href="/" class="nav-link"> Beranda</a>
    </div>
  </nav>

  <!-- Hero -->
  <header class="text-center mt-12 mb-8 relative z-10">
    <h2 class="text-5xl title-font font-bold text-indigo-900 drop-shadow-lg">Perpustakaan Digital EduLearn</h2>
    <div class="flex justify-center my-3">
      <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 via-blue-400 to-indigo-500 rounded-full shadow-md"></div>
    </div>
    <p class="text-gray-700 text-lg italic">Sumber pengetahuan modern untuk mendukung proses belajar tanpa batas 📚</p>
  </header>

  <!-- Daftar Buku -->
  <main class="flex-grow flex justify-center items-start relative z-10">
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
            <tr class="border-b hover:bg-indigo-100 hover:shadow-lg hover:scale-[1.01] transition transform duration-200">
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

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-indigo-700 to-blue-700 text-white text-center py-5 mt-auto relative z-10 shadow-inner">
    <p class="italic">© {{ date('Y') }} EduLearn | Belajar Cerdas, Menjelajah Ilmu Tanpa Batas 🌍</p>
  </footer>

</body>
</html>
