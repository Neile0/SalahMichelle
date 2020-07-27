

//Old

// function selectServiceType(selected){
//     bookingStage = 1;
//     typeChange();
//     selectedServiceType = selected;
//     function getServicesProcess(xhttp){
//         var e = document.getElementById("service-select");
//         e.innerHTML = "<option value='NOSELECTION'>Select a Service</option>";
//         var response = JSON.parse(xhttp.responseText);
//         response.forEach(function([id,title,price]){
//             var node = document.createElement("option");
//             var textnode = document.createTextNode(title + " £(" + price + ")");
//             node.appendChild(textnode);
//             node.setAttribute("value",id);
//             e.appendChild(node);
//         });
//      };
//     getRequest("getServices.php?type="+selected,getServicesProcess);
// };

// function selectService(selected){
//     bookingStage = 2
//     clearStylists();
//     if (selected != "NOSELECTION"){
//     selectedServiceId = selected;
//     selectedDuration = getDuration(selectedServiceId);
//     function getStylistProvidesProvidesProcess(xhttp){
//         var e = document.getElementById("stylist-select");
//         e.innerHTML = "<option value='ANY'>Any Stylist</option>" ;
//         var response = JSON.parse(xhttp.responseText);
//         response.forEach(function([id,fname]){
//             // stylists.push([id,fname]);
//             var node = document.createElement("option");
//             var textnode = document.createTextNode(fname);
//             node.appendChild(textnode);
//             node.setAttribute("value",id);
//             e.appendChild(node);
//             stylists.push([id,fname])
//         });
//     };
//     getRequest("getStylistProvides.php?service="+selected,getStylistProvidesProvidesProcess);
//     activateCalendar()
//     selectedStylistId = "ANY";
//     selectStylist(selectedStylistId);
//     }
// };



// function showCalendar(_month,_year){
//     var iMonth = _month;
//     var monthFromOne = _month + 1

//     var year = _year

//     var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
//     var calMonth = document.getElementById("cal-header-month");
//     calMonth.innerHTML = months[iMonth] + " " + year;
//     var calBody = document.getElementById("cal-body");
//     calBody.innerHTML = "";
//     var daysInMonth = new Date(year,iMonth+1,0).getDate();
//     var firstDayWeekDay = new Date(year,iMonth,1).getDay();
//     var lastDayWeekDay = new Date(year,iMonth+1,0).getDay();         
//     var offsetFromMon = firstDayWeekDay - 1;
//     var extraDaysReq = 0;
//     var iMonthPrior = iMonth -1;
//     var iMonthNext = iMonth + 1;

//     if (offsetFromMon == -1) {
//         offsetFromMon = 6; 
//     };
//     if (lastDayWeekDay > 0){
//         extraDaysReq = 6 - (lastDayWeekDay - 1)
//     };
//     if (iMonthPrior == -1) {
//         iMonthPrior = 11;
//         var yearPrior = year -1;   
//     };
//     if (iMonthNext == 12){
//         iMonthNext = 0;
//         var yearNext = year + 1;
//     };
//     var monthStr = (monthFromOne).toString();
//     var monthPriorStr = (monthFromOne-1).toString(); 
//     var monthNextStr = (monthFromOne+1).toString();
//     if (parseInt(monthStr) < 10){
//         monthStr = "0" + monthStr;
//         }
//     if (parseInt(monthPriorStr) < 10){
//         monthPriorStr = "0"+monthPriorStr;
//         }
//     if (parseInt(monthNextStr) < 10){
//         monthNextStr = "0"+ monthNextStr;
//         }
                
//     var days = [];
//     if (iMonthPrior == 11){
//         for (var i = offsetFromMon-1; i >= 0; i--){
//             days.push([yearPrior.toString(),monthPriorStr,(new Date(year,iMonth,-i).getDate()).toString()]);
//         };
//         for (var i = 1; i <= daysInMonth;i++){
//             if (i < 10) {
//                 days.push([year.toString(),monthStr,"0"+i.toString()]);
//             }
//             else{
//                 days.push([year.toString(),monthStr,i.toString()]);
//             }
//         };
//         if (extraDaysReq > 0){
//             for (var i = 1; i <= extraDaysReq;i++){
//                 days.push([year.toString(),monthNextStr,"0"+i.toString()]);
//             };
//         };
//     }
//     else if (iMonthNext == 0){
//         for (var i = offsetFromMon-1; i >= 0; i--){
//             days.push([year.toString(),monthPriorStr,(new Date(year,iMonth,-i).getDate()).toString()]);
//         };
//         for (var i = 1; i <= daysInMonth;i++){
//             if (i < 10) {
//                 days.push([year.toString(),monthStr,"0"+i.toString()]);
//             }
//             else{
//                 days.push([year.toString(),monthStr,i.toString()]);
//             }
//         };
//         if (extraDaysReq > 0){
//             for (var i = 1; i <= extraDaysReq;i++){
//                 days.push([yearNext.toString(),monthNextStr,"0"+i]);
//             };
//         };
//     }
//     else {
//         for (var i = offsetFromMon-1; i >= 0; i--){
//             days.push([year.toString(),monthPriorStr,(new Date(year,iMonth,-i).getDate()).toString()])
//         };
//         for (var i = 1; i <= daysInMonth;i++){
//             if (i < 10) {
//                 days.push([year.toString(),monthStr,"0"+i.toString()]);
//             }
//             else{
//                 days.push([year.toString(),monthStr,i.toString()]);
//             }
//         };
//         if (extraDaysReq > 0){
//             for (var i = 1; i <= extraDaysReq;i++){
//                 days.push([year.toString(),monthNextStr,"0"+i]);
//             }
//         };
//     }

//     days.forEach(function([yy,mm,dd]){
//         var fulldateStr = yy + "-" + mm + "-" + dd;
//         var fulldate = new Date(fulldateStr);
//         var node = document.createElement("DIV");
//         var nodepara = document.createElement("p")
//         var textnode = document.createTextNode(dd);
//         nodepara.appendChild(textnode);
//         node.appendChild(nodepara);
//         node.classList.add("cal-day");
//         if (fulldate < CUTOFF){
//             node.classList.add("unavailable");
//         }
//         if (selectedStylistId == null) {
//                 node.classList.add("cal-disabled");
//             } 

//         if (fulldateStr == selectedDate){
//             node.classList.add("selected-date");
//         }
//         if (mm != monthStr){
//             node.classList.add("non-selected-month")
//         }
//         node.classList.add("date-non-selectable")
//         node.setAttribute("id",fulldateStr);
//         calBody.appendChild(node);
//     });           
    
// };

// function selectStylist(selected){
//     bookingStage = 3
//     selectedStylistId = selected;
//     workingHours = [];
//     function getWorkingHoursProcess(xhttp){
//         var response = JSON.parse(xhttp.responseText);
//         response.forEach(function([workingDay,startTime,endTime,id,fname]){
//             workingHours.push([workingDay,startTime,endTime,id,fname])
//         });
//     };

//     if (selectedStylistId == "ANY"){
//         stylists.forEach(function([id,fname]){
//             getRequest("getWorkingHours.php?id="+id,getWorkingHoursProcess);
//         });
//     }
//     else{
//         getRequest("getWorkingHours.php?id="+selectedStylistId,getWorkingHoursProcess);
//     }
//     populateSelectable();
// }


// function populateSelectable(){
//     clearSelectable();
//     var rows = (document.getElementsByClassName("cal-day").length)/7;
//     workingHours.forEach(function([workingDay,startTime,endTime,id,name]){
//             var dayOfWeeki = DAYSOFWEEK.indexOf(workingDay) + 1;
//             var ind = dayOfWeeki
//             for (var i = 0; i < rows; i++){
//                 var e = document.querySelector(".cal-body .cal-day:nth-child("+ind+")");
//                 if (e.classList.contains("unavailable") != 1) {
//                     e.classList.remove("date-non-selectable");
//                     e.classList.add("date-selectable");
//                     e.setAttribute("onclick","selectDate(this.id)");
//                 }
//                 ind = ind + 7;
//             };
//     });
// };

// function clearSelectable(){
//     var toDisable = document.querySelectorAll(".date-selectable");
//     toDisable.forEach(function(e){
//         e.classList.remove("date-selectable");
//         e.classList.add("date-non-selectable");
//         e.removeAttribute("onclick","selectDate(this.id)")
//     })
// }

// function activateCalendar(){
//     var disabled = document.querySelectorAll(".cal-disabled");
//     disabled.forEach(el => el.classList.remove("cal-disabled"));
//     var left = document.getElementById("cal-left-arrow");
//     left.addEventListener("click", previousMonth);
//     var right = document.getElementById("cal-right-arrow");
//     right.addEventListener("click", nextMonth);

// }



// function nextMonth(){
//     if (selectedMonth == 11){
//         selectedMonth = 0;
//         selectedYear = selectedYear + 1;
//         showCalendar(selectedMonth,selectedYear);
//         populateSelectable(selectedStylistId);
//     }
//     else{

//         selectedMonth = selectedMonth + 1
//         showCalendar(selectedMonth,selectedYear);
//         populateSelectable(selectedStylistId);
//     }
    
// }



function selectDate(selected){
    if (selectedDate != null){
      var prevSelected = document.getElementById(selectedDate);
      prevSelected.classList.remove("selected-date")
    }
    selectedDate = selected;
    var e = document.getElementById(selectedDate);
    e.classList.add("selected-date");
    var dayOfWeeki = (new Date(selected).getDay()) -1;
    var dayOfWeek = DAYSOFWEEK[dayOfWeeki];
    stylists = getStylistByDate(selectedServiceId,dayOfWeek);
 
    clearAppointments();
    getAppointments();


    var outputBlock = document.getElementById("output-block");
    for (var i = 0; i < timeSlots.length; i++){
        var available = timeSlots[i];
        var stylistName = stylists[i][1];
        var node = document.createElement("DIV");
        var header = document.createElement("H3")
        var headerText = document.createTextNode("Appointments with " + stylistName);
        var select = document.createElement("select")
        available.forEach(function([start,end]){
            var startAMPM = convertAMPM(start);
            var endAMPM = convertAMPM(end);
            var slotNode = document.createElement("option");
            var textnode = document.createTextNode(startAMPM);
            slotNode.setAttribute("value",start+"-"+end);
            slotNode.setAttribute("onclick","selectAppointment(this.value)");
            slotNode.appendChild(textnode);
            select.appendChild(slotNode);
        })
        header.appendChild(headerText);
        node.appendChild(header);
        node.appendChild(select);
        console.log(outputBlock);
        outputBlock.appendChild(node);
    }
    console.log("Date: " + selectedDate);
    console.log("Service: " + selectedServiceId);
    console.log("Day: "+dayOfWeek);
    console.log("Possible Stylists: " + stylists);
    console.log(stylists)
};

function selectAppointment(selected){
    


}







function convertAMPM(date) {
    var timedata = date.split(":");
    var hours = timedata[0];
    var minutes = timedata[1];
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}

function getAppointments(){
    function getAppointmentsProcess(xhttp){
        var response = JSON.parse(xhttp.responseText);
        timeSlots.push(response);
    }
    stylists.forEach(function([id,fname,startTime,endTime]){
        getRequest("getAppointments.php?id="+id+"&date="+selectedDate+"&start=" + startTime + "&end="+endTime+"&duration="+selectedDuration,getAppointmentsProcess);
    });           

}

function getTimeSlots(startTime,endTime,duration){
    var timeSlots = []
    function getTimeSlotsProcess(xhttp){
        var response = JSON.parse(xhttp.responseText);
        timeSlots.push(response);
    };
    getRequest("getTimeSlots.php?start="+startTime+"&end="+endTime+"&duration="+duration,getTimeSlotsProcess)
    return timeSlots;
}


function getDuration(selected){
    var duration = null;
    function getDurationProcess(xhttp){
        duration = JSON.parse(xhttp.responseText);
    }
    getRequest("getDuration.php?id="+selected,getDurationProcess);
    return parseInt(duration[0]);
}

function getStylistByDate(_selectedServiceId,_selectedDay){
    var posStylists = []
    function getStylistByDateProcess(xhttp){
        var response = JSON.parse(xhttp.responseText);
        response.forEach(function([id,fname,startTime,endTime]){
            posStylists.push([id,fname,startTime,endTime]);
        });
    };
    getRequest("getStylistByDate.php?serviceId="+_selectedServiceId+"&day="+_selectedDay,getStylistByDateProcess);
    return posStylists;
};
