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

GO

CREATE DEFINER=`root`@`localhost`
PROCEDURE `NewBookings`
--wird noch bearbeitet

GO
-- shows bookings for the sopecific KundenNr
CREATE DEFINER=`root`@`localhost` 
PROCEDURE `YourBookings`(IN `kundenNr` INT(255))
 NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
 SELECT buchung.BuchungNr, buchung.KundenNr, zimmer.ZimmerNr, Hotel.Hotel, posietion.Anreise, posietion.Abreise, kategorie.Kategorie 
 FROM Zimmer 
 INNER JOIN posietion ON Zimmer.ZimmerNr = posietion.ZimmerNr 
 INNER JOIN Hotel ON zimmer.ZimmerNr = hotel.HotelNr 
 INNER JOIN Buchung ON posietion.BuchungNr = buchung.BuchungNr  
 INNER JOIN kategorie ON zimmer.KategorieNr = kategorie.KategorieNr 
 WHERE Buchung.KundenNr = kundenNr


CREATE PROCEDURE
YourBooking @buchungsNr INT, @kundenNr int
AS
SELECT buchung.BuchungNr, buchung.KundenNr, zimmer.ZimmerNr, Hotel.Hotel, posietion.Anreise, posietion.Abreise, kategorie.Kategorie
  FROM Zimmer
  INNER JOIN posietion ON Zimmer.ZimmerNr = posietion.ZimmerNr 
  INNER JOIN Hotel ON zimmer.ZimmerNr = hotel.HotelNr 
  INNER JOIN Buchung ON posietion.BuchungNr = buchung.BuchungNr  
  INNER JOIN kategorie ON zimmer.KategorieNr = kategorie.KategorieNr 
  WHERE Buchung.KundenNr = kundenNr

--
-- shows all rooms
CREATE DEFINER = `root`@`localhost`
PROCEDURE `AllRooms`()
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
SELECT COUNT(*) AS Zimmeranzahl
FROM Hotel INNER JOIN Zimmer ON Hotel.HotelNr = Zimmer.HotelNr

--
CREATE PROCEDURE
AllRooms
AS
SELECT Hotel, COUNT(ZimmerNr) AS Zimmeranzahl
FROM Hotel INNER JOIN Zimmer 
ON Hotel.HotelNr = Hotel.ZimmerNr

--

-- shows all workers
CREATE DEFINER=`root`@`localhost`
PROCEDURE `AllWorker`()
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
SELECT mitarbeiter.Vorname, mitarbeiter.Nachname
FROM Mitarbeiter

--
CREATE PROCEDURE
AllWorker
AS
SELECT Hotel, COUNT(MitarbeiterNr) AS Mitarbeiteranzahl
FROM Hotel INNER JOIN Mitarbeiter
ON Hotel.HotelNr = Hotel.Mitarbeiter
GROUP BY Hotel
--
