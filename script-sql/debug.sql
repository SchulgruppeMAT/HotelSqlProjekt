INSERT INTO hotel (Hotel) VALUES ('Tropical Garda Hotel');

INSERT INTO kategorie (Kategorie, Preis) VALUES ("Einzelzimmer", 30);
INSERT INTO kategorie (Kategorie, Preis) VALUES ("Doppelzimmer", 45);
INSERT INTO kategorie (Kategorie, Preis) VALUES ("Familienzimmer", 60);
INSERT INTO kategorie (Kategorie, Preis) VALUES ("Apartment", 70);


INSERT INTO zimmer (HotelNr, KategorieNr, Zimmer_Beschreibung) VALUES (1, 1, "A"), (1, 1, "Mit Ausblick");
INSERT INTO zimmer (HotelNr, KategorieNr, Zimmer_Beschreibung) VALUES (1, 2, "B"), (1, 2, "Mit Ausblick");
INSERT INTO zimmer (HotelNr, KategorieNr, Zimmer_Beschreibung) VALUES (1, 3, "C"), (1, 3, "Mit Ausblick");
INSERT INTO zimmer (HotelNr, KategorieNr, Zimmer_Beschreibung) VALUES (1, 4, "D"), (1, 4, "Mit Ausblick");


INSERT INTO mitarbeiter (Vorname, Nachname) VALUES ('Fritz', 'Schmitz');
INSERT INTO mitarbeiter (Vorname, Nachname) VALUES ('Sandra', 'Wagner');
INSERT INTO mitarbeiter (Vorname, Nachname) VALUES ('Simon', 'Kohl');


INSERT INTO buchung (KundenNr, MitarbeiterNr) VALUES (1, 3);
INSERT INTO buchung (KundenNr, MitarbeiterNr) VALUES (2, 2);


INSERT INTO posietion (BuchungNr, ZimmerNr, Anreise, Abreise) VALUES (1, 3, '2001-04-27 10:20:00', '2001-05-02 16:30:00');
INSERT INTO posietion (BuchungNr, ZimmerNr, Anreise, Abreise) VALUES (2, 4, '2001-08-20 10:45:00', '2001-08-27 18:30:00');