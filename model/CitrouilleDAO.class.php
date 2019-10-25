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

  function get(int $ref): Article {
    #Execution de la requête et récupération du résultat
    $sqlAnswer = $this->db->query('select * from Article where ref='. $ref);

    $res = $sqlAnswer->fetchAll(DAO::FETCH_CLASS,'Article');

    if ($res[0]==NULL) {

      #Contrôle d'erreur :
      echo '/!\ --- Aucune article trouvée';
    }
    else {
      return $res[0];
    }

  }
}
?>
