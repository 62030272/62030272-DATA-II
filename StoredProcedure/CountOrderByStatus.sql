DELIMITER $$
DROP PROCEDURE IF EXISTS CountOrderByStatus $$

CREATE PROCEDURE CountOrderByStatus
(IN OrderStatus VARCHAR(50) , OUT Total INT)
BEGIN
    SELECT count(orderNumber)
    INTO Total
    FROM Orders
    WHERE status = OrderStatus;
    

END $$

DELIMITER ;