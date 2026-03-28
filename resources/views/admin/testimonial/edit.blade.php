@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="mb-8 border-b pb-4 border-gray-100">
        <h2 class="text-2xl font-bold text-gray-800 tracking-tight">Edit Testimonial</h2>
        <p class="text-sm text-gray-500 mt-1">Perbarui ulasan dari klien Lexvin Law.</p>
    </div>

    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.testimonial.update', $testi->id) }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Klien</label>
                <input type="text" name="nama" id="nama" value="{{ $testi->nama }}"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#441425] focus:ring-2 focus:ring-[#441425]/20 outline-none transition-all shadow-sm"
                    required>
            </div>

            <div>
                <label for="jabatan" class="block text-sm font-semibold text-gray-700 mb-2">Jabatan/Perusahaan</label>
                <input type="text" name="jabatan" id="jabatan" value="{{ $testi->jabatan }}"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#441425] focus:ring-2 focus:ring-[#441425]/20 outline-none transition-all shadow-sm"
                    required>
            </div>

            <div>
                <label for="pesan" class="block text-sm font-semibold text-gray-700 mb-2">Pesan Testimonial</label>
                <textarea name="pesan" id="pesan" rows="5"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#441425] focus:ring-2 focus:ring-[#441425]/20 outline-none transition-all shadow-sm resize-none"
                    required>{{ $testi->pesan }}</textarea>
            </div>

            <div class="flex items-center space-x-4 pt-6 border-t border-gray-50">
                <button type="submit"
                    class="px-8 py-3 bg-[#441425] text-white font-bold rounded-xl shadow-lg shadow-[#441425]/20 hover:bg-[#2c2c2c] hover:-translate-y-1 transition-all duration-300 active:scale-95">
                    Update Data
                </button>
                <a href="{{ route('admin.testimonial.index') }}"
                    class="px-8 py-3 bg-gray-100 text-gray-600 font-bold rounded-xl hover:bg-gray-200 transition-all text-center no-underline border border-transparent">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection