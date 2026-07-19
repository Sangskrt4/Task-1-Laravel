<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Khusus Dewasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h2 class="text-success">Selamat Datang di Halaman Dewasa! 🎉</h2>
            <hr>
            <p><strong>Nama User:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Role User:</strong> {{ Auth::user()->role ?? 'User Biasa' }}</p>
            <p><strong>Usia Anda:</strong> {{ Auth::user()->usia }} Tahun</p>
            <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Home</a>
        </div>
    </div>
</body>
</html>