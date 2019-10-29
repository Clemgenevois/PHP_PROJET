<?php
// Inclusion du framework
include_once("../framework/view.class.php");

// Inclusion du modèle
include_once("../model/DAO.class.php");

// Creation de l'unique objet DAO
$dao = new DAO();

$articles = $dao->getAllArt();

// Construction de la vue
////////////////////////////////////////////////////////////////////////////
$view = new View();
// Les articles
$view->assign('articles',$articles);

// Charge la vue
$view->display("catalogue.view.php")
?>
