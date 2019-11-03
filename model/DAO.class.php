<?php
require_once("../model/Article.class.php");

class CitrouilleDAO {
  private $db;
  function __construct(string $path) {;
    $database = $path . 'citrouille.db';
      try {
        $this->db = new PDO($database);
         }
      catch (PDOException $e){
        die("erreur de connexion:".$e->getMessage());
      }
  }

  function getArticle(int $ref): Article {
    #Execution de la requête
    $sqlAnswer = $this->db->query('select * from Article where ref='. $ref);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(DAO::FETCH_CLASS,'Article');

    if ($res[0]==NULL) {
      #Contrôle d'erreur :
      echo '/!\ --- Aucune article trouvée';
    }
    else {
      return $res[0];
    }
  }

  function getFirstArticles(int $nb): array {
    #Execution de la requête
    $sqlAnswer = $this->db->query('select * from Article limit '. $nb);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(DAO::FETCH_CLASS,'Article');

    if ($res[0]==NULL) {
      #Contrôle d'erreur :
      echo '/!\ --- Aucune article trouvée';
    }

    return $res;
  }

  function getArticles(int $ref,int $nb): array {
    #Execution de la requête
    $sqlAnswer = $this->db->query('select * from Article where ref>='. $ref . ' limit '. $nb);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(DAO::FETCH_CLASS,'Article');

    if ($res[0]==NULL) {
      #Contrôle d'erreur :
      echo '/!\ --- Aucune article trouvée';
    }

    return $res;
  }

  function nextArticle(int $ref): int {
    #Execution de la requête
    $sqlAnswer = $this->db->query('select * from Article where ref>'. $ref .' limit 1');

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(DAO::FETCH_CLASS,'Article');

    if ($res[0]==NULL) {
      #Contrôle d'erreur :
      echo '/!\ --- Aucune article trouvée';
    }

    return $res[0];
  }
}
?>
