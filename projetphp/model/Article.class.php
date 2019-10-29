<?php

    // Un article en vente
    class Article {
        private $ref;       // Référence unique
        private $libelle;   // Nom de l'article
        private $categorie; // identifiant de catégorie
        private $provenance;// provenance du produit
        private $compInfos; // complement d'informations
        private $prix;      // le prix
        private $image;     // Nom du fichier image

        // Getters
        function getRef() : int {
          return $this->ref;
        }

        function getLibelle() : string {
          return $this->libelle;
        }

        function getCategorie() : string {
          return $this->categorie;
        }

        function getProvenance() : string {
          return $this->provenance;
        }

        function getCompInfos() : string {
          return $this->compInfos;
        }

        function getPrix() : float {
          return $this->prix;
        }

        function getImage() : string {
          return $this->image;
        }
}
?>
