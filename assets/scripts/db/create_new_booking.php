<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "root";
    $schema = "salah_michelle_development";
    // Create connection
    $db = new mysqli($servername, $username, $password, $schema);
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    $contactNo = $_POST["contactNo"];
    $date = $_POST["date"];
    $serviceId = $_POST["serviceId"];
    $staffId = $_POST["staffId"];
    $start = $_POST["startTime"];
    $end = $_POST["endTime"];
    $price = $_POST["priceQuoted"];

    // $sql = "SELECT AUTO_INCREMENT as next FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'salah_michelle_development' AND TABLE_NAME = 'client'";
    // $result = $db->query($sql);
    // while($row = $result->fetch_assoc()) {
    //     $nextId = $row["next"];
    // }
    // $nextId = $nextId + 1;

    $sql = "INSERT INTO client (first_name, surname, contact_phone) VALUES (?,?,?) ";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sss",$forename,$surname,$contactNo);
    $stmt->execute();
    $stmt->close();

    $sql = "SELECT id FROM client WHERE first_name = ? AND surname = ? and contact_phone = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sss",$forename,$surname,$contactNo);
    $stmt->execute();
    $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $nextId = $row["id"];
        }
    $nextId = $nextId;

    $sql = "INSERT INTO appointment (date,client_id,service_id,staff_id,start_time,end_time_expected,price_quoted,booked_by) VALUES (?,?,?,?,?,?,?,'CUSTOMER_ONLINE')";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("siiissi",$date,$nextId,$serviceId,$staffId,$start,$end,$price);
    $stmt->execute() or die ($db->error); 
    $stmt->close();
    
    $db->close();    

    
    // header("Location: /SalahMichelle/pages/booking_confirmation.php");
 

?>