<?php
  require_once('../model/CitrouilleDAO.class.php');
  require_once('../model/Article.class.php');

  $config = parse_ini_file('../config/config.ini');

  $producteurs = new CitrouilleDAO($config['database_path']);
  $citrouille = $producteurs->get($_GET[ref]);

  $vue = new View('Article.view.php');
  $vue->article = $citrouille;

  $vue->show();
?>
