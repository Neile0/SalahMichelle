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

    $type = $_REQUEST["type"];
    $services = [];

    $sql = "SELECT * FROM service WHERE type = ? ORDER BY type DESC";
    
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s",$type);
    $stmt->execute();

    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        array_push($services,$row);
    };
    
    echo json_encode($services);
    $db->close();
?>