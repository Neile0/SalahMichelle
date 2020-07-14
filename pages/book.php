<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Book An Appointment</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/booking.css">
    <script src="/assets/scripts/booking_system/booking_system.js"></script>
</head>
<body>
<?php include '../includes/connection.php';?>
<?php include '../includes/topnav.php';?>
    <div class="banner">
        <div class="title">
            <h1>Book an Appointment</h1>
        </div>
    </div>

    <div class="content bg-secondary ">
    <div class="content-block bg-primary no-padding">
    <div class="alert">
        <h1>ATTENTION</h1>
        <h2>Online bookings are currently only available for Gents services. You can always call us on <a href="tel:01355224033">01355 224033</a> for an appointment.</h2>
    </div>
    <div class="padding-start">
        <div class="service-type-block" id="service-type">
            <label for="service-type" id="service-type-label">Type:</label>
            <select name="service-type" id="service-type-select" onchange=selectServiceType(this.value)>
                <option value='LADIES'>Ladies</option>"
                <option value='GENTS'>Gents</option>"
                <option value='BEAUTY'>Beauty</option>"
            </select>
        </div>

        <div class="service-block">
            <label for="service" id="service-label"><h2>Service</h2></label>
            <select name="service" id="service-select" onchange=selectService(this.value)>
                <option value="NOSELECTION">Select a Service</option>
                    <?php

                    $sql = "SELECT id,title,price FROM salah_michelle_development.service WHERE type = '$type' ORDER BY type DESC;";
                    $result = $db->query($sql);
                    $services = $result->fetch_all();
                    foreach ($services as list($id,$title,$price)){
                        echo "<option value ='$id'>$title (£$price)</option>";
                    };
                    
                    ?>
            </select>
        </div>

        <div class="stylist-block">


        
            <label for="stylist"><h2>With</h2></label>
                <select name="stylist" id="stylist-select" onchange=selectStylist(this.value)>
                    <option value='ANY'>Any</option>
                </select>
        </div>

        <div class="date-block">
            <label for="date"><h2>When <span>(please note that bookings must be made at least 2 days in advance)</span></h2></label>
            <div class="calander " >
                <div class="cal-header ">
                    <div class="cal-header-left cal-header-item cal-arrow cal-disabled"  id="cal-left-arrow"><</div>
                    <div class="cal-header-month cal-header-item cal-disabled" id="cal-header-month"></div>
                    <div class="cal-header-right cal-header-item cal-arrow cal-disabled" id="cal-right-arrow">></div>
                </div>
                <div class="cal-days cal-disabled" id="cal-days">
                    <div class="cal-day-header">
                        <p>Mon</p>
                    </div>
                    <div class="cal-day-header">
                        <p>Tue</p>
                    </div>
                    <div class="cal-day-header">
                        <p>Wed</p>
                    </div>
                    <div class="cal-day-header">
                        <p>Thu</p>
                    </div>
                    <div class="cal-day-header">
                        <p>Fri</p>
                    </div>
                    <div class="cal-day-header">
                        <p>Sat</p>
                    </div>
                    <div class="cal-day-header">
                        <p>Sun</p>
                    </div>
                </div>
                <div class="cal-body" id="cal-body">
                </div>
            </div>
        </div>

        <div class="time-block">
        <label for="time"><h2>Time</h2></label>
        <div class="time-cont" id="time-cont">


        </div>
        <div class="appointment-block">
            <label for="time"><h2>Your Appointment</h2></label>
            <div class="appointment-details" id="appointment-details">


            </div>
            <div class="user-details-block">
                <form action="../assets/scripts/db/create_new_booking.php" method="POST">
                    <input type="text" id="user-forename" name="forename" placeholder="First Name" maxlength="16" required>
                    <input type="text" id="user-surname" name="surname" placeholder="Surname" maxlength="16" required>
                    <input type="tel" id="user-contact-no" name="contactNo" placeholder="Contact No." maxlength="11" minlength="11" required>
                    <input type="hidden" id="form-date" name="date" value="" readonly>
                    <input type="hidden" id="form-serviceid" name="serviceId" value="" readonly>
                    <input type="hidden" id="form-staffid" name="staffId" value="" readonly>
                    <input type="hidden" id="form-start" name="startTime" value="" readonly>
                    <input type="hidden" id="form-end" name="endTime" value="" readonly>
                    <input type="hidden" id="form-price" name="priceQuoted" value="" readonly>
                    <input type="submit" id="form-book-submit" value="Book My Appointment" onclick="postAppointmentDetails()">
                </form>
            </div>

        </div>
           
</div>
</div>
</div>
</div>
    <?php include '../includes/footer.php';?>
    <?php
$db->close();
?>
</body>
</html>