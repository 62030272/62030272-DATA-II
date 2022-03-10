DELIMITER $$
DROP PROCEDURE IF EXISTS GetCustomerLevel $$

CREATE PROCEDURE GetCustomerLevel
(IN p_customerNumber INT , OUT customerLevel VARCHAR(20))

BEGIN

    DECLARE CL DOUBLE;

    SELECT creditLimit INTO CL
    FROM Customers
    WHERE customerNumber = p_customerNumber;

    IF CL > 50000 THEN
        set customerLevel = 'PLATINUM';
    ELSEIF (CL >= 10000 and CL <= 50000) THEN
        set customerLevel = 'GOLD';
    ELSEIF (CL < 10000) THEN
        set customerLevel = 'SILVER';
    END IF;

END $$

DELIMITER ;