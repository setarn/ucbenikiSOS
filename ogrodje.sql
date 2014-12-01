
-- Table: U�benik
CREATE TABLE U�benik ( 
    ID_ucbenika      PRIMARY KEY,
    Naslov      TEXT,
    Avtor       TEXT 
);


-- Table: Uporabnik
CREATE TABLE Uporabnik ( 
    ID_uporabnika              PRIMARY KEY,
    Kraj               TEXT    NOT NULL,
    Ime                CHAR,
    Telefonska�tevilka NUMERIC UNIQUE 
);


-- Table: Izvod
CREATE TABLE Izvod ( 
    ID_ucbenika   INTEGER  REFERENCES U�benik ( ID_ucbenika ) MATCH FULL,
    ID_uporabnika INTEGER  REFERENCES Uporabnik ( ID_uporabnika ) MATCH FULL,
    Cena          INTEGER  NOT NULL,
    Opis          TEXT,
    DatumObjave   DATETIME NOT NULL 
);

