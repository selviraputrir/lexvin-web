<style>
    .news-wrapper {
        padding: 80px 0; 
        background-color: #ffffff;
    }

    .news-container {
        max-width: 1200px; 
        margin: 0 auto;   
        padding: 0 20px;   
    }

    .news-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #3b1b25;
        padding-bottom: 15px;
        margin-bottom: 40px;
    }

    .news-title {
        font-family: 'Times New Roman', serif;
        font-size: 32px;
        font-weight: bold;
        color: #1a252f;
        margin: 0;
    }

    .btn-full {
        background-color: #3b1b25;
        color: white !important;
        text-decoration: none;
        padding: 8px 25px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s;
    }

    .btn-full:hover {
        background-color: #5a2a38;
        transform: translateY(-2px);
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); 
        gap: 30px;
    }

    .news-card {
        text-decoration: none;
        color: inherit;
        transition: 0.3s;
    }

    .news-card:hover {
        opacity: 0.9;
    }

    .news-img-box {
        width: 100%;
        height: 200px;
        overflow: hidden;
        margin-bottom: 15px;
        background-color: #f8f9fa;
    }

    .news-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .news-label {
        color: #0066cc;
        font-size: 11px;
        font-weight: bold;
        text-transform: uppercase;
        display: block;
        margin-bottom: 8px;
        letter-spacing: 1px;
    }

    .news-text-title {
        font-size: 18px;
        font-weight: bold;
        color: #111;
        line-height: 1.4;
        margin-bottom: 10px;
        display: block;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .news-date {
        font-size: 13px;
        color: #777;
    }
</style>

<section class="news-wrapper">
    <div class="news-container">
        
        <div class="news-header">
            <h2 class="news-title">News</h2>
            <a href="/artikel" class="btn-full">in full &rarr;</a>
        </div>

        <div class="news-grid">
            @forelse($berita_terbaru as $news)
            <a href="#" class="news-card">
                <div class="news-img-box">
                    @if($news->foto)
                        <img src="{{ asset('uploads/' . $news->foto) }}" alt="{{ $news->judul }}">
                    @else
                        <div style="width:100%; height:100%; background:#eee; display:flex; align-items:center; justify-content:center; color:#ccc;">No Image</div>
                    @endif
                </div>

                <span class="news-label">News</span>
                <span class="news-text-title">{{ $news->judul }}</span>
                <span class="news-date">{{ $news->created_at->format('M d, Y') }}</span>
            </a>
            @empty
                <div style="grid-column: span 4; text-align: center; padding: 40px; color: #999;">
                    <p>Belum ada berita terbaru untuk saat ini.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>