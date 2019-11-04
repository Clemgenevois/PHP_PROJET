<?php
// Inclusion du framework
include_once("../framework/view.class.php");

// Inclusion du modèle
include_once("../model/DAO.class.php");

// Creation de l'unique objet DAO
$dao = new DAO();

if (isset($_GET['id']) && ( $_GET['id'] <= 4 && $_GET['id'] >= 1)) {
  $categorie = $_GET['id'];
  $articles = $dao->getArtCat($categorie);
  $cat = $dao->getCat($categorie);
} else {
  $articles = $dao->getArtCat(1);
  $cat = $dao->getCat(1);
}

// Construction de la vue
////////////////////////////////////////////////////////////////////////////
$view = new View();
// Les articles
$view->assign('articles',$articles);

// La categorie
$view->assign('categorie',$cat);

// Charge la vue
$view->display("categories.view.php")
?>
