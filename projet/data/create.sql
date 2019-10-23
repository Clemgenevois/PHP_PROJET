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

use case fait
description vite fait du porjet
avec mcd fait
passage au relationnel fait
fonctionnalite : recherche par prix, par categorie
admin ajoute prod, consulte, et supprimer
2 utilisaterus admin, visiteur
20 de produits administrer par admin
donner son admin peut se connecter par lien caché
nous avons travaillé sur semi agiles puis on s'est repartis en fonctionnalités
icone qui sommes nous
ou nous trouver
