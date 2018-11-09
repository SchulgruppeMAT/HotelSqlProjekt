--wird noch bearbeitet

CREATE PROCEDURE
FreeRooms @thisday DATE
AS
SELECT Hotel, COUNT(ZimmerNr) AS Freizimmer

--wird noch bearbeitet

GO

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