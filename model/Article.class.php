<?php

    // Un article en vente
    class Article {
        private $ref;
        private $libelle;
        private $categorie;
        private $provenance;
        private $compInfos;
        private $prix;
        private $image;

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
