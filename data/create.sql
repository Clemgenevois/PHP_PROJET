CREATE TABLE article (
	ref INTEGER PRIMARY KEY,
	libelle TEXT,
	categorie INTEGER,
	provenance TEXT,
	compInfos TEXT,
	prix REAL,
	image TEXT,
	FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE categorie (
	id INTEGER PRIMARY KEY,
	nom TEXT
);
