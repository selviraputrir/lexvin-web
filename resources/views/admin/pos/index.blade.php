@extends('layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 class="fw-bold">Daftar Semua Pos</h2>
        <a href="/admin/pos/create" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Pos Baru
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center" width="120">Foto</th>
                            <th>Judul Pos</th>
                            <th width="180">Tanggal Dibuat</th>
                            <th class="text-center" width="160">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @forelse($semua_pos as $item)
                        <tr>
                            <td class="text-center align-middle">
                                @if($item->foto)
                                    <img src="{{ asset('uploads/' . $item->foto) }}" style="width: 80px; height: 60px; object-fit: cover; border-radius: 6px; border: 1px solid #ddd;">
                                @else
                                    <span class="badge bg-secondary">Tanpa Foto</span>
                                @endif
                            </td>
                            
                            <td class="align-middle" style="font-size: 16px;">
                                <b>{{ $item->judul }}</b>
                            </td>
                            
                            <td class="align-middle text-muted">
                                {{ $item->created_at->format('d M Y') }}
                            </td>
                            
                            <td class="text-center align-middle">
                                <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</button>
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                            </td>
                        </tr>
                        
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-5 text-muted">
                                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                Belum ada pos yang ditambahkan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection