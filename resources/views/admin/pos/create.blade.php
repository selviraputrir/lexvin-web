@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="mb-10 flex items-center justify-between border-b pb-6 border-slate-100">
        <div>
            <h2 class="text-3xl font-black text-slate-800 tracking-tight text-left">Tambah Pos Baru</h2>
        </div>
    </div>

    <form action="{{ route('admin.pos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white p-8 rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100">
                    <label for="judul" class="block text-sm font-black text-slate-700 uppercase tracking-wider mb-3 text-left">Judul Pos</label>
                    <input type="text" name="judul" id="judul" 
                        class="w-full px-6 py-4 rounded-xl border border-slate-200 focus:border-[#441425] focus:ring-4 focus:ring-[#441425]/10 outline-none transition-all duration-300 text-xl font-bold placeholder:text-slate-300 shadow-sm" 
                        placeholder="Tulis judul artikel yang menarik di sini..." required>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100">
                    <label class="block text-sm font-black text-slate-700 uppercase tracking-wider mb-4 text-left">Isi Artikel</label>
                    <div class="prose max-w-none">
                        <textarea name="konten" id="editor"></textarea>
                    </div>
                    <p class="text-xs text-slate-400 italic mt-3">*Tuliskan narasi lengkap artikel Anda di atas.</p>
                </div>
            </div>

            <div class="space-y-8">
                <div class="bg-white p-8 rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100">
                    <label class="block text-sm font-black text-slate-700 uppercase tracking-wider mb-4 text-left">Foto Sampul</label>
                    
                    <div onclick="document.getElementById('foto').click()" 
                         class="relative group border-4 border-dashed border-slate-100 rounded-3xl p-8 text-center hover:border-[#441425]/30 hover:bg-[#441425]/5 transition-all cursor-pointer mb-5">
                        <i class="bi bi-cloud-arrow-up text-5xl text-slate-300 group-hover:text-[#441425] transition-colors"></i>
                        <p class="text-sm font-bold text-slate-500 mt-2">Tarik & Lepas foto</p>
                        <p class="text-[10px] text-slate-400 uppercase tracking-tighter">Klik untuk memilih (Max. 2MB)</p>
                        <input type="file" name="foto" id="foto" class="hidden" required>
                    </div>

                    <button type="button" onclick="document.getElementById('foto').click()" 
                        class="w-full py-3 px-4 bg-slate-50 text-slate-600 rounded-xl font-bold hover:bg-slate-100 transition-all text-sm border border-slate-100">
                        <i class="bi bi-file-earmark-image me-1"></i> Pilih File
                    </button>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg shadow-slate-200/50 border border-slate-100">
                    <div class="flex flex-col space-y-3">
                        <button type="submit" 
                            class="w-full flex items-center justify-center space-x-2 py-4 bg-[#441425] text-white font-bold rounded-2xl shadow-xl shadow-[#441425]/20 hover:bg-[#2c2c2c] hover:-translate-y-1 transition-all duration-300 active:scale-95">
                            <i class="bi bi-check2-circle text-xl"></i>
                            <span>Simpan Post</span>
                        </button>
                        
                        <a href="{{ route('admin.pos.index') }}" 
                            class="w-full py-4 bg-slate-50 text-slate-400 font-bold rounded-2xl hover:bg-slate-100 hover:text-slate-600 transition-all text-center no-underline">
                            Batal
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
        height: 400,
        removeButtons: 'PasteFromWord,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe',
        versionCheck: false 
    });

    document.getElementById('foto').onchange = function () {
        if(this.files && this.files[0]) {
            let fileName = this.files[0].name;
            alert('Foto dipilih: ' + fileName);
        }
    };
</script>
@endsection