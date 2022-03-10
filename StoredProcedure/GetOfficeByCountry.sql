DELIMITER $$
DROP PROCEDURE IF EXISTS GetOfficeByCountry $$

CREATE PROCEDURE GetOfficeByCountry
(IN CountryName VARCHAR(255))
BEGIN

    SELECT * FROM Offices WHERE country = CountryName;

END $$

DELIMITER ;