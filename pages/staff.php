<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | </title>
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$navPath = $path ."/topnav.php";
include_once($navPath);
?>
    <div class="banner">
        <div class="title">
            <h1>Your Appointments</h1>
        </div>
    </div>

    <div class="content bg-secondary ">
        <div class="content-block bg-primary">
            <div class="appointments">
                <table class="service-table">
                    <tr><th class="service-header">Date</th><th class="service-header">Time</th><th class="service-header">Service</th><th class="service-header">Client Forename</th><th class="service-header">Client Surname</th><th class="service-header">Client Number</th></tr>
                    <?php
                           $servername = "localhost:3306";
                           $username = "root";
                           $password = "root";
                           $schema = "salah_michelle_development";
                   
                           $type = "GENTS";
                           // Create connection
                           $db = new mysqli($servername, $username, $password, $schema);
                                   
                           // Check connection
                           if ($db->connect_error) {
                               die("Connection failed: " . $db->connect_error);
                           }
                           
                           $sql = "SELECT appointment.date, appointment.start_time, service.title, client.first_name,  client.surname, client.contact_phone FROM appointment, service, client WHERE appointment.client_id = client.id AND appointment.service_id = service.id";
                           $stmt = $db->prepare($sql);
                           $stmt->execute();
                       
                           $result = $stmt->get_result();
                        //    $rows = [];
                           while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row['date'] . "</td><td>" . $row["start_time"] . "</td><td>".$row["title"] . "</td><td>". $row["first_name"] . "</td><td>". $row["surname"] . "</td><td>" . $row["contact_phone"] . "</td></tr>";
                           };

                    ?>
                
                </table>
            
            
            </div>
        </div>
    </div>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);?>

</body>
</html>