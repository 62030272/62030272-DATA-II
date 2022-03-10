DELIMITER $$
DROP PROCEDURE IF EXISTS set_counter $$

CREATE PROCEDURE set_counter
(INOUT count INT , IN inc INT)
BEGIN

    SET count = count + inc;
    
END $$

DELIMITER ;