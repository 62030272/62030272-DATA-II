DELIMITER $$
DROP TRIGGER IF EXISTS SetUpperName $$
CREATE TRIGGER SetUpperName
    BEFORE INSERT ON Account
    FOR EACH ROW
BEGIN
    IF (New.ACC_Name IS NOT NULL) THEN
        SET New.ACC_Name = UPPER(New.ACC_Name);
        SET New.ACC_Surname = UPPER(New.ACC_Surname);
    END IF;

END $$
DELIMITER ;