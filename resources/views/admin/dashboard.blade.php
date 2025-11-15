@extends('layouts.app')

@section('title', 'Admin Dashboard - Pesan Masuk')

@section('content')
<div class="admin-container">
    <h1 class="admin-title">Pesan Masuk</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div style="overflow-x: auto;">
        <table class="message-table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Email / Telepon</th>
                    <th>Pesan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $message)
                    <tr class="{{ $message->is_read ? '' : 'message-unread' }}">
                        
                        <td class="text-sm">
                            {{ $message->created_at->format('d M Y, H:i') }}
                        </td>
                        
                        <td>{{ $message->name }}</td>
                        
                        <td class="text-sm">
                            <div>{{ $message->email }}</div>
                            <div class="message-phone">{{ $message->phone }}</div>
                        </td>
                        
                        <td class="message-content text-sm">
                            {{ $message->message }}
                        </td>
                        
                        <td>
                            @if ($message->is_read)
                                <span class="status-read">Sudah Dibaca</span>
                            @else
                                <span class="status-new">Baru</span>
                            @endif
                        </td>

                        <td>
                            <form action="{{ route('admin.message.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus pesan ini?');" class="action-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                            
                            @if (!$message->is_read)
                                <form action="{{ route('admin.message.read', $message->id) }}" method="POST" class="action-form">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn-mark-read">Tandai Dibaca</button>
                                </form>
                            @endif
                        </td>

                    </tr>
                @empty
                
                    <tr>
                        <td colspan="6" class="message-empty">
                            Belum ada pesan yang masuk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

