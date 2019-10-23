<html>
<head>
<title>Citrouille</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css">
</head>

<body>
<header>
  <h1>Pumpkin cute</h1>
  <p><img src="../view/citrouilles_data/banderole_citrouille.jpg"/></p>
</header>

<?php
  foreach($articles as $res){   ?>
    <article>
  <h2> <?php echo $res->getLibelle() ?></h2>
  <?php  $img = "citrouilles_data/".$res->getImage();?>
         <img src="<?= $img ?>" />
         <p> <?= $res->getPrix() ?> $</p>
   </article>
  <?php } ?>

<footer>
</p>Site fictif, issus de données réelles du Web</p>
</footer>
</body>
</html>
