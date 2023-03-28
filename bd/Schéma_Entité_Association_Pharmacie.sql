CREATE DATABASE IF NOT EXISTS pharmacie;
USE pharmacie;

CREATE TABLE MUTUELLE(
   idMutuelle INT,
   nom VARCHAR(50) ,
   PRIMARY KEY(idMutuelle)
);

CREATE TABLE MEDECIN(
   idMedecin INT,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   tel VARCHAR(50) ,
   PRIMARY KEY(idMedecin)
);

CREATE TABLE FORME(
   idForme INT,
   libelle VARCHAR(300) ,
   PRIMARY KEY(idForme)
);

CREATE TABLE CLIENT(
   idClient INT,
   numeroSecurite INT NOT NULL,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   tel VARCHAR(50) ,
   adresseRue VARCHAR(50) ,
   adresseVille VARCHAR(50) ,
   adresseCP INT,
   dateNaissance DATE,
   idMutuelle INT NOT NULL,
   PRIMARY KEY(idClient),
   FOREIGN KEY(idMutuelle) REFERENCES MUTUELLE(idMutuelle)
);

CREATE TABLE ORDONNANCE(
   idOrdo INT,
   numMois INT,
   libPathologie VARCHAR(50) ,
   duree DECIMAL(15,2)  ,
   active BOOLEAN,
   dateEmission DATE,
   idClient INT NOT NULL,
   idMedecin INT NOT NULL,
   PRIMARY KEY(idOrdo, numMois),
   FOREIGN KEY(idClient) REFERENCES CLIENT(idClient),
   FOREIGN KEY(idMedecin) REFERENCES MEDECIN(idMedecin)
);

CREATE TABLE MEDICAMENT(
   idMedoc INT,
   libelle VARCHAR(50) ,
   qteStock INT,
   idForme INT NOT NULL,
   PRIMARY KEY(idMedoc),
   FOREIGN KEY(idForme) REFERENCES FORME(idForme)
);

CREATE TABLE AVOIR(
   idOrdo INT,
   numMois INT,
   idMedoc INT,
   nbrBoites INT,
   remis BOOLEAN,
   quantitePar24h INT,
   PRIMARY KEY(idOrdo, numMois, idMedoc),
   FOREIGN KEY(idOrdo, numMois) REFERENCES ORDONNANCE(idOrdo, numMois),
   FOREIGN KEY(idMedoc) REFERENCES MEDICAMENT(idMedoc)
);
