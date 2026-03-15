@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Semua Artikel</h2>
    
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                @forelse($semua_pos as $item)
                <div class="col-md-6 mb-4">
                    <a href="{{ route('artikel.show', $item->id) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 shadow-sm h-100">
                            <div style="height: 200px; overflow: hidden;">
                                @if($item->foto)
                                    <img src="{{ asset('uploads/' . $item->foto) }}" class="card-img-top" style="object-fit: cover; height: 100%;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 100%;">No Image</div>
                                @endif
                            </div>
                            <div class="card-body">
                                <span class="badge bg-primary mb-2">NEWS</span>
                                <h5 class="fw-bold">{{ $item->judul }}</h5>
                                <p class="text-muted small">{{ $item->created_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-muted">Belum ada artikel yang dipublikasikan.</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="col-md-4">
            <h5 class="fw-bold mb-3">LATEST</h5>
            @foreach($semua_pos->take(5) as $latest)
            <a href="{{ route('artikel.show', $latest->id) }}" class="text-decoration-none text-dark d-flex mb-3">
                <img src="{{ asset('uploads/' . $latest->foto) }}" width="60" height="60" style="object-fit: cover;" class="me-3 rounded">
                <div>
                    <h6 class="fw-bold mb-0" style="font-size: 14px;">{{ Str::limit($latest->judul, 40) }}</h6>
                    <small class="text-muted">{{ $latest->created_at->format('M d, Y') }}</small>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection