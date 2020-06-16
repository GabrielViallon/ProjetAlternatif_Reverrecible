CREATE TABLE user(
  mail VARCHAR(30) PRIMARY KEY,
  nom VARCHAR(25),
  prenom VARCHAR(25),
  mdp VARCHAR(25),
  gerant SMALLINT,
  dateInscription DATE DEFAULT(date('now'))
);

CREATE TABLE evenement(
  nom VARCHAR(30),
  dateEv DATE,
  description TEXT,
  gerant VARCHAR(25),
  PRIMARY KEY(nom,dateEv)
);

CREATE TABLE demandePoint(
  nomLieu VARCHAR(25),
  adresse VARCHAR(40) PRIMARY KEY,
  type VARCHAR(30),
  description TEXT,
  email VARCHAR(30)
);
