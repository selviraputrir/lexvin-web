@extends('layouts.admin') 

@section('content')
<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Testimonial Baru</h2>

    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Client</label>
                <input type="text" name="nama" 
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#441425] focus:ring-2 focus:ring-[#441425]/20 outline-none transition-all shadow-sm" 
                    required placeholder="Contoh: Budi Santoso">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Jabatan/Perusahaan</label>
                <input type="text" name="jabatan" 
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#441425] focus:ring-2 focus:ring-[#441425]/20 outline-none transition-all shadow-sm" 
                    placeholder="Contoh: CEO PT. Maju Jaya">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan Testimonial</label>
                <textarea name="pesan" rows="4" 
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#441425] focus:ring-2 focus:ring-[#441425]/20 outline-none transition-all shadow-sm resize-none" 
                    required placeholder="Tulis testimoni di sini..."></textarea>
            </div>

            <div class="flex items-center space-x-3 mt-6">
                <button type="submit" 
                    class="px-6 py-3 bg-[#441425] text-white font-bold rounded-xl hover:bg-[#2c2c2c] transition-all shadow-md active:scale-95">
                    Simpan Testimonial
                </button>
                <a href="{{ route('admin.testimonial.index') }}" 
                    class="px-6 py-3 bg-gray-100 text-gray-600 font-bold rounded-xl hover:bg-gray-200 transition-all no-underline text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection