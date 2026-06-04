<!-- NAVBAR -->
<nav id="navbar">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url('main') ?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" class="img-fluid" style="max-height:75px;"></a>
      <button class="navbar-toggler-custom d-lg-none" id="navToggler"><i class="bi bi-list"></i></button>
      <div class="nav-collapse" id="navMenu">
        <a href="<?= base_url('main') ?>" class="nav-link-custom">Home</a>
        <a href="<?= base_url('main/about') ?>" class="nav-link-custom">About</a>
        <div class="nav-dropdown-wrapper">
          <button class="nav-link-custom">Services <i class="bi bi-chevron-down" style="font-size:0.65rem"></i></button>
          <div class="services-dropdown">
            <a href="<?= base_url('services/rwa-advertising') ?>" class="dropdown-item-custom"><i class="bi bi-buildings-fill"></i> RWA Advertising</a>
            <a href="<?= base_url('services/newspaper-insert') ?>" class="dropdown-item-custom"><i class="bi bi-file-earmark-text-fill"></i> Newspaper Insert</a>
            <a href="<?= base_url('services/print-media') ?>" class="dropdown-item-custom"><i class="bi bi-newspaper"></i> Print Media</a>
            <a href="<?= base_url('services/lookwalker') ?>" class="dropdown-item-custom"><i class="bi bi-person-walking"></i> Lookwalker</a>
            <a href="<?= base_url('services/customer-acquisition') ?>" class="dropdown-item-custom"><i class="bi bi-people-fill"></i> Customer Acquisition Campaigns</a>
            <a href="<?= base_url('services/outdoor-advertising') ?>" class="dropdown-item-custom"><i class="bi bi-geo-alt-fill"></i> Outdoor Advertising</a>
            <a href="<?= base_url('services/cinema-advertising') ?>" class="dropdown-item-custom"><i class="bi bi-camera-reels-fill"></i> Cinema Advertising</a>
            <a href="<?= base_url('services/radio-advertising') ?>" class="dropdown-item-custom"><i class="bi bi-broadcast"></i> Radio Advertising</a>
            <a href="<?= base_url('services/rural-marketing') ?>" class="dropdown-item-custom"><i class="bi bi-people-fill"></i> Rural Marketing</a>
            <a href="<?= base_url('services/transit-media') ?>" class="dropdown-item-custom"><i class="bi bi-bus-front-fill"></i> Transit media</a>
          </div>
        </div>
        <a href="<?= base_url('main/portfolio') ?>" class="nav-link-custom">Portfolio</a>
        <a href="<?= base_url('main/contact') ?>" class="nav-link-custom">Contact Us</a>
        <a href="<?= base_url('main/contact#contact-section') ?>" class="btn-accent ms-2">Get a Quote <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
</nav>