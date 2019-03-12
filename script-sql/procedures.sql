CREATE DEFINER=`root`@`localhost` 
PROCEDURE `HowManyFreeRooms`(IN `thisday` DATETIME) 
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
 SELECT COUNT(*) AS Anzahl_Freier_Zimmer 
 FROM Hotel 
 INNER JOIN Zimmer ON Hotel.HotelNr = Zimmer.ZimmerNr 
 INNER JOIN Posietion ON Zimmer.ZimmerNr = Posietion.PosietionNr 
 WHERE thisday NOT BETWEEN Posietion.Anreise AND Posietion.Abreise
 GROUP BY Hotel;


CREATE DEFINER=`root`@`localhost`
PROCEDURE `NewBookings`(IN `kundenNr` INT(255), IN `mitarbeiterNr` INT(255), IN `zimmerNr` INT(255), IN `dateIn` DATETIME, IN `dateOut` DATETIME)
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
INSERT INTO buchung (KundenNr, MitarbeiterNr) VALUES (kundenNr, mitarbeiterNr);
INSERT INTO posietion (BuchungNr, ZimmerNr, Anreise, Abreise) VALUES (LAST_INSERT_ID(), zimmerNr, dateIn, dateOut);

CREATE DEFINER=`root`@`localhost` 
PROCEDURE `YourBookings`(IN `kundenNr` INT(255))
 NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
 SELECT buchung.BuchungNr, buchung.KundenNr, zimmer.ZimmerNr, Hotel.Hotel, posietion.Anreise, posietion.Abreise, kategorie.Kategorie 
 FROM Zimmer 
 INNER JOIN posietion ON Zimmer.ZimmerNr = posietion.ZimmerNr 
 INNER JOIN Hotel ON zimmer.ZimmerNr = hotel.HotelNr 
 INNER JOIN Buchung ON posietion.BuchungNr = buchung.BuchungNr  
 INNER JOIN kategorie ON zimmer.KategorieNr = kategorie.KategorieNr 
 WHERE Buchung.KundenNr = kundenNr;

CREATE DEFINER = `root`@`localhost`
PROCEDURE `AllRooms`()
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
SELECT COUNT(*) AS Zimmeranzahl
FROM Hotel INNER JOIN Zimmer ON Hotel.HotelNr = Zimmer.HotelNr;

CREATE DEFINER=`root`@`localhost`
PROCEDURE `AllWorker`()
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
SELECT mitarbeiter.Vorname, mitarbeiter.Nachname
FROM Mitarbeiter;

CREATE PROCEDURE
AllWorker
AS
SELECT Hotel, COUNT(MitarbeiterNr) AS Mitarbeiteranzahl
FROM Hotel INNER JOIN Mitarbeiter
ON Hotel.HotelNr = Hotel.Mitarbeiter
GROUP BY Hotel;

CREATE DEFINER=`root`@`localhost`
PROCEDURE `InsertLoginData`(IN `username` VARCHAR(30), IN `passwort` VARCHAR(255), IN `email` VARCHAR(255), IN `vorname` CHAR(30), IN `nachname` CHAR(30), IN `usern` CHAR(30))
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
INSERT INTO logindata (username, passwort, email) VALUES (username, passwort, email);

CREATE DEFINER=`root`@`localhost`
PROCEDURE `InsertKundenData`(IN `vorname` CHAR(30), IN `nachname` CHAR(30), IN `usern` CHAR(30))
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
INSERT INTO kunde (Vorname, Nachname, username) VALUES (vorname, nachname, usern);

CREATE DEFINER=`root`@`localhost` 
PROCEDURE `InsertPosition`(IN `zimmerNr` INT(255), IN `TagOut` DATETIME, IN `TagIn` DATETIME, IN `buchungNr` INT(255)) 
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
INSERT INTO posietion (BuchungNr, ZimmerNr, Anreise, Abreise) VALUES (buchungNr, zimmerNr, TagIn,TagOut);

CREATE DEFINER=`root`@`localhost` 
PROCEDURE `InsertBuchung`(IN `kundenNr` INT(255), IN `mitarbeiterNr` INT(255)) 
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
INSERT INTO Buchung (KundenNr, MitarbeiterNr) VALUES (kundenNr, mitarbeiterNr);

CREATE DEFINER=`root`@`localhost`
PROCEDURE `ChangePassword`(IN `Changepassword` VARCHAR(255), IN `user` VARCHAR(30))
NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER
UPDATE LoginData SET passwort = Changepassword WHERE username = user;

CREATE DEFINER=`root`@`localhost`
PROCEDURE `ChangeUsername` (IN `NewUsername` VARCHAR(30), IN `user` VARCHAR(30))
UPDATE logindata, kunde SET logindata.username = NewUsername, kunde.username = NewUsername WHERE username = user;
