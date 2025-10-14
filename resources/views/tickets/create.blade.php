<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>🎬 Pesan Tiket Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle at top, #0d1b2a, #000);
            color: #fff;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }
        .card-header {
            background: linear-gradient(90deg, #007bff, #00bcd4);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            color: #fff;
        }
        .form-label {
            font-weight: 600;
            color: #f8f9fa;
        }
        .btn-primary {
            background: linear-gradient(90deg, #007bff, #00bcd4);
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #00bcd4, #007bff);
            transform: scale(1.03);
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center p-5">

    <div class="card p-4 col-md-6">
        <div class="card-header text-center">
            <h3>🎟️ Form Pemesanan Tiket Film</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('tickets.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Tiket</label>
                    <input type="text" name="kode_tiket" class="form-control" placeholder="Misal: TK001" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Film</label>
                    <input type="text" name="nama_film" class="form-control" placeholder="Contoh: Avatar 2" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" class="form-control" placeholder="Nama lengkap" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nomor Kursi</label>
                    <input type="text" name="kursi" class="form-control" placeholder="Contoh: A5, B10" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Tiket</label>
                    <input type="number" name="harga" class="form-control" placeholder="Contoh: 50000" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal Tayang</label>
                    <input type="datetime-local" name="jadwal_tayang" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('tickets.index') }}" class="btn btn-secondary px-4">⬅ Kembali</a>
                    <button type="submit" class="btn btn-primary px-4">🎬 Pesan Sekarang</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
