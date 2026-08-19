<div class="page active" id="page-portfolio">
  <section class="page-hero">
    <div class="page-hero-img"><img src="<?= base_url('assets/images/portfolio-banner.jfif') ?>" alt="Portfolio"></div>
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
        <button class="filter-btn" onclick="filterPortfolio(this,'rwa')">RWA</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'newspaper')">Newspaper Inserts</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'printmedia')">Print Media</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'lookwalker')">Lookwalker</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'outdoor')">Outdoor</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'customer-acquisition')">Customer Acquisition</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'cinema')">Cinema</button>
        <button class="filter-btn" onclick="filterPortfolio(this,'transit')">Transit</button>
      </div>
      <div class="portfolio-grid" id="portfolio-full-grid">
        <div class="portfolio-item" data-cat="rwa"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/rwa01.jpg') ?>" alt="RWA Campaign"></div><div class="portfolio-category-badge">RWA Advertising</div></div>
        <div class="portfolio-item" data-cat="rwa"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/rwa02.jpg') ?>" alt="RWA Campaign"></div><div class="portfolio-category-badge">RWA Advertising</div></div>
        <div class="portfolio-item" data-cat="rwa"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/rwa03.jpg') ?>" alt="RWA Campaign"></div><div class="portfolio-category-badge">RWA Advertising</div></div>
        <div class="portfolio-item" data-cat="rwa"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/rwa04.jpg') ?>" alt="RWA Campaign"></div><div class="portfolio-category-badge">RWA Advertising</div></div>
        <div class="portfolio-item" data-cat="rwa"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/rwa05.jpg') ?>" alt="RWA Campaign"></div><div class="portfolio-category-badge">RWA Advertising</div></div>
        <div class="portfolio-item" data-cat="rwa"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/rwa06.jpg') ?>" alt="RWA Campaign"></div><div class="portfolio-category-badge">RWA Advertising</div></div>
        <div class="portfolio-item" data-cat="newspaper"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/newspaper01.jpg') ?>" alt="Newspaper Insert"></div><div class="portfolio-category-badge">Newspaper</div></div>
        <div class="portfolio-item" data-cat="newspaper"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/newspaper02.jpg') ?>" alt="Newspaper Insert"></div><div class="portfolio-category-badge">Newspaper</div></div>
        <div class="portfolio-item" data-cat="newspaper"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/newspaper03.jpg') ?>" alt="Newspaper Insert"></div><div class="portfolio-category-badge">Newspaper</div></div>
        <div class="portfolio-item" data-cat="newspaper"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/newspaper04.jpg') ?>" alt="Newspaper Insert"></div><div class="portfolio-category-badge">Newspaper</div></div>
        <div class="portfolio-item" data-cat="newspaper"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/newspaper05.jpg') ?>" alt="Newspaper Insert"></div><div class="portfolio-category-badge">Newspaper</div></div>
        <div class="portfolio-item" data-cat="newspaper"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/newspaper06.jpg') ?>" alt="Newspaper Insert"></div><div class="portfolio-category-badge">Newspaper</div></div>
        <div class="portfolio-item" data-cat="printmedia"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/media01.jpeg') ?>" alt="Print Media Campaign"></div><div class="portfolio-category-badge">Print Media</div></div>
        <div class="portfolio-item" data-cat="printmedia"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/media02.jpeg') ?>" alt="Print Media Campaign"></div><div class="portfolio-category-badge">Print Media</div></div>
        <div class="portfolio-item" data-cat="printmedia"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/media03.jpeg') ?>" alt="Print Media Campaign"></div><div class="portfolio-category-badge">Print Media</div></div>
        <div class="portfolio-item" data-cat="printmedia"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/media04.jpeg') ?>" alt="Print Media Campaign"></div><div class="portfolio-category-badge">Print Media</div></div>
        <div class="portfolio-item" data-cat="printmedia"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/media05.jpeg') ?>" alt="Print Media Campaign"></div><div class="portfolio-category-badge">Print Media</div></div>
        <div class="portfolio-item" data-cat="printmedia"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/media06.jpeg') ?>" alt="Print Media Campaign"></div><div class="portfolio-category-badge">Print Media</div></div>
        <div class="portfolio-item" data-cat="lookwalker"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/lookwalker01.jpg') ?>" alt="Lookwalker Campaign"></div><div class="portfolio-category-badge">Lookwalker</div></div>
        <div class="portfolio-item" data-cat="lookwalker"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/lookwalker02.jpg') ?>" alt="Lookwalker Campaign"></div><div class="portfolio-category-badge">Lookwalker</div></div>
        <div class="portfolio-item" data-cat="lookwalker"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/lookwalker03.jpg') ?>" alt="Lookwalker Campaign"></div><div class="portfolio-category-badge">Lookwalker</div></div>
        <div class="portfolio-item" data-cat="lookwalker"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/lookwalker04.jpg') ?>" alt="Lookwalker Campaign"></div><div class="portfolio-category-badge">Lookwalker</div></div>
        <div class="portfolio-item" data-cat="lookwalker"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/lookwalker05.jpg') ?>" alt="Lookwalker Campaign"></div><div class="portfolio-category-badge">Lookwalker</div></div>
        <div class="portfolio-item" data-cat="lookwalker"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/lookwalker06.jpg') ?>" alt="Lookwalker Campaign"></div><div class="portfolio-category-badge">Lookwalker</div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/outdoor01.jpeg') ?>" alt="Outdoor Campaign"></div><div class="portfolio-category-badge">Outdoor</div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/outdoor02.jpeg') ?>" alt="Outdoor Campaign"></div><div class="portfolio-category-badge">Outdoor</div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/outdoor03.jpeg') ?>" alt="Outdoor Campaign"></div><div class="portfolio-category-badge">Outdoor</div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/outdoor04.jpeg') ?>" alt="Outdoor Campaign"></div><div class="portfolio-category-badge">Outdoor</div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/outdoor05.jpeg') ?>" alt="Outdoor Campaign"></div><div class="portfolio-category-badge">Outdoor</div></div>
        <div class="portfolio-item" data-cat="outdoor"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/outdoor06.jpeg') ?>" alt="Outdoor Campaign"></div><div class="portfolio-category-badge">Outdoor</div></div>
        <div class="portfolio-item" data-cat="transit"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/transit01.jpeg') ?>" alt="Transit Campaign"></div><div class="portfolio-category-badge">Transit</div></div>
        <div class="portfolio-item" data-cat="transit"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/transit02.jpeg') ?>" alt="Transit Campaign"></div><div class="portfolio-category-badge">Transit</div></div>
        <div class="portfolio-item" data-cat="transit"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/transit03.jpeg') ?>" alt="Transit Campaign"></div><div class="portfolio-category-badge">Transit</div></div>
        <div class="portfolio-item" data-cat="transit"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/transit04.jpeg') ?>" alt="Transit Campaign"></div><div class="portfolio-category-badge">Transit</div></div>
        <div class="portfolio-item" data-cat="transit"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/transit05.jpg') ?>" alt="Transit Campaign"></div><div class="portfolio-category-badge">Transit</div></div>
        <div class="portfolio-item" data-cat="transit"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/portfolio/transit06.jpg') ?>" alt="Transit Campaign"></div><div class="portfolio-category-badge">Transit</div></div>
        <div class="portfolio-item" data-cat="customer-acquisition"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/cac-01.jpg') ?>" alt="Customer Acquisition Campaign"></div><div class="portfolio-category-badge">Customer Acquisition</div></div>
        <div class="portfolio-item" data-cat="customer-acquisition"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/cac-02.jpg') ?>" alt="Customer Acquisition Campaign"></div><div class="portfolio-category-badge">Customer Acquisition</div></div>
        <div class="portfolio-item" data-cat="customer-acquisition"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/cac-03.jpg') ?>" alt="Customer Acquisition Campaign"></div><div class="portfolio-category-badge">Customer Acquisition</div></div>
        <div class="portfolio-item" data-cat="customer-acquisition"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/cac-05.jpeg') ?>" alt="Customer Acquisition Campaign"></div><div class="portfolio-category-badge">Customer Acquisition</div></div>
        <div class="portfolio-item" data-cat="cinema"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/ca-hero.jpeg') ?>" alt="Cinema Campaign"></div><div class="portfolio-category-badge">Cinema</div></div>
        <div class="portfolio-item" data-cat="cinema"><div class="portfolio-item-bg"><img src="<?= base_url('assets/images/ca-02.jpeg') ?>" alt="Cinema Campaign 2"></div><div class="portfolio-category-badge">Cinema</div></div>
      </div>
      <div class="text-center mt-5 reveal"><a href="<?= base_url('main/contact') ?>" class="btn-accent">Start Your Campaign <i class="bi bi-arrow-right"></i></a></div>
    </div>
  </section>

  <section class="cta-banner"><div class="container position-relative text-center"><h2>Love What You See?</h2><p class="mt-2">Let's create a campaign like this — or even better — for your brand.</p><a href="<?= base_url('main/contact#contact-section') ?>" class="btn-cta-white">Get a Free Quote <i class="bi bi-arrow-right"></i></a></div></section>

</div>