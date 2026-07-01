@extends('layout.app')

@section('content')

<section id="marketplace">
  <div class="container">
    <div class="mp-head reveal">
      <div class="section-label" style="justify-content:center">Tech Marketplace</div>
      <h2 class="mp-title">Tech <span>Marketplace</span></h2>
      <p class="mp-subtitle">Buy &amp; Sell Computers, Hardware, and Software - produk teknologi terpercaya untuk kebutuhan personal maupun bisnis Anda.</p>
    </div>

    <!-- Search & Filter -->
    <div class="mp-toolbar reveal">
      <div class="mp-search">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 1 0-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0A4.5 4.5 0 1 1 14 9.5 4.5 4.5 0 0 1 9.5 14z"/></svg>
        <input type="text" id="mpSearchInput" placeholder="Cari produk: laptop, SSD, lisensi Windows..." oninput="mpFilterProducts()" />
      </div>
      <select class="mp-select" id="mpCategorySelect" onchange="mpFilterProducts()">
        <option value="all">Semua Kategori</option>
        <option value="komputer">Komputer / Laptop</option>
        <option value="storage">Harddisk / Storage</option>
        <option value="software">Software / Lisensi</option>
        <option value="aksesoris">Aksesoris</option>
      </select>
      <select class="mp-select" id="mpSortSelect" onchange="mpFilterProducts()">
        <option value="terbaru">Terbaru</option>
        <option value="termurah">Harga Termurah</option>
        <option value="termahal">Harga Tertinggi</option>
      </select>
    </div>

<!-- Product Grid -->
<div class="product-grid" id="mpProductGrid"></div>
    <div class="mp-results-count reveal"><strong id="mpResultsCount">0</strong> produk ditemukan</div>

  </div>
</section>

<!-- Marketplace product detail modal -->
<div class="mp-modal-overlay" id="mpModalOverlay" onclick="mpCloseModalOnOverlay(event)">
  <div class="mp-modal-box">
    <div class="mp-modal-close" onclick="mpCloseModal()">✕</div>
    <div class="mp-modal-grid">
      <div class="mp-modal-visual" id="mpModalVisual"></div>
      <div class="mp-modal-content" id="mpModalContent"></div>
    </div>
  </div>
</div>

<div class="mp-toast" id="mpToast"></div>

<!-- ============================================================
     TESTIMONIALS
============================================================ -->
<section id="testimonials">
  <div class="container">
    <div class="testi-header reveal">
      <div class="section-label">Testimoni</div>
      <h2 class="section-title">Apa Kata <span>Klien Kami</span></h2>
      <p class="section-sub" style="margin-inline:auto;text-align:center">Kepercayaan klien adalah cerminan kualitas kerja kami.</p>
    </div>
    <div class="testi-grid">
      <div class="testi-card reveal">
        <div class="testi-quote-mark">"</div>
        <div class="testi-stars">
          <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
        </div>
        <p class="testi-text">IGB berhasil membangun Control Room kami dari nol hingga beroperasi penuh. Sistem video wall dan integrasi datanya luar biasa — tim yang sangat profesional dan responsif.</p>
        <div class="testi-author">
          <div class="testi-avatar" style="background:var(--red)">D</div>
          <div>
            <div class="testi-name">Dinas Sumber Daya Air</div>
            <div class="testi-role">Provinsi Jawa Timur</div>
          </div>
        </div>
      </div>
      <div class="testi-card reveal">
        <div class="testi-quote-mark">"</div>
        <div class="testi-stars">
          <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
        </div>
        <p class="testi-text">Aplikasi JTCC yang dikembangkan IGB telah merevolusi cara kami memantau lalu lintas. Fitur real-time dan analitik datanya sangat membantu pengambilan keputusan cepat.</p>
        <div class="testi-author">
          <div class="testi-avatar" style="background:var(--navy-mid)">P</div>
          <div>
            <div class="testi-name">Dinas Perhubungan</div>
            <div class="testi-role">Provinsi Jawa Timur</div>
          </div>
        </div>
      </div>
      <div class="testi-card reveal">
        <div class="testi-quote-mark">"</div>
        <div class="testi-stars">
          <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
        </div>
        <p class="testi-text">Command Center kami kini beroperasi 24/7 dengan sistem display terintegrasi dari IGB. Kualitas hardware dan after-sales support mereka melebihi ekspektasi kami.</p>
        <div class="testi-author">
          <div class="testi-avatar" style="background:#1d4ed8">B</div>
          <div>
            <div class="testi-name">BNI Sudirman</div>
            <div class="testi-role">Command Center Division</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  /* ============================================================
     MARKETPLACE — DATA, RENDER, FILTER, MODAL, WA/EMAIL CTA
  ============================================================ */
  const WA_NUMBER = '6281233569560';
  const SELLER_EMAIL = 'sales@interg.co.id';

  const mpProducts = @json($products);

  const mpCatIcon = `<svg viewBox="0 0 24 24" stroke-width="1.6"><rect x="3" y="4" width="18" height="13" rx="2"/><path d="M2 20h20" stroke-linecap="round"/></svg>`;

  function mpFormatPrice(n) { return 'Rp ' + n.toLocaleString('id-ID'); }

  function mpStatusBadge(s) {
    if (s === 'baru') return { label: 'Baru', cls: 'status-baru' };
    if (s === 'bekas') return { label: 'Bekas', cls: 'status-bekas' };
    return { label: 'Digital License', cls: 'status-digital' };
  }
  function mpCatClass(cat) {
    return { komputer: 'cat-komputer', storage: 'cat-storage', software: 'cat-software', aksesoris: 'cat-aksesoris' }[cat] || '';
  }
  function mpWaLink(name) {
    return `https://wa.me/${WA_NUMBER}?text=${encodeURIComponent('Halo saya ingin memesan ' + name)}`;
  }
  function mpEmailLink(name) {
    return `mailto:${SELLER_EMAIL}?subject=${encodeURIComponent('Pesanan ' + name)}&body=${encodeURIComponent('Halo, saya ingin memesan produk: ' + name)}`;
  }

  function mpGetFiltered() {
    const q = (document.getElementById('mpSearchInput')?.value || '').trim().toLowerCase();
    const cat = document.getElementById('mpCategorySelect')?.value || 'all';
    const sort = document.getElementById('mpSortSelect')?.value || 'terbaru';

    let list = mpProducts.filter(p => (cat === 'all' || p.cat === cat) &&
      (q === '' || p.name.toLowerCase().includes(q) || p.catLabel.toLowerCase().includes(q)));

    if (sort === 'termurah') list = list.sort((a, b) => a.price - b.price);
    else if (sort === 'termahal') list = list.sort((a, b) => b.price - a.price);
    else list = list.sort((a, b) => b.date - a.date);

    return list;
  }

  function mpRenderProducts() {
    const grid = document.getElementById('mpProductGrid');
    if (!grid) return;
    const list = mpGetFiltered();
    document.getElementById('mpResultsCount').textContent = list.length;

    if (list.length === 0) {
      grid.innerHTML = `<div style="grid-column:1/-1;text-align:center;padding:60px 20px;color:var(--gray-text)">
        <div style="font-size:36px;margin-bottom:10px">🔍</div>
        <div style="font-family:var(--font-head);font-weight:700;color:var(--navy);margin-bottom:6px">Produk tidak ditemukan</div>
        <div style="font-size:13.5px">Coba kata kunci atau kategori lain.</div>
      </div>`;
      return;
    }

    grid.innerHTML = list.map(p => {
      const status = mpStatusBadge(p.status);
      return `
      <div class="product-card reveal">
        <div class="product-thumb" onclick="mpOpenModal(${p.id})">
          <span class="badge-status ${status.cls}">${status.label}</span>
          <button class="wishlist-btn" onclick="mpToggleWishlist(event, this)">
            <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </button>
          ${mpCatIcon}
        </div>
        <div class="product-body">
          <span class="badge-cat ${mpCatClass(p.cat)}">${p.catLabel}</span>
          <div class="product-name" onclick="mpOpenModal(${p.id})">${p.name}</div>
          <div class="product-price">${mpFormatPrice(p.price)}</div>
          <div class="product-cta">
            <a class="btn-detail" onclick="mpOpenModal(${p.id})">Lihat Detail</a>
            <a class="btn-wa" href="${mpWaLink(p.name)}" target="_blank" rel="noopener">
              <svg viewBox="0 0 24 24"><path d="M17.5 14.4c-.3-.1-1.6-.8-1.8-.9-.2-.1-.4-.1-.6.1-.2.2-.6.9-.8 1.1-.1.2-.3.2-.5.1-.7-.3-1.4-.7-2-1.3-.6-.6-1.1-1.3-1.5-2-.1-.2 0-.4.1-.5.3-.3.6-.6.8-.9.1-.2.1-.4 0-.6-.1-.2-.7-1.6-.9-2.1-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.6-1 2.6.1 1.2.6 2.4 1.4 3.5 1.6 2.2 3.5 3.7 6 4.5.6.2 1.1.3 1.6.2.7-.1 1.6-.6 1.8-1.3.3-.6.3-1.2.2-1.3-.1-.1-.3-.2-.5-.3z"/><path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.4c1.4.8 3.1 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2zm0 18.3c-1.5 0-3-.4-4.3-1.2l-.3-.2-3.2.8.9-3.1-.2-.3C4 14.9 3.6 13.5 3.6 12c0-4.6 3.8-8.4 8.4-8.4s8.4 3.8 8.4 8.4-3.8 8.3-8.4 8.3z"/></svg>
              Pesan via WhatsApp
            </a>
            <a class="btn-email" href="${mpEmailLink(p.name)}">
              <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
              Pesan via Email
            </a>
          </div>
        </div>
      </div>`;
    }).join('');

    grid.querySelectorAll('.reveal').forEach(el => { el.classList.add('visible'); });
  }

  function mpFilterProducts() { mpRenderProducts(); }

  function mpToggleWishlist(e, btn) {
    e.stopPropagation();
    btn.classList.toggle('active');
    mpShowToast(btn.classList.contains('active') ? '❤️ Ditambahkan ke wishlist' : 'Dihapus dari wishlist');
  }

  let mpToastTimeout;
  function mpShowToast(msg) {
    const t = document.getElementById('mpToast');
    if (!t) return;
    t.textContent = msg;
    t.classList.add('show');
    clearTimeout(mpToastTimeout);
    mpToastTimeout = setTimeout(() => t.classList.remove('show'), 2400);
  }

  function mpOpenModal(id) {
    const p = mpProducts.find(x => x.id === id);
    if (!p) return;
    const status = mpStatusBadge(p.status);

    document.getElementById('mpModalVisual').innerHTML = mpCatIcon;

    const specsHtml = Object.entries(p.specs).map(([k, v]) => `
      <div class="spec-item">
        <div class="spec-label">${k}</div>
        <div class="spec-value">${v}</div>
      </div>`).join('');

    const isDigital = p.status === 'digital';

    document.getElementById('mpModalContent').innerHTML = `
      <span class="badge-cat ${mpCatClass(p.cat)}">${p.catLabel}</span>
      <span class="badge-status ${status.cls}" style="position:static;display:inline-block;margin-left:8px">${status.label}</span>
      <div class="mp-modal-title">${p.name}</div>
      <div class="mp-modal-price">${mpFormatPrice(p.price)}</div>
      <div class="mp-modal-desc">${p.desc}</div>
      <div class="spec-table">${specsHtml}</div>
      ${isDigital ? `<div style="font-size:12px;color:var(--gray-text);background:var(--gray-light);padding:10px 14px;border-radius:10px;margin-bottom:14px">
        🔑 Lisensi dikirim otomatis ke email setelah pembayaran berhasil dikonfirmasi.</div>` : ''}
      <div class="mp-modal-cta">
        <a class="btn-wa" style="padding:12px" href="${mpWaLink(p.name)}" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><path d="M17.5 14.4c-.3-.1-1.6-.8-1.8-.9-.2-.1-.4-.1-.6.1-.2.2-.6.9-.8 1.1-.1.2-.3.2-.5.1-.7-.3-1.4-.7-2-1.3-.6-.6-1.1-1.3-1.5-2-.1-.2 0-.4.1-.5.3-.3.6-.6.8-.9.1-.2.1-.4 0-.6-.1-.2-.7-1.6-.9-2.1-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1 1.6-1 2.6.1 1.2.6 2.4 1.4 3.5 1.6 2.2 3.5 3.7 6 4.5.6.2 1.1.3 1.6.2.7-.1 1.6-.6 1.8-1.3.3-.6.3-1.2.2-1.3-.1-.1-.3-.2-.5-.3z"/><path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.4c1.4.8 3.1 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2zm0 18.3c-1.5 0-3-.4-4.3-1.2l-.3-.2-3.2.8.9-3.1-.2-.3C4 14.9 3.6 13.5 3.6 12c0-4.6 3.8-8.4 8.4-8.4s8.4 3.8 8.4 8.4-3.8 8.3-8.4 8.3z"/></svg>
          WhatsApp
        </a>
        <a class="btn-email" style="padding:12px" href="${mpEmailLink(p.name)}">
          <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
          Email
        </a>
      </div>
    `;

    document.getElementById('mpModalOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function mpCloseModal() {
    document.getElementById('mpModalOverlay').classList.remove('open');
    document.body.style.overflow = '';
  }
  function mpCloseModalOnOverlay(e) {
    if (e.target.id === 'mpModalOverlay') mpCloseModal();
  }

  /* Init marketplace */
  mpRenderProducts();
</script>

@endsection