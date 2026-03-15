@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
            <h2 class="fw-bold">Manajemen Testimonial</h2>
            <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary btn-sm shadow-sm">
                <i class="bi bi-plus-circle me-1"></i> Tambah Testimonial
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="table-dark text-center"> {{-- Ini untuk header hitam seperti contoh --}}
                            <tr>
                                <th style="width: 20%;">Nama Klien</th>
                                <th style="width: 15%;">Jabatan</th>
                                <th>Pesan Testimonial</th>
                                <th style="width: 180px;">Tanggal Dibuat</th>
                                <th style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    @forelse($testimonials as $testi)
    <tr class="align-middle">
        <td class="px-3 fw-bold text-primary">{{ $testi->nama }}</td>
        <td class="text-muted small">{{ $testi->jabatan }}</td>
        <td class="px-3" style="font-size: 0.85rem;">
            <i class="bi bi-quote text-secondary"></i> {{ Str::limit($testi->pesan, 100) }}
        </td>
        <td class="text-center text-secondary small">
            {{ $testi->created_at->format('d M Y') }}
        </td>
        
        {{-- INI BAGIAN YANG HARUS DIPERBAIKI --}}
        <td class="text-center">
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ route('admin.testimonial.edit', $testi->id) }}" class="btn btn-primary btn-sm px-3">
                    <i class="bi bi-pencil-square"></i> Edit
                </a>

                <form action="{{ route('admin.testimonial.destroy', $testi->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm px-3">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="text-center py-5 text-muted">Belum ada data testimonial.</td>
    </tr>
    @endforelse
</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
