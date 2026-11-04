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
links.addEventListener('click', e => {
  if (e.target.tagName === 'A') {
    links.classList.remove('open');
    burger.setAttribute('aria-expanded', false);
  }
});

// roots hanging from the bottom edge of the header bar over the banner (random but always the same)
(() => {
  const svg = document.querySelector('.roots svg'); if (!svg) return;
  let s = 11; const rnd = () => (s = (s * 16807) % 2147483647) / 2147483647, r = (a, b) => a + rnd() * (b - a);
  const NS = 'http://www.w3.org/2000/svg', mk = (n, at) => { const e = document.createElementNS(NS, n); for (const k in at) e.setAttribute(k, at[k]); return e; };
  let idx = 0;
  const grow = (g, x, y, ang, len, w, depth) => {
    let px = x, py = y, walked = 0;
    while (walked < len) {
      const t = walked / len, step = 8;
      ang += r(-.3, .3) + (Math.PI / 2 - ang) * .12;
      const nx = px + Math.cos(ang) * step, ny = py + Math.sin(ang) * step, sw = Math.max(.9, w * (1 - t * .85));
      g.appendChild(mk('path', { d: `M${px} ${py}L${nx} ${ny}`, stroke: '#ffffff', 'stroke-width': sw }));
      if (sw > 3) g.appendChild(mk('path', { d: `M${px} ${py}L${nx} ${ny}`, stroke: '#b9d2c4', 'stroke-width': sw * .28, opacity: .7 }));
      if (depth < 2 && t > .3 && t < .75 && rnd() < .22) grow(g, nx, ny, ang + (rnd() < .5 ? -1 : 1) * r(.5, 1.1), (len - walked) * r(.5, .8), sw * .75, depth + 1);
      px = nx; py = ny; walked += step;
    }
  };
  // the header bar is full width; its bottom edge is y = 0 in this box
  for (let x = 24; x < 1900; x += r(30, 62)) {
    const g = mk('g', { class: 'root', style: `--i:${idx++};transform-origin:${x}px -1px` });
    grow(g, x, -1, Math.PI / 2 + r(-.3, .3), r(30, 78), r(3.5, 6.5), 0);
    svg.appendChild(g);
  }
})();

// Scroll-in animations, forms, story slider and the "What We Do" dot route
(() => {
  const reduce = matchMedia('(prefers-reduced-motion:reduce)').matches;

  // paragraphs written with <br> become one span per line so each line can rise in turn
  document.querySelectorAll('.stag').forEach(p => {
    const lines = p.innerHTML.split(/<br\s*\/?>/i);
    p.innerHTML = lines.map((l, i) => `<span class="ln" style="--i:${i}">${l}</span>`).join('');
  });

  // a section starts animating when it scrolls into view (once)
  const io = new IntersectionObserver(es => es.forEach(e => {
    if (!e.isIntersecting) return;
    e.target.classList.add('in');
    e.target.dispatchEvent(new Event('enter'));
    io.unobserve(e.target);
  }), { threshold: .18 });
  document.querySelectorAll('.sec').forEach(s => io.observe(s));

  // forms post to submit.php; the button shows the answer
  document.querySelectorAll('form[data-form]').forEach(form => form.addEventListener('submit', async e => {
    e.preventDefault();
    const b = form.querySelector('button[type=submit]'), old = b.textContent;
    let msg = 'Please try again';
    b.disabled = true;
    try {
      const res = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
      const out = await res.json();
      msg = out.message;
      if (out.ok) form.reset();
    } catch { /* network error: keep the default message */ }
    b.textContent = msg;
    setTimeout(() => { b.textContent = old; b.disabled = false; }, 2600);
  }));

  // author stories: arrows swap the story
  const slides = [...document.querySelectorAll('.tst')];
  let cur = 0;
  [['tprev', -1], ['tnext', 1]].forEach(([id, dir]) => document.getElementById(id)?.addEventListener('click', () => {
    slides[cur].hidden = true;
    cur = (cur + dir + slides.length) % slides.length;
    const t = slides[cur];
    t.hidden = false; t.style.setProperty('--dir', dir);
    t.classList.remove('sw'); void t.offsetWidth; t.classList.add('sw');
  }));
  // ---------- What We Do ----------
  // The dashed route is its own transparent layer (dashes.png). A bouncing dot runs from service to service,
  // draws the dashes behind it and switches each service on when it lands.
  const sec = document.getElementById('services');
  if (!sec) return;
  const dims = [...sec.querySelectorAll('.dim')];
  const dashMask = sec.querySelector('#revealPath');
  if (reduce) { dims.forEach(d => d.remove()); sec.querySelector('image').removeAttribute('mask'); return; }

  const NS = 'http://www.w3.org/2000/svg';
  const route = sec.querySelector('#routePath');
  const tracer = sec.querySelector('#tracer');
  const bursts = sec.querySelector('#bursts');
  const stops = [0, 1, 2, 3].map(i => [...sec.querySelectorAll('.stop[data-i="' + i + '"]')]);
  const pts = [[661.7,2966.7],[709.2,2952.7],[721.2,2952.4],[733.9,2953],[758.9,2954],[782.8,2956.9],[806.5,2963.4],[828.2,2972.3],[848.8,2984.2],[866.6,2999],[882.6,3015.7],[897.4,3034.5],[911.4,3053.9],[926.1,3073.4],[942.1,3091.4],[960,3107.2],[979.8,3120.8],[1001.9,3131.5],[1025,3140.3],[1048.9,3147.6],[1073,3154.2],[1096.9,3160.9],[1120.9,3168.3],[1143.5,3176.3],[1166.5,3185.5],[1188.6,3196],[1209.7,3207.2],[1230.6,3219.7],[1248.6,3232.5],[1268.5,3249.5],[1285.5,3266],[1297.6,3285.4],[1306.1,3305.7],[1309.2,3327.2],[1309,3349.9],[1301.4,3369.8],[1288.3,3389.6],[1273.6,3406.8],[1255.3,3421.3],[1235.4,3433.4],[1213.3,3442.8],[1190.1,3449.6],[1166.3,3454.9],[1141.6,3459.2],[1117.3,3463.1],[1092.7,3467.4],[1068.7,3473],[1045.6,3479.6],[1022,3487.8],[999.6,3496.5],[976.1,3505.5],[952.5,3513.8],[929.3,3521.2],[904.8,3527.6],[881.1,3533],[856.5,3538.2],[832.6,3544.8],[810.8,3551.7],[793.3,3558.2],[784.4,3566.2],[782,3575],[787.2,3583.8],[800,3592.8],[818.5,3602.4],[839.6,3614.6],[859.7,3628.1],[878.8,3643.4],[896.3,3660.4],[913.4,3678.8],[931,3697.2],[948.8,3714.1],[968.6,3729.1],[989.5,3742.1],[1011.9,3752],[1035.5,3760.1],[1059.4,3767.2],[1083.3,3775.1],[1105.6,3784.4],[1127.2,3796.2],[1146.2,3810.7],[1163.7,3827.7],[1179.3,3846.9],[1193.2,3867],[1207.2,3887.7],[1221.6,3907.7],[1237.6,3926],[1247.7,3937.2],[1256.3,3946.3],[1265.5,3954.3],[1303.3,3975]];
  let d = `M${pts[0][0]} ${pts[0][1]}`;
  for (let i = 0; i < pts.length - 1; i++) { // Catmull-Rom -> cubic bezier
    const p0 = pts[i - 1] || pts[i], p1 = pts[i], p2 = pts[i + 1], p3 = pts[i + 2] || p2;
    d += `C${p1[0] + (p2[0] - p0[0]) / 6} ${p1[1] + (p2[1] - p0[1]) / 6} ${p2[0] - (p3[0] - p1[0]) / 6} ${p2[1] - (p3[1] - p1[1]) / 6} ${p2[0]} ${p2[1]}`;
  }
  route.setAttribute('d', d); dashMask.setAttribute('d', d);
  const total = route.getTotalLength();

  const heads = [[662, 2935], [1328, 3290], [717, 3562], [1303, 3940]];
  const tips = [[662, 2967], [1328, 3320], [728, 3597], [1303, 3975]];
  const at = tips.map(([px, py]) => { let best = 0, bd = 1e9;
    for (let l = 0; l <= total; l += 3) { const p = route.getPointAtLength(l); const k = (p.x - px) ** 2 + (p.y - py) ** 2; if (k < bd) { bd = k; best = l; } }
    return best; });
  at[0] = 0; at[3] = total;

  // the dot: glowing head, white core, a trail of smaller dots
  const TRAIL = 8, dots = [];
  const mk = (r, o, f) => { const c = document.createElementNS(NS, 'circle'); c.setAttribute('r', r); c.setAttribute('fill', '#d9ff1f'); c.setAttribute('opacity', o); if (f) c.setAttribute('filter', 'url(#glow)'); tracer.appendChild(c); return c; };
  for (let i = 0; i <= TRAIL; i++) dots.push(mk(i ? Math.max(3, 9 - i) : 17, i ? Math.max(.15, .85 - i * .09) : .95, !i));
  const core = document.createElementNS(NS, 'circle'); core.setAttribute('r', 8); core.setAttribute('fill', '#fff'); tracer.appendChild(core);
  const place = (len, hop = 0) => {
    dots.forEach((c, i) => { const p = route.getPointAtLength(Math.max(0, len - i * 22)); c.setAttribute('cx', p.x); c.setAttribute('cy', p.y + (i ? 0 : hop)); });
    const h = route.getPointAtLength(len); core.setAttribute('cx', h.x); core.setAttribute('cy', h.y + hop);
  };
  const show = (len, hop) => { dashMask.style.strokeDasharray = `${Math.max(len, .01)} ${total + 2000}`; place(len, hop); };
  show(0);
  const ease = t => t < .5 ? 4 * t * t * t : 1 - (-2 * t + 2) ** 3 / 2;

  // landing: service lights up, ring pulses, sparks fly out
  const burst = i => {
    const [hx, hy] = heads[i];
    for (let k = 0; k < 12; k++) {
      const c = document.createElementNS(NS, 'circle'); c.setAttribute('cx', hx); c.setAttribute('cy', hy); c.setAttribute('r', 4 + Math.random() * 4); c.setAttribute('fill', k % 3 ? '#d9ff1f' : '#fff');
      bursts.appendChild(c);
      const a = k / 12 * Math.PI * 2 + Math.random() * .4, r = 70 + Math.random() * 80;
      c.animate([{ transform: 'translate(0,0) scale(1)', opacity: 1 }, { transform: `translate(${Math.cos(a) * r}px,${Math.sin(a) * r}px) scale(.1)`, opacity: 0 }],
        { duration: 800 + Math.random() * 300, easing: 'cubic-bezier(.15,.8,.25,1)' }).onfinish = () => c.remove();
    }
  };
  const activate = i => { stops[i].forEach(s => { s.classList.remove('on'); void s.getBoundingClientRect(); s.classList.add('on'); }); burst(i); };

  let started = false;
  const run = () => {
    if (started) return; started = true;
    let seg = 0, state = 'wait', t0 = performance.now() + 250, len = 0;
    const tick = now => {
      if (state === 'wait') { if (now >= t0) { activate(0); state = 'pause'; t0 = now + 550; } }
      else if (state === 'pause') { if (now >= t0) { state = 'move'; t0 = now; } }
      else if (state === 'move') {
        const a = at[seg], b = at[seg + 1], dur = Math.max(900, (b - a) / 1.05);
        const k = Math.min(1, (now - t0) / dur);
        len = a + (b - a) * ease(k); show(len, -Math.sin(k * Math.PI) * 30);
        if (k >= 1) { seg++; activate(seg); show(b, 0);
          if (seg === stops.length - 1) { state = 'idle'; t0 = now + 1600; len = 0; show(total, 0); tracer.style.opacity = 0; }
          else { state = 'pause'; t0 = now + 550; } }
      } else if (now >= t0) { len += 9; if (len > total + 160) { len = 0; t0 = now + 2400; tracer.style.opacity = 0; } else { tracer.style.opacity = 1; place(Math.min(len, total)); } }
      requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  };
  sec.addEventListener('enter', run);
})();
