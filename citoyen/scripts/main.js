// Theme toggle functionality
const themeToggle = document.getElementById('themeToggle');
const body = document.body;
const root = document.documentElement;

let savedTheme = (localStorage.getItem('theme') || 'light').trim();
if (savedTheme !== 'dark' && savedTheme !== 'light') savedTheme = 'light';
root.setAttribute('data-theme', savedTheme);
body.setAttribute('data-theme', savedTheme);

function updateThemeIcon() {
  if (!themeToggle) return;
  const icon = themeToggle.querySelector('i');
  if (!icon) return;
  if (root.getAttribute('data-theme') === 'dark') {
    icon.className = 'fas fa-sun';
  } else {
    icon.className = 'fas fa-moon';
  }
}

updateThemeIcon();

if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    const current = root.getAttribute('data-theme');
    const next = current === 'light' ? 'dark' : 'light';
    root.setAttribute('data-theme', next);
    body.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
    updateThemeIcon();
  });
}

// Keep theme in sync if changed from another tab/window
window.addEventListener('storage', (e) => {
  if (e.key === 'theme') {
    const t = (e.newValue || 'light').trim();
    const valid = t === 'dark' ? 'dark' : 'light';
    root.setAttribute('data-theme', valid);
    body.setAttribute('data-theme', valid);
    updateThemeIcon();
  }
});

const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');

if (navToggle && navLinks) {
  navToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('animate'); });
}, observerOptions);

document.querySelectorAll('.section').forEach(section => { observer.observe(section); });

document.addEventListener('click', (e) => {
  if (!navToggle || !navLinks) return;
  if (!navToggle.contains(e.target) && !navLinks.contains(e.target)) {
    navLinks.classList.remove('active');
  }
});

if (navLinks) {
  navLinks.addEventListener('click', (e) => {
    if (e.target.tagName === 'A') navLinks.classList.remove('active');
  });
}
