// scroll-in for the About Us sections (adds .in once, when an element comes into view)
const io = new IntersectionObserver(es => es.forEach(e => {
  if (!e.isIntersecting) return;
  e.target.classList.add('in');
  io.unobserve(e.target);
}), { threshold: .15 });
document.querySelectorAll('.ab-reveal, .bk-img').forEach(el => io.observe(el));
// portfolio tabs: show one panel at a time
document.querySelectorAll('[data-pfo]').forEach(pf => {
  const tabs = [...pf.querySelectorAll('[role=tab]')];
  tabs.forEach(tab => tab.addEventListener('click', () => {
    tabs.forEach(t => t.setAttribute('aria-selected', t === tab));
    pf.querySelectorAll('.pfo__panel').forEach(p => {
      const on = p.dataset.kind === tab.dataset.tab;
      p.hidden = !on;
      p.classList.toggle('is-on', on);
    });
  }));
});

// illustration process: steps play automatically once on screen, and can be clicked
document.querySelectorAll('[data-process]').forEach(pr => {
  const steps = [...pr.querySelectorAll('.pr__step')];
  const badgeN = pr.querySelector('.pr__badge-n'), badgeT = pr.querySelector('.pr__badge-t');
  const replay = pr.querySelector('.pr__replay');
  const reduce = matchMedia('(prefers-reduced-motion:reduce)').matches;
  let timer = null, started = false;
  const set = n => {
    pr.dataset.stage = n;
    steps.forEach((s, i) => { s.classList.toggle('is-on', i === n - 1); s.classList.toggle('is-done', i < n - 1); });
    badgeN.textContent = n;
    badgeT.textContent = steps[n - 1].querySelector('.pr__tag').textContent;
  };
  const play = () => {
    clearInterval(timer);
    replay.hidden = true;
    set(1);
    timer = setInterval(() => {
      const n = +pr.dataset.stage + 1;
      if (n > steps.length) { clearInterval(timer); replay.hidden = false; return; }
      set(n);
    }, 3300);
  };
  steps.forEach(s => s.querySelector('button').addEventListener('click', () => { clearInterval(timer); replay.hidden = false; set(+s.dataset.step); }));
  replay.addEventListener('click', play);
  if (reduce) { set(steps.length); replay.hidden = true; return; }
  new IntersectionObserver((es, io) => es.forEach(e => { if (e.isIntersecting && !started) { started = true; play(); io.disconnect(); } }), { threshold: .4 }).observe(pr);
});
