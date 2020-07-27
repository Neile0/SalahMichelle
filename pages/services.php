<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Services</title>
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
<main class="bg-primary services-page">
    <div class="banner service-page-banner">
        <div class="banner-title">
            <h1>Services</h1>
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
            <div class="services-block-card">
                <div class="service-item" id="service-card-ladies">
                    <a href="/pages/services/ladies.php" class="service-link">
                    <div class="service-image" id="service-image-ladies">
                        <img src="/images/thumbnail_ladies.jpg" alt="Ladies Service">
                    </div>
                    <div class="service-btn-cont">
                        <p class="button button-no-animation bg-accent-two">View Ladies</p>
                    </div>
                    </a>
                </div>
                <div class="service-item" id="service-card-gents">
                    <a href="/pages/services/gents.php" class="service-link">
                    <div class="service-image" id="service-image-gents">
                        <img src="/images/thumbnail_gents.png" alt="Gents Service">
                    </div>
                    <div class="service-btn-cont">
                        <p class="button button-no-animation bg-accent-two">View Gents</p>
                    </div>
                    </a>
                </div>
                <div class="service-item" id="service-card-beauty">
                    <a href="/pages/services/beauty.php" class="service-link">
                    <div class="service-image" id="service-image-beauty">
                        <img src="/images/thumbnail_beauty.jpg" alt="Beauty Service">
                    </div>
                    <div class="service-btn-cont">
                        <p class="button button-no-animation bg-accent-two">View Beauty</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);?>

</body>
</html>