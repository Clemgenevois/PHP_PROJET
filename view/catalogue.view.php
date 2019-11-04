<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/styleCatalogue.css">
    <title>catalogue</title>
  </head>
  <body>
    <header>
      <h1>Pumpkin cute</h1>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="topnav" id="myTopnav">
        <a href="../controler/pagePrincipale.ctrl.php">Home</a>
        <a href="#catalogue" class="active">Voir Tout</a>
        <a href="../controler/pageContact.ctrl.php">Contact</a>
        <a href="../controler/pageAbout.ctrl.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </header>
    <h2>Catalogue des produits</h2>
    <?php
      foreach($articles as $res){   ?>
        <a href="pageArticle.ctrl.php?ref=<?php echo $res->getRef()?>">
        <article>
      <h2> <?php echo $res->getLibelle() ?></h2>
      <?php  $img = "../view/citrouilles_data/".$res->getImage();?>
             <img src="<?= $img ?>" alt="citrouille"/>
             <p> <?= $res->getPrix() ?> €</p>
       </article>
       </a>
      <?php } ?>
  </body>
</html>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
