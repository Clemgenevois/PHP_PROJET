<?php
// Inclusion du framework
include_once("../framework/view.class.php");

// Inclusion du modèle
include_once("../model/DAO.class.php");

// Creation de l'unique objet DAO
$config = parse_ini_file('../config/config.ini');

$dao = new DAO($config['database_path']);

if (isset($_GET['id']) && ( $_GET['id'] <= 4 && $_GET['id'] >= 1)) {
  $categorie = $_GET['id'];
  $articles = $dao->getArticlesCat($categorie);
  $cat = $dao->getCategorie($categorie);
} else {
  $articles = $dao->getArticlesCat(1);
  $cat = $dao->getCategorie(1);
}

// Construction de la vue
////////////////////////////////////////////////////////////////////////////
$view = new View();
// Les articles
$view->assign('articles',$articles);

// La categorie
$view->assign('categorie',$cat);

// Le chemain vers les images
$view->assign('images_path',$config['images_path']);

// Charge la vue
$view->display("categories.view.php")
?>
