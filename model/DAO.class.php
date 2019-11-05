<?php
# Inclusion du fichier contenant la classe Article
require_once("../model/Article.class.php");

# Déclaration d'une constante
const NO_REF = -1;

class DAO {

// Artibut
  private $db;

// Construction
  function __construct(string $path) {
    $database = 'sqlite:' . $path . 'citrouille.db';

      try {
        $this->db = new PDO($database);
         }
      catch (PDOException $e){
        die("erreur de connexion:".$e->getMessage());
      }
  }

// Méthodes
//------------------------------------------------------------------------------

  function getArticle(int $ref): Article {
    // retourne l'article de référence $ref
    # Execution de la requête.
    $sqlAnswer = $this->db->query('select * from article where ref='. $ref);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Article');
    return $res[0];
  }

//------------------------------------------------------------------------------

  function getNbArticles(int $ref,int $nb): array {
    #Execution de la requête.
    $sqlAnswer = $this->db->query('select * from article where ref>='. $ref . ' limit '. $nb);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Article');
    return $res;
  }
//------------------------------------------------------------------------------

  function getArticlesCat(int $cat): array {
    // retourne tout les articles de catégorie $cat
    #Execution de la requête.
    $sqlAnswer = $this->db->query('select * from article where categorie='. $cat);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Article');
    return $res;
  }

//------------------------------------------------------------------------------

  function getAllArticles(): array {
    #Execution de la requête.
    $sqlAnswer = $this->db->query('select * from article');

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Article');

    #Contrôle d'erreur
    if (empty($res)) {
      echo '/!\ --- Aucune article trouvée//Base de donnés vide';
    }
    return $res;
  }

//------------------------------------------------------------------------------

  function getFirstNbArticles(int $nb): array {
    #Execution de la requête.
    $sqlAnswer = $this->db->query('select * from article limit '. $nb);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Article');

    #Contrôle d'erreur :
    if (empty($res)) {
      echo '/!\ --- Aucune article trouvée//Base de donnés vide';
    }
    return $res;
  }

//------------------------------------------------------------------------------

  function getNextRef(int $ref): int {
    #Execution de la requête.
    $sqlAnswer = $this->db->query('select * from article where ref>'. $ref .' order by ref limit 1');

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Article');

    if ($res[0]==NULL) {
      return NO_REF;
    }
    else {
      return $res[0]->getRef();
    }
  }

//------------------------------------------------------------------------------

  function getPreviousNbRef(int $ref, int $nb): int {
    #Execution de la requête
    $sqlAnswer = $this->db->query('select ref from article where ref<'. $ref .' order by ref desc limit '. $nb);

    # Récupération du résultat sous forme d'un tableau d'Article.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Article');
    if (empty($res)) {
      return NO_REF;
    }
    else {
      return $res[$nb-1]->getRef();
    }
  }
}

//------------------------------------------------------------------------------

  function getCategorie(int $id): Categorie {
    // retourne la catégorie d'id $id
    # Execution de la requête
    $sqlAnswer = $this->db->query('select * from categorie where id='. $id);

    # Récupération du résultat sous forme d'un tableau de Categorie.
    $res = $sqlAnswer->fetchAll(PDO::FETCH_CLASS,'Categorie');
    return $res[0];
  }

//------------------------------------------------------------------------------
?>
