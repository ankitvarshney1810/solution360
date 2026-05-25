// PAGE NAVIGATION
function showPage(pageId) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  const page = document.getElementById('page-' + pageId);
  if (page) {
    page.classList.add('active');
    window.scrollTo({top: 0, behavior: 'smooth'});
    setTimeout(() => { observeReveal(); }, 100);
    if (pageId === 'home') { countersStarted = false; }
  }
}

// NAVBAR SCROLL
window.addEventListener('scroll', function() {
  const nav = document.getElementById('navbar');
  const btn = document.getElementById('backToTop');
  if (window.scrollY > 60) { nav.classList.add('scrolled'); btn.classList.add('show'); }
  else { nav.classList.remove('scrolled'); btn.classList.remove('show'); }
});

// MOBILE NAV
document.getElementById('navToggler').addEventListener('click', function() {
  const menu = document.getElementById('navMenu');
  menu.classList.toggle('open');
  this.querySelector('i').className = menu.classList.contains('open') ? 'bi bi-x-lg' : 'bi bi-list';
});

// SCROLL REVEAL
function observeReveal() {
  const items = document.querySelectorAll('.page.active .reveal:not(.visible)');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  items.forEach(i => observer.observe(i));
}

// COUNTER
let countersStarted = false;
function startCounters() {
  if (countersStarted) return;
  countersStarted = true;
  document.querySelectorAll('.count-up').forEach(el => {
    const target = parseInt(el.getAttribute('data-target'));
    let current = 0;
    const increment = target / 60;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) { el.textContent = target; clearInterval(timer); }
      else el.textContent = Math.floor(current);
    }, 20);
  });
}

// Watch counter section
const counterSection = document.querySelector('.counter-section');
if (counterSection) {
  const co = new IntersectionObserver((entries) => { if (entries[0].isIntersecting) startCounters(); }, { threshold: 0.3 });
  co.observe(counterSection);
}

// PORTFOLIO FILTER
function filterPortfolio(btn, cat) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#portfolio-full-grid .portfolio-item').forEach(item => {
    item.style.display = (cat === 'all' || item.getAttribute('data-cat') === cat) ? 'block' : 'none';
  });
}

// FORM VALIDATION
function validateField(id, errId, validator) {
  const val = document.getElementById(id).value.trim();
  const err = document.getElementById(errId);
  const el = document.getElementById(id);
  const ok = validator(val);
  el.classList.toggle('error', !ok);
  err.classList.toggle('show', !ok);
  return ok;
}

function submitContactForm() {
  const nameOk = validateField('c-name', 'c-name-err', v => v.length >= 2);
  const emailOk = validateField('c-email', 'c-email-err', v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v));
  const phoneOk = validateField('c-phone', 'c-phone-err', v => v.replace(/\D/g,'').length >= 10);
  const adOk = validateField('c-adtype', 'c-adtype-err', v => v !== '');
  const msgOk = validateField('c-message', 'c-message-err', v => v.length >= 20);
  if (nameOk && emailOk && phoneOk && adOk && msgOk) {
    document.getElementById('contact-form-container').style.display = 'none';
    document.getElementById('contact-success').style.display = 'block';
  }
}

function resetContactForm() {
  document.getElementById('contact-form-container').style.display = 'block';
  document.getElementById('contact-success').style.display = 'none';
  ['c-name','c-email','c-phone','c-company','c-adtype','c-city','c-budget','c-message'].forEach(id => {
    const el = document.getElementById(id);
    if (el) { el.value = ''; el.classList.remove('error'); }
  });
}

// CLOSE MOBILE NAV ON LINK CLICK
document.querySelectorAll('.nav-link-custom, .dropdown-item-custom, .footer-link').forEach(link => {
  link.addEventListener('click', () => {
    const menu = document.getElementById('navMenu');
    if (menu.classList.contains('open')) {
      menu.classList.remove('open');
      document.getElementById('navToggler').querySelector('i').className = 'bi bi-list';
    }
  });
});

// INIT
document.addEventListener('DOMContentLoaded', function() {
  observeReveal();
});