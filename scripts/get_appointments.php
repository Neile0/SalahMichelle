<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $staffPath = $path ."/staff";
    $dbPath = $path . "/conn.php";
    $sessionPath = $staffPath . "/session.php";
    require($sessionPath);
    require($dbPath);


    $staffid = $_SESSION["staffId"];
    $date = $_REQUEST["date"];
    $appointments = [];

    $sql = "SELECT appointment.start_time, client.first_name, client.surname, service.title as 'service' FROM appointment, client, service WHERE appointment.client_id = client.id AND appointment.service_id = service.id AND appointment.staff_id = ? AND appointment.date = ? ORDER BY start_time ASC ";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("is",$staffid,$date);
    $stmt->execute();

    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $start = date("H:i", strtotime($row["start_time"]));
        $time = date("h:i" ,strtotime($start));
        // echo $time;
        $name = $row["first_name"] . " " . $row["surname"];
        $title = $row["service"];
        $app = [$start,$name,$title];
        array_push($appointments,$app);
    };


    echo json_encode($appointments);
    $db->close();

?>