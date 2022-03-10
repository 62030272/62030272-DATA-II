DELIMITER $$
DROP TRIGGER IF EXISTS AccountTransfer $$
CREATE TRIGGER AccountTransfer
    AFTER INSERT ON Transfer
    FOR EACH ROW
BEGIN
    IF (New.Amount > 0) THEN
        UPDATE Account SET Balance = Balance - New.Amount
        WHERE ACC_No=New.ACC_No_Source;

        UPDATE Account SET Balance = Balance + New.Amount
        WHERE ACC_No=New.ACC_No_Dest;
    END IF;

END $$
DELIMITER ;