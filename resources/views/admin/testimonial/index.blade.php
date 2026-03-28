@extends('layouts.admin')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Testimonial</h2>
            <p class="text-sm text-gray-500">Daftar feedback dari client Anda.</p>
        </div>
        <a href="{{ route('admin.testimonial.create') }}" 
           class="flex items-center space-x-2 bg-[#441425] text-white px-5 py-2.5 rounded-xl font-bold shadow-lg hover:bg-[#2c2c2c] transition-all active:scale-95 no-underline">
            <i class="bi bi-plus-circle text-lg"></i>
            <span>Tambah Testimonial</span>
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-600">Nama Klien</th>
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-600">Jabatan</th>
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-600">Pesan Testimonial</th>
                        <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-gray-600 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($testimonials as $item)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-semibold text-gray-800">{{ $item->nama }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $item->jabatan }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 italic">"{{ Str::limit($item->pesan, 100) }}"</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('admin.testimonial.edit', $item->id) }}" class="text-blue-500 hover:bg-blue-50 p-2 rounded-lg transition">
                                    <i class="bi bi-pencil-square text-lg"></i>
                                </a>
                                <form action="{{ route('admin.testimonial.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @propto('delete')
                                    @csrf
                                    <button type="submit" class="text-red-500 hover:bg-red-50 p-2 rounded-lg transition">
                                        <i class="bi bi-trash text-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-10 text-center text-gray-400">
                            <div class="flex flex-col items-center">
                                <i class="bi bi-inbox text-4xl mb-2"></i>
                                <p>Belum ada data testimonial.</p>
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