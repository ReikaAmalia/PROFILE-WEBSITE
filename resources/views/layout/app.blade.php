<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IGB — Inter G Queen Bumindo | Accelerating Innovation & Technology</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <style>
    /* ============================================================
       DESIGN TOKENS & RESET
    ============================================================ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --red:        #D90429;
      --red-dark:   #A4031F;
      --red-muted:  rgba(217,4,41,0.08);
      --navy:       #0F172A;
      --navy-mid:   #1E293B;
      --navy-soft:  #334155;
      --gray-light: #F8FAFC;
      --gray-mid:   #E2E8F0;
      --gray-text:  #64748B;
      --dark-gray:  #3d3b3b;
      --gold:       #F4B400;
      --white:      #FFFFFF;
      --text-dark:  #1E293B;
      --background: #505781;
      

      --radius-sm:  8px;
      --radius-md:  14px;
      --radius-lg:  24px;

      --shadow-sm:  0 2px 12px rgba(15,23,42,0.07);
      --shadow-md:  0 8px 32px rgba(15,23,42,0.12);
      --shadow-lg:  0 20px 60px rgba(15,23,42,0.16);
      --shadow-red: 0 8px 32px rgba(217,4,41,0.22);

      --transition: 0.28s cubic-bezier(0.4,0,0.2,1);
      --font-head:  'Poppins', sans-serif;
      --font-body:  'Inter', sans-serif;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font-body);
      color: var(--text-dark);
      background: var(--white);
      line-height: 1.65;
      overflow-x: hidden;
    }

    img { display: block; max-width: 100%; }
    a { text-decoration: none; color: inherit; }
    button { cursor: pointer; border: none; background: none; font-family: inherit; }

    /* ============================================================
       UTILITIES
    ============================================================ */
    .container {
      width: min(1200px, 92vw);
      margin-inline: auto;
    }

    .section-label {
      font-family: var(--font-head);
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--red);
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
    }
    .section-label::before {
      content: '';
      width: 28px;
      height: 2px;
      background: var(--red);
      flex-shrink: 0;
    }

    .section-title {
      font-family: var(--font-head);
      font-size: clamp(28px, 4vw, 42px);
      font-weight: 700;
      line-height: 1.18;
      color: var(--navy);
    }
    .section-title span { color: var(--red); }

    .section-sub {
      font-size: 16px;
      color: var(--gray-text);
      max-width: 560px;
      line-height: 1.75;
      margin-top: 14px;
    }

    /* Buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: var(--font-head);
      font-size: 14px;
      font-weight: 600;
      border-radius: 50px;
      padding: 13px 28px;
      transition: var(--transition);
      letter-spacing: 0.02em;
    }
    .btn-red {
      background: var(--red);
      color: var(--white);
      box-shadow: var(--shadow-red);
    }
    .btn-red:hover {
      background: var(--red-dark);
      transform: translateY(-2px);
      box-shadow: 0 12px 40px rgba(217,4,41,0.32);
    }
    .btn-outline {
      border: 1.5px solid rgba(255,255,255,0.5);
      color: var(--white);
      backdrop-filter: blur(8px);
    }
    .btn-outline:hover {
      border-color: var(--white);
      background: rgba(255,255,255,0.12);
    }
    .btn-navy {
      background: var(--navy);
      color: var(--white);
    }
    .btn-navy:hover {
      background: var(--navy-mid);
      transform: translateY(-2px);
    }

    /* Fade-in scroll observer */
    .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .reveal.visible {
      opacity: 1;
      transform: none;
    }
    .reveal-left {
      opacity: 0;
      transform: translateX(-32px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .reveal-left.visible { opacity: 1; transform: none; }
    .reveal-right {
      opacity: 0;
      transform: translateX(32px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .reveal-right.visible { opacity: 1; transform: none; }

    /* ============================================================
       NAVBAR
    ============================================================ */
    #navbar .container {
    width: 100%;
    max-width: 100%;
    padding: 0 15px;
    margin: 0;
}
    
    #navbar {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1000;
      padding: 20px 5px 0;
      transition: background 0.35s ease, padding 0.35s ease, box-shadow 0.35s ease;
    }
    #navbar.scrolled {
      background: rgb(172, 3, 3);
      backdrop-filter: blur(18px);
      padding: 12px 0;
      box-shadow: 0 4px 24px rgba(0,0,0,0.18);
    }

        #navbar.force-solid {
      background: rgb(172, 3, 3);
      padding: 12px 0;
    }
    
    .nav-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    /* Logo */
    .nav-logo {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-left:-5px;
    }
  
    .brand-text p {
    margin: 0;
    color: #9ca3af;
    font-size: 20px;
    line-height: 1.4;
}
    .tagline p{
        margin: 0;
        color: #8b8b8b;
        font-size: 18px;
        line-height: 1.5;
        text-align: left;
    }

    .logo {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo-text {
    font-size: 40px;
    font-weight: 800;
    font-style: italic;
    line-height: 1;
    margin: 0;
}

.logo-sub {
    font-size: 10px;
    line-height: 1.3;
    color: #353333;
}

    /* Nav links */
    .nav-links {
      display: flex;
      list-style: none;
      gap: 4px;
      align-items: center;
    }
    .nav-links a {
      font-family: var(--font-head);
      font-size: 13.5px;
      font-weight: 500;
      color: rgba(255,255,255,0.78);
      padding: 20px 14px;
      border-radius: 8px;
      transition: var(--transition);
    }
    .nav-links a:hover {
      color: var(--white);
      background: rgba(255,255,255,0.08);
    }
    .nav-cta {
      margin-left: 12px;
    }

    /* Hamburger */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      padding: 8px;
      cursor: pointer;
    }
    .hamburger span {
      width: 24px; height: 2px;
      background: var(--white);
      border-radius: 2px;
      transition: var(--transition);
    }

    /* ============================================================
       HERO
    ============================================================ */
    #hero {
      min-height: 100vh;
      background: var(--background);
      position: relative;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    /* Geometric background pattern */
    .hero-bg {
      position: absolute;
      inset: 0;
      overflow: hidden;
    }
    .hero-bg::before {
      content: '';
      position: absolute;
      top: -20%; right: -10%;
      width: 65vw; height: 120%;
      background: linear-gradient(135deg, var(--red) 0%, var(--red-dark) 50%, #6b0013 100%);
      clip-path: polygon(15% 0%, 100% 0%, 100% 100%, 0% 100%);
      opacity: 0.92;
    }
    /* Grid dot pattern */
    .hero-grid {
      position: absolute;
      inset: 0;
      background-image:
        radial-gradient(circle, rgba(255,255,255,0.07) 1px, transparent 1px);
      background-size: 40px 40px;
    }
    /* Floating shapes */
    .hero-shape {
      position: absolute;
      border-radius: 50%;
      filter: blur(60px);
      pointer-events: none;
    }
    .hero-shape-1 {
      width: 300px; height: 300px;
      background: rgba(209, 164, 41, 0.08);
      top: 10%; right: 5%;
    }
    .hero-shape-2 {
      width: 200px; height: 200px;
      background: rgba(217,4,41,0.4);
      bottom: 15%; left: 35%;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      width: 100%;
      padding: 120px 0 80px;
    }

    .hero-grid-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
    }

    .hero-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(216, 72, 72, 0.523);
      border: 1px solid rgba(195, 19, 31, 0.498);
      color: var(--gold);
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.1em;
      padding: 6px 16px;
      border-radius: 50px;
      margin-bottom: 24px;
    }
    .hero-tag::before {
      content: '';
      width: 6px; height: 6px;
      background: var(--red);
      border-radius: 50%;
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.3; }
    }

    .hero-headline {
      font-family: var(--font-head);
      font-size: clamp(38px, 5.5vw, 64px);
      font-weight: 800;
      line-height: 1.08;
      color: var(--white);
      letter-spacing: -0.03em;
      margin-bottom: 24px;
    }
    .hero-headline .red-word { color: var(--red); }
    .hero-headline .accent-word {
      position: relative;
      display: inline-block;
    }
    .hero-headline .accent-word::after {
      content: '';
      position: absolute;
      bottom: 4px; left: 0; right: 0;
      height: 4px;
      background: var(--gold);
      border-radius: 2px;
      opacity: 0.7;
    }

    .hero-sub {
      font-size: 17px;
      color: rgba(255,255,255,0.7);
      line-height: 1.75;
      max-width: 480px;
      margin-bottom: 40px;
    }

    .hero-ctas {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }

    /* Stats bar */
    .hero-stats {
      margin-top: 56px;
      display: flex;
      gap: 40px;
      padding-top: 40px;
      border-top: 1px solid rgba(255,255,255,0.1);
    }
  
    .hero-stat-num {
      font-family: var(--font-head);
      font-size: 32px;
      font-weight: 800;
      color: var(--white);
      line-height: 1;
    }
    .hero-stat-num span { color: var(--red); }
    .hero-stat-label {
      font-size: 12px;
      color: rgba(255,255,255,0.5);
      margin-top: 4px;
      letter-spacing: 0.05em;
    }

    /* Right side: illustration placeholder */
    .hero-visual {
      position: relative;
    }
    .hero-card-main {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: var(--radius-lg);
      padding: 32px;
      backdrop-filter: blur(16px);
    }
    .hero-card-header {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 20px;
    }
    .hero-card-dot {
      width: 10px; height: 10px; border-radius: 50%;
    }
    .hero-card-screen {
      background: rgba(15,23,42,0.6);
      border-radius: var(--radius-md);
      padding: 20px;
      margin-bottom: 16px;
    }
    .hero-screen-bar {
      height: 8px;
      border-radius: 4px;
      margin-bottom: 10px;
    }
    .hero-screen-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin-top: 16px;
    }
    .hero-screen-cell {
      background: rgba(255,255,255,0.06);
      border-radius: 8px;
      padding: 12px;
      border: 1px solid rgba(255,255,255,0.07);
    }
    .hero-screen-cell-num {
      font-family: var(--font-head);
      font-size: 20px;
      font-weight: 700;
      color: var(--white);
    }
    .hero-screen-cell-lbl {
      font-size: 10px;
      color: rgba(255,255,255,0.45);
      margin-top: 2px;
    }
    /* Floating mini cards */
    .hero-float-card {
      position: absolute;
      background: var(--white);
      border-radius: var(--radius-md);
      padding: 12px 16px;
      box-shadow: var(--shadow-lg);
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .hero-float-card-icon {
      width: 36px; height: 36px;
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 16px;
    }
    .hero-float-card-text { font-family: var(--font-head); }
    .hero-float-card-title { font-size: 12px; font-weight: 600; color: var(--text-dark); }
    .hero-float-card-val { font-size: 10px; color: var(--gray-text); }
    .fc-1 { top: -24px; right: -20px; }
    .fc-2 { bottom: -16px; left: -20px; }

    /* ============================================================
       ABOUT
    ============================================================ */
    #about {
      padding: 100px 0;
      background: var(--white);
    }
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }
    /* Left: image / illustration */
    .about-visual {
      position: relative;
    }
    .about-img-wrap {
      border-radius: var(--radius-lg);
      overflow: hidden;
      aspect-ratio: 4/5;
      background: linear-gradient(135deg, #1e293b 0%, var(--navy) 100%);
      position: relative;
    }
    .about-img-inner {
      width: 100%; height: 100%;
      display: flex; align-items: center; justify-content: center;
      flex-direction: column;
      gap: 16px;
      color: rgba(255,255,255,0.12);
    }
    /* Decorative stripe */
    .about-stripe {
      position: absolute;
      top: 32px; left: -20px;
      width: 6px; height: 120px;
      background: var(--red);
      border-radius: 3px;
    }
    .about-badge {
      position: absolute;
      bottom: 32px; right: -24px;
      background: var(--red);
      color: var(--white);
      border-radius: var(--radius-md);
      padding: 16px 22px;
      text-align: center;
      box-shadow: var(--shadow-red);
    }
    .about-badge-num {
      font-family: var(--font-head);
      font-size: 32px;
      font-weight: 800;
      line-height: 1;
    }
    .about-badge-lbl {
      font-size: 11px;
      opacity: 0.85;
      margin-top: 2px;
    }
    /* Right: text */
    .about-body {
      font-size: 16px;
      color: var(--gray-text);
      line-height: 1.8;
      margin-top: 20px;
      margin-bottom: 32px;
    }
    /* Stats row */
    .about-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1px;
      background: var(--gray-mid);
      border-radius: var(--radius-md);
      overflow: hidden;
      margin-bottom: 36px;
    }
    .about-stat {
      background: var(--white);
      padding: 22px 18px;
      text-align: center;
    }
    .about-stat-num {
      font-family: var(--font-head);
      font-size: 28px;
      font-weight: 800;
      color: var(--red);
    }
    .about-stat-lbl {
      font-size: 12px;
      color: var(--gray-text);
      margin-top: 4px;
    }
    /* Vision / Mission pills */
    .vm-row {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    .vm-item {
      display: flex;
      gap: 14px;
      align-items: flex-start;
      padding: 16px 18px;
      border-radius: var(--radius-md);
      background: var(--gray-light);
      border-left: 3px solid var(--red);
    }
    .vm-icon {
      width: 32px; height: 32px;
      background: var(--red-muted);
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      font-size: 14px;
      flex-shrink: 0;
    }
    .vm-label {
      font-family: var(--font-head);
      font-size: 12px;
      font-weight: 600;
      color: var(--red);
      letter-spacing: 0.08em;
      margin-bottom: 4px;
    }
    .vm-text {
      font-size: 14px;
      color: var(--navy-soft);
      line-height: 1.55;
    }

    /* ============================================================
       SERVICES
    ============================================================ */
    #services {
      padding: 100px 0;
      background: var(--gray-light);
    }
    .services-header {
      text-align: center;
      margin-bottom: 60px;
    }
    .services-header .section-label { justify-content: center; }
    .services-header .section-label::before { display: none; }
    .services-header .section-sub { margin-inline: auto; text-align: center; }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .service-card {
      background: var(--white);
      border-radius: var(--radius-md);
      padding: 32px 28px;
      border: 1px solid var(--gray-mid);
      transition: var(--transition);
      position: relative;
      overflow: hidden;
    }
    .service-card::before {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--red), var(--red-dark));
      transform: scaleX(0);
      transform-origin: left;
      transition: var(--transition);
    }
    .service-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-lg);
      border-color: transparent;
    }
    .service-card:hover::before { transform: scaleX(1); }

    .service-icon {
      width: 56px; height: 56px;
      background: var(--red-muted);
      border-radius: var(--radius-sm);
      display: flex; align-items: center; justify-content: center;
      font-size: 26px;
      margin-bottom: 20px;
      transition: var(--transition);
    }
    .service-card:hover .service-icon {
      background: var(--red);
      transform: scale(1.08);
    }
    .service-card:hover .service-icon svg { fill: var(--white); }

    .service-title {
      font-family: var(--font-head);
      font-size: 17px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 10px;
    }
    .service-desc {
      font-size: 14px;
      color: var(--gray-text);
      line-height: 1.7;
    }
    .service-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 600;
      color: var(--red);
      margin-top: 18px;
      transition: var(--transition);
    }
    .service-link svg { transition: var(--transition); }
    .service-link:hover svg { transform: translateX(4px); }

    /* ============================================================
       WHY CHOOSE US
    ============================================================ */
    #why {
      padding: 100px 0;
      background: var(--navy);
      position: relative;
      overflow: hidden;
    }
    #why::before {
      content: '';
      position: absolute;
      top: -60px; left: -60px;
      width: 400px; height: 400px;
      background: radial-gradient(circle, rgba(217,4,41,0.18) 0%, transparent 70%);
    }
    #why::after {
      content: '';
      position: absolute;
      bottom: -60px; right: -60px;
      width: 300px; height: 300px;
      background: radial-gradient(circle, rgba(217,4,41,0.12) 0%, transparent 70%);
    }
    .why-header {
      text-align: center;
      margin-bottom: 60px;
      position: relative; z-index: 1;
    }
    .why-header .section-label { justify-content: center; color: rgba(255,255,255,0.5); }
    .why-header .section-label::before { background: rgba(255,255,255,0.3); }
    .why-header .section-title { color: var(--white); }
    .why-header .section-sub { color: rgba(255,255,255,0.55); margin-inline: auto; }

    .why-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      position: relative; z-index: 1;
    }
    .why-card {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: var(--radius-md);
      padding: 28px;
      transition: var(--transition);
      backdrop-filter: blur(8px);
    }
    .why-card:hover {
      background: rgba(255,255,255,0.07);
      border-color: rgba(217,4,41,0.35);
      transform: translateY(-4px);
    }
    .why-icon {
      width: 48px; height: 48px;
      border-radius: var(--radius-sm);
      background: var(--red-muted);
      border: 1px solid rgba(217,4,41,0.25);
      display: flex; align-items: center; justify-content: center;
      font-size: 20px;
      margin-bottom: 16px;
    }
    .why-title {
      font-family: var(--font-head);
      font-size: 15px;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 8px;
    }
    .why-desc {
      font-size: 13.5px;
      color: rgba(255,255,255,0.5);
      line-height: 1.65;
    }

    /* ============================================================
       PORTFOLIO
    ============================================================ */
    #portfolio {
      padding: 100px 0;
      background: var(--white);
    }
    .portfolio-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 48px;
    }
    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .portfolio-card {
      border-radius: var(--radius-md);
      overflow: hidden;
      background: var(--gray-light);
      border: 1px solid var(--gray-mid);
      transition: var(--transition);
      cursor: pointer;
    }
    .portfolio-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-lg);
    }
    .portfolio-thumb {
      aspect-ratio: 16/10;
      overflow: hidden;
      position: relative;
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 100%);
      display: flex; align-items: center; justify-content: center;
    }
    .portfolio-thumb-inner {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
    }
    .portfolio-thumb-icon {
      width: 56px; height: 56px;
      background: rgba(217,4,41,0.2);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 24px;
      border: 1px solid rgba(217,4,41,0.3);
    }
    .portfolio-thumb-label {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 600;
      color: rgba(255,255,255,0.7);
      letter-spacing: 0.08em;
    }
    .portfolio-overlay {
      position: absolute;
      inset: 0;
      background: rgba(217,4,41,0.85);
      display: flex; align-items: center; justify-content: center;
      opacity: 0;
      transition: var(--transition);
    }
    .portfolio-card:hover .portfolio-overlay { opacity: 1; }
    .portfolio-overlay-btn {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 600;
      color: var(--white);
      border: 1.5px solid var(--white);
      padding: 10px 22px;
      border-radius: 50px;
    }

    .portfolio-info {
      padding: 20px 22px;
    }
    .portfolio-cat {
      font-size: 11px;
      font-weight: 600;
      color: var(--red);
      letter-spacing: 0.1em;
      text-transform: uppercase;
      margin-bottom: 8px;
    }
    .portfolio-name {
      font-family: var(--font-head);
      font-size: 15px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 6px;
    }
    .portfolio-desc {
      font-size: 13px;
      color: var(--gray-text);
      line-height: 1.6;
    }

    /* ============================================================
       TESTIMONIALS
    ============================================================ */
    #testimonials {
      padding: 100px 0;
      background: var(--gray-light);
    }
    .testi-header {
      text-align: center;
      margin-bottom: 60px;
    }
    .testi-header .section-label { justify-content: center; }
    .testi-header .section-label::before { display: none; }
    .testi-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .testi-card {
      background: var(--white);
      border-radius: var(--radius-md);
      padding: 28px;
      border: 1px solid var(--gray-mid);
      transition: var(--transition);
      position: relative;
    }
    .testi-card:hover {
      box-shadow: var(--shadow-md);
      transform: translateY(-4px);
    }
    .testi-quote-mark {
      font-size: 64px;
      font-family: Georgia, serif;
      color: var(--red);
      line-height: 0.5;
      margin-bottom: 12px;
      opacity: 0.15;
      position: absolute;
      top: 24px; left: 24px;
    }
    .testi-stars {
      display: flex;
      gap: 3px;
      margin-bottom: 14px;
    }
    .star { color: var(--gold); font-size: 14px; }
    .testi-text {
      font-size: 14px;
      color: var(--gray-text);
      line-height: 1.75;
      margin-bottom: 20px;
      font-style: italic;
    }
    .testi-author {
      display: flex;
      align-items: center;
      gap: 12px;
      border-top: 1px solid var(--gray-mid);
      padding-top: 16px;
    }
    .testi-avatar {
      width: 42px; height: 42px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-family: var(--font-head);
      font-size: 16px;
      font-weight: 700;
      color: var(--white);
      flex-shrink: 0;
    }
    .testi-name {
      font-family: var(--font-head);
      font-size: 14px;
      font-weight: 700;
      color: var(--navy);
    }
    .testi-role {
      font-size: 12px;
      color: var(--gray-text);
    }

    /* ============================================================
       BLOG
    ============================================================ */
    #blog {
      padding: 100px 0;
      background: var(--white);
    }
    .blog-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 48px;
    }
    .blog-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .blog-card {
      border-radius: var(--radius-md);
      overflow: hidden;
      border: 1px solid var(--gray-mid);
      background: var(--white);
      transition: var(--transition);
    }
    .blog-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
    }
    .blog-thumb {
      aspect-ratio: 16/9;
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 100%);
      display: flex; align-items: center; justify-content: center;
      position: relative;
      overflow: hidden;
    }
    .blog-thumb-emoji {
      font-size: 40px;
      opacity: 0.6;
    }
    .blog-thumb-bar {
      position: absolute;
      bottom: 0; left: 0;
      width: 100%; height: 3px;
      background: linear-gradient(90deg, var(--red), transparent);
    }
    .blog-meta {
      padding: 22px 22px 0;
    }
    .blog-cat {
      font-size: 11px;
      font-weight: 600;
      color: var(--red);
      letter-spacing: 0.1em;
      text-transform: uppercase;
      margin-bottom: 8px;
    }
    .blog-date { font-size: 12px; color: var(--gray-text); }
    .blog-title {
      font-family: var(--font-head);
      font-size: 16px;
      font-weight: 700;
      color: var(--navy);
      margin: 10px 0 8px;
      line-height: 1.4;
    }
    .blog-excerpt {
      font-size: 13.5px;
      color: var(--gray-text);
      line-height: 1.65;
    }
    .blog-footer {
      padding: 16px 22px 22px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .blog-read-more {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 600;
      color: var(--red);
      display: flex;
      align-items: center;
      gap: 6px;
      transition: var(--transition);
    }
    .blog-read-more:hover { gap: 10px; }

    /* ============================================================
       CONTACT
    ============================================================ */
    #contact {
      padding: 100px 0;
      background: var(--navy);
      position: relative;
      overflow: hidden;
    }
    #contact::before {
      content: '';
      position: absolute;
      top: 0; right: 0;
      width: 50%;
      height: 100%;
      background: linear-gradient(135deg, transparent 0%, rgba(217,4,41,0.07) 100%);
    }
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 80px;
      position: relative; z-index: 1;
    }
    .contact-left .section-title { color: var(--white); }
    .contact-left .section-sub { color: rgba(255,255,255,0.55); max-width: 400px; }

    .contact-info-list {
      margin-top: 40px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .contact-info-item {
      display: flex;
      align-items: center;
      gap: 16px;
    }
    .contact-info-icon {
      width: 44px; height: 44px;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: var(--radius-sm);
      display: flex; align-items: center; justify-content: center;
      font-size: 18px;
      flex-shrink: 0;
    }
    .contact-info-label {
      font-size: 11px;
      color: rgba(255,255,255,0.4);
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 3px;
    }
    .contact-info-val {
      font-family: var(--font-head);
      font-size: 14px;
      font-weight: 500;
      color: var(--white);
    }

    /* Form */
    .contact-form {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: var(--radius-lg);
      padding: 40px;
      backdrop-filter: blur(12px);
    }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .form-group {
      display: flex;
      flex-direction: column;
      gap: 7px;
      margin-bottom: 16px;
    }
    .form-group.full { grid-column: 1 / -1; }
    .form-label {
      font-size: 12px;
      font-weight: 600;
      color: rgba(255,255,255,0.6);
      letter-spacing: 0.05em;
    }
    .form-input, .form-textarea {
      width: 100%;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: var(--radius-sm);
      padding: 12px 16px;
      font-family: var(--font-body);
      font-size: 14px;
      color: var(--white);
      outline: none;
      transition: var(--transition);
    }
    .form-input::placeholder, .form-textarea::placeholder {
      color: rgba(255,255,255,0.3);
    }
    .form-input:focus, .form-textarea:focus {
      border-color: var(--red);
      background: rgba(255,255,255,0.09);
    }
    .form-textarea { resize: vertical; min-height: 110px; }
    .form-submit {
      width: 100%;
      padding: 15px;
      background: var(--red);
      color: var(--white);
      font-family: var(--font-head);
      font-size: 15px;
      font-weight: 700;
      border-radius: 50px;
      border: none;
      cursor: pointer;
      transition: var(--transition);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      box-shadow: var(--shadow-red);
    }
    .form-submit:hover {
      background: var(--red-dark);
      transform: translateY(-2px);
      box-shadow: 0 12px 40px rgba(217,4,41,0.35);
    }

    /* ============================================================
       FOOTER
    ============================================================ */
    #footer {
      background: #060D1B;
      padding: 60px 0 32px;
      border-top: 1px solid rgba(255,255,255,0.05);
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 48px;
      margin-bottom: 48px;
    }
    .footer-logo { margin-bottom: 16px; }
    .footer-desc {
      font-size: 13.5px;
      color: rgba(255,255,255,0.45);
      line-height: 1.75;
      max-width: 280px;
      margin-bottom: 20px;
    }
    .footer-socials {
      display: flex;
      gap: 10px;
    }
    .footer-social {
      width: 36px; height: 36px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.09);
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      font-size: 15px;
      color: rgba(255,255,255,0.5);
      transition: var(--transition);
    }
    .footer-social:hover {
      background: var(--red);
      border-color: var(--red);
      color: var(--white);
    }
    .footer-col-title {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 700;
      color: var(--white);
      letter-spacing: 0.05em;
      margin-bottom: 18px;
    }
    .footer-links {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .footer-links a {
      font-size: 13px;
      color: rgba(255,255,255,0.45);
      transition: var(--transition);
    }
    .footer-links a:hover { color: var(--red); }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.06);
      padding-top: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .footer-copy {
      font-size: 12.5px;
      color: rgba(255,255,255,0.35);
    }
    .footer-copy span { color: var(--red); }
    .footer-tagline {
      font-size: 12px;
      color: rgba(255,255,255,0.25);
      font-style: italic;
    }

    /* ============================================================
       MOBILE NAV
    ============================================================ */
    .mobile-nav {
      display: none;
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: var(--navy);
      z-index: 999;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 28px;
    }
    .mobile-nav.open { display: flex; }
    .mobile-nav a {
      font-family: var(--font-head);
      font-size: 22px;
      font-weight: 600;
      color: var(--white);
    }
    .mobile-close {
      position: absolute;
      top: 20px; right: 24px;
      font-size: 28px;
      color: var(--white);
      cursor: pointer;
    }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 1024px) {
      .services-grid, .why-grid, .portfolio-grid, .testi-grid, .blog-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 32px;
      }
    }

    @media (max-width: 768px) {
      .nav-links, .nav-cta { display: none; }
      .hamburger { display: flex; }

      .hero-grid-layout { grid-template-columns: 1fr; }
      .hero-visual { display: none; }
      .hero-stats { gap: 24px; flex-wrap: wrap; }

      .about-grid { grid-template-columns: 1fr; gap: 40px; }
      .about-stripe { display: none; }
      .about-badge { bottom: 16px; right: 16px; }

      .services-grid, .why-grid, .portfolio-grid,
      .testi-grid, .blog-grid { grid-template-columns: 1fr; }

      .contact-grid { grid-template-columns: 1fr; gap: 40px; }
      .form-row { grid-template-columns: 1fr; }

      .footer-grid { grid-template-columns: 1fr; gap: 32px; }
      .footer-bottom { flex-direction: column; gap: 8px; text-align: center; }

      .portfolio-header, .blog-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
      }

      .about-stats { grid-template-columns: repeat(3, 1fr); }
    }

    @media (max-width: 480px) {
      .hero-ctas { flex-direction: column; }
      .about-stats { grid-template-columns: 1fr 1fr; }
    }

    /* ============================================================
       SVG ICONS (inline)
    ============================================================ */
    .icon-svg {
      width: 28px; height: 28px;
      fill: var(--red);
    }
    .icon-sm { width: 18px; height: 18px; }

    /* ============================================================
       MARKETPLACE SECTION
       ============================================================ */
    #marketplace {
      padding: 140px 0 100px;
      background: var(--gray-light);
      min-height: 100vh;
    }
    .mp-head {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 50px;
    }
    .mp-title {
      font-family: var(--font-head);
      font-size: clamp(32px, 5vw, 46px);
      font-weight: 800;
      color: var(--navy);
      line-height: 1.2;
      margin-top: 10px;
      letter-spacing: -0.02em;
    }
    .mp-title span {
      color: var(--red);
    }
    .mp-subtitle {
      font-family: var(--font-body);
      font-size: 15px;
      color: var(--gray-text);
      line-height: 1.7;
      margin-top: 16px;
    }
    .mp-toolbar {
      display: flex;
      gap: 16px;
      background: var(--white);
      padding: 20px;
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-sm);
      border: 1px solid var(--gray-mid);
      margin-bottom: 30px;
      align-items: center;
      flex-wrap: wrap;
    }
    .mp-search {
      position: relative;
      flex: 1;
      min-width: 280px;
    }
    .mp-search svg {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      fill: var(--gray-text);
      pointer-events: none;
      transition: var(--transition);
    }
    .mp-search input {
      width: 100%;
      padding: 13px 16px 13px 48px;
      border-radius: var(--radius-sm);
      border: 1.5px solid var(--gray-mid);
      background: var(--gray-light);
      font-family: var(--font-body);
      font-size: 14px;
      color: var(--navy);
      outline: none;
      transition: var(--transition);
    }
    .mp-search input:focus {
      border-color: var(--red);
      background: var(--white);
      box-shadow: 0 0 0 4px rgba(217, 4, 41, 0.08);
    }
    .mp-search input:focus + svg {
      fill: var(--red);
    }
    .mp-select {
      padding: 13px 20px;
      border-radius: var(--radius-sm);
      border: 1.5px solid var(--gray-mid);
      background: var(--gray-light);
      font-family: var(--font-body);
      font-size: 14px;
      color: var(--navy-soft);
      outline: none;
      cursor: pointer;
      min-width: 180px;
      transition: var(--transition);
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='18' height='18' fill='%2364748B'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 12px center;
      padding-right: 40px;
    }
    .mp-select:focus {
      border-color: var(--red);
      background-color: var(--white);
      box-shadow: 0 0 0 4px rgba(217, 4, 41, 0.08);
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 28px;
      margin-bottom: 30px;
    }
    .mp-results-count {
      font-size: 14px;
      color: var(--gray-text);
      margin-bottom: 40px;
    }
    .mp-results-count strong {
      color: var(--navy);
    }
    .product-card {
      background: var(--white);
      border-radius: var(--radius-md);
      border: 1px solid var(--gray-mid);
      overflow: hidden;
      transition: var(--transition);
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--shadow-md);
      border-color: rgba(15, 23, 42, 0.08);
    }
    .product-thumb {
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy-soft) 100%);
      height: 200px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      overflow: hidden;
    }
    .product-thumb svg:not(.wishlist-btn svg) {
      width: 56px;
      height: 56px;
      stroke: rgba(255, 255, 255, 0.25);
      fill: none;
      transition: var(--transition);
    }
    .product-card:hover .product-thumb svg:not(.wishlist-btn svg) {
      transform: scale(1.15);
      stroke: rgba(255, 255, 255, 0.45);
    }
    .badge-status {
      position: absolute;
      top: 14px;
      left: 14px;
      font-family: var(--font-head);
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      padding: 6px 12px;
      border-radius: 50px;
      color: var(--white);
      box-shadow: var(--shadow-sm);
      z-index: 2;
    }
    .status-baru {
      background: #10B981;
    }
    .status-bekas {
      background: #D97706;
    }
    .status-digital {
      background: #3B82F6;
    }
    .badge-cat {
      display: inline-block;
      font-family: var(--font-head);
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 4px 10px;
      border-radius: 6px;
      margin-bottom: 12px;
      align-self: flex-start;
    }
    .cat-komputer {
      background: rgba(59, 130, 246, 0.08);
      color: #2563EB;
    }
    .cat-storage {
      background: rgba(16, 185, 129, 0.08);
      color: #059669;
    }
    .cat-software {
      background: rgba(139, 92, 246, 0.08);
      color: #7C3AED;
    }
    .cat-aksesoris {
      background: rgba(245, 158, 11, 0.08);
      color: #D97706;
    }
    .wishlist-btn {
      position: absolute;
      top: 14px;
      right: 14px;
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2;
      transition: var(--transition);
    }
    .wishlist-btn svg {
      width: 16px;
      height: 16px;
      fill: none;
      stroke: var(--white);
      stroke-width: 2.2;
      transition: var(--transition);
    }
    .wishlist-btn:hover {
      background: rgba(255, 255, 255, 0.3);
    }
    .wishlist-btn.active svg {
      fill: var(--red);
      stroke: var(--red);
      animation: heartBeat 0.3s ease-in-out;
    }
    @keyframes heartBeat {
      0% { transform: scale(1); }
      50% { transform: scale(1.3); }
      100% { transform: scale(1); }
    }
    .product-body {
      padding: 22px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .product-name {
      font-family: var(--font-head);
      font-size: 16px;
      font-weight: 700;
      color: var(--navy);
      line-height: 1.4;
      margin-bottom: 8px;
      cursor: pointer;
      transition: var(--transition);
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      height: 44px;
    }
    .product-name:hover {
      color: var(--red);
    }
    .product-price {
      font-family: var(--font-head);
      font-size: 18px;
      font-weight: 800;
      color: var(--red);
      margin-bottom: 20px;
    }
    .product-cta {
      display: flex;
      flex-direction: column;
      gap: 8px;
      margin-top: auto;
    }
    .btn-wa, .btn-email {
      font-family: var(--font-head);
      font-size: 12px;
      font-weight: 700;
      border-radius: 9px;
      padding: 10px 14px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: var(--transition);
    }
    .btn-wa {
      background: #25D366;
      color: var(--white);
    }
    .btn-wa:hover {
      background: #128C7E;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.2);
    }
    .btn-email {
      background: var(--navy);
      color: var(--white);
    }
    .btn-email:hover { background: var(--navy-mid); transform: translateY(-2px); }
    .btn-wa svg, .btn-email svg { width: 15px; height: 15px; fill: currentColor; flex-shrink: 0; }
    .btn-detail {
      font-family: var(--font-head); font-size: 12px; font-weight: 600; color: var(--navy-soft);
      border: 1.5px solid var(--gray-mid); border-radius: 9px; padding: 9px 10px; text-align: center;
      transition: var(--transition); background: var(--white);
    }
    .btn-detail:hover { border-color: var(--navy); background: var(--gray-light); }

    /* Modal */
    .mp-modal-overlay {
      position: fixed; inset: 0; background: rgba(15,23,42,0.6); backdrop-filter: blur(4px);
      display: none; align-items: center; justify-content: center; z-index: 2000; padding: 24px;
    }
    .mp-modal-overlay.open { display: flex; }
    .mp-modal-box { background: var(--white); border-radius: var(--radius-lg); width: min(820px, 100%); max-height: 88vh; overflow-y: auto; box-shadow: var(--shadow-lg); position: relative; }
    .mp-modal-close {
      position: absolute; top: 16px; right: 16px; width: 34px; height: 34px; border-radius: 50%;
      background: var(--gray-light); display: flex; align-items: center; justify-content: center;
      font-size: 17px; color: var(--navy); z-index: 5; transition: var(--transition); cursor: pointer;
    }
    .mp-modal-close:hover { background: var(--gray-mid); }
    .mp-modal-grid { display: grid; grid-template-columns: 1fr 1.15fr; }
    .mp-modal-visual { background: linear-gradient(135deg, #1E293B, #334155); display: flex; align-items: center; justify-content: center; min-height: 300px; padding: 0; overflow: hidden; }
    .mp-modal-visual svg { width: 90px; height: 90px; stroke: rgba(255,255,255,0.3); fill: none; }
    .mp-modal-content { padding: 34px 32px; }
    .mp-modal-title { font-family: var(--font-head); font-size: 21px; font-weight: 800; color: var(--navy); line-height: 1.3; margin: 12px 0 4px; }
    .mp-modal-price { font-family: var(--font-head); font-size: 24px; font-weight: 800; color: var(--red); margin-bottom: 10px; }
    .mp-modal-desc { font-size: 13.5px; color: var(--gray-text); line-height: 1.7; margin-bottom: 14px; }
    .spec-table { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 18px; }
    .spec-item { background: var(--gray-light); border-radius: 10px; padding: 10px 13px; border: 1px solid var(--gray-mid); }
    .spec-label { font-size: 10px; color: var(--gray-text); text-transform: uppercase; letter-spacing: 0.05em; font-weight: 600; }
    .spec-value { font-size: 13px; color: var(--navy); font-weight: 700; margin-top: 2px; }
    .mp-modal-cta { display: flex; gap: 10px; }
    .mp-modal-cta a, .mp-modal-cta button { flex: 1; }

    .mp-toast {
      position: fixed; bottom: 26px; left: 50%; transform: translateX(-50%) translateY(20px);
      background: var(--navy); color: var(--white); font-family: var(--font-head); font-size: 13px; font-weight: 600;
      padding: 12px 20px; border-radius: 50px; box-shadow: var(--shadow-lg); opacity: 0; pointer-events: none;
      transition: opacity 0.3s ease, transform 0.3s ease; z-index: 3000;
    }
    .mp-toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }

    @media (max-width: 1080px) { .product-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 720px) {
      .product-grid { grid-template-columns: repeat(2, 1fr); }
      .mp-modal-grid { grid-template-columns: 1fr; }
      .mp-modal-visual { min-height: 180px; }
    }
    @media (max-width: 480px) {
      .product-grid { grid-template-columns: 1fr; }
      #marketplace { padding: 80px 0 70px; }
      .mp-toolbar { flex-direction: column; align-items: stretch; }
      .spec-table { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

  <!-- ============================================================
       MOBILE NAV OVERLAY
  ============================================================ -->
  <nav class="mobile-nav" id="mobileNav">
    <span class="mobile-close" onclick="closeMobileNav()">✕</span>
    <a href="{{ Request::routeIs('home') ? '#hero' : route('home').'#hero' }}" onclick="closeMobileNav()">Home</a>
    <a href="{{ Request::routeIs('home') ? '#about' : route('home').'#about' }}" onclick="closeMobileNav()">About Us</a>
    <a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}" onclick="closeMobileNav()">Services</a>
    <a href="{{ Request::routeIs('home') ? '#portfolio' : route('home').'#portfolio' }}" onclick="closeMobileNav()">Portfolio</a>
    <a href="{{ Request::routeIs('home') ? '#blog' : route('home').'#blog' }}" onclick="closeMobileNav()">Blog</a>
    <a href="{{ Request::routeIs('home') ? '#contact' : route('home').'#contact' }}" onclick="closeMobileNav()">Contact</a>
    <a href="{{ route('marketplace') }}" onclick="closeMobileNav()">Marketplace</a>
  </nav>

  <!-- ============================================================
       NAVBAR
  ============================================================ -->
  <header id="navbar" class="@if(!Request::routeIs('home')) force-solid @endif">
    <div class="container">
      <div class="nav-inner">
        <!-- Logo -->
        <a href="{{ Request::routeIs('home') ? '#hero' : route('home').'#hero' }}" class="nav-logo">
          <div class="logo-badge">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div class="logo-text">
              IG&B
          </div>
          <div class="logo-sub">
              Accelerating<br>
              Innovation &<br>
              Technology
          </div>
        </a>
        <!-- Nav Links -->
        <ul class="nav-links">
          <li><a href="{{ Request::routeIs('home') ? '#hero' : route('home').'#hero' }}">Home</a></li>
          <li><a href="{{ Request::routeIs('home') ? '#about' : route('home').'#about' }}" onclick="forceNavSolid()">About Us</a></li>
          <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}" onclick="forceNavSolid()">Services</a></li>
          <li><a href="{{ Request::routeIs('home') ? '#portfolio' : route('home').'#portfolio' }}" onclick="forceNavSolid()">Portfolio</a></li>
          <li><a href="{{ Request::routeIs('home') ? '#blog' : route('home').'#blog' }}" onclick="forceNavSolid()">Blog</a></li>
          <li><a href="{{ Request::routeIs('home') ? '#contact' : route('home').'#contact' }}" onclick="forceNavSolid()">Contact</a></li>
          <li><a href="{{ route('marketplace') }}">Marketplace</a></li>
        </ul>
        <!-- CTA -->
        <a href="{{ Request::routeIs('home') ? '#contact' : route('home').'#contact' }}" class="btn btn-red nav-cta">Konsultasi Gratis</a>
        <!-- Hamburger -->
        <button class="hamburger" onclick="openMobileNav()" aria-label="Menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  @yield('content')

  <!-- ============================================================
       FOOTER
  ============================================================ -->
  <footer id="footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Brand -->
        <div class="footer-brand">
          <div class="footer-logo">
            <div class="nav-logo">
              <div class="logo-badge">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
              </div>
              <div>
                <div class="logo-text">IG<span>&</span>B</div>
                <span class="logo-sub">Accelerating Innovation & Technology</span>
              </div>
            </div>
          </div>
          <p class="footer-desc">
            Solusi teknologi terpadu untuk pemerintahan dan perusahaan modern. Kami hadir menjawab tantangan transformasi digital 5.0 Indonesia.
          </p>
          <div class="footer-socials">
            <a href="#" class="footer-social" title="LinkedIn">in</a>
            <a href="#" class="footer-social" title="Instagram">ig</a>
            <a href="#" class="footer-social" title="Facebook">fb</a>
            <a href="#" class="footer-social" title="YouTube">yt</a>
          </div>
        </div>
        <!-- Quick Links -->
        <div>
          <div class="footer-col-title">Quick Links</div>
          <ul class="footer-links">
            <li><a href="{{ Request::routeIs('home') ? '#hero' : route('home').'#hero' }}">Home</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#about' : route('home').'#about' }}">About Us</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}">Services</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#portfolio' : route('home').'#portfolio' }}">Portfolio</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#blog' : route('home').'#blog' }}">Blog</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#contact' : route('home').'#contact' }}">Contact</a></li>
          </ul>
        </div>
        <!-- Services -->
        <div>
          <div class="footer-col-title">Layanan</div>
          <ul class="footer-links">
            <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}">System Integrator</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}">Software Development</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}">IoT Solution</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}">Display Solution</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}">Hardware Service</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#services' : route('home').'#services' }}">IT Consulting</a></li>
          </ul>
        </div>
        <!-- Contact -->
        <div>
          <div class="footer-col-title">Kontak</div>
          <ul class="footer-links">
            <li><a href="tel:+62341400272">+62 341 400 272</a></li>
            <li><a href="https://wa.me/6281233569560">+62 812-3356-956</a></li>
            <li><a href="https://interg.co.id">interg.co.id</a></li>
            <li><a href="{{ Request::routeIs('home') ? '#contact' : route('home').'#contact' }}">Kota Malang, 65143</a></li>
          </ul>
        </div>
      </div>
      <!-- Bottom -->
      <div class="footer-bottom">
        <div class="footer-copy">
          © 2025 <span>Inter G Queen Bumindo</span>. All rights reserved.
        </div>
        <div class="footer-tagline">Accelerating Innovation and Technology</div>
      </div>
    </div>
  </footer>

  <!-- ============================================================
       JAVASCRIPT
  ============================================================ -->
  <script>
    /* ---- Navbar scroll effect ---- */
    const navbar = document.getElementById('navbar');
    if (navbar) {
      window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
      }, { passive: true });
    }

    /* ---- Scroll reveal (IntersectionObserver) ---- */
    const revealClasses = ['.reveal', '.reveal-left', '.reveal-right'];
    const revealEls = document.querySelectorAll(revealClasses.join(','));

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          // Stagger siblings in the same parent
          const siblings = Array.from(entry.target.parentElement.querySelectorAll('.reveal, .reveal-left, .reveal-right'));
          const idx = siblings.indexOf(entry.target);
          setTimeout(() => {
            entry.target.classList.add('visible');
          }, idx * 80);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    revealEls.forEach(el => observer.observe(el));

    /* ---- Mobile nav ---- */
    function openMobileNav() {
      const mobileNav = document.getElementById('mobileNav');
      if (mobileNav) {
        mobileNav.classList.add('open');
        document.body.style.overflow = 'hidden';
      }
    }
    function closeMobileNav() {
      const mobileNav = document.getElementById('mobileNav');
      if (mobileNav) {
        mobileNav.classList.remove('open');
        document.body.style.overflow = '';
      }
    }

    /* ---- Force navbar solid saat klik menu section ---- */
    function forceNavSolid() {
      if (navbar) navbar.classList.add('scrolled');
    }

    @if(Request::routeIs('home'))
    /* ---- Smooth active nav highlight ---- */
    const sections = document.querySelectorAll('section[id]');
    const navAnchors = document.querySelectorAll('.nav-links a');

    const sectionObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navAnchors.forEach(a => {
            const href = a.getAttribute('href');
            if (href && href.startsWith('#')) {
              a.style.color = href === `#${entry.target.id}`
                ? '#fff'
                : 'rgba(255,255,255,0.65)';
              a.style.background = href === `#${entry.target.id}`
                ? 'rgba(255,255,255,0.1)'
                : '';
            }
          });
        }
      });
    }, { threshold: 0.4 });

    sections.forEach(s => sectionObserver.observe(s));
    @endif
  </script>

</body>
</html>