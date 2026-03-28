@extends('layouts.admin')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 tracking-tight">Manajemen Posts</h2>
            <p class="text-sm text-gray-500 mt-1">Daftar semua artikel dan berita Lexvin Law.</p>
        </div>
        <a href="{{ route('admin.pos.create') }}" 
           class="inline-flex items-center justify-center px-6 py-3 bg-[#441425] text-white font-bold rounded-xl shadow-lg hover:bg-[#2c2c2c] transition-all no-underline group">
            <i class="bi bi-plus-lg mr-2"></i>
            Tambah Post Baru
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-500">Thumbnail</th>
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-500">Informasi Post</th>
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-500">Tanggal</th>
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-500 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                   @forelse ($semua_pos as $post)
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="px-6 py-4 w-32">
                            @if($post->foto)
                                <img src="{{ asset('storage/' . $post->foto) }}" 
                                     class="w-20 h-14 object-cover rounded-lg shadow-sm border border-gray-100" 
                                     alt="Thumbnail">
                            @else
                                <div class="w-20 h-14 bg-gray-100 rounded-lg flex items-center justify-center text-gray-300">
                                    <i class="bi bi-image text-xl"></i>
                                </div>
                            @endif
                        </td>

                        <td class="px-6 py-4">
                            <div class="text-sm font-bold text-gray-800 group-hover:text-[#441425] transition-colors">
                                {{ $post->judul }}
                            </div>
                            <div class="text-[11px] text-gray-400 mt-0.5">/{{ Str::limit($post->slug, 40) }}</div>
                        </td>

                        <td class="px-6 py-4">
                            <div class="text-xs font-semibold text-gray-600">
                                <i class="bi bi-calendar3 mr-1"></i> {{ $post->created_at->format('d M Y') }}
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex justify-center items-center space-x-2">
                                <a href="{{ route('admin.pos.edit', $post->id) }}" 
                                   class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition-all" 
                                   title="Edit">
                                    <i class="bi bi-pencil-square text-lg"></i>
                                </a>
                                <form action="{{ route('admin.pos.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Hapus postingan ini?')">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-all" title="Hapus">
                                        <i class="bi bi-trash text-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-16 text-center text-gray-400">
                            <div class="flex flex-col items-center">
                                <i class="bi bi-folder2-open text-5xl mb-3 opacity-20"></i>
                                <p class="font-medium">Belum ada postingan yang diterbitkan.</p>
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