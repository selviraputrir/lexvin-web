@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h2 class="fw-bold mt-4 mb-4">Edit Testimonial</h2>

    <div class="card shadow border-0 p-4">
        <form action="{{ route('admin.testimonial.update', $testi->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Klien</label>
                <input type="text" name="nama" class="form-control" value="{{ $testi->nama }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="{{ $testi->jabatan }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Pesan Testimonial</label>
                <textarea name="pesan" class="form-control" rows="5" required>{{ $testi->pesan }}</textarea>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Update Data</button>
                <a href="{{ route('admin.testimonial.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection