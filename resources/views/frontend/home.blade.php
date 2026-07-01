@extends('layout.app')

@section('content')

<!-- ============================================================
     HERO
============================================================ -->
<section id="hero">
  <div class="hero-bg">
    <div class="hero-grid"></div>
    <div class="hero-shape hero-shape-1"></div>
    <div class="hero-shape hero-shape-2"></div>
  </div>
  <div class="hero-content">
    <div class="container">
      <div class="hero-grid-layout">
        <!-- Left: copy -->
        <div>
          <div class="hero-tag">Total IT Solution Provider</div>
          <h1 class="hero-headline">
            Akselerasi<br>
            <span class="red-word">Digital 5.0</span><br>
            <span class="accent-word">Tanpa Batas</span>
          </h1>
          <p class="hero-sub">
            Membantu perusahaan dan pemerintahan bertransformasi melalui solusi teknologi modern — dari system integration, IoT, software development, hingga display solution profesional.
          </p>
          <div class="hero-ctas">
            <a href="#contact" class="btn btn-red">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
              Konsultasi Sekarang
            </a>
            <a href="#services" class="btn btn-outline">
              Lihat Layanan
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
            </a>
          </div>
          <!-- Stats -->
          <div class="hero-stats">
            <div class="hero-stat-item">
              <div class="hero-stat-num">100<span>+</span></div>
              <div class="hero-stat-label">Project Selesai</div>
            </div>
            <div class="hero-stat-item">
              <div class="hero-stat-num">50<span>+</span></div>
              <div class="hero-stat-label">Klien Aktif</div>
            </div>
            <div class="hero-stat-item">
              <div class="hero-stat-num">10<span>+</span></div>
              <div class="hero-stat-label">Tahun Pengalaman</div>
            </div>
            <div class="hero-stat-item">
              <div class="hero-stat-num">24<span>/7</span></div>
              <div class="hero-stat-label">Support</div>
            </div>
          </div>
        </div>
        <!-- Right: UI card -->
        <div class="hero-visual">
          <div class="hero-card-main">
            <div class="hero-card-header">
              <div class="hero-card-dot" style="background:#EF4444"></div>
              <div class="hero-card-dot" style="background:#F59E0B"></div>
              <div class="hero-card-dot" style="background:#10B981"></div>
              <span style="font-size:12px;color:rgba(218, 216, 216, 0.578);margin-left:8px;font-family:var(--font-head)">IGB Dashboard</span>
            </div>
            <div class="hero-card-screen">
              <div class="hero-screen-bar" style="background:rgba(217,4,41,0.5);width:70%"></div>
              <div class="hero-screen-bar" style="background:rgba(255,255,255,0.08);width:45%"></div>
              <div class="hero-screen-bar" style="background:rgba(255,255,255,0.05);width:85%"></div>
              <div class="hero-screen-grid">
                <div class="hero-screen-cell">
                  <div class="hero-screen-cell-num" style="color:#D90429">100+</div>
                  <div class="hero-screen-cell-lbl">Projects</div>
                </div>
                <div class="hero-screen-cell">
                  <div class="hero-screen-cell-num" style="color:#F4B400">50+</div>
                  <div class="hero-screen-cell-lbl">Clients</div>
                </div>
                <div class="hero-screen-cell">
                  <div class="hero-screen-cell-num" style="color:#10B981">99%</div>
                  <div class="hero-screen-cell-lbl">Uptime</div>
                </div>
                <div class="hero-screen-cell">
                  <div class="hero-screen-cell-num" style="color:rgba(255,255,255,0.8)">24/7</div>
                  <div class="hero-screen-cell-lbl">Support</div>
                </div>
              </div>
            </div>
            <div style="display:flex;gap:8px;margin-top:4px">
              <div style="height:6px;flex:3;background:var(--red);border-radius:3px;opacity:0.7"></div>
              <div style="height:6px;flex:1;background:rgba(255,255,255,0.08);border-radius:3px"></div>
              <div style="height:6px;flex:2;background:rgba(255,255,255,0.08);border-radius:3px"></div>
            </div>
          </div>
          <!-- Floating cards -->
          <div class="hero-float-card fc-1">
            <div class="hero-float-card-icon" style="background:#FEF2F2">🔌</div>
            <div class="hero-float-card-text">
              <div class="hero-float-card-title">IoT Connected</div>
              <div class="hero-float-card-val">Real-time monitoring aktif</div>
            </div>
          </div>
          <div class="hero-float-card fc-2">
            <div class="hero-float-card-icon" style="background:#F0FDF4">✅</div>
            <div class="hero-float-card-text">
              <div class="hero-float-card-title">Project Terkirim</div>
              <div class="hero-float-card-val">Control Room Dishub Jatim</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT
============================================================ -->
<section id="about">
  <div class="container">
    <div class="about-grid">
      <!-- Visual left -->
      <div class="about-visual reveal-left">
        <div class="about-stripe"></div>
        <div class="about-img-wrap">
          <div class="about-img-inner">
            <!-- Abstract geometric grid representing technology -->
            <svg width="180" height="180" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="10" y="10" width="50" height="50" rx="8" fill="rgba(217,4,41,0.25)" stroke="rgba(217,4,41,0.4)" stroke-width="1.5"/>
              <rect x="70" y="10" width="50" height="50" rx="8" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5"/>
              <rect x="130" y="10" width="40" height="50" rx="8" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5"/>
              <rect x="10" y="70" width="50" height="50" rx="8" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5"/>
              <rect x="70" y="70" width="100" height="50" rx="8" fill="rgba(217,4,41,0.15)" stroke="rgba(217,4,41,0.3)" stroke-width="1.5"/>
              <rect x="10" y="130" width="110" height="40" rx="8" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5"/>
              <rect x="130" y="130" width="40" height="40" rx="8" fill="rgba(244,180,0,0.15)" stroke="rgba(244,180,0,0.3)" stroke-width="1.5"/>
              <!-- Center icon -->
              <circle cx="90" cy="95" r="18" fill="rgba(217,4,41,0.3)" stroke="rgba(217,4,41,0.6)" stroke-width="1.5"/>
              <text x="90" y="100" text-anchor="middle" fill="white" font-size="16">⚡</text>
            </svg>
            <div style="font-family:var(--font-head);font-size:13px;font-weight:600;color:rgba(255,255,255,0.4);letter-spacing:0.1em">TOTAL IT SOLUTION</div>
          </div>
        </div>
        <div class="about-badge">
          <div class="about-badge-num">10+</div>
          <div class="about-badge-lbl">Tahun Pengalaman</div>
        </div>
      </div>
      <!-- Text right -->
      <div class="about-text reveal-right">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title">Inter G Queen<br><span>Bumindo</span></h2>
        <p class="about-body">
          Seiring perkembangan revolusi teknologi 5.0, Inter G hadir menjawab tantangan dengan konsep <strong>Total IT Solution</strong>. 
          Kami menyediakan berbagai solusi untuk memenuhi segala kebutuhan teknologi — baik pemerintahan maupun perusahaan — mulai dari otomasi, big data, IoT, 
          hingga Artificial Intelligence.
        </p>
        <!-- Stats -->
        <div class="about-stats">
          <div class="about-stat">
            <div class="about-stat-num">100+</div>
            <div class="about-stat-lbl">Project</div>
          </div>
          <div class="about-stat">
            <div class="about-stat-num">50+</div>
            <div class="about-stat-lbl">Client</div>
          </div>
          <div class="about-stat">
            <div class="about-stat-num">24/7</div>
            <div class="about-stat-lbl">Support</div>
          </div>
        </div>
        <!-- Vision / Mission -->
        <div class="vm-row">
          <div class="vm-item">
            <div class="vm-icon">🎯</div>
            <div>
              <div class="vm-label">Visi</div>
              <div class="vm-text">Menjadi mitra transformasi digital terpercaya 
                                  yang mengakselerasi inovasi dan teknologi di Indonesia.</div>
            </div>
          </div>
          <div class="vm-item">
            <div class="vm-icon">🚀</div>
            <div>
              <div class="vm-label">Misi</div>
              <div class="vm-text">Menghadirkan solusi teknologi terpadu yang komprehensif, handal, dan berkelanjutan untuk meningkatkan daya saing klien.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES
============================================================ -->
<section id="services">
  <div class="container">
    <div class="services-header reveal">
      <div class="section-label">Layanan Kami</div>
      <h2 class="section-title">General <span>Services</span></h2>
      <p class="section-sub">Solusi teknologi komprehensif yang dirancang khusus untuk kebutuhan pemerintahan dan perusahaan modern.</p>
    </div>
    <div class="services-grid">

      <!-- System Integrator -->
      <div class="service-card reveal">
        <div class="service-icon">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
        </div>
        <div class="service-title">System Integrator</div>
        <p class="service-desc">Solusi terpadu yang mengintegrasikan berbagai komponen sistem untuk meningkatkan efisiensi operasional dan kinerja bisnis Anda.</p>
        <a href="#contact" class="service-link">
          Pelajari Lebih
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
        </a>
      </div>

      <!-- Software & App Dev -->
      <div class="service-card reveal">
        <div class="service-icon">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
        </div>
        <div class="service-title">Software & App Development</div>
        <p class="service-desc">Tim ahli kami merancang solusi perangkat lunak inovatif — mulai dari aplikasi web, desktop, hingga mobile yang sesuai kebutuhan unik Anda.</p>
        <a href="#contact" class="service-link">
          Pelajari Lebih
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
        </a>
      </div>

      <!-- IoT Solution -->
      <div class="service-card reveal">
        <div class="service-icon">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
        </div>
        <div class="service-title">IoT Solution & Surveillance Camera</div>
        <p class="service-desc">Solusi IoT menghubungkan perangkat pintar dan mengoptimalkan proses bisnis. Dari kamera pengawas hingga sensor IoT terintegrasi.</p>
        <a href="#contact" class="service-link">
          Pelajari Lebih
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
        </a>
      </div>

      <!-- Display Solution -->
      <div class="service-card reveal">
        <div class="service-icon">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/></svg>
        </div>
        <div class="service-title">Professional Integrated Display Solution</div>
        <p class="service-desc">Videotron, VMS, LED Display untuk Control Room, Command Center, NOC, Traffic Control, Digital Signage, dan aplikasi display profesional lainnya.</p>
        <a href="#contact" class="service-link">
          Pelajari Lebih
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
        </a>
      </div>

      <!-- Hardware Service -->
      <div class="service-card reveal">
        <div class="service-icon">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6zm6-6h4v3h-4zM6 7h5v5H6zm6 4h4v6h-4z"/></svg>
        </div>
        <div class="service-title">Hardware Service & Maintenance</div>
        <p class="service-desc">Layanan perawatan dan pemeliharaan perangkat keras memastikan ketersediaan optimal dan kinerja stabil dari sistem IT perusahaan Anda.</p>
        <a href="#contact" class="service-link">
          Pelajari Lebih
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
        </a>
      </div>

      <!-- Digital Transformation -->
      <div class="service-card reveal">
        <div class="service-icon">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M13 2.05v2.02c3.95.49 7 3.85 7 7.93 0 3.21-1.81 6-4.72 7.72L13 17v5h5l-1.22-1.22C19.91 19.07 22 15.76 22 12c0-5.18-3.95-9.45-9-9.95zM11 2.05C5.95 2.55 2 6.82 2 12c0 3.76 2.09 7.07 5.22 8.78L6 22h5V2.05z"/></svg>
        </div>
        <div class="service-title">Digital Transformation Consulting</div>
        <p class="service-desc">Konsultasi transformasi digital end-to-end yang membantu organisasi Anda beradaptasi dan unggul dalam era revolusi industri 5.0.</p>
        <a href="#contact" class="service-link">
          Pelajari Lebih
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US
============================================================ -->
<section id="why">
  <div class="container">
    <div class="why-header reveal">
      <div class="section-label">Keunggulan Kami</div>
      <h2 class="section-title">Mengapa Memilih <span>IGB?</span></h2>
      <p class="section-sub" style="color:rgba(255,255,255,0.5);margin-inline:auto">
        Kami menghadirkan kombinasi teknologi mutakhir, tim berpengalaman, dan komitmen penuh terhadap kesuksesan klien.
      </p>
    </div>
    <div class="why-grid">
      <div class="why-card reveal">
        <div class="why-icon">👥</div>
        <div class="why-title">Tim Profesional</div>
        <p class="why-desc">Didukung tenaga ahli berpengalaman di bidang IT, system integration, dan transformasi digital.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon">⚡</div>
        <div class="why-title">Teknologi Terkini</div>
        <p class="why-desc">Selalu mengadopsi teknologi terdepan — AI, IoT, Big Data — untuk memberikan solusi masa depan hari ini.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon">🚀</div>
        <div class="why-title">Implementasi Cepat</div>
        <p class="why-desc">Metodologi delivery efisien memastikan project selesai tepat waktu tanpa mengorbankan kualitas.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon">🛡️</div>
        <div class="why-title">Keamanan Data</div>
        <p class="why-desc">Standar keamanan enterprise-grade melindungi data dan sistem Anda dari ancaman siber.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon">🔧</div>
        <div class="why-title">Dukungan 24/7</div>
        <p class="why-desc">Tim support siap membantu kapan saja — monitoring proaktif dan respons cepat untuk operasional tanpa gangguan.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon">🎯</div>
        <div class="why-title">Solusi Sesuai Kebutuhan</div>
        <p class="why-desc">Setiap solusi dirancang khusus — bukan off-the-shelf — untuk memenuhi kebutuhan spesifik bisnis dan regulasi klien.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     PORTFOLIO
============================================================ -->
<section id="portfolio">
  <div class="container">
    <div class="portfolio-header">
      <div class="reveal">
        <div class="section-label">Portfolio</div>
        <h2 class="section-title">Project <span>Unggulan</span></h2>
      </div>
      <a href="#contact" class="btn btn-navy reveal">Lihat Semua Project →</a>
    </div>
    <div class="portfolio-grid">

      <div class="portfolio-card reveal">
        <div class="portfolio-thumb" style="background:linear-gradient(135deg,#1e293b,#0F172A)">
          <div class="portfolio-thumb-inner">
            <div class="portfolio-thumb-icon">🖥️</div>
            <div class="portfolio-thumb-label">CONTROL ROOM</div>
          </div>
          <div class="portfolio-overlay">
            <div class="portfolio-overlay-btn">Lihat Detail</div>
          </div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-cat">Display Solution</div>
          <div class="portfolio-name">Control Room Dinas SDA Jatim</div>
          <p class="portfolio-desc">Video wall system terintegrasi untuk monitoring sumber daya air Provinsi Jawa Timur secara real-time.</p>
        </div>
      </div>

      <div class="portfolio-card reveal">
        <div class="portfolio-thumb" style="background:linear-gradient(135deg,#1e293b,#2d1b69)">
          <div class="portfolio-thumb-inner">
            <div class="portfolio-thumb-icon">🚦</div>
            <div class="portfolio-thumb-label">TRAFFIC SYSTEM</div>
          </div>
          <div class="portfolio-overlay">
            <div class="portfolio-overlay-btn">Lihat Detail</div>
          </div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-cat">Software Development</div>
          <div class="portfolio-name">JT Command Center (JTCC)</div>
          <p class="portfolio-desc">Platform monitoring lalu lintas real-time Dishub Jatim — analisis data, pengelolaan kejadian, modernisasi transportasi.</p>
        </div>
      </div>

      <div class="portfolio-card reveal">
        <div class="portfolio-thumb" style="background:linear-gradient(135deg,#1e293b,#134e4a)">
          <div class="portfolio-thumb-inner">
            <div class="portfolio-thumb-icon">💧</div>
            <div class="portfolio-thumb-label">IoT · AWLR</div>
          </div>
          <div class="portfolio-overlay">
            <div class="portfolio-overlay-btn">Lihat Detail</div>
          </div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-cat">IoT Solution</div>
          <div class="portfolio-name">Telemetri AWLR</div>
          <p class="portfolio-desc">Sistem pemantauan ketinggian air jarak jauh berbasis telemetri canggih dengan akses data real-time untuk Dinas SDA.</p>
        </div>
      </div>

      <div class="portfolio-card reveal">
        <div class="portfolio-thumb" style="background:linear-gradient(135deg,#1e293b,#7c2d12)">
          <div class="portfolio-thumb-inner">
            <div class="portfolio-thumb-icon">🛣️</div>
            <div class="portfolio-thumb-label">VMS · OUTDOOR</div>
          </div>
          <div class="portfolio-overlay">
            <div class="portfolio-overlay-btn">Lihat Detail</div>
          </div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-cat">Display Solution</div>
          <div class="portfolio-name">VMS Traffic Info Kota Malang</div>
          <p class="portfolio-desc">Variable Message Sign outdoor terintegrasi sistem lalu lintas — estimasi waktu tempuh dan informasi kemacetan.</p>
        </div>
      </div>

      <div class="portfolio-card reveal">
        <div class="portfolio-thumb" style="background:linear-gradient(135deg,#1e293b,#1e3a5f)">
          <div class="portfolio-thumb-inner">
            <div class="portfolio-thumb-icon">🗄️</div>
            <div class="portfolio-thumb-label">WEB PLATFORM</div>
          </div>
          <div class="portfolio-overlay">
            <div class="portfolio-overlay-btn">Lihat Detail</div>
          </div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-cat">Software Development</div>
          <div class="portfolio-name">SINTA — Sistem Interoperabilitas JT&UPKB</div>
          <p class="portfolio-desc">Platform web terintegrasi untuk pertukaran data Jembatan Timbang dan UPKB di seluruh Jawa Timur.</p>
        </div>
      </div>

      <div class="portfolio-card reveal">
        <div class="portfolio-thumb" style="background:linear-gradient(135deg,#1e293b,#14532d)">
          <div class="portfolio-thumb-inner">
            <div class="portfolio-thumb-icon">📡</div>
            <div class="portfolio-thumb-label">AI · RADAR</div>
          </div>
          <div class="portfolio-overlay">
            <div class="portfolio-overlay-btn">Lihat Detail</div>
          </div>
        </div>
        <div class="portfolio-info">
          <div class="portfolio-cat">IoT Solution</div>
          <div class="portfolio-name">Radar Traffic Counting</div>
          <p class="portfolio-desc">Sensor radar presisi tinggi untuk analisis kendaraan dan pola lalu lintas — mendukung pengambilan keputusan berbasis data.</p>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- ============================================================
     BLOG
============================================================ -->
<section id="blog">
  <div class="container">
    <div class="blog-header">
      <div class="reveal">
        <div class="section-label">Blog & Insight</div>
        <h2 class="section-title">Artikel <span>Terkini</span></h2>
      </div>
      <a href="#" class="btn btn-navy reveal">Semua Artikel →</a>
    </div>
    <div class="blog-grid">
      <div class="blog-card reveal">
        <div class="blog-thumb">
          <div class="blog-thumb-emoji">🌐</div>
          <div class="blog-thumb-bar"></div>
        </div>
        <div class="blog-meta">
          <div class="blog-cat">IoT & Smart City</div>
          <div class="blog-date">18 Juni 2025</div>
          <div class="blog-title">Masa Depan Smart City: Peran IoT dalam Transformasi Infrastruktur Kota</div>
          <p class="blog-excerpt">Bagaimana sensor IoT, radar traffic, dan telemetri AWLR membentuk ekosistem kota pintar yang efisien dan berkelanjutan...</p>
        </div>
        <div class="blog-footer">
          <a href="#" class="blog-read-more">
            Baca Selengkapnya
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
          </a>
          <span style="font-size:12px;color:var(--gray-text)">5 min read</span>
        </div>
      </div>
      <div class="blog-card reveal">
        <div class="blog-thumb" style="background:linear-gradient(135deg,#1e293b,#1e3a5f)">
          <div class="blog-thumb-emoji">🖥️</div>
          <div class="blog-thumb-bar"></div>
        </div>
        <div class="blog-meta">
          <div class="blog-cat">Display Solution</div>
          <div class="blog-date">5 Juni 2025</div>
          <div class="blog-title">Membangun Control Room Modern: Panduan Lengkap Video Wall & Command Center</div>
          <p class="blog-excerpt">Dari pemilihan teknologi display hingga arsitektur sistem yang redundan — kunci membangun ruang kendali operasional kelas enterprise...</p>
        </div>
        <div class="blog-footer">
          <a href="#" class="blog-read-more">
            Baca Selengkapnya
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
          </a>
          <span style="font-size:12px;color:var(--gray-text)">7 min read</span>
        </div>
      </div>
      <div class="blog-card reveal">
        <div class="blog-thumb" style="background:linear-gradient(135deg,#1e293b,#14532d)">
          <div class="blog-thumb-emoji">🤖</div>
          <div class="blog-thumb-bar"></div>
        </div>
        <div class="blog-meta">
          <div class="blog-cat">AI & Surveillance</div>
          <div class="blog-date">22 Mei 2025</div>
          <div class="blog-title">AI Vision Camera: Revolusi Sistem Pengawasan Cerdas untuk Bisnis dan Pemerintah</div>
          <p class="blog-excerpt">Kemampuan analisa, deteksi, identifikasi, dan klasifikasi berbasis AI mengubah paradigma keamanan konvensional menjadi sistem proaktif...</p>
        </div>
        <div class="blog-footer">
          <a href="#" class="blog-read-more">
            Baca Selengkapnya
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
          </a>
          <span style="font-size:12px;color:var(--gray-text)">6 min read</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CONTACT
============================================================ -->
<section id="contact">
  <div class="container">
    <div class="contact-grid">
      <!-- Left -->
      <div>
        <div class="section-label" style="color:rgba(255,255,255,0.5)">
          Hubungi Kami
        </div>
        <h2 class="section-title" style="color:var(--white)">Mari Mulai<br><span>Bersama Kami</span></h2>
        <p class="section-sub" style="color:rgba(255,255,255,0.5)">
          Siap membantu Anda bertransformasi digital. Ceritakan kebutuhan Anda dan kami siapkan solusi terbaik.
        </p>
        <div class="contact-info-list">
          <div class="contact-info-item reveal">
            <div class="contact-info-icon">📞</div>
            <div>
              <div class="contact-info-label">Telepon</div>
              <div class="contact-info-val">+62 341 400 272</div>
            </div>
          </div>
          <div class="contact-info-item reveal">
            <div class="contact-info-icon">💬</div>
            <div>
              <div class="contact-info-label">WhatsApp</div>
              <div class="contact-info-val">+62 812-3356-956</div>
            </div>
          </div>
          <div class="contact-info-item reveal">
            <div class="contact-info-icon">🌐</div>
            <div>
              <div class="contact-info-label">Website</div>
              <div class="contact-info-val">interg.co.id</div>
            </div>
          </div>
          <div class="contact-info-item reveal">
            <div class="contact-info-icon">📍</div>
            <div>
              <div class="contact-info-label">Alamat</div>
              <div class="contact-info-val">Perum Permata Jingga Blok AA No. 27,<br>Tunggulwulung, Lowokwaru, Kota Malang 65143</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Form -->
      <div class="contact-form reveal">
        <div style="font-family:var(--font-head);font-size:18px;font-weight:700;color:var(--white);margin-bottom:24px">
          Kirim Pesan
        </div>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Nama Lengkap</label>
            <input class="form-input" type="text" placeholder="Nama Anda" />
          </div>
          <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-input" type="email" placeholder="email@perusahaan.com" />
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Perusahaan / Instansi</label>
          <input class="form-input" type="text" placeholder="Nama perusahaan Anda" />
        </div>
        <div class="form-group">
          <label class="form-label">Layanan yang Dibutuhkan</label>
          <select class="form-input" style="cursor:pointer">
            <option value="" style="background:#1e293b">Pilih layanan...</option>
            <option style="background:#1e293b">System Integrator</option>
            <option style="background:#1e293b">Software & App Development</option>
            <option style="background:#1e293b">IoT Solution & Surveillance</option>
            <option style="background:#1e293b">Display Solution</option>
            <option style="background:#1e293b">Hardware Service & Maintenance</option>
            <option style="background:#1e293b">Digital Transformation Consulting</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Pesan</label>
          <textarea class="form-textarea" placeholder="Ceritakan kebutuhan atau pertanyaan Anda..."></textarea>
        </div>
        <button class="form-submit" onclick="handleSubmit(this)">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
          Kirim Pesan
        </button>
      </div>
    </div>
  </div>
</section>

<script>
  /* ---- Form submit feedback ---- */
  function handleSubmit(btn) {
    const orig = btn.innerHTML;
    btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg> Terkirim!';
    btn.style.background = '#10b981';
    setTimeout(() => {
      btn.innerHTML = orig;
      btn.style.background = '';
    }, 3000);
  }
</script>

@endsection