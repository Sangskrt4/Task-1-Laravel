<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Portofolio Ramadhan</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; background-color: #f4f4f4; }
        h1 { color: #333; }
        nav a { margin: 0 15px; text-decoration: none; color: #007bff; font-weight: bold; }
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); display: inline-block; text-align: left; }
    </style>
</head>
<body>
    <nav>
        <a href="/home">Home</a>
        <a href="/profil">Profil</a>
        <a href="/pendidikan">Pendidikan</a>
        <a href="/keahlian">Keahlian</a>
    </nav>
    <h1>Profil Saya</h1>
    <div class="card">
        <p><b>Nama:</b> {{ $nama }}</p>
        <p><b>NPM:</b> {{ $npm }}</p>
    </div>
</body>
</html>