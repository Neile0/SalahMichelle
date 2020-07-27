<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | </title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="icon" type="image/svg" href="/images/icons/favicon.svg">
    <!-- <link rel="stylesheet" href="../assets/css/page.css"> -->
</head>
<body>
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$navPath = $path ."/topnav.php";
include_once($navPath);
?>
<main class="bg-primary about-page">
    <div class="banner">
        <div class="banner-title">
            <h1>Privacy Policy</h1>
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
            <div class="content-container">
            <p>Last Updated: 27-07-2020</p>
            <div><h2>1. Your Privacy</h2>
            <p>We are committed to maintaining our customers' privacy. Any personal data that you provide will be used solely to fulfill your online booking. If you have any queries about the way in which your information is being collected or used which are not answered by this privacy policy, then feel free to write to us at privacy@salahmichelle.salon.</p>
            </div>
            <div>
            <h2>2. Personal data we collect</h2>
            <p>When you book with us online you provide data including your name and contact details.
When you submit your details to our website we use a 256-bit ssl encrypted secure internet connection to protect you and your personal data. Your computer should automatically allow the opening of the secure connection when you place your order. This means that all the details you supply and any responses are encrypted before they are sent over the internet.
</p>
            </div>
            <div><h2>3. Your Consent</h2>
            <p>By using our site salahmichelle.salon you are accepting and consenting to the practices described in this privacy policy. Future changes, if any, will be published here with notification to customers where appropriate. Continued use of our website will signify that you agree to such changes.</p>
     </div>
     </div></div>
    </div>
    
</main>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);?>

</body>
</html>