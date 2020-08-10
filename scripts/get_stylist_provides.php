<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $dbPath = $path . "/conn.php";
    require_once($dbPath);

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
