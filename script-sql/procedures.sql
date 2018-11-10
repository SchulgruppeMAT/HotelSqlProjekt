--fertiges Procedure zum berechnen des Tages ob er frei ist
USE Hotel;

CREATE DEFINER=`root`@`localhost` 
PROCEDURE `HowManyFreeRooms`(IN `thisday` DATETIME) 
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
 SELECT COUNT(*) AS Anzahl_Freier_Zimmer 
 FROM Hotel 
 INNER JOIN Zimmer ON Hotel.HotelNr = Zimmer.ZimmerNr 
 INNER JOIN Posietion ON Zimmer.ZimmerNr = Posietion.PosietionNr 
 WHERE thisday NOT BETWEEN Posietion.Anreise AND Posietion.Abreise
 GROUP BY Hotel


--wird noch bearbeitet

GO
/*
CREATE PROCEDURE
FreeRooms @anreise

GO
*/
CREATE PROCEDURE
YourBooking @buchungsNr INT, @kundenNr int
AS
SELECT * FROM Position WHERE BuchungsNr = @buchungsNr AND KundenNr = @KundenNr

GO
/*
CREATE PROCEDURE
AllBookings @kundenNr int
AS
SELECT  FROM Buchung WHERE 
*/

CREATE PROCEDURE
AllRooms
AS
SELECT Hotel, COUNT(ZimmerNr) AS Zimmeranzahl
FROM Hotel INNER JOIN Zimmer 
ON Hotel.HotelNr = Hotel.ZimmerNr
GROUP BY Hotel

GO

CREATE PROCEDURE
AllWorker
AS
SELECT Hotel, COUNT(MitarbeiterNr) AS Mitarbeiteranzahl
FROM Hotel INNER JOIN Mitarbeiter
ON Hotel.HotelNr = Hotel.Mitarbeiter
GROUP BY Hotel