<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/styleContact.css">
    <title>Contact</title>
  </head>
  <body>
    <header>
      <h1>Pumpkin cute</h1>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="topnav" id="myTopnav">
        <a href="../controler/pagePrincipale.ctrl.php">Home</a>
        <a href="../controler/pageCatalogue.ctrl.php" >Voir Tout</a>
        <a href="#contact" class="active">Contact</a>
        <a href="../controler/pageAbout.ctrl.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </header>
    <h2>Contact</h2>
    <div class="contenu">
    <div class="infos">
      <p class="coordo">
        682 route d'halloween <br>
        36524 Horrorland <br>
        08 00 666 666
        <p>Ouvert tous les jours 24h/24
          <br> Du 1 Octobre au 1 Novembre </p>
        </p>
    </div>
    <div class="form">
      <form action="#" method="post">
        <div class="prenom">
          <label for="nom">Prénom et nom *</label>
          <input type="text" name="nom" value="" required>
        </div>
        <div class="email">
          <label for="email">Votre email *</label>
          <input type="email" name="email" value="" required>
        </div>
        <div class="tel">
          <label for="tel">Votre n° de tel *</label>
          <input type="number" name="tel" value="" required>
        </div>
        <div class="mess">
          <label for="mess">Votre message *</label>
          <textarea name="mess" rows="10" cols="40" required></textarea>
        </div>
        <div class="bouton">
          <input type="submit" name="envoyer" value="Envoyer">
        </div>
    </div>
      </form>
    </div>
  </body>
</html>
