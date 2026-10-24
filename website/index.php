<?php
$page_title = "MAZANGIZO";
$page_description = "MAZANGIZO provides cybersecurity and data science solutions: penetration testing, code review, staff training, and security analytics for African businesses.";
include 'header.php';
?>

<!-- home section starts  -->
<section class="home" id="home">
    <canvas id="web-canvas" aria-hidden="true"></canvas>
    <div class="image">
        <img src="image/home-img.svg" alt="MAZANGIZO cybersecurity illustration">
    </div>
    <div class="content">
        <span class="badge"><span class="dot"></span> security + data, built in nigeria</span>
        <h3>secure your <span class="grad">web.</span><br>understand your <span class="grad">data.</span></h3>
        <div class="typed-line" data-typed="nmap -sV target.africa|sqlmap --batch --risk=1|grep -i 'anomaly' auth.log|python train_model.py|phish --simulate --staff all">
            <span class="prompt">$</span><span class="out"></span><span class="cursor"></span>
        </div>
        <p>MAZANGIZO delivers penetration testing, code reviews, staff training, and data science solutions for African businesses. Think like a spider on your own web.</p>
        <div class="btn-row">
            <a href="insights.php" class="btn"> Why choose us? <span class="fas fa-chevron-right"></span> </a>
            <a href="contact.php" class="btn ghost"> get a quote <span class="fas fa-paper-plane"></span> </a>
        </div>
    </div>
</section>
<!-- home section ends -->

<!-- marquee starts  -->
<div class="marquee" aria-hidden="true">
    <div class="track">
        <span>penetration testing</span><span>secure code review</span><span>phishing simulation</span><span>security analytics</span><span>data science</span><span>compliance readiness</span>
        <span>penetration testing</span><span>secure code review</span><span>phishing simulation</span><span>security analytics</span><span>data science</span><span>compliance readiness</span>
    </div>
</div>
<!-- marquee ends -->

<!-- stats section starts  -->
<section class="icons-container">
    <div class="icons">
        <i class="fas fa-bug"></i>
        <h3 data-count="500" data-suffix="+">500+</h3>
        <p>vulnerabilities found</p>
    </div>
    <div class="icons">
        <i class="fas fa-code"></i>
        <h3 data-count="100" data-suffix="+">100+</h3>
        <p>code reviews completed</p>
    </div>
    <div class="icons">
        <i class="fas fa-users"></i>
        <h3 data-count="50" data-suffix="+">50+</h3>
        <p>staff trained</p>
    </div>
    <div class="icons">
        <i class="fas fa-chart-line"></i>
        <h3 data-count="30" data-suffix="+">30+</h3>
        <p>data projects delivered</p>
    </div>
</section>
<!-- stats section ends -->

<hr class="wide">

<!-- services preview section starts  -->
<section class="services" id="services">
    <h1 class="heading"> our <span>services</span> </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-shield-alt"></i>
            <h3>penetration testing</h3>
            <p>Manual and automated web and API penetration tests. We identify weaknesses before attackers do.</p>
            <a href="services.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-file-code"></i>
            <h3>code review</h3>
            <p>PHP-focused secure code audits with actionable fixes for your development team.</p>
            <a href="services.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-chalkboard-teacher"></i>
            <h3>staff training</h3>
            <p>Phishing drills and security awareness programs to build a human firewall.</p>
            <a href="services.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-chart-pie"></i>
            <h3>data science</h3>
            <p>Business intelligence, predictive models, and security analytics for better decisions.</p>
            <a href="services.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>
</section>
<!-- services preview section ends -->

<!-- process section starts  -->
<section class="process" id="process">
    <h1 class="heading"> how we <span>work</span> </h1>
    <div class="steps">
        <div class="step">
            <i class="fas fa-search"></i>
            <h3>scope</h3>
            <p>We agree on targets, rules of engagement, and what success looks like. No surprises.</p>
        </div>
        <div class="step">
            <i class="fas fa-user-secret"></i>
            <h3>probe</h3>
            <p>Manual testing plus tooling. We think like an attacker to find what scanners miss.</p>
        </div>
        <div class="step">
            <i class="fas fa-file-alt"></i>
            <h3>report</h3>
            <p>Plain-English findings with proof of concept and step-by-step remediation.</p>
        </div>
        <div class="step">
            <i class="fas fa-lock"></i>
            <h3>fix &amp; verify</h3>
            <p>We help your team patch, then retest to confirm the hole is really closed.</p>
        </div>
    </div>
</section>
<!-- process section ends -->

<!-- cta section starts  -->
<section>
    <div class="cta-box">
        <i class="fas fa-spider"></i>
        <h3>your web is only as strong as its weakest thread.</h3>
        <p>Let's find the weak thread before someone else does.</p>
        <a href="contact.php" class="btn"> talk to us <span class="fas fa-chevron-right"></span> </a>
    </div>
</section>
<!-- cta section ends -->

<?php include 'footer.php'; ?>
