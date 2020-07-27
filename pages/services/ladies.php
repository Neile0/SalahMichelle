<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Ladies</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="icon" type="image/svg" href="/images/icons/favicon.svg">
</head>
<body><?php
$path = $_SERVER['DOCUMENT_ROOT'];
$navPath = $path ."/topnav.php";
$dbPath = $path . "/conn.php";
include_once($dbPath);
include_once($navPath);
?>
<main class="bg-primary beauty-service-page">
    <div class="banner ladies-page-banner">
        <div class="banner-title">
            <h1>Ladies Services</h1>
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
        <div class="content-container">
            <h2>Sorry! Our ladies services aren't available online yet. We will have them with you shortly. If you would like to make an enquiery, call us on <a href="tel:01355224033">01355 224033.</a></h2>
        </div>
    </div></div>
    </main>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);
$db->close();
?>
</body>
</html>