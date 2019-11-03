<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../view/article.style.css">
    <title>article.php</title>
  </head>
  <body>
    <header>
      
    </header>

    <section>
      <img src="<?= $article->getImage()?>" alt="<?='image de'. $article->getLibelle()?>">

      <article>
        <figure>
          <h3><?=$article->getLibelle()?></h3>
          <figcaption><?=$article->getCompInfos()?></figcaption>
        </figure>

          <ul>
            <li>Catégorie : <?=$article->getCategorie()?></li>
            <li>Provenance : <?=$article->getProvenance()?></li>
          </ul>

          <p class="prix"><?=$article->getPrix()?>€/unité</p>
      </article>

    </section>

    <footer>
      <p>Site fictif, proposant de merveilleuses citrouille. <br>
      image provenant de :</p>
    </footer>

  </body>
</html>
