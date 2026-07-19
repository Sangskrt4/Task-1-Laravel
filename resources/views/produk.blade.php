@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>📦 Daftar Produk (DataTables + SweetAlert)</h2>

    <!-- Tombol Tambah Produk (Simulasi) -->
    <button class="btn btn-success mb-3" onclick="tambahProduk()">+ Tambah Produk</button>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="produk-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>SKU</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Inisialisasi DataTables dengan Server-Side Processing (Ajax)
        $('#produk-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('produk.data') }}", // Route untuk ambil data JSON
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'sku', name: 'sku' },
                { data: 'price', name: 'price' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    // Fungsi Simulasi Tambah Data (SweetAlert Sukses)
    function tambahProduk() {
        Swal.fire({
            title: 'Tambah Produk Baru?',
            text: "Data akan disimpan ke database.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, Tambahkan!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan Alert Sukses (Tugas 2)
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Produk berhasil ditambahkan!',
                    timer: 2000,
                    showConfirmButton: false
                });
                // Reload tabel agar data terbaru muncul
                $('#produk-table').DataTable().ajax.reload();
            }
        });
    }

    // Fungsi Hapus Produk (SweetAlert Konfirmasi)
    function hapusProduk(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data produk akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Simulasi hapus data (Ganti dengan route delete asli kalau ada)
                Swal.fire('Dihapus!', 'Produk telah dihapus.', 'success');
                $('#produk-table').DataTable().ajax.reload();
            }
        });
    }
</script>
@endpush