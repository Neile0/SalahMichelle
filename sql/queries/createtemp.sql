	CREATE TEMPORARY TABLE intervals(
		start_time TIME,
        end_time TIME
    );
       
    WHILE counter <= totalIntervals DO
    INSERT INTO intervals(
		start_time,
        end_time)
    VALUES(
		sTime,
        eTime);
	SET sTime = ADDTIME(sTime,time_interval);
    SET eTime = ADDTIME(sTime,time_interval);
	SET counter = counter + 1;
    END WHILE;

	SELECT * FROM intervals;
    DROP TABLE intervals;