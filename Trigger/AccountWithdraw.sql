DELIMITER $$
DROP TRIGGER IF EXISTS AccountWithdraw $$
CREATE TRIGGER AccountWithdraw
    AFTER INSERT ON Withdraw
    FOR EACH ROW
BEGIN
    IF (New.Amount > 0) THEN
        UPDATE Account SET Balance = Balance - New.Amount
        WHERE ACC_No=New.ACC_No;
    END IF;

END $$
DELIMITER ;