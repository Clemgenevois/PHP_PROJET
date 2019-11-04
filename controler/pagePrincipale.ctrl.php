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
/*
// Note la référence du premier et dernier article affiché
$firstRef = $articles[0]->getRef();
$lastRef = end($articles)->getRef();

// Calcule la référence qui suit le dernier article
$nextRef = $dao->getNextRef($lastRef);
// Si c'est la fin: reste sur le même article
if ($nextRef == -1) {
  $nextRef = $firstRef;
}
// Passe le résultat à la vue
$view->assign('nextRef',$nextRef);

// Calcule la référence qui précède de 10 l'article courant
$prevRef = $dao->getPreviousNbRef($firstRef,10);
// Si c'est la fin: reste sur le même article
if ($prevRef == -1) {
  $prevRef = $firstRef;
}

// Passe le résultat à la vue
$view->assign('prevRef',$prevRef);
*/
// Charge la vue

$view->display("principale.view.php")
?>
