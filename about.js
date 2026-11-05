// scroll-in for the About Us sections (adds .in once, when an element comes into view)
const io = new IntersectionObserver(es => es.forEach(e => {
  if (!e.isIntersecting) return;
  e.target.classList.add('in');
  io.unobserve(e.target);
}), { threshold: .15 });
document.querySelectorAll('.ab-reveal, .bk-img').forEach(el => io.observe(el));
// portfolio tabs: show one panel at a time
document.querySelectorAll('[data-pf]').forEach(pf => {
  const tabs = [...pf.querySelectorAll('[role=tab]')];
  tabs.forEach(tab => tab.addEventListener('click', () => {
    tabs.forEach(t => t.setAttribute('aria-selected', t === tab));
    pf.querySelectorAll('.pf__panel').forEach(p => {
      const on = p.dataset.kind === tab.dataset.tab;
      p.hidden = !on;
      p.classList.toggle('is-on', on);
    });
  }));
});
