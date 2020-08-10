<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Staff</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="icon" type="image/svg" href="/images/icons/favicon.svg">
    <script src="/scripts/staff.js"></script>
</head>
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$staffPath = $path ."/staff";
$dbPath = $path . "/conn.php";
$sessionPath = $staffPath . "/session.php";
$navPath = $staffPath . "/staffnav.php";
require($sessionPath);
require($dbPath);


?>


<body>
<?php
include_once($navPath);




?>



<main class="staff-main bg-secondary staff-dashboard">
<!-- <?php  echo print_r($_SESSION);?> -->
<div class="staff-dashboard-top">

        <div class="staff-dash-card staff-card">
            <a class="staff-card-a" href="/staff/pages/new_app.php">
        <div class="staff-card-ico staff-dash-card-ico">
            <h1>?</h1>
        </div>
        <div class="staff-card-title staff-dash-card-title">
            <h2>Today</h2>
        </div>
            
        </a>
        </div>
        <div class="staff-dash-card staff-card">
            <a class="staff-card-a" href="/staff/pages/new_app.php">
        <div class="staff-card-ico staff-dash-card-ico">
            <h1>?</h1>
        </div>
        <div class="staff-card-title staff-dash-card-title">
            <h2>This Week</h2>
        </div>
            
        </a>
        </div>
            
        </a>
        </div>

</div>


<div class="staff-appointments-block staff-dash-appointments-block">
    <div class="staff-appointments-subtitle staff-dash-appointments-subtitle">
    <p class="staff-appointments-subtitle staff-dash-appointments-subtitle">Showing appointments for :</p>
    <input type="date" id="staff-appointment-date" value="" style="display:inline" onchange="displayAppointments(this.value)">
    <button class="button bg-accent-two button-no-animation" onclick="printAppointments()">Print</button>
    </div>
     <div class="staff-appointment-table-cont staff-dash-appointment-table-cont" id="staff-appointment-table-cont"> 
    <table class="staff-appointment-table staff-dash-appointment-table" id="staff-appointment-table">    
            
                </table>
</div>
                
</div>
</main>


</body>
<script>
initializeAppointments();
</script>
</html>