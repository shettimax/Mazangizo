<?php 
$page_title = "MAZANGIZO - why choose us";
$page_description = "Discover why African businesses trust MAZANGIZO for cybersecurity and data science. Practical, local, no fluff.";
include 'header.php'; 
?>

<!-- insights / why choose us section starts  -->
<section class="about" id="insights">
    <h1 class="heading"> why <span>choose us</span> </h1>
    
    <div class="row">
        <div class="image">
            <img src="image/insights-img.svg" alt="Why choose MAZANGIZO - we find what others miss">
        </div>
        <div class="content">
            <h3>because security should be practical, not painful.</h3>
            <p>We are not a big, slow consultancy. We are technical, local, and built for African businesses — from startups to enterprises. No fluff. No fearmongering. Just clear advice and real protection.</p>
        </div>
    </div>

    <!-- numbered reasons - clean and scannable -->
    <div style="margin-top: 4rem;">
        
        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <div style="background: var(--green); color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; flex-shrink: 0;">1</div>
            <div>
                <h3 style="color: var(--black); font-size: 2.2rem; margin-bottom: 0.5rem;">we speak PHP and web</h3>
                <p style="color: var(--light-color); font-size: 1.6rem; line-height: 1.6;">Most pentesters run scanners and leave. We actually understand your codebase — PHP, Express, APIs. Our code reviews find real vulnerabilities, not false positives.</p>
            </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <div style="background: var(--green); color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; flex-shrink: 0;">2</div>
            <div>
                <h3 style="color: var(--black); font-size: 2.2rem; margin-bottom: 0.5rem;">local, responsive, and human</h3>
                <p style="color: var(--light-color); font-size: 1.6rem; line-height: 1.6;">Based in Nigeria, we understand local business constraints — budgets, talent gaps, and real threats. No timezone delays. No automated chatbots. You talk to the people doing the work.</p>
            </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <div style="background: var(--green); color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; flex-shrink: 0;">3</div>
            <div>
                <h3 style="color: var(--black); font-size: 2.2rem; margin-bottom: 0.5rem;">data science is not an afterthought</h3>
                <p style="color: var(--light-color); font-size: 1.6rem; line-height: 1.6;">Most security firms don't touch data. We do. From security log analysis to business intelligence, we help you find patterns that matter — before they become problems.</p>
            </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <div style="background: var(--green); color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; flex-shrink: 0;">4</div>
            <div>
                <h3 style="color: var(--black); font-size: 2.2rem; margin-bottom: 0.5rem;">training that actually sticks</h3>
                <p style="color: var(--light-color); font-size: 1.6rem; line-height: 1.6;">No boring PowerPoints. We run real phishing simulations and interactive workshops. Your staff will remember what to click — and what to report.</p>
            </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <div style="background: var(--green); color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; flex-shrink: 0;">5</div>
            <div>
                <h3 style="color: var(--black); font-size: 2.2rem; margin-bottom: 0.5rem;">pricing that makes sense</h3>
                <p style="color: var(--light-color); font-size: 1.6rem; line-height: 1.6;">We offer flexible packages — from a one-day security quick-check to monthly retainers. You pay for value, not for a fancy office. Start small, scale as you grow.</p>
            </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <div style="background: var(--green); color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; flex-shrink: 0;">6</div>
            <div>
                <h3 style="color: var(--black); font-size: 2.2rem; margin-bottom: 0.5rem;">clear reports, actionable fixes</h3>
                <p style="color: var(--light-color); font-size: 1.6rem; line-height: 1.6;">Every pentest or code review comes with a plain-English report. No jargon soup. You get step-by-step remediation that your developers can actually implement.</p>
            </div>
        </div>

    </div>

    <!-- call to action -->
    <div style="text-align: center; margin-top: 5rem; padding: 3rem; background: var(--bg-card); border-radius: 1rem; border: var(--border);">
        <i class="fas fa-spider" style="font-size: 3rem; color: var(--green); margin-bottom: 1rem; display: inline-block;"></i>
        <h3 style="color: var(--black); font-size: 2.5rem; margin-bottom: 1rem;">ready to stop guessing and start securing?</h3>
        <p style="color: var(--light-color); font-size: 1.6rem; margin-bottom: 2rem;">Let's talk. No pressure, no pitch — just an honest conversation about your security needs.</p>
        <a href="contact.php" class="btn"> talk to us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>
<!-- insights section ends -->

<?php include 'footer.php'; ?>