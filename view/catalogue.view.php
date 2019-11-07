<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/design/styleCatalogue.css">
    <title>catalogue</title>
  </head>
  <body>
    <header>
      <h1>Pumpkin.net</h1>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="topnav" id="myTopnav">
        <a href="../controler/pagePrincipale.ctrl.php">Accueil</a>
        <a href="#catalogue" class="active">Voir Tout</a>
        <a href="../controler/pageCategorie.ctrl.php">Catégories</a>
        <a href="../controler/pageContact.ctrl.php">Contact</a>
        <a href="../controler/pageAbout.ctrl.php">À propos de nous</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </header>
    <h2>Catalogue des produits</h2>
    <?php
      foreach($articles as $res){   ?>
        <a href="pageArticle.ctrl.php?ref=<?= $res->getRef()?>">
        <article>
      <h2> <?=$res->getLibelle()?></h2>
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
