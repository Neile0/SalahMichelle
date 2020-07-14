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

    $service = $_REQUEST["service"];
    $stylists = [];

    $sql = "SELECT staff.id, staff.first_name FROM staff, staff_provides WHERE  staff.id = staff_provides.staff_id AND staff_provides.service_id = ?";
   
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i",$service);
    $stmt->execute();

    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        array_push($stylists,$row);
    };
    
    echo json_encode($stylists);
    $db->close();
?>
