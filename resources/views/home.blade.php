<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Home</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff; /* putih */
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        nav {
            background-color: #007bff; /* biru utama */
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        nav .navbar-brand {
            color: white;
            font-weight: 700;
            font-size: 22px;
        }
        nav .nav-link {
            color: #e3f2fd !important;
            margin-right: 15px;
            font-weight: 500;
        }
        nav .nav-link:hover {
            color: #ffffff !important;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #cce5ff, #e3f2fd); /* biru muda-putih */
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #0d47a1; /* biru gelap */
            padding: 20px;
        }
        .hero h1 {
            font-size: 56px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #0056b3;
        }
        .hero p {
            font-size: 20px;
            color: #374151;
            max-width: 700px;
        }
        .btn-custom {
            margin-top: 25px;
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 30px;
            background-color: #007bff;
            color: white;
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }

        /* Feature Section */
        .features {
            background-color: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }
        .features h2 {
            font-size: 36px;
            font-weight: 700;
            color: #0d47a1;
            margin-bottom: 40px;
        }
        .feature-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 30px;
            background-color: #ffffff;
            transition: 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.15);
        }
        .feature-card img {
            width: 80px;
            margin-bottom: 15px;
        }
        .feature-card h5 {
            font-weight: 600;
            color: #007bff;
            margin-top: 10px;
        }
        .feature-card p {
            color: #4b5563;
            font-size: 15px;
        }

        /* Footer */
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">EduLearn</a>
            <div>
                <a href="/home" class="nav-link d-inline">Home</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Selamat Datang di EduLearn 🎓</h1>
        <p>Platform belajar online interaktif yang membantu kamu mengembangkan keterampilan baru di mana pun dan kapan pun.</p>
        <a href="#" class="btn btn-custom">Mulai Belajar Sekarang</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>© {{ date('Y') }} EduLearn | Dibuat dengan ❤ untuk Pembelajar Indonesia</p>
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
