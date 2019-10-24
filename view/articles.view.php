<html>
<head>
<title>Citrouille</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../view/style.css">
</head>

<body>
<header>
  <div class="head">
    <h1>Pumpkin cute</h1>
    <input class="burger" type="checkbox">
    <nav>
      <input type="search" placeholder="Rechercher...">
      <a href="#"><i class="material-icons"></i>Qui sommes nous ?</a>
      <a href="#"><i class="material-icons"></i>Ou nous trouver</a>
    </nav>
  </div>
  <p><img src="../view/citrouilles_data/banderole_citrouille.jpg"/></p>
</header>

<?php
  foreach($articles as $res){   ?>
    <a href="article.ctrl.php?id=<?php echo $res->getRef()?>">
    <article>
  <h2> <?php echo $res->getLibelle() ?></h2>
  <?php  $img = "../view/citrouilles_data/".$res->getImage();?>
         <img src="<?= $img ?>" alt="citrouille"/>
         <p> <?= $res->getPrix() ?> €</p>
   </article>
   </a>
  <?php } ?>

<footer>
</p>Site fictif, proposant de merveilleuses citrouilles</p>
</footer>
</body>
</html>
