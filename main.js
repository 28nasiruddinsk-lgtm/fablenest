const root = document.documentElement;

// paragraph: one span per word so each word can pop in
document.querySelectorAll('[data-words]').forEach(el => {
  const out = [];
  let i = 0;
  el.childNodes.forEach(n => {
    if (n.nodeType === 3) {
      n.textContent.trim().split(/\s+/).filter(Boolean).forEach(word => {
        const s = document.createElement('span');
        s.className = 'w';
        s.style.setProperty('--i', i++);
        s.textContent = word + ' ';
        out.push(s);
      });
    } else out.push(n.cloneNode(true)); // keep the <br>
  });
  el.textContent = '';
  out.forEach(n => el.appendChild(n));
});

// start the animation once fonts are ready (never wait more than 1.2 s)
const fontsReady = document.fonts ? document.fonts.ready : Promise.resolve();
Promise.race([fontsReady, new Promise(r => setTimeout(r, 1200))]).then(() => root.classList.add('loaded'));

// mobile menu
const burger = document.getElementById('burger');
const links = document.getElementById('links');
burger.addEventListener('click', () => {
  const open = links.classList.toggle('open');
  burger.setAttribute('aria-expanded', open);
});
// "Our Services" mega menu: on touch / small screens the link toggles it; hover and keyboard focus handle desktop
const mega = document.querySelector('.has-mega');
const megaLink = mega && mega.querySelector(':scope > a');
const setMega = open => { mega.classList.toggle('open', open); megaLink.setAttribute('aria-expanded', open); };
if (mega) {
  const small = matchMedia('(max-width:980px), (hover:none)');
  megaLink.addEventListener('click', e => { if (small.matches && !mega.classList.contains('open')) { e.preventDefault(); setMega(true); } });
  document.addEventListener('click', e => { if (!mega.contains(e.target)) setMega(false); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') { setMega(false); megaLink.blur(); } });
}
links.addEventListener('click', e => {
  const a = e.target.closest('a');
  if (a && a !== megaLink) {
    links.classList.remove('open');
    burger.setAttribute('aria-expanded', false);
    if (mega) setMega(false);
  }
});

// animated logo: the supplied Lottie (assets/logo-anim.json, 768x432, 33 fps), looping with a pause on the finished logo. The still logo shows until it is ready.
(() => {
  const box = document.querySelector('.logo__a');
  if (!box) return;
  const still = box.parentElement;
  const run = () => {
    if (!window.lottie) return;
    fetch(box.dataset.src).then(r => r.json()).then(data => {
      const reduce = matchMedia('(prefers-reduced-motion:reduce)').matches;
      const anim = lottie.loadAnimation({ container: box, renderer: 'svg', loop: false, autoplay: false, animationData: data, rendererSettings: { preserveAspectRatio: 'xMidYMid meet' } });
      box.anim = anim;
      anim.addEventListener('DOMLoaded', () => {
        still.classList.add('has-a');
        reduce ? anim.goToAndStop(anim.totalFrames - 1, true) : anim.play();
      });
      // loop: after the finished logo has been held for a moment, play it again
      if (!reduce) anim.addEventListener('complete', () => setTimeout(() => anim.goToAndPlay(0, true), 2500));
    }).catch(() => {});
  };
  document.readyState === 'complete' ? run() : addEventListener('load', run, { once: true });
})();