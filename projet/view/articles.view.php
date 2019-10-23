<html>
<head>
<title>Bricomachin</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<meta name="author" content="Jean-Pierre Chevallet" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>

<body>
<header>
  <h1>Bricomachin, le bricolage malin </h1>
  <p><img src="../view/design/pub.png"/></p>
</header>
<?php


///////////////////////////////////////////////////////
//   A COMPLETER
///////////////////////////////////////////////

?>

<nav>
  <!-- Bouton de retour au début de la liste -->
  <a href="?"><img src="../view/design/home.png"/></a>
  <!-- Bouton de retour à la page précédente -->
  <a href="?ref=<?= $prevRef.'&categorie='.$categorie?>">&lt; </a>
  <!-- Bouton pour passer à la page suivante -->
  <a href="?ref=<?= $nextRef.'&categorie='.$categorie?>">></a>
</nav>

<?php
  foreach($articles as $res){   ?>
    <article>
  <h2> <?php echo $res->getLibelle() ?></h2>
  <?php  $img = "http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/".$res->getImage();?>
         <img src="<?= $img ?>" />
         <p> <?= $res->getPrix() ?> $</p>
   </article>
  <?php } ?>

<footer>
</p>Site fictif, issus de données réelles du Web</p>
</footer>
</body>
</html>
