@extends('layout.app')

@section('content')

<!-- ============================================================
     SEMUA PORTFOLIO
============================================================ -->
<section id="portfolio-page" style="padding:140px 0 100px;background:var(--white);min-height:100vh">
  <div class="container">

    <div class="mp-head reveal" style="text-align:center;margin-bottom:56px">
      <div class="section-label" style="justify-content:center">Portfolio</div>
      <h2 class="section-title">Semua <span>Project</span></h2>
      <p class="section-sub" style="margin:12px auto 0;max-width:560px">
        Berbagai project yang telah kami kerjakan — dari display solution, IoT, hingga software development.
      </p>
    </div>

    @if($portfolios->isNotEmpty())
      <div class="portfolio-grid">
        @foreach($portfolios as $item)
          <div class="portfolio-card reveal">
            <div class="portfolio-thumb" style="background:linear-gradient(135deg,#1e293b,#0F172A);position:relative;overflow:hidden">
              @if($item->image_url)
                <img src="{{ $item->image_url }}" alt="{{ $item->title }}" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover" loading="lazy">
              @else
                <div class="portfolio-thumb-inner">
                  <div class="portfolio-thumb-icon">🖥️</div>
                  <div class="portfolio-thumb-label">{{ Str::upper($item->category ?: 'PROJECT') }}</div>
                </div>
              @endif
              <div class="portfolio-overlay">
                <div class="portfolio-overlay-btn">Lihat Detail</div>
              </div>
            </div>
            <div class="portfolio-info">
              <div class="portfolio-cat">{{ $item->category }}</div>
              <div class="portfolio-name">{{ $item->title }}</div>
              <p class="portfolio-desc">{{ Str::limit($item->description, 140) }}</p>
            </div>
          </div>
        @endforeach
      </div>

      {{-- Pagination --}}
      @if($portfolios->hasPages())
        <div style="display:flex;justify-content:center;align-items:center;gap:16px;margin-top:56px">
          @if($portfolios->onFirstPage())
            <span class="btn btn-navy" style="opacity:0.4;pointer-events:none">← Sebelumnya</span>
          @else
            <a href="{{ $portfolios->previousPageUrl() }}" class="btn btn-navy">← Sebelumnya</a>
          @endif

          <span style="color:var(--gray-text);font-size:14px">
            Halaman {{ $portfolios->currentPage() }} dari {{ $portfolios->lastPage() }}
          </span>

          @if($portfolios->hasMorePages())
            <a href="{{ $portfolios->nextPageUrl() }}" class="btn btn-navy">Berikutnya →</a>
          @else
            <span class="btn btn-navy" style="opacity:0.4;pointer-events:none">Berikutnya →</span>
          @endif
        </div>
      @endif
    @else
      <p style="text-align:center;color:var(--gray-text)">Belum ada project yang ditampilkan.</p>
    @endif

  </div>
</section>

@endsection