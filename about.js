// scroll-in for the About Us sections (adds .in once, when an element comes into view)
const io = new IntersectionObserver(es => es.forEach(e => {
  if (!e.isIntersecting) return;
  e.target.classList.add('in');
  io.unobserve(e.target);
}), { threshold: .15 });
document.querySelectorAll('.ab-reveal').forEach(el => io.observe(el));