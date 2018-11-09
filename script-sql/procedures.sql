--wird noch bearbeitet
/*
CREATE PROCEDURE
FreeRooms @firstdate DATE, @seconddate DATE
AS
SELECT * FROM Position WHERE ZimmerNr NOT BETWEEN Anreise @firstdate AND @seconddate
*/
--wird noch bearbeitet

GO

CREATE PROCEDURE
YourBooking @buchungsNr INT
AS
SELECT * FROM Position WHERE BuchungsNr = @buchungsNr

GO
/*
CREATE PROCEDURE
AllBookings @kundenNr int
AS
SELECT  FROM Buchung WHERE 
*/