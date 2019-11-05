<?php
// Inclusion du framework
include_once("../framework/view.class.php");

// Inclusion du modèle
include_once("../model/DAO.class.php");

$config = parse_ini_file('../config/config.ini');

// Creation de l'unique objet DAO
$dao = new DAO($config['database_path']);

if (isset($_GET['ref'])) {
  // Pas de catégorie
  $categorie = 0;
  $articles = $dao->getNbArticles($_GET['ref'],12);
} else {
  // Pas de catégorie
  $categorie = 0;
  $articles = $dao->getFirstNbArticles(12);
}

// Construction de la vue
////////////////////////////////////////////////////////////////////////////
$view = new View();

// Passe les paramètres à la vue

// Les articles
$view->assign('articles',$articles);

// La catégorie
$view->assign('categorie',$categorie);

$config = parse_ini_file('../config/config.ini');

$view->assign('images_path',$config['images_path']);

// Charge la vue
$view->display("principale.view.php")
?>
