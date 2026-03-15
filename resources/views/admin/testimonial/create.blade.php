@extends('layouts.admin') 
@section('content')
<h2 class="mb-4">Tambah Testimonial Baru</h2>

<div class="card p-4 shadow-sm">
    <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Client</label>
            <input type="text" name="nama" class="form-control" required placeholder="Contoh: Budi Santoso">
        </div>

        <div class="mb-3">
            <label class="form-label">Jabatan/Perusahaan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Contoh: CEO PT. Maju Jaya">
        </div>

        <div class="mb-3">
            <label class="form-label">Pesan Testimonial</label>
            <textarea name="pesan" class="form-control" rows="4" required placeholder="Tulis testimoni di sini..."></textarea>
        </div>


        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan Testimonial</button>
            <a href="{{ route('admin.testimonial.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection