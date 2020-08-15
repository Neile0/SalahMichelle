function displayAppointments(date){
    console.log(date)

    var appointments = getAppointments(date);
    console.log(appointments);
    var table = document.getElementById("staff-appointment-table");
    table.innerHTML = ""
    var header = table.createTHead();
    var headerRow = header.insertRow(0);
    var headerTimeCell = headerRow.insertCell(0);
    var headerNameCell = headerRow.insertCell(1);
    var headerServiceCell = headerRow.insertCell(2);
    headerTimeCell.innerHTML = "Time";
    headerNameCell.innerHTML = "Name";
    headerServiceCell.innerHTML = "Service";
    headerTimeCell.className = "staff-appointment-header";
    headerNameCell.className = "staff-appointment-header";
    headerServiceCell.className = "staff-appointment-header";

    if (appointments.length != 0) {
    for (i = 1; i<appointments.length+1;i++){
        var row = table.insertRow(i);
        var time = appointments[i-1][0];
        var name = appointments[i-1][1];
        var service = appointments[i-1][2];

        var timeCell = row.insertCell(0);
        var nameCell = row.insertCell(1);
        var serviceCell = row.insertCell(2);
        timeCell.innerHTML = time;
        nameCell.innerHTML = name;
        serviceCell.innerHTML = service;

    }

    }
    else {
        var row = table.insertRow(1);
        var cell = row.insertCell(0);
        cell.innerHTML = "You have no appointments on this date";
    }
}


function getAppointments(date){
    var ls = [];
    function getFunction(xhttp){
        var response = JSON.parse(xhttp.responseText);
        ls = response;
    }
    getRequest("/scripts/get_appointments.php?date="+date,getFunction);
    return ls;
}




function printAppointments(){
    var date = document.getElementById("staff-appointment-date").value;
    var table = document.getElementById("staff-appointment-table-cont").outerHTML;
    console.log(table);
    var win = window.open("","","height=700,width=700");
    win.document.write(date + table);
    win.document.close();
    win.print();
    
}


function initializeAppointments(){
    var dateSelector = document.getElementById("staff-appointment-date");
    nextDate = getNextDayOfAppointments();
    console.log(nextDate);
    if (nextDate != 0){
        dateSelector.value = nextDate;
        displayAppointments(nextDate);
    }
    else {
        currentDate = new Date();
        yy = currentDate.getFullYear();
        mm = currentDate.getMonth()+1;
        mm = (mm != 13) ? mm : 1;
        mm = (mm < 10) ? "0"+mm : mm
        dd = currentDate.getDate();
        str = yy + "-" + mm + "-" + dd
        console.log(str)
        dateSelector.value = str;
        displayAppointments(str);
    }
    

}


function getNextDayOfAppointments(){
    var date = "";
    function getFunction(xhttp){
        var response = xhttp.responseText;
        date = response;
    }
    getRequest("/scripts/get_next_day_of_appointments.php",getFunction);
    return date;
}



function getRequest(url, cFunction) {
    var xhttp;
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cFunction(this);
        }
    };
    xhttp.open("GET", url, false);
    xhttp.send();
};

