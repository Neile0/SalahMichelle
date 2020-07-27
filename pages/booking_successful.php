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
$dbPath = $path . "/conn.php";
$navPath = $path ."/topnav.php";
include_once($navPath);
require_once($dbPath);


$BOOKING_REF = $_GET["ref"];

$sql = "SELECT client.first_name FROM client, appointment WHERE appointment.ref = ? AND appointment.client_id = client.id";
$stmt = $db->prepare($sql);
$stmt->bind_param("s",$BOOKING_REF);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
while ($row = $result->fetch_assoc()) {
    $name = $row["first_name"];
};


?>
    <main class="bg-primary">
    <div class="banner book-page-banner">
        <div class="banner-title ">
            <h1>Booking Successful</h1>
        </div>
    </div>

    <div class="content bg-primary ">
        <div class="content-block bg-secondary">
            <div class="content-container"><h2>
                <div>
            <?php echo "Thank you $name for your booking. See you soon!";?>
            </h2>
            <a href="/"class="button button-white bg-accent-one-light">Home</a>
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