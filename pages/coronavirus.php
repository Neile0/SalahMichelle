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
            <h1>Coronavirus</h1>
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
            <div>
            <img src="/images/barbicide_michelle.jpg" style="width:300px" alt="Michelle's covid certification">
            <img src="/images/barbicide_kerri.jpg" style="width:300px" alt="Kerri's covid certification">
            <img src="/images/barbicide_sinead.jpg" style="width:300px" alt="Sinead's covid certification">
        </div>
        </div>
    </div>
</main>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);?>

</body>
</html>