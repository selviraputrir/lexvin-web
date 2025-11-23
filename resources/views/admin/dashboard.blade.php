@extends('layouts.app')

@section('title', 'Admin Dashboard - Incoming Messages')

@section('content')

    <nav class="bg-wine-red text-white px-6 py-4 flex justify-between items-center mb-8 rounded-lg shadow-md">
        
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="LEXVIN" class="h-6 w-auto">
        </a>
        
        <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
            @csrf
            <button type="submit"
                class="px-4 py-2 bg-red-700 hover:bg-red-800 text-white text-sm rounded transition duration-300 font-bold uppercase tracking-wide"
                style="background-color: #b91c1c; border: none; cursor: pointer;">
                Logout <i class="fas fa-sign-out-alt ml-1"></i>
            </button>
        </form>
    </nav>

    <div class="admin-container">
        <div class="flex justify-between items-end mb-6">
            <h1 class="admin-title" style="margin-bottom: 0;">Incoming Messages</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div style="overflow-x: auto;">
            <table class="message-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email / Phone</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $message)
                        <tr class="{{ $message->is_read ? '' : 'message-unread' }}">

                            <td class="text-sm" style="min-width: 120px;">
                                {{ $message->created_at->timezone('Asia/Jakarta')->format('d M Y') }}
                                <br>
                                <span class="text-gray-500 text-xs">
                                    {{ $message->created_at->timezone('Asia/Jakarta')->format('H:i') }} WIB
                                </span>
                            </td>

                            <td class="font-bold">{{ $message->name }}</td>

                            <td class="text-sm">
                                <div style="margin-bottom: 4px;">Email: <strong>{{ $message->email }}</strong></div>

                                @if ($message->phone)
                                    @php
                                        $cleanPhone = preg_replace('/[^0-9]/', '', $message->phone);
                                        if (substr($cleanPhone, 0, 1) === '0') {
                                            $cleanPhone = '62' . substr($cleanPhone, 1);
                                        } elseif (substr($cleanPhone, 0, 2) !== '62') {
                                            $cleanPhone = '62' . $cleanPhone;
                                        }
                                        $whatsappUrl = 'https://wa.me/' . $cleanPhone;
                                    @endphp
                                    <div class="font-semibold" style="color: #16a34a;">
                                        Phone: <a href="{{ $whatsappUrl }}" target="_blank"
                                            style="text-decoration: underline;">
                                            {{ $message->phone }} (WA)
                                        </a>
                                    </div>
                                @endif
                            </td>

                            <td class="message-content text-sm">
                                {{ $message->message }}
                            </td>

                            <td>
                                @if ($message->is_read)
                                    <span
                                        style="background-color: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">Read</span>
                                @else
                                    <span
                                        style="background-color: #fef9c3; color: #854d0e; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">New</span>
                                @endif
                            </td>

                            <td>
                                <div style="display: flex; gap: 10px; flex-direction: column;">
                                    @if (!$message->is_read)
                                        <form action="{{ route('admin.message.read', $message->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn-mark-read"
                                                style="color: #2563eb; background: none; border: none; cursor: pointer; font-size: 0.875rem; text-decoration: underline;">Mark
                                                as Read</button>
                                        </form>
                                    @endif

                                    <form action="{{ route('admin.message.destroy', $message->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this message?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete"
                                            style="color: #dc2626; background: none; border: none; cursor: pointer; font-size: 0.875rem;">Delete</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="message-empty"
                                style="text-align: center; padding: 20px; color: #666;">
                                No messages have been received yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection