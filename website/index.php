<?php 
$page_title = "MAZANGIZO";
$page_description = "MAZANGIZO provides cybersecurity and data science solutions: penetration testing, code review, staff training, and security analytics for African businesses.";
include 'header.php'; 
?>

<!-- home section starts  -->
<section class="home" id="home">
    <div class="image">
        <img src="image/home-img.svg" alt="MAZANGIZO cybersecurity illustration">
    </div>
    <div class="content">
        <h3>secure your web. understand your data.</h3>
        <p>MAZANGIZO delivers penetration testing, code reviews, staff training, and data science solutions for African businesses. Think like a spider on your own web.</p>
        <a href="insights.php" class="btn"> Why choose us? <span class="fas fa-chevron-right"></span> </a>
    </div>
</section>
<!-- home section ends -->

<!-- stats section starts  -->
<section class="icons-container">
    <div class="icons">
        <i class="fas fa-bug"></i>
        <h3>500+</h3>
        <p>vulnerabilities found</p>
    </div>
    <div class="icons">
        <i class="fas fa-code"></i>
        <h3>100+</h3>
        <p>code reviews completed</p>
    </div>
    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>50+</h3>
        <p>staff trained</p>
    </div>
    <div class="icons">
        <i class="fas fa-chart-line"></i>
        <h3>30+</h3>
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

<?php include 'footer.php'; ?>