<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $staffPath = $path ."/staff";
    $dbPath = $path . "/conn.php";
    $sessionPath = $staffPath . "/session.php";
    require($sessionPath);
    require($dbPath);


    $staffId = $_SESSION["staffId"];
    $date = $_REQUEST["date"];
    $appointments = [];

    $sql = "SELECT appointment.*, client.first_name, client.surname, client.contact_phone, service.title as 'service_title' FROM appointment, client, service WHERE appointment.client_id = client.id AND appointment.service_id = service.id AND appointment.staff_id = ? AND appointment.date = ? AND cancelled = 0 ORDER BY start_time ASC ";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("is",$staffId,$date);
    $stmt->execute();

    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        // $start = date("H:i", strtotime($row["start_time"]));
        // $time = date("h:i" ,strtotime($start));
        // // echo $time;
        // $name = $row["first_name"] . " " . $row["surname"];
        // $title = $row["service"];
        // $app = [$start,$name,$title];
        array_push($appointments,$row);
    };


    echo json_encode($appointments);
    $db->close();

?>