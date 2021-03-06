
-- Table: Učbenik
CREATE TABLE Učbenik ( 
    ID_ucbenika      PRIMARY KEY,
    Naslov      TEXT,
    Avtor       TEXT 
);


-- Table: Uporabnik
CREATE TABLE Uporabnik ( 
    ID_uporabnika              PRIMARY KEY,
    Kraj               TEXT    NOT NULL,
    Ime                CHAR,
    TelefonskaŠtevilka NUMERIC UNIQUE 
);


-- Table: Izvod
CREATE TABLE Izvod ( 
    ID_ucbenika   INTEGER  REFERENCES Učbenik ( ID_ucbenika ) MATCH FULL,
    ID_uporabnika INTEGER  REFERENCES Uporabnik ( ID_uporabnika ) MATCH FULL,
    Cena          INTEGER  NOT NULL,
    Opis          TEXT,
    DatumObjave   DATETIME NOT NULL 
);

