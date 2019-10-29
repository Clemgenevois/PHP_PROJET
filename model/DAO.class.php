<?php
require_once("../model/Categorie.class.php");
require_once("../model/Article.class.php");

// Le Data Access Object
// Il représente la base de donnée
class DAO {
  // L'objet local PDO de la base de donnée
  private $db;
  // Le type, le chemin et le nom de la base de donnée
  private $database;

  // Constructeur chargé d'ouvrir la BD
  function __construct() {
    $database = 'sqlite:../data/citrouille.db';
      try {
      $this->db = new PDO($database);
         } catch (PDOException $e){
           die("erreur de connexion:".$e->getMessage()); }
  }
  // Accès à tous les articles
  // Retourne une table d'objets de type article
  function getAllArt() : array {
    $req = "SELECT * FROM article" ;
    $sth=$this->db->query($req);
    $tabresult=$sth->fetchAll(PDO::FETCH_CLASS,'Article');
    return $tabresult;
  }

  // Accès à toutes les catégories
  // Retourne une table d'objets de type Categorie
  function getAllCat() : array {
    $req = "SELECT * FROM categorie" ;
    $sth=$this->db->query($req);
    $tabresult=$sth->fetchAll(PDO::FETCH_CLASS,'Categorie');
    return $tabresult;
  }

  // Accès aux n premiers articles
  // Cette méthode retourne un tableau contenant les n permier articles de
  // la base sous la forme d'objets de la classe Article.
  function firstN(int $n) : array {
      $req = "SELECT * FROM article LIMIT $n" ;
      $sth=$this->db->query($req);
      $tabresult=$sth->fetchAll(PDO::FETCH_CLASS,'Article');
      return $tabresult;
  }

  // Acces au n articles à partir de la reférence $ref
  // Cette méthode retourne un tableau contenant n  articles de
  // la base sous la forme d'objets de la classe Article.
  function getN(int $ref,int $n) : array {
    $req = "SELECT * FROM article WHERE ref>=$ref LIMIT $n" ;
    $sth=$this->db->query($req);
    $tabresult=$sth->fetchAll(PDO::FETCH_CLASS,'Article');
    return $tabresult;
  }

  // Acces à la référence qui suit la référence $ref dans l'ordre des références
  // Retourne -1 si $ref est la dernière référence
  function next(int $ref) : int {
    $req = "SELECT * FROM article WHERE ref>$ref ORDER BY ref LIMIT 1" ;
    $sth=$this->db->query($req);
    $tabresult=$sth->fetchAll(PDO::FETCH_CLASS,'Article');
    if (empty($tabresult)) {
      return -1;
    }
    return end($tabresult)->getRef();
  }

  // Acces aux n articles qui précèdent de $n la référence $ref dans l'ordre des références
  // Retourne -1 si $ref est la première référence
  function prevN(int $ref,int $n): int {
    $req = "SELECT ref FROM article WHERE ref<$ref ORDER BY ref DESC LIMIT $n" ;
    $sth=$this->db->query($req);
    $result=$sth->fetchAll(PDO::FETCH_CLASS,'Article');
    if (empty($result)) {
      return -1;
    }
    return end($result)->getRef();
  }
}

?>
