@extends('layouts.admin') @section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Daftar Pesan Masuk</h2>
    <div class="text-muted">Halo, Admin Lexvin!</div>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th class="p-3">Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Pesan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                <tr>
                    <td class="p-3 fw-bold">{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->phone_number }}</td>
                    <td>{{ $message->message }}</td>
                    <td class="text-center">
                        <form action="{{ route('admin.message.destroy', $message->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus pesan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">Belum ada pesan masuk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection