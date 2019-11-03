<?php
  //Inclusions des fichiers
  require_once('../model/DAO.class.php');
  require_once('../model/Article.class.php');
  require_once('../framework/view');

  $config = parse_ini_file('../config/config.ini');

  // Ouverture de la base de donnée
  $producteurs = new DAO($config['database_path']);

  // Récupération de l'objet associé à la référence "ref" contenue dans la query string
  $citrouille = $producteurs->get($_GET[ref]);

  // Création de la vue
  $vue = new View();

  // Passage d'un unique paramètre (un objet de la classe Article)
  $vue->assign('article',$citrouille);

  // Affichage de la vue
  $vue->display('article.view.php');
?>
