<?php
  require_once('../model/DAO.class.php');
  require_once('../model/Article.class.php');
  require_once('../framework/view');

  $config = parse_ini_file('../config/config.ini');

  $producteurs = new DAO($config['database_path']);
  $citrouille = $producteurs->get($_GET[ref]);

  $vue = new View();
  $vue->assign('article',$citrouille);

  $vue->display('article.view.php');
?>
