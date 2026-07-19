<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">📂 Manajemen Upload File</h2>

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- FORM UPLOAD (Tugas 1) -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" accept=".jpg,.jpeg,.png" required>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    @error('file')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </form>
            </div>
        </div>

        <!-- DAFTAR FILE (Tugas 2) -->
        <div class="card">
            <div class="card-header bg-secondary text-white">Daftar File Terupload</div>
            <div class="card-body p-0">
                <table class="table table-bordered mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($files as $key => $file)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ Storage::url($file) }}" alt="gambar" style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                                </td>
                                <td>{{ basename($file) }}</td>
                                <td>
                                    <!-- Tombol Download -->
                                    <a href="{{ Storage::url($file) }}" class="btn btn-sm btn-info text-white" download>Download</a>
                                    
                                    <!-- Tombol Hapus (Tugas 3) -->
                                    <form action="{{ route('upload.destroy', basename($file)) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus file ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-3">Belum ada file yang diupload.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>