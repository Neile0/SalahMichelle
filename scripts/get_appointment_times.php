<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $dbPath = $path . "/conn.php";
   require_once($dbPath);

    $id = $_REQUEST["staffId"];
    $date = $_REQUEST["date"];
    $startTime = $_REQUEST["start"];
    $endTime = $_REQUEST["end"];
    $appointmentDuration = $_REQUEST["duration"];

    function intervals($intervalstart,$intervalend,$intervalduration){
        $interval = new DateInterval("PT".$intervalduration."M");
        $intervalstart = new DateTime($intervalstart);
        $intervalend = new DateTime($intervalend);
        $l = [];
        for ($intStart = $intervalstart; $intStart < $intervalend; $intStart->add($interval)) {
            $endPeriod = clone $intStart;
            $endPeriod->add($interval);
            if ($endPeriod > $intervalend) {
                break;
            }
            $l[] = [$intStart->format('H:i'),$endPeriod->format('H:i')];
        } 
        return $l;
    }

    $possibleTimeSlots = intervals($startTime,$endTime,5);

    $preBooked = [];

    $sql = "SELECT start_time, end_time_expected FROM appointment WHERE date = ? AND staff_id = ? AND cancelled = 0 ORDER BY start_time";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("si",$date,$id);
    $stmt->execute();
    $stmt->store_result();    
    $stmt->bind_result($bookedstart, $bookedend); 
    if($stmt->num_rows > 0) {
        while ($stmt->fetch()) {
            array_push($preBooked, [$bookedstart, $bookedend]); 
        }
    }
    $stmt->close();

    $booked = [];

    foreach($preBooked as $e){
        $eSlots = intervals($e[0],$e[1],5);
        $booked = array_merge($booked,$eSlots);
    }

    function filterSlots($e){
        global $booked;
        if (in_array($e,$booked)){
            return FALSE;
        }
        else{
            return TRUE;
        }

    }

    $appointmentSlots = [];
    $timeSlots = array_values(array_filter($possibleTimeSlots,"filterSlots"));
    $occupies = $appointmentDuration / 5;
    for ($i = 0; $i < (count($timeSlots) - $occupies - 1); $i++){
        $slotStart = new DateTime($timeSlots[$i][0]);
        $dur = new DateInterval("PT".$appointmentDuration."M");
        $target = clone $slotStart;
        $target->add($dur);

        if (new DateTime($timeSlots[$i + $occupies - 1][1]) == $target ){
            array_push($appointmentSlots,[$slotStart->format('H:i'),$target->format('H:i')]);
        }
        
    }

    echo json_encode($appointmentSlots);
    $db->close();
?>
