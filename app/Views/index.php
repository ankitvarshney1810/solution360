
<!-- ═══ HOME PAGE ═══ -->
<div class="page active" id="page-home">
  <!-- Hero -->
  <section class="hero">
    <div class="hero-bg-grid"></div>
    <div class="hero-accent-shape"></div>
    <div class="hero-accent-shape-2"></div>
    <div class="hero-line"></div>
    <div class="container position-relative">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="hero-tag"><span></span> India's Premier Offline Advertising Agency</div>
          <h1 class="hero-title">Make Your Brand<br><span class="highlight">Impossible</span><br>to Ignore</h1>
          <p class="hero-desc">From towering billboards to silver screens — Solution360 crafts bold, strategic offline campaigns that put your brand in front of millions across India.</p>
          <div class="d-flex flex-wrap gap-3">
            <a class="btn-accent" href="<?= base_url('main/contact#contact-section') ?>">Get a Quote <i class="bi bi-arrow-right"></i></a>
            <a class="btn-outline-light-custom" href="<?= base_url('main/portfolio') ?>">View Portfolio <i class="bi bi-grid-3x3-gap"></i></a>
          </div>
          <div class="hero-stats">
            <div><div class="hero-stat-num">500<span>+</span></div><div class="hero-stat-label">Campaigns Delivered</div></div>
            <div><div class="hero-stat-num">120<span>+</span></div><div class="hero-stat-label">Brands Served</div></div>
            <div><div class="hero-stat-num">18<span>+</span></div><div class="hero-stat-label">Cities Covered</div></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-visual">
            <div class="hero-visual-card">
              <div class="hero-visual-inner">
                <img src="<?= base_url('assets/images/hero-img.jfif') ?>" alt="Outdoor billboard advertising India">
              </div>
              <div class="hero-floating-badge top-left">🏙️ 18+ Cities</div>
              <div class="hero-floating-badge bottom-right">🎯 500+ Campaigns</div>
            </div>
            <div class="hero-services-pills mt-3">
              <a href="<?= base_url('services/rwa-advertising') ?>" class="service-pill" style="cursor:pointer"><i class="bi bi-buildings-fill"></i> RWA</a>
              <a href="<?= base_url('services/newspaper-insert') ?>" class="service-pill" style="cursor:pointer"><i class="bi bi-file-earmark-text-fill"></i> Inserts</a>
              <a href="<?= base_url('services/print-media') ?>" class="service-pill" style="cursor:pointer"><i class="bi bi-newspaper"></i> Print</a>
              <a href="<?= base_url('services/lookwalker') ?>" class="service-pill" style="cursor:pointer"><i class="bi bi-person-walking"></i> Lookwalker</a>
              <a href="<?= base_url('services/outdoor-advertising') ?>" class="service-pill" style="cursor:pointer"><i class="bi bi-geo-alt-fill"></i> Outdoor</a>
              <a href="<?= base_url('services/cinema-advertising') ?>" class="service-pill" style="cursor:pointer"><i class="bi bi-camera-reels-fill"></i> Cinema</a>
              <a href="<?= base_url('services/radio-advertising') ?>" class="service-pill" style="cursor:pointer"><i class="bi bi-broadcast"></i> Radio</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Counter -->
  <section class="counter-section">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-3 reveal"><div class="counter-item"><div class="counter-num"><span class="count-up" data-target="500">0</span><span>+</span></div><div class="counter-label">Campaigns Done</div></div></div>
        <div class="col-6 col-md-3 reveal reveal-delay-1"><div class="counter-item"><div class="counter-num"><span class="count-up" data-target="120">0</span><span>+</span></div><div class="counter-label">Happy Brands</div></div></div>
        <div class="col-6 col-md-3 reveal reveal-delay-2"><div class="counter-item"><div class="counter-num"><span class="count-up" data-target="18">0</span><span>+</span></div><div class="counter-label">Cities Covered</div></div></div>
        <div class="col-6 col-md-3 reveal reveal-delay-3"><div class="counter-item"><div class="counter-num"><span class="count-up" data-target="10">0</span><span>+</span></div><div class="counter-label">Years Experience</div></div></div>
      </div>
    </div>
  </section>

  <!-- Services Overview -->
  <section class="services-section">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <div class="section-tag">What We Do</div>
        <h2 class="section-heading mx-auto">Advertising That <span class="accent">Reaches</span> Everyone</h2>
        <p class="section-sub mx-auto mt-3">From the highway to the cinema hall — we cover every touchpoint in the offline world.</p>
      </div>
      <div class="row g-4">
        <!-- Row 1: Highlight Services -->
        <div class="col-sm-6 col-lg-4 reveal">
          <a href="<?= base_url('services/rwa-advertising') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-1.jfif') ?>" alt="RWA Advertising"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-buildings-fill"></i></div>
              <h4>RWA Advertising</h4>
              <p>Hyper-local campaigns within Resident Welfare Associations — reach families right at their doorstep.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 reveal reveal-delay-1">
          <a href="<?= base_url('services/newspaper-insert') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-2.jfif') ?>" alt="Newspaper Insert Advertising"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
              <h4>Newspaper Insert</h4>
              <p>Targeted inserts delivered inside leading daily newspapers — direct to your audience's hands.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 reveal reveal-delay-2">
          <a href="<?= base_url('services/print-media') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-3.jfif') ?>" alt="Print Media Advertising"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-newspaper"></i></div>
              <h4>Print Media</h4>
              <p>Full-page newspaper ads, magazine spreads and brochures — high credibility, lasting impressions.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 reveal">
          <a href="<?= base_url('services/lookwalker') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-4.jfif') ?>" alt="Lookwalker Advertising"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-person-walking"></i></div>
              <h4>Lookwalker</h4>
              <p>Human-mounted LED display boards that walk through high-footfall areas — unmissable brand presence.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 reveal reveal-delay-1">
          <a href="<?= base_url('services/customer-acquisition') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-5.jfif') ?>" alt="Customer Acquisition Campaigns Activities"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-people-fill"></i></div>
              <h4>Customer Acquisition Campaigns</h4>
              <p>On-ground activation events, BTL activities and direct engagement to convert prospects into customers.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
        <!-- Row 2: Other Services -->
        <div class="col-sm-6 col-lg-4 reveal reveal-delay-2">
          <a href="<?= base_url('services/outdoor-advertising') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-6.jfif') ?>" alt="Outdoor Billboard Advertising"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-geo-alt-fill"></i></div>
              <h4>Outdoor Advertising</h4>
              <p>Billboards, hoardings, bus shelters, transit ads — dominate public spaces 24/7.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 reveal">
          <a href="<?= base_url('services/cinema-advertising') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-7.jfif') ?>" alt="Cinema Advertising"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-camera-reels-fill"></i></div>
              <h4>Cinema Advertising</h4>
              <p>Captivate audiences on the big screen with pre-show ads at multiplexes across India.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 reveal reveal-delay-1">
          <a href="<?= base_url('services/radio-advertising') ?>" class="service-card">
            <div class="service-card-img"><img src="<?= base_url('assets/images/service-widgit-8.jfif') ?>" alt="Radio Advertising"></div>
            <div class="service-card-body">
              <div class="service-card-icon"><i class="bi bi-broadcast"></i></div>
              <h4>Radio Advertising</h4>
              <p>Memorable jingles and impactful spots on leading FM stations to reach commuters.</p>
              <div class="service-card-arrow">Explore <i class="bi bi-arrow-right"></i></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="why-section">
    <div class="container position-relative">
      <div class="text-center mb-5 reveal">
        <div class="section-tag">Why Solution360</div>
        <h2 class="section-heading light mx-auto">The Unfair <span class="accent">Advantage</span><br>for Your Brand</h2>
        <p class="section-sub mx-auto mt-3" style="color:rgba(255,255,255,0.5)">We don't just place ads. We engineer brand presence that lasts.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4 reveal"><div class="why-card"><div class="why-icon"><i class="bi bi-trophy-fill"></i></div><h5>10+ Years of Expertise</h5><p>A decade of crafting high-impact offline campaigns across India's most competitive markets.</p></div></div>
        <div class="col-md-6 col-lg-4 reveal reveal-delay-1"><div class="why-card"><div class="why-icon"><i class="bi bi-map-fill"></i></div><h5>Pan-India Network</h5><p>18+ cities, 500+ premium locations — from metros to Tier-2 hubs, we have the ground covered.</p></div></div>
        <div class="col-md-6 col-lg-4 reveal reveal-delay-2"><div class="why-card"><div class="why-icon"><i class="bi bi-bar-chart-fill"></i></div><h5>Data-Driven Strategy</h5><p>Every campaign is backed by footfall data, demographic research, and media planning analytics.</p></div></div>
        <div class="col-md-6 col-lg-4 reveal reveal-delay-1"><div class="why-card"><div class="why-icon"><i class="bi bi-palette-fill"></i></div><h5>In-House Creative Team</h5><p>Bold, brand-aligned creatives designed by experts who understand what stops people in their tracks.</p></div></div>
        <div class="col-md-6 col-lg-4 reveal reveal-delay-2"><div class="why-card"><div class="why-icon"><i class="bi bi-lightning-charge-fill"></i></div><h5>Agile Execution</h5><p>Fast turnarounds, seamless coordination, and on-ground execution teams that deliver on time.</p></div></div>
        <div class="col-md-6 col-lg-4 reveal reveal-delay-3"><div class="why-card"><div class="why-icon"><i class="bi bi-clipboard-data-fill"></i></div><h5>Transparent Reporting</h5><p>Real-time campaign dashboards and post-campaign reports so you always know your ROI.</p></div></div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="portfolio-section">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <div class="section-tag">Our Work</div>
        <h2 class="section-heading mx-auto">Campaigns That <span class="accent">Moved</span> the Needle</h2>
        <p class="section-sub mx-auto mt-3">A glimpse into campaigns we've delivered for brands across industries.</p>
      </div>
      <div class="portfolio-grid">
        <div class="portfolio-item reveal">
          <div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio-img-1.jfif') ?>" alt="Outdoor Campaign Mumbai"></div>
          <div class="portfolio-category-badge">Outdoor</div>
          <div class="portfolio-overlay"><div><h5>TechCorp Highway Campaign</h5><span>Outdoor · Mumbai</span></div></div>
        </div>
        <div class="portfolio-item reveal reveal-delay-1">
          <div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio-img-2.jfif') ?>" alt="Cinema Campaign Delhi"></div>
          <div class="portfolio-category-badge">Cinema</div>
          <div class="portfolio-overlay"><div><h5>FashionBrand PVR Blitz</h5><span>Cinema · Delhi NCR</span></div></div>
        </div>
        <div class="portfolio-item reveal reveal-delay-2">
          <div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio-img-3.jfif') ?>" alt="Print Media Campaign"></div>
          <div class="portfolio-category-badge">Print</div>
          <div class="portfolio-overlay"><div><h5>FinTech TOI Full-Page</h5><span>Print · Pan India</span></div></div>
        </div>
        <div class="portfolio-item reveal">
          <div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio-img-4.jfif') ?>" alt="Radio Campaign Bangalore"></div>
          <div class="portfolio-category-badge">Radio</div>
          <div class="portfolio-overlay"><div><h5>EduTech FM Drive</h5><span>Radio · Bangalore</span></div></div>
        </div>
        <div class="portfolio-item reveal reveal-delay-1">
          <div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio-img-5.jfif') ?>" alt="360 Integrated Campaign Hyderabad"></div>
          <div class="portfolio-category-badge" style="background:#1a1a1a">360°</div>
          <div class="portfolio-overlay"><div><h5>RetailChain 360° Blitz</h5><span>Integrated · Hyderabad</span></div></div>
        </div>
        <div class="portfolio-item reveal reveal-delay-2">
          <div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio-img-6.jfif') ?>" alt="Transit Advertising Chennai"></div>
          <div class="portfolio-category-badge">Transit</div>
          <div class="portfolio-overlay"><div><h5>Metro Transit Campaign</h5><span>Outdoor · Chennai</span></div></div>
        </div>
      </div>
      <div class="text-center mt-5 reveal">
        <a href="<?= base_url('main/portfolio') ?>" class="btn-accent">View Full Portfolio <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials-section">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <div class="section-tag">Testimonials</div>
        <h2 class="section-heading mx-auto">What Our <span class="accent">Clients</span> Say</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4 reveal">
          <div class="testimonial-card">
            <div class="testimonial-quote">"</div>
            <p class="testimonial-text">Solution360 transformed our brand visibility across Delhi NCR. Their outdoor campaign drove a 40% spike in foot traffic to our stores in just 3 months.</p>
            <div class="testimonial-author"><div class="author-avatar" style="background:var(--accent)">R</div><div><div class="author-name">Rohit Sharma</div><div class="author-company">CEO, RetailChain India</div><div class="stars mt-1">★★★★★</div></div></div>
          </div>
        </div>
        <div class="col-md-4 reveal reveal-delay-1">
          <div class="testimonial-card">
            <div class="testimonial-quote">"</div>
            <p class="testimonial-text">The cinema advertising campaign before our product launch was phenomenal. Solution360's targeting and creative execution exceeded all our expectations.</p>
            <div class="testimonial-author"><div class="author-avatar" style="background:#333333">P</div><div><div class="author-name">Priya Nair</div><div class="author-company">CMO, TechStartup Pvt. Ltd.</div><div class="stars mt-1">★★★★★</div></div></div>
          </div>
        </div>
        <div class="col-md-4 reveal reveal-delay-2">
          <div class="testimonial-card">
            <div class="testimonial-quote">"</div>
            <p class="testimonial-text">Professional team, transparent pricing, and outstanding results. Our radio campaign with Solution360 consistently brings in qualified leads every quarter.</p>
            <div class="testimonial-author"><div class="author-avatar" style="background:#22c55e">A</div><div><div class="author-name">Anand Krishnan</div><div class="author-company">Founder, EduGrow Solutions</div><div class="stars mt-1">★★★★★</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="cta-banner">
    <div class="container position-relative text-center">
      <div class="reveal">
        <h2>Ready to Make Your Brand<br>Impossible to Ignore?</h2>
        <p class="mt-2">Let's create an offline advertising strategy that delivers real, measurable results for your business.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="<?= base_url('main/contact#contact-section') ?>" class="btn-cta-white">Get a Free Quote <i class="bi bi-arrow-right"></i></a>
          <a href="<?= base_url('main/about') ?>" class="btn-outline-light-custom">Learn About Us</a>
        </div>
      </div>
    </div>
  </section>

</div>

