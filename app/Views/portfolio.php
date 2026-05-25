<div class="page active" id="page-portfolio">
  <section class="page-hero">
    <div class="page-hero-img"><img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1400&q=80" alt="Portfolio"></div>
    <div class="container position-relative">
      <div class="page-hero-breadcrumb"><a href="<?= base_url('main') ?>">Home</a><i class="bi bi-chevron-right"></i><span class="current">Portfolio</span></div>
      <h1 class="page-hero-title">Our <span style="color:var(--accent)">Portfolio</span></h1>
      <p style="color:rgba(255,255,255,0.5);font-size:1rem;margin-top:14px">500+ campaigns. Countless impressions. Measurable results.</p>
    </div>
  </section>
  <section class="portfolio-page">
    <div class="container">
      <div class="portfolio-filter reveal">
        <button class="filter-btn active" onclick="filterPortfolio(this,'all')">All Work</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'outdoor')">Outdoor</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'cinema')">Cinema</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'print')">Print</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'radio')">Radio</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'integrated')">360° Campaigns</button>
      </div>
      <div class="portfolio-grid" id="portfolio-full-grid">
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=600&q=80" alt="Outdoor Campaign"></div><div class="portfolio-category-badge">Outdoor</div><div class="portfolio-overlay"><div><h5>TechCorp Highway Campaign</h5><span>Outdoor · Mumbai</span></div></div></div>
        <div class="portfolio-item" data-cat="cinema"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?w=600&q=80" alt="Cinema Campaign"></div><div class="portfolio-category-badge">Cinema</div><div class="portfolio-overlay"><div><h5>FashionBrand PVR Blitz</h5><span>Cinema · Delhi NCR</span></div></div></div>
        <div class="portfolio-item" data-cat="print"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=600&q=80" alt="Print Campaign"></div><div class="portfolio-category-badge">Print</div><div class="portfolio-overlay"><div><h5>FinTech TOI Full-Page</h5><span>Print · Pan India</span></div></div></div>
        <div class="portfolio-item" data-cat="radio"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1593078165899-c7d2ac0d6aea?w=600&q=80" alt="Radio Campaign"></div><div class="portfolio-category-badge">Radio</div><div class="portfolio-overlay"><div><h5>EduTech FM Drive</h5><span>Radio · Bangalore</span></div></div></div>
        <div class="portfolio-item" data-cat="integrated"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=600&q=80" alt="360 Campaign"></div><div class="portfolio-category-badge" style="background:#1a1a1a">360°</div><div class="portfolio-overlay"><div><h5>RetailChain 360° Blitz</h5><span>Integrated · Hyderabad</span></div></div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1570168007204-dfb528c6958f?w=600&q=80" alt="Transit Campaign"></div><div class="portfolio-category-badge">Transit</div><div class="portfolio-overlay"><div><h5>Metro Transit Campaign</h5><span>Outdoor · Chennai</span></div></div></div>
        <div class="portfolio-item" data-cat="cinema"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?w=600&q=80" alt="Cinema Campaign 2"></div><div class="portfolio-category-badge">Cinema</div><div class="portfolio-overlay"><div><h5>Auto Brand INOX Launch</h5><span>Cinema · Pune</span></div></div></div>
        <div class="portfolio-item" data-cat="print"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1585282263861-f55e341878f8?w=600&q=80" alt="Print Campaign 2"></div><div class="portfolio-category-badge">Print</div><div class="portfolio-overlay"><div><h5>Magazine Double Spread</h5><span>Print · Nationwide</span></div></div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="https://images.unsplash.com/photo-1592861956120-e524fc739696?w=600&q=80" alt="LED Billboard"></div><div class="portfolio-category-badge">LED OOH</div><div class="portfolio-overlay"><div><h5>LED Billboard Network</h5><span>Outdoor · Delhi</span></div></div></div>
      </div>
      <div class="text-center mt-5 reveal"><a href="<?= base_url('main/contact') ?>" class="btn-accent">Start Your Campaign <i class="bi bi-arrow-right"></i></a></div>
    </div>
  </section>
  <section class="cta-banner"><div class="container position-relative text-center"><h2>Love What You See?</h2><p class="mt-2">Let's create a campaign like this — or even better — for your brand.</p><a href="<?= base_url('main/contact#contact-section') ?>" class="btn-cta-white">Get a Free Quote <i class="bi bi-arrow-right"></i></a></div></section>

</div>