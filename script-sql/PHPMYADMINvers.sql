CREATE DATABASE Hotel;

USE Hotel;

CREATE TABLE Hotel(
HotelNr INT NOT NULL AUTO_INCREMENT,
Hotel CHAR(20),
PRIMARY KEY (HotelNr)
);

CREATE TABLE Art(
ArtNr INT NOT NULL AUTO_INCREMENT,
Art CHAR(30),
PRIMARY KEY (ArtNr)
);

CREATE TABLE Kategorie(
KategorieNr INT AUTO_INCREMENT,
Kategorie CHAR(40),
Preis INT(20),
PRIMARY KEY (KategorieNr)
);

CREATE TABLE LoginData(
    username VARCHAR(30) not null,
    passwort VARCHAR(255) not null,
    email VARCHAR(255) not null,
    PRIMARY KEY (username)
);

CREATE TABLE Kunde(
KundenNr INT AUTO_INCREMENT,
Vorname CHAR(30),
Nachname CHAR(30),
username CHAR(30),
PRIMARY KEY (KundenNr),
FOREIGN KEY (username) REFERENCES LoginData(username)
);

CREATE TABLE Mitarbeiter(
MitarbeiterNr INT AUTO_INCREMENT,
Vorname CHAR(30),
Nachname CHAR(30),
PRIMARY KEY (MitarbeiterNr)
);


CREATE TABLE Zimmer(
ZimmerNr INT(255) AUTO_INCREMENT,
HotelNr INT(255),
KategorieNr INT(255),
Zimmer_Beschreibung CHAR(255),
PRIMARY KEY (ZimmerNr),
FOREIGN KEY (HotelNr) REFERENCES Hotel(HotelNr),
FOREIGN KEY (KategorieNr) REFERENCES Kategorie(KategorieNr)
);

CREATE TABLE Buchung(
BuchungNr INT(255) AUTO_INCREMENT,
KundenNr INT(255),
MitarbeiterNr INT(255),
PRIMARY KEY (BuchungNr),
FOREIGN KEY (KundenNr) REFERENCES Kunde(KundenNr),
FOREIGN KEY (MitarbeiterNr) REFERENCES Mitarbeiter(MitarbeiterNr)
);

CREATE TABLE Posietion(
PosietionNr INT(255) AUTO_INCREMENT,
BuchungNr INT(255),
ZimmerNr INT(255),
Anreise DATETIME,
Abreise DATETIME,
PRIMARY KEY (PosietionNr),
FOREIGN KEY (BuchungNr) REFERENCES Buchung(BuchungNr),
FOREIGN KEY (ZimmerNr) REFERENCES Zimmer(ZimmerNr)
);
