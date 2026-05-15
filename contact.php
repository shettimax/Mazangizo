<?php 
$page_title = "MAZANGIZO - contact";
$page_description = "Contact MAZANGIZO for cybersecurity and data science services. Request a quote or consultation.";

// handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $company = isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    $to = "hello@mazangizo.net";
    $subject = "Quote Request from $name";
    
    $body = "Name: $name\n";
    $body .= "Company: $company\n";
    $body .= "Email: $email\n";
    $body .= "Service: $service\n\n";
    $body .= "Message:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        $success = "Thank you, $name. Your message has been sent. We will respond within 24 hours.";
    } else {
        $error = "Delivery error. Please email us directly at hello@mazangizo.net";
    }
}

include 'header.php'; 
?>

<!-- contact section starts  -->
<section class="book" id="contact">
    <h1 class="heading"> <span>contact</span> us </h1>    
    <div class="row">
        <div class="image">
            <img src="image/book-img.svg" alt="Contact MAZANGIZO">
        </div>
        <form method="POST">
            <h3>request a quote</h3>
            <?php if(isset($success)): ?>
                <p style="color: green; background: #e8f5e9; padding: 1rem; border-radius: .5rem;"><?php echo $success; ?></p>
            <?php elseif(isset($error)): ?>
                <p style="color: red; background: #ffebee; padding: 1rem; border-radius: .5rem;"><?php echo $error; ?></p>
            <?php endif; ?>
            <input type="text" name="name" placeholder="your name" class="box" required>
            <input type="text" name="company" placeholder="company name" class="box">
            <input type="email" name="email" placeholder="your email" class="box" required>
            <input type="text" name="service" placeholder="service needed (pentest / training / code review / data)" class="box">
            <textarea name="message" rows="4" placeholder="tell us about your needs" class="box" style="resize: vertical;"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </div>
</section>
<!-- contact section ends -->

<?php include 'footer.php'; ?>