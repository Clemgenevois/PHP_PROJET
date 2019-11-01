<?php
// Inclusion du framework
include_once("../framework/view.class.php");

// Inclusion du modèle
include_once("../model/DAO.class.php");

// Creation de l'unique objet DAO
$dao = new DAO();

if (isset($_GET['ref'])) {
  // Pas de catégorie
  $categorie = 0;
  $articles = $dao->getN($_GET['ref'],12);
} else {
  // Pas de catégorie
  $categorie = 0;
<<<<<<< HEAD
  $articles = $dao->firstN(10);
}
=======
  $articles = $dao->firstN(12);
}

  //test pour verifier que la variable article soit exact
  // foreach($articles as $res){
  //   var_dump($res->getRef());
  //      }

>>>>>>> master
// Construction de la vue
////////////////////////////////////////////////////////////////////////////
$view = new View();

// Passe les paramètres à la vue

// Les articles
<<<<<<< HEAD
$view->assign('articliees',$articles);
=======
$view->assign('articles',$articles);
>>>>>>> master
// La catégorie
$view->assign('categorie',$categorie);

// Note la référence du premier et dernier article affiché
$firstRef = $articles[0]->getRef();
$lastRef = end($articles)->getRef();

// Calcule la référence qui suit le dernier article
$nextRef = $dao->next($lastRef);
// Si c'est la fin: reste sur le même article
if ($nextRef == -1) {
  $nextRef = $firstRef;
}
// Passe le résultat à la vue
$view->assign('nextRef',$nextRef);

// Calcule la référence qui précède de 10 l'article courant
$prevRef = $dao->prevN($firstRef,10);
// Si c'est la fin: reste sur le même article
if ($prevRef == -1) {
  $prevRef = $firstRef;
}
// Passe le résultat à la vue
$view->assign('prevRef',$prevRef);

//$view->dump();

// Charge la vue
<<<<<<< HEAD
$view->display("articles.view.php")
=======
$view->display("principale.view.php")
>>>>>>> master
?>
