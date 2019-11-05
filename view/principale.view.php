<html>
<head>
<title>Citrouille</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../view/design/stylePrincipale.css">
</head>

<body>
<header>
    <h1>Pumpkin.net</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">Acceuil</a>
      <a href="../controler/pageCatalogue.ctrl.php">Voir Tout</a>
      <a href="../controler/pageContact.ctrl.php">Contact</a>
      <a href="../controler/pageAbout.ctrl.php">About</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  <p><img src="<?= $images_path.'banderole_citrouille.jpg'?>"/></p>
</header>

<?php
  foreach($articles as $res){   ?>
    <a href="pageArticle.ctrl.php?ref=<?= $res->getRef()?>">
    <article>
  <h2> <?php echo $res->getLibelle() ?></h2>
         <img src="<?= $images_path . $res->getImage()?>" alt="citrouille"/>
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

<script> // cet ajout JavaScript sert a recuperer et afficher la page correspondant a la section choisie de la nav bar
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
