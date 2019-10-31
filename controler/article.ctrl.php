<?php
# Inclusion uniques des fichiers
  require_once('../model/DAO.class.php');
  require_once('../model/Article.class.php');
  require_once('../framework/view');

  $config = parse_ini_file('../config/config.ini');

# Ouverture de la base de donnée
  $dao = new DAO($config['database_path']);

# Recherche de l'article associé à la réfence "ref", contenue dans la query string
  $article = $dao->get($_GET[ref]);

# Création de la vue + ajout des paramètres.
  $vue = new View();

  $vue->assign('article',$article);

  $vue->display('article.view.php');
?>
