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
            <h1>Contact</h1>
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
        <div class="details-contact-block">
                <div class="details-call-btn">
                    <a href="tel:01355224033" class="button button-accent-one">Call us on 01355 224033</a>
                </div>
                <div class="details-address">
                    <h2>10-13 Blacklands Rd East Kilbride<br>G74 1BE</h2>
                </div>
                <div class="">
                    <h2>contact@salahmichelle.salon</h2>
                </div>

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