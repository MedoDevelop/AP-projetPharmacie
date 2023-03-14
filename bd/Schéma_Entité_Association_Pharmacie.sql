CREATE DATABASE IF NOT EXISTS pharmacie;
USE pharmacie;

CREATE TABLE MUTUELLE(
   idMutuelle VARCHAR(50) ,
   nom VARCHAR(50) ,
   mail VARCHAR(50) ,
   tel VARCHAR(50) ,
   PRIMARY KEY(idMutuelle)
);

CREATE TABLE MEDECIN(
   idMedecin VARCHAR(50) ,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   tel VARCHAR(50) ,
   PRIMARY KEY(idMedecin)
);

CREATE TABLE FORME(
   idForme VARCHAR(50) ,
   libelle VARCHAR(50) ,
   PRIMARY KEY(idForme)
);

CREATE TABLE CLIENT(
   idClient VARCHAR(50) ,
   numeroSecurite INT NOT NULL,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   mail VARCHAR(50) ,
   tel VARCHAR(50) ,
   adresseRue VARCHAR(50) ,
   adresseVille VARCHAR(50) ,
   adresseCP INT,
   dateNaissance DATE,
   idMutuelle VARCHAR(50)  NOT NULL,
   PRIMARY KEY(idClient),
   FOREIGN KEY(idMutuelle) REFERENCES MUTUELLE(idMutuelle)
);

CREATE TABLE ORDONNANCE(
   idOrdo VARCHAR(50) ,
   numMois INT,
   libPathologie VARCHAR(50) ,
   duree DECIMAL(15,2)  ,
   active BOOLEAN,
   dateEmission DATE,
   idClient VARCHAR(50)  NOT NULL,
   idMedecin VARCHAR(50)  NOT NULL,
   PRIMARY KEY(idOrdo, numMois),
   FOREIGN KEY(idClient) REFERENCES CLIENT(idClient),
   FOREIGN KEY(idMedecin) REFERENCES MEDECIN(idMedecin)
);

CREATE TABLE POSOLOGIE(
   idPoso VARCHAR(50) ,
   libelle VARCHAR(50) ,
   quantiteJour INT,
   idForme VARCHAR(50)  NOT NULL,
   PRIMARY KEY(idPoso),
   FOREIGN KEY(idForme) REFERENCES FORME(idForme)
);

CREATE TABLE MEDICAMENT(
   idPoso VARCHAR(50) ,
   idMedoc VARCHAR(50) ,
   libelle VARCHAR(50) ,
   stock INT,
   PRIMARY KEY(idPoso, idMedoc),
   FOREIGN KEY(idPoso) REFERENCES POSOLOGIE(idPoso)
);

CREATE TABLE AVOIR(
   idOrdo VARCHAR(50) ,
   numMois INT,
   idPoso VARCHAR(50) ,
   idMedoc VARCHAR(50) ,
   nbrBoites INT,
   remis BOOLEAN,
   PRIMARY KEY(idOrdo, numMois, idPoso, idMedoc),
   FOREIGN KEY(idOrdo, numMois) REFERENCES ORDONNANCE(idOrdo, numMois),
   FOREIGN KEY(idPoso, idMedoc) REFERENCES MEDICAMENT(idPoso, idMedoc)
);

INSERT INTO FORME VALUES ('1','Comprimés'),('2','Gélule'),('3','Effervescent');

INSERT INTO MUTUELLE VALUES ('1','MGPA','mgpa@mgpa.com','+596596393344'),('2','MAAF','maaf@maaf.com','+596596560934');