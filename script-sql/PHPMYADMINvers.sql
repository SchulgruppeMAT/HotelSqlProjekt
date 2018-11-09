CREATE DATABASE Hotel;

USE Hotel;

CREATE TABLE Hotel(
HotelNr INT NOT NULL AUTO_INCREMENT,
Hotel CHAR(20),
PRIMARY KEY (HotelNr)
);

CREATE TABLE Art(
ArtNr INT NOT NULL AUTO_INCREMENT,
Art CHAR,
PRIMARY KEY (ArtNr)
);

CREATE TABLE Kategorie(
KategorieNr INT AUTO_INCREMENT,
Kategorie CHAR,
Preis INT,
PRIMARY KEY (KategorieNr)
);

CREATE TABLE Kunde(
KundenNr INT AUTO_INCREMENT,
Vorname CHAR,
Nachname CHAR,
PRIMARY KEY (KundenNr)
);

CREATE TABLE Mitarbeiter(
MitarbeiterNr INT AUTO_INCREMENT,
Vorname CHAR,
Nachname CHAR,
PRIMARY KEY (MitarbeiterNr)
);


CREATE TABLE Zimmer(
ZimmerNr INT AUTO_INCREMENT,
HotelNr INT,
KategorieNr INT,
Zimmer_Beschreibung CHAR,
PRIMARY KEY (ZimmerNr),
FOREIGN KEY (HotelNr) REFERENCES Hotel(HotelNr),
FOREIGN KEY (KategorieNr) REFERENCES Kategorie(KategorieNr)
);

CREATE TABLE Buchung(
BuchungNr INT AUTO_INCREMENT,
KundenNr INT,
MitarbeiterNr INT,
PRIMARY KEY (BuchungNr),
FOREIGN KEY (KundenNr) REFERENCES Kunde(KundenNr),
FOREIGN KEY (MitarbeiterNr) REFERENCES Mitarbeiter(MitarbeiterNr)
);

CREATE TABLE Position(
PositionNr INT AUTO_INCREMENT,
BuchungNr INT,
ZimmerNr INT,
Anreise DATETIME,
Abreise DATETIME,
PRIMARY KEY (PositionNr),
FOREIGN KEY (BuchungNr) REFERENCES Buchung(BuchungNr),
FOREIGN KEY (ZimmerNr) REFERENCES Zimmer(ZimmerNr)
);

CREATE TABLE LoginData
(
    username VARCHAR(30) not null,
    passwort VARCHAR(255) not null,
    fullname  VARCHAR(30) not null,
    email VARCHAR(255) not null
);
