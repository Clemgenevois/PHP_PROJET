<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../view/design/styleArticle.css">
    <title>article.php</title>
  </head>
  <body>
    <header>
      <h1>Pumpkin.net</h1>
      <div class="topnav">
        <a href="../controler/pagePrincipale.ctrl.php">Acceuil</a>
        <a href="../controler/pageCatalogue.ctrl.php">Voir Tout</a>
        <a href="../controler/pageCategorie.ctrl.php">Categories</a>
        <a href="../controler/pageContact.ctrl.php">Contact</a>
        <a href="../controler/pageAbout.ctrl.php">A propos de nous</a>
      </div>
    </header>

    <section>
      <img src="<?= $images_path . $article->getImage()?>" alt="<?='image de'. $article->getLibelle()?>">

      <article>
        <figure>
          <h3><?=$article->getLibelle()?></h3>
          <figcaption><?=$article->getCompInfos()?></figcaption>
        </figure>

          <ul>
            <li>Catégorie : <?=$categorie->getNom()?></li>
            <li>Provenance : <?=$article->getProvenance()?></li>
          </ul>

          <p class="prix"><?=$article->getPrix()?>€</p>
      </article>

    </section>

    <footer>
      <p>Site fictif, proposant de merveilleuses citrouilles.</p>
    </footer>

  </body>
</html>
