<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Beauty</title>
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
    <div class="banner beauty-page-banner">
        <div class="banner-title">
            <h1>Beauty Services</h1>
        </div>
    </div>
    <div class="customer-alert-banner">
        <h1>ATTENTION</h1>
        <h2>Due to COVID19, we are currently unable to provide any of our beauty services. We will let you know when our beauty services resume. Our customer and staff safety takes priority during these times. We thank you for your understanding.</h2>
    </div>
    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
        <div class="content-container">
</div>
            
        </div>
    </div>
</main>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);?>
</body>
</html>