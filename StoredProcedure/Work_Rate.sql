DELIMITER $$
DROP PROCEDURE IF EXISTS CalculateWorkingRate $$

CREATE PROCEDURE CalculateWorkingRate
(IN P_ID INT , IN E_ID INT , IN WorkHours INT)
BEGIN

    DECLARE WorkRate FLOAT;

    SELECT Rate INTO WorkRate FROM project WHERE proj_id = P_ID;

    UPDATE working SET work_rate = WorkRate * WorkHours
    WHERE proj_id = P_ID and emp_id = E_ID;
    
END $$

DELIMITER ;