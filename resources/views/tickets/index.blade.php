<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>🎟️ Data Tiket Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #141E30, #243B55);
            color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        h1 {
            font-weight: 600;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }
        table {
            color: #fff;
        }
        th {
            background-color: rgba(0, 0, 0, 0.4);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }
        tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .btn-custom {
            background: #00B4D8;
            color: white;
            border-radius: 30px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #0096C7;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="p-5">

    <div class="container">
        <h1>🎬 Daftar Tiket Film</h1>

        <!-- Tombol tambah tiket -->
        <div class="text-end mb-3">
            <a href="{{ route('tickets.create') }}" class="btn btn-custom px-4 py-2">
                + Pesan Tiket Baru
            </a>
        </div>

        <!-- Kartu tabel -->
        <div class="card p-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Tiket</th>
                            <th>Nama Film</th>
                            <th>Nama Pemesan</th>
                            <th>Kursi</th>
                            <th>Harga</th>
                            <th>Jadwal Tayang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->id }}</td>
                                <td><span class="badge bg-primary">{{ $ticket->kode_tiket }}</span></td>
                                <td>{{ $ticket->nama_film }}</td>
                                <td>{{ $ticket->nama_pemesan }}</td>
                                <td><span class="badge bg-warning text-dark">{{ $ticket->kursi }}</span></td>
                                <td>Rp {{ number_format($ticket->harga, 0, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($ticket->jadwal_tayang)->format('d M Y, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-light">Belum ada data tiket 🎟️</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
