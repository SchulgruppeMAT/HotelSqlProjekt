CREATE TABLE Hotel(
HotelNr INT NOT NULL,
Hotel CHAR(20),
PRIMARY KEY (HotelNr)
)
go
CREATE TABLE Art(
ArtNr INT NOT NULL,
Art CHAR,
PRIMARY KEY (ArtNr)
)
go
CREATE TABLE Zimmer(
ZimmerNr INT,
HotelNr INT,
KategorieNr INT,
Zimmer_Beschreibung CHAR,
PRIMARY KEY (ZimmerNr),
FOREIGN KEY (HotelNr) REFERENCES Hotel,
FOREIGN KEY (KategorieNr) REFERENCES Kategorie
)
go
CREATE TABLE Kategorie(
KategorieNr INT,
Kategorie CHAR,
Preis INT,
PRIMARY KEY (KategorieNr)
)
go
CREATE TABLE Kunde(
KundenNr INT,
Vorname CHAR,
Nachname CHAR,
PRIMARY KEY (KundenNr)
)
go
CREATE TABLE Mitarbeiter(
MitarbeiterNr INT,
Vorname CHAR,
Nachname CHAR,
PRIMARY KEY (MitarbeiterNr)
)
go
CREATE TABLE Buchung(
BuchungNr INT,
KundenNr INT,
MitarbeiterNr INT,
PRIMARY KEY (BuchungNr),
FOREIGN KEY (KundenNr) REFERENCES Kunde,
FOREIGN KEY (MitarbeiterNr) REFERENCES Mitarbeiter
)
CREATE TABLE Position(
PositionNr INT,
BuchungNr INT,
ZimmerNr INT,
Anreise INT,
Abreise INT,
PRIMARY KEY (PositionNr),
FOREIGN KEY (BuchungNr) REFERENCES Buchung,
FOREIGN KEY (ZimmerNr) REFERENCES Zimmer
)
