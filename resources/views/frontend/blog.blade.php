@extends('layout.app')

@section('content')

<!-- ============================================================
     SEMUA ARTIKEL
============================================================ -->
<section id="blog-page" style="padding:140px 0 100px;background:var(--white);min-height:100vh">
  <div class="container">

    <div class="mp-head reveal" style="text-align:center;margin-bottom:56px">
      <div class="section-label" style="justify-content:center">Blog &amp; Insight</div>
      <h2 class="section-title">Semua <span>Artikel</span></h2>
      <p class="section-sub" style="margin:12px auto 0;max-width:560px">
        Kumpulan artikel, wawasan, dan update teknologi terbaru dari tim kami.
      </p>
    </div>

    @if($posts->isNotEmpty())
      <div class="blog-grid">
        @foreach($posts as $post)
          <div class="blog-card reveal">
            <div class="blog-thumb" style="position:relative;overflow:hidden">
              @if($post->image_url)
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover" loading="lazy">
              @else
                <div class="blog-thumb-emoji">📰</div>
                <div class="blog-thumb-bar"></div>
              @endif
            </div>
            <div class="blog-meta">
              <div class="blog-cat">{{ $post->category }}</div>
              <div class="blog-date">{{ $post->published_at?->translatedFormat('d F Y') }}</div>
              <div class="blog-title">{{ $post->title }}</div>
              <p class="blog-excerpt">{{ $post->excerpt ?: Str::limit(strip_tags((string) $post->content), 140) }}</p>
            </div>
            <div class="blog-footer">
              <a href="#" class="blog-read-more">
                Baca Selengkapnya
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
              </a>
            </div>
          </div>
        @endforeach
      </div>

      {{-- Pagination --}}
      @if($posts->hasPages())
        <div style="display:flex;justify-content:center;align-items:center;gap:16px;margin-top:56px">
          @if($posts->onFirstPage())
            <span class="btn btn-navy" style="opacity:0.4;pointer-events:none">← Sebelumnya</span>
          @else
            <a href="{{ $posts->previousPageUrl() }}" class="btn btn-navy">← Sebelumnya</a>
          @endif

          <span style="color:var(--gray-text);font-size:14px">
            Halaman {{ $posts->currentPage() }} dari {{ $posts->lastPage() }}
          </span>

          @if($posts->hasMorePages())
            <a href="{{ $posts->nextPageUrl() }}" class="btn btn-navy">Berikutnya →</a>
          @else
            <span class="btn btn-navy" style="opacity:0.4;pointer-events:none">Berikutnya →</span>
          @endif
        </div>
      @endif
    @else
      <p style="text-align:center;color:var(--gray-text)">Belum ada artikel yang dipublikasikan.</p>
    @endif

  </div>
</section>

@endsection