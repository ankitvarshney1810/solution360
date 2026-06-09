<div class="page active" id="page-contact">
  <section class="page-hero">
    <div class="page-hero-img"><img src="<?= base_url('assets/images/contact-banner.jfif') ?>" alt="Contact Solution360"></div>
    <div class="container position-relative">
      <div class="page-hero-breadcrumb"><a href="<?= base_url('main') ?>">Home</a><i class="bi bi-chevron-right"></i><span class="current">Contact Us</span></div>
      <h1 class="page-hero-title">Let's <span style="color:var(--accent)">Connect</span></h1>
      <p style="color:rgba(255,255,255,0.5);font-size:1rem;margin-top:14px">Get a free quote or simply say hello — we'd love to hear from you.</p>
    </div>
  </section>
  <section class="contact-page" id="contact-section">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-7 reveal">
          <div class="contact-form-wrap">
            <div id="contact-form-container">
              <h3 style="font-size:1.4rem;font-weight:800;color:var(--dark);margin-bottom:6px">Request a Campaign Quote</h3>
              <p style="font-size:0.85rem;color:var(--gray);margin-bottom:28px">Fill in the details below — our team will prepare a customised proposal within 24 hours.</p>
              <div class="row">
                <div class="col-md-6"><div class="form-group"><label class="form-label-custom">Full Name *</label><input type="text" class="form-control-custom" id="c-name" placeholder="Rajesh Kumar"><div class="form-error" id="c-name-err">Please enter your full name.</div></div></div>
                <div class="col-md-6"><div class="form-group"><label class="form-label-custom">Email Address *</label><input type="email" class="form-control-custom" id="c-email" placeholder="rajesh@company.com"><div class="form-error" id="c-email-err">Please enter a valid email.</div></div></div>
              </div>
              <div class="row">
                <div class="col-md-6"><div class="form-group"><label class="form-label-custom">Phone Number *</label><input type="tel" class="form-control-custom" id="c-phone" placeholder="+91 98765 43210"><div class="form-error" id="c-phone-err">Please enter a valid phone number.</div></div></div>
                <div class="col-md-6"><div class="form-group"><label class="form-label-custom">Company Name</label><input type="text" class="form-control-custom" id="c-company" placeholder="Your Company Pvt. Ltd."></div></div>
              </div>
              <div class="form-group">
                <label class="form-label-custom">Ad Type *</label>
                <select class="form-control-custom" id="c-adtype">
                  <option value="">-- Select Advertising Type --</option>
                  <option>Outdoor Advertising (Billboards / Hoardings)</option>
                  <option>Cinema Advertising</option>
                  <option>Print Media (Newspaper / Magazine)</option>
                  <option>Radio Advertising</option>
                  <option>Transit Advertising</option>
                  <option>360° Integrated Campaign</option>
                  <option>Other / Not Sure</option>
                </select>
                <div class="form-error" id="c-adtype-err">Please select an advertising type.</div>
              </div>
              <div class="row">
                <div class="col-md-6"><div class="form-group"><label class="form-label-custom">Target City / Region</label><input type="text" class="form-control-custom" id="c-city" placeholder="Delhi, Mumbai, Pan India..."></div></div>
                <div class="col-md-6"><div class="form-group"><label class="form-label-custom">Estimated Budget</label><select class="form-control-custom" id="c-budget"><option value="">-- Select Budget Range --</option><option>₹1L – ₹5L</option><option>₹5L – ₹15L</option><option>₹15L – ₹50L</option><option>₹50L – ₹1Cr</option><option>₹1Cr+</option></select></div></div>
              </div>
              <div class="form-group"><label class="form-label-custom">Message *</label><textarea class="form-control-custom" id="c-message" rows="4" placeholder="Tell us about your campaign goals, timeline, and target audience..."></textarea><div class="form-error" id="c-message-err">Please enter your message (min. 20 characters).</div></div>
              <button class="btn-accent w-100 justify-content-center" style="font-size:0.95rem;padding:15px" onclick="submitContactForm()">Submit Quote Request <i class="bi bi-arrow-right"></i></button>
            </div>
            <div class="form-success-msg" id="contact-success">
              <i class="bi bi-check-circle-fill"></i>
              <h4>Quote Request Received!</h4>
              <p>Thank you for reaching out. Our advertising specialists will review your requirements and get back to you within 24 business hours.</p>
              <button class="btn-accent mt-3" onclick="resetContactForm()">Submit Another Request</button>
            </div>
          </div>
        </div>
        <div class="col-lg-5 reveal reveal-delay-1">
          <div class="contact-info-card">
            <div class="section-tag">Get in Touch</div>
            <h3 style="font-size:1.3rem;font-weight:800;color:var(--white);margin-bottom:28px">We respond within<br><span style="color:var(--accent)">24 hours</span></h3>
            <div class="contact-info-item"><div class="label">Our Office</div><div class="value">113/6, Hari Nagar, Ext-II,<br>Badarpur, South Delhi,<br>Delhi – 110044</div></div>
            <a href="tel:+918377954127" class="contact-info-item"><div class="label">Call Us</div><div class="value">+91-8377954127</div></a>
            <a href="mailto:solution360india@gmail.com" class="contact-info-item"><div class="label">Email Us</div><div class="value">solution360india@gmail.com</div></a>
            <div class="contact-info-item"><div class="label">Working Hours</div><div class="value">Monday – Saturday<br>9:00 AM – 7:00 PM IST</div></div>
            <div style="border-top:1px solid rgba(255,255,255,0.08);padding-top:24px;margin-top:8px">
              <div style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.35);margin-bottom:14px">Our Strengths</div>
              <div style="display:flex;flex-direction:column;gap:10px">
                <div style="display:flex;align-items:center;gap:10px;font-size:0.82rem;color:rgba(255,255,255,0.65)"><i class="bi bi-check-circle-fill" style="color:var(--accent)"></i> 10+ Years Experience</div>
                <div style="display:flex;align-items:center;gap:10px;font-size:0.82rem;color:rgba(255,255,255,0.65)"><i class="bi bi-check-circle-fill" style="color:var(--accent)"></i> 500+ Successful Campaigns</div>
                <div style="display:flex;align-items:center;gap:10px;font-size:0.82rem;color:rgba(255,255,255,0.65)"><i class="bi bi-check-circle-fill" style="color:var(--accent)"></i> Pan-India Network (18+ Cities)</div>
                <div style="display:flex;align-items:center;gap:10px;font-size:0.82rem;color:rgba(255,255,255,0.65)"><i class="bi bi-check-circle-fill" style="color:var(--accent)"></i> Transparent Pricing & Reporting</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
