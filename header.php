<?php
// check for dark mode cookie/preference before any output
$dark_mode_class = '';
if (isset($_COOKIE['darkmode']) && $_COOKIE['darkmode'] === 'true') {
    $dark_mode_class = 'dark-mode';
}
?>
<?php include 'signature.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favi.svg">
    <title><?php echo isset($page_title) ? $page_title : 'MAZANGIZO'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'MAZANGIZO provides cybersecurity and data science solutions: penetration testing, code review, staff training, and security analytics for African businesses.'; ?>">
    <meta name="keywords" content="cybersecurity, penetration testing, code review, data science, security training, Nigeria, infosec">
    <meta name="author" content="MAZANGIZO">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- dark mode toggle script with cookie persistence -->
    <script>
        function setDarkMode(enabled) {
            if (enabled) {
                document.body.classList.add('dark-mode');
                document.cookie = "darkmode=true; path=/; max-age=31536000";
            } else {
                document.body.classList.remove('dark-mode');
                document.cookie = "darkmode=false; path=/; max-age=31536000";
            }
        }
        
        function toggleDarkMode() {
            const isDark = document.body.classList.contains('dark-mode');
            setDarkMode(!isDark);
        }
        
        // load saved preference from cookie on page load
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
            return null;
        }
        
        // apply dark mode if cookie says true
        const darkModeCookie = getCookie('darkmode');
        if (darkModeCookie === 'true') {
            document.body.classList.add('dark-mode');
        }
    </script>
</head>
<body class="<?php echo $dark_mode_class; ?>">

<!-- header section starts  -->
<header class="header">
    <a href="index.php" class="logo">
        <img src="image/logo-full.svg" alt="MAZANGIZO" style="height: 45px; width: auto; vertical-align: middle;">
    </a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="services.php">services</a>
        <a href="team.php">team</a>
        <a href="insights.php">insights</a>
        <a href="contact.php">contact</a>
    </nav>
    <button class="dark-toggle" onclick="toggleDarkMode()">dark / light</button>
    <div id="menu-btn" class="fas fa-bars"></div>
</header>
<!-- header section ends -->