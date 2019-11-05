<?php
// Inclusion du framework
include_once("../framework/view.class.php");

// Inclusion du modèle
include_once("../model/DAO.class.php");

$config = parse_ini_file('../config/config.ini');

// Creation de l'unique objet DAO
$dao = new DAO($config['database_path']);

$articles = $dao->getAllArticles();

// Construction de la vue
////////////////////////////////////////////////////////////////////////////
$view = new View();
// Les articles
$view->assign('articles',$articles);

// Le chemain vers les images
$view->assign('images_path',$config['images_path']);

// Charge la vue
$view->display("catalogue.view.php")
?>
