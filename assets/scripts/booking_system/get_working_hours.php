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

    $id = $_REQUEST["id"];
    $workingHours = [];

    $sql = "SELECT day,start_time,end_time,staff_id,staff_name FROM staff_schedule WHERE staff_id = ?";
    
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        array_push($workingHours,$row);
    };

    echo json_encode($workingHours);
    $db->close();
?>