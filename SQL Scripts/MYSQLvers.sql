CREATE DATABASE Hotel;
USE Hotel;
CREATE TABLE Hotel(
HotelNr INT NOT NULL,
Hotel CHAR(20),
PRIMARY KEY (HotelNr)
);

CREATE TABLE Art(
ArtNr INT NOT NULL,
Art CHAR,
PRIMARY KEY (ArtNr)
);

CREATE TABLE Kategorie(
KategorieNr INT,
Kategorie CHAR,
Preis INT,
PRIMARY KEY (KategorieNr)
);

CREATE TABLE Kunde(
KundenNr INT,
Vorname CHAR,
Nachname CHAR,
PRIMARY KEY (KundenNr)
);

CREATE TABLE Mitarbeiter(
MitarbeiterNr INT,
Vorname CHAR,
Nachname CHAR,
PRIMARY KEY (MitarbeiterNr)
);


CREATE TABLE Zimmer(
ZimmerNr INT,
HotelNr INT,
KategorieNr INT,
Zimmer_Beschreibung CHAR,
PRIMARY KEY (ZimmerNr),
FOREIGN KEY (HotelNr) REFERENCES Hotel(HotelNr),
FOREIGN KEY (KategorieNr) REFERENCES Kategorie(KategorieNr)
);

CREATE TABLE Buchung(
BuchungNr INT,
KundenNr INT,
MitarbeiterNr INT,
PRIMARY KEY (BuchungNr),
FOREIGN KEY (KundenNr) REFERENCES Kunde(KundenNr),
FOREIGN KEY (MitarbeiterNr) REFERENCES Mitarbeiter(MitarbeiterNr)
);

CREATE TABLE Posietion(
PositionNr INT,
BuchungNr INT,
ZimmerNr INT,
Anreise INT,
Abreise INT,
PRIMARY KEY (PositionNr),
FOREIGN KEY (BuchungNr) REFERENCES Buchung(BuchungNr),
FOREIGN KEY (ZimmerNr) REFERENCES Zimmer(ZimmerNr)
);