SELECT staff.first_name, staff.last_name, staff_schedule.start_time, staff_schedule.end_time
FROM staff, staff_schedule
WHERE staff.id = staff_schedule.staff_id 
AND staff_schedule.start_time <= "11:00:00"
AND staff_schedule.end_time >= "12:00:00"
AND staff_schedule.day = "MON";
;