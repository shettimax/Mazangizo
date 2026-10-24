(function () {
    'use strict';

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------- mobile menu ---------- */
    var menu = document.querySelector('#menu-btn');
    var navbar = document.querySelector('.navbar');

    if (menu && navbar) {
        menu.onclick = function () {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        };
    }

    /* ---------- scroll progress, header shrink, back-to-top ---------- */
    var header = document.querySelector('.header');

    var bar = document.createElement('div');
    bar.id = 'scroll-progress';
    document.body.appendChild(bar);

    var toTop = document.createElement('button');
    toTop.id = 'to-top';
    toTop.setAttribute('aria-label', 'Back to top');
    toTop.innerHTML = '<i class="fas fa-chevron-up"></i>';
    toTop.onclick = function () { window.scrollTo({ top: 0, behavior: 'smooth' }); };
    document.body.appendChild(toTop);

    function onScroll() {
        var y = window.pageYOffset || document.documentElement.scrollTop;
        var max = document.documentElement.scrollHeight - window.innerHeight;
        bar.style.width = (max > 0 ? (y / max) * 100 : 0) + '%';
        if (header) header.classList.toggle('scrolled', y > 30);
        toTop.classList.toggle('show', y > 500);

        // close the mobile menu while scrolling
        if (menu && navbar) {
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* ---------- active nav link ---------- */
    var page = location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.navbar a').forEach(function (a) {
        if (a.getAttribute('href') === page) a.classList.add('active-link');
    });

    /* ---------- dark mode: apply once body exists ---------- */
    if (document.cookie.indexOf('darkmode=true') !== -1) {
        document.body.classList.add('dark-mode');
    }

    /* ---------- scroll reveal ---------- */
    var targets = document.querySelectorAll(
        '.heading, .icons, .services .box, .doctors .box, .reason, .step, .cta-box, ' +
        '.about .row .image, .about .row .content, .book .row .image, .book .row form, .footer .box'
    );

    targets.forEach(function (el, i) {
        el.classList.add('reveal');
        el.style.setProperty('--d', ((i % 4) * 0.1) + 's');
    });

    if ('IntersectionObserver' in window && !reduceMotion) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        targets.forEach(function (el) { io.observe(el); });
    } else {
        targets.forEach(function (el) { el.classList.add('in'); });
    }

    /* ---------- animated counters ---------- */
    document.querySelectorAll('[data-count]').forEach(function (el) {
        var end = parseInt(el.getAttribute('data-count'), 10);
        var suffix = el.getAttribute('data-suffix') || '';
        if (isNaN(end)) return;

        function run() {
            if (reduceMotion) { el.textContent = end + suffix; return; }
            var start = null, dur = 1600;
            function step(ts) {
                if (!start) start = ts;
                var p = Math.min((ts - start) / dur, 1);
                var eased = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.floor(eased * end) + suffix;
                if (p < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
        }

        if ('IntersectionObserver' in window) {
            var co = new IntersectionObserver(function (entries) {
                if (entries[0].isIntersecting) { run(); co.disconnect(); }
            }, { threshold: 0.4 });
            co.observe(el);
        } else {
            run();
        }
    });

    /* ---------- cursor spotlight on service cards ---------- */
    document.querySelectorAll('.services .box').forEach(function (card) {
        card.addEventListener('mousemove', function (e) {
            var r = card.getBoundingClientRect();
            card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
            card.style.setProperty('--my', (e.clientY - r.top) + 'px');
        });
    });

    /* ---------- typing effect ---------- */
    var typed = document.querySelector('[data-typed]');
    if (typed) {
        var words = typed.getAttribute('data-typed').split('|');
        var out = typed.querySelector('.out');
        var w = 0, c = 0, deleting = false;

        function tick() {
            var word = words[w];
            out.textContent = word.substring(0, c);

            var delay = deleting ? 35 : 80;
            if (!deleting && c === word.length) { deleting = true; delay = 1600; }
            else if (deleting && c === 0) { deleting = false; w = (w + 1) % words.length; delay = 400; }
            c += deleting ? -1 : 1;
            setTimeout(tick, delay);
        }

        if (reduceMotion) { out.textContent = words[0]; } else { tick(); }
    }

    /* ---------- hero canvas: drifting web / node network ---------- */
    var canvas = document.getElementById('web-canvas');
    if (canvas && !reduceMotion) {
        var ctx = canvas.getContext('2d');
        var nodes = [], W = 0, H = 0, mouse = { x: null, y: null };

        function cssVar(name, fallback) {
            var v = getComputedStyle(document.body).getPropertyValue(name).trim();
            return v || fallback;
        }

        function resize() {
            var rect = canvas.parentElement.getBoundingClientRect();
            var dpr = window.devicePixelRatio || 1;
            W = rect.width; H = rect.height;
            canvas.width = W * dpr; canvas.height = H * dpr;
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

            var count = Math.max(28, Math.min(90, Math.floor((W * H) / 16000)));
            nodes = [];
            for (var i = 0; i < count; i++) {
                nodes.push({
                    x: Math.random() * W, y: Math.random() * H,
                    vx: (Math.random() - 0.5) * 0.35, vy: (Math.random() - 0.5) * 0.35,
                    r: Math.random() * 1.6 + 0.8
                });
            }
        }

        canvas.parentElement.addEventListener('mousemove', function (e) {
            var r = canvas.getBoundingClientRect();
            mouse.x = e.clientX - r.left; mouse.y = e.clientY - r.top;
        });
        canvas.parentElement.addEventListener('mouseleave', function () { mouse.x = mouse.y = null; });

        function hexToRgb(hex) {
            hex = hex.replace('#', '');
            if (hex.length === 3) hex = hex.split('').map(function (x) { return x + x; }).join('');
            var n = parseInt(hex, 16);
            return [(n >> 16) & 255, (n >> 8) & 255, n & 255];
        }

        function frame() {
            ctx.clearRect(0, 0, W, H);
            var rgb = hexToRgb(cssVar('--green', '#16a085'));
            var col = rgb.join(',');
            var link = 140;

            for (var i = 0; i < nodes.length; i++) {
                var a = nodes[i];
                a.x += a.vx; a.y += a.vy;
                if (a.x < 0 || a.x > W) a.vx *= -1;
                if (a.y < 0 || a.y > H) a.vy *= -1;

                ctx.beginPath();
                ctx.arc(a.x, a.y, a.r, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(' + col + ',.75)';
                ctx.fill();

                for (var j = i + 1; j < nodes.length; j++) {
                    var b = nodes[j];
                    var dx = a.x - b.x, dy = a.y - b.y;
                    var d = Math.sqrt(dx * dx + dy * dy);
                    if (d < link) {
                        ctx.strokeStyle = 'rgba(' + col + ',' + (0.28 * (1 - d / link)) + ')';
                        ctx.lineWidth = 1;
                        ctx.beginPath(); ctx.moveTo(a.x, a.y); ctx.lineTo(b.x, b.y); ctx.stroke();
                    }
                }

                // the "spider" pulls nearby nodes towards the cursor
                if (mouse.x !== null) {
                    var mx = a.x - mouse.x, my = a.y - mouse.y;
                    var md = Math.sqrt(mx * mx + my * my);
                    if (md < 180) {
                        ctx.strokeStyle = 'rgba(' + col + ',' + (0.5 * (1 - md / 180)) + ')';
                        ctx.beginPath(); ctx.moveTo(a.x, a.y); ctx.lineTo(mouse.x, mouse.y); ctx.stroke();
                        a.x -= mx * 0.002; a.y -= my * 0.002;
                    }
                }
            }
            requestAnimationFrame(frame);
        }

        resize();
        window.addEventListener('resize', resize);
        requestAnimationFrame(frame);
    }
})();
