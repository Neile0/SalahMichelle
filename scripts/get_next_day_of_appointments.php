<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$staffPath = $path ."/staff";
$dbPath = $path . "/conn.php";
$sessionPath = $staffPath . "/session.php";
require($sessionPath);
require($dbPath);


$CURRENTDAY = date("Y-m-d");


$sql = "SELECT date as 'next' FROM appointment WHERE NOT (date < ?) AND appointment.staff_id = ? order by date, start_time ASC LIMIT 1";
$stmt = $db->prepare($sql);
$stmt->bind_param("si", $CURRENTDAY, $_SESSION["staffId"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows >= "1") {
    while($row = $result->fetch_assoc()){ 
        $NEXTDATE = $row["next"];
        echo $NEXTDATE;
    }
}
else{
    echo 0;

}
$stmt->close();


?>