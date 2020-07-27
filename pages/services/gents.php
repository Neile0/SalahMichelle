<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Gents</title>
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
<main class="bg-primary gents-service-page">
    <div class="banner gents-page-banner">
        <div class="banner-title">
            <h1>Gents Services</h1>
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
        <div class="content-container">
            <table class="gents-services-table service-table">
                <tr>
                    <th class="service-title-header service-header">Service</th>
                    <th class="service-duration-header service-header">Appointment Duration</th>
                    <th class="service-price-header service-header">Price</th>
                <tr>
                <?php

                    $sql = "SELECT title,duration,price FROM salah_michelle_development.service WHERE type = 'GENTS';";
                    $result = $db->query($sql);
                    $services = $result->fetch_all();
                    foreach ($services as list($title,$duration,$price)){
                    echo "<tr><td class='service-title service-data'>$title</td><td class='service-duration service-data'>$duration minutes</td><td class='service-price'>£$price</td></tr>";
                    };

                ?>
            </table>


            <!-- <div class="stylist-block">
                <h2>Gents Stylists</h2>
                <div class="stylist-item">       
                    <img src="" alt="Image of Salah" class="stylist-image">
                    <h3>Salah</h3>
                    <p>Salah is one of the owners of our salon. Salah has mastered his skills of mens barbering with 20+ years of experience. </p>
                </div> 
            </div> -->
        </div>
                </div>
    </div>
    </main>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);
$db->close();
?>
</body>
</html>