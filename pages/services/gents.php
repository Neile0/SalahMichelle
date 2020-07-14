<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Gents Services</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/service.css">
</head>
<body>
<?php include '../../includes/connection.php';?>
<?php include '../../includes/topnav.php';?>
    <div class="banner">
        <div class="title">
            <h1>Gents Services</h1>
        </div>
    </div>

    <div class="content bg-secondary ">
        <div class="content-block bg-primary">
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


            <div class="stylist-block">
                <h2>Gents Stylists</h2>
                <div class="stylist-item">       
                    <img src="" alt="Image of Salah" class="stylist-image">
                    <h3>Salah</h3>
                    <p>Salah is one of the owners of our salon. Salah has mastered his skills of mens barbering with 20+ years of experience. </p>
                </div> 
            </div>
        </div>
    </div>
<?php include 'includes/footer.php';?>
<?php
$db->close();
?>
</body>
</html>