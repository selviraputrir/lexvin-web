@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="mb-8">
        <h2 class="text-3xl font-black text-slate-800 tracking-tight">Daftar Pesan Masuk</h2>
        <p class="text-slate-500 mt-1">Halo, Admin Lexvin! Berikut adalah pesan dari pengunjung website Anda.</p>
    </div>

    <div class="bg-white rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100">
                        <th class="px-6 py-5 text-xs uppercase tracking-widest font-black text-slate-400">Nama</th>
                        <th class="px-6 py-5 text-xs uppercase tracking-widest font-black text-slate-400">Kontak</th>
                        <th class="px-6 py-5 text-xs uppercase tracking-widest font-black text-slate-400">Tanggal</th>
                        <th class="px-6 py-5 text-xs uppercase tracking-widest font-black text-slate-400 w-1/3">Pesan</th>
                        <th class="px-6 py-5 text-xs uppercase tracking-widest font-black text-slate-400 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($messages as $msg)
                    <tr class="hover:bg-slate-50/80 transition-colors group">
                        
                        <td class="px-6 py-5">
                            <div class="font-bold text-slate-800">{{ $msg->nama }}</div>
                        </td>

                        <td class="px-6 py-5">
                            <div class="text-sm font-semibold text-slate-700 flex items-center">
                                <i class="bi bi-envelope text-slate-400 mr-2"></i> {{ $msg->email }}
                            </div>
                            <div class="text-xs text-slate-500 mt-1 flex items-center">
                                <i class="bi bi-telephone text-slate-400 mr-2"></i> {{ $msg->telepon ?? '-' }}
                            </div>
                        </td>

                        <td class="px-6 py-5">
                            <div class="text-sm font-bold text-slate-600">{{ $msg->created_at->format('d M Y') }}</div>
                            <div class="text-[10px] text-slate-400 uppercase font-bold">{{ $msg->created_at->format('H:i') }} WIB</div>
                        </td>

                        <td class="px-6 py-5">
                            <div class="text-sm text-slate-500 italic line-clamp-3" title="{{ $msg->pesan }}">
                                "{{ $msg->pesan }}"
                            </div>
                        </td>

                        <td class="px-6 py-5 text-center">
                            <form action="{{ route('admin.message.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan dari {{ $msg->nama }}?')">
                                @method('delete')
                                @csrf
                                <button type="submit" 
                                    class="w-9 h-9 inline-flex items-center justify-center bg-slate-100 text-slate-600 rounded-xl hover:bg-red-500 hover:text-white transition-all shadow-sm" 
                                    title="Hapus Pesan">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-16 text-center">
                            <div class="max-w-xs mx-auto">
                                <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="bi bi-envelope-paper text-3xl text-slate-300"></i>
                                </div>
                                <h3 class="text-lg font-bold text-slate-800">Kotak Masuk Kosong</h3>
                                <p class="text-sm text-slate-400 mt-1">Belum ada pesan baru dari pengunjung website.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection