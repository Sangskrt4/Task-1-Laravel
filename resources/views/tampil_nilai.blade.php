<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 50%; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Data Nilai Mahasiswa</h1>
    
    @if(isset($mahasiswa))
        <p><b>Nama Mahasiswa:</b> {{ $mahasiswa->nama }}</p>
        
        <table>
            <thead>
                <tr>
                    <th>Matakuliah</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa->nilai as $nilai)
                <tr>
                    <td>{{ $nilai->matakuliah->nama }}</td>
                    <td>{{ $nilai->nilai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="color: red;">Data mahasiswa tidak ditemukan.</p>
    @endif
    
    <br>
    <a href="/">Kembali ke Home</a>
</body>
</html>