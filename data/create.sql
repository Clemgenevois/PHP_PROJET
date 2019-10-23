CREATE TABLE article (
	ref INTEGER PRIMARY KEY,
	libelle TEXT,
	descrip TEXT,
	caracteristiques TEXT,
	prix REAL,
	image TEXT,
	FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE categorie (
	id INTEGER PRIMARY KEY,
	nom TEXT,
);
