<html>
<head>
<title>Categorie</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<link rel="stylesheet" type="text/css" href="../view/design/styleCatalogue.css">
</head>

<body>
  <header>
    <h1>Pumpkin cute</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="topnav" id="myTopnav">
      <a href="../controler/affichePagePrincipale.ctrl.php">Home</a>
      <a href="#catalogue">Voir Tout</a>
      <a href="../controler/pageCategorie.ctrl.php" class="active">Categorie</a>
      <a href="../controler/pageContact.ctrl.php">Contact</a>
      <a href="../controler/pageAbout.ctrl.php">About</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </header>
  <h2> Articles de la categorie : <?= $categorie->getNom() ?></h2>
  <?php
    foreach($articles as $res){   ?>
      <a href="pageArticle.ctrl.php?ref=<?=$res->getRef()?>">
      <article>
    <h2> <?= $res->getLibelle() ?></h>
           <img src="<?=$images_path . $res->getImage()?>" alt="citrouille"/>
           <p> <?= $res->getPrix() ?> €</p>
     </article>
     </a>
    <?php } ?>
    <footer>
      <div class="foot">
        <a href="https://www.producteurs-savoie-mont-blanc.com/citrouilles-potimarrons.html"> Coopérative de producteurs de citrouilles</a>
      </p>Site fictif, proposant de merveilleuses citrouilles</p>
    </div>
  </footer>
</body>
</html>
