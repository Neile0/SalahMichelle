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

    $id = $_REQUEST["staffId"];
    $date = $_REQUEST["date"];
    $startTime = $_REQUEST["start"];
    $endTime = $_REQUEST["end"];
    $duration = $_REQUEST["duration"];
    
    $start = new DateTime($startTime);
    $end = new DateTime($endTime);
    $interval = new DateInterval("PT".$duration."M");

    for ($intStart = $start; $intStart < $end; $intStart->add($interval)) {
    $endPeriod = clone $intStart;
    $endPeriod->add($interval);
    if ($endPeriod > $end) {
        break;
    }
    $timeSlots[] = [$intStart->format('H:i'),$endPeriod->format('H:i')];
    }

    function is_booked($elt) { 
        global $date;
        global $id;
        global $db;
        $start = $elt[0];
        $end = $elt[1];

        $sql = "SELECT COUNT(*) AS appointments FROM appointment, staff WHERE appointment.staff_id = staff.id AND appointment.staff_id = ? AND appointment.date = ? AND ((appointment.start_time >= ? AND appointment.start_time < ?) OR (appointment.end_time_expected >= ? AND appointment.end_time_expected < ?))";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("isssss",$id,$date,$start,$end,$start,$end);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            if($row["appointments"]==0){ 
                return TRUE; 
            }
            else{ 
                return FALSE;
            }  
        };
        $stmt->close();
    };

    $availableTimeSlots = array_values(array_filter($timeSlots, "is_booked")); 
    echo json_encode($availableTimeSlots);
    $db->close();
?>
