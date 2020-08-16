<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | About Us</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="icon" type="image/svg" href="/images/icons/favicon.svg">
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
    <script src="/scripts/main.js"></script>
</head>
<body>
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$navPath = $path ."/topnav.php";
// $path .= "/topnav.php";
include_once($navPath);
?>
<main class="bg-primary about-page">
    <div class="banner about-page-banner">
        <div class="banner-title">
            <h1>Salah Michelle</h1>
            <!-- <p>About Us</p> -->
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
            <div>
        <div class="about-block">
                <div class="about-right">
                    <img src="/images/sm.jpg" alt="The owners Salah and Michelle">
                </div>
                <div class="about-left">
                    <h1><span class="about-h">S</span>alah & Michelle's Salon (est. 2018) in the heart of East Kilbride, provided by ladies stylist Michelle and master barber Salah.<br>Always providing a warm welcome to all new and loyal customers.</h1>
                </div>
                <div style="clear:both;"></div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="details-table-block">
                <table class="details-table details-table-ladies">
                    <tr>
                        <th class="details-table-header" colspan="2">Ladies</th>
                    </tr>
                    
                    <tr><th>Monday</th><td>closed</td></tr>
                    <tr><th>Tuesday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Wednesday</th><td>9AM - 8PM</td></tr>
                    <tr><th>Thursday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Friday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Saturday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Sunday</th><td>closed</td></tr>
                </table>
                <table class="details-table details-table-gents">
                    <tr>
                        <th class="details-table-header" colspan="2">Gents</th>
                    </tr>
                    
                    <tr><th>Monday</th><td>closed</td></tr>
                    <tr><th>Tuesday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Wednesday</th><td>9AM - 7.30PM</td></tr>
                    <tr><th>Thursday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Friday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Saturday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Sunday</th><td>closed</td></tr>
                </table>
                <br>
            <br>
            <br>
            <br>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php $footerPath = $path . "/footer.php";
    include_once($footerPath);?>

</body>
</html>