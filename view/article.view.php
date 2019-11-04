<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../view/styleArticle.css">
    <title>article.php</title>
  </head>
  <body>
    <header>

    </header>

    <section>
      <img src="<?= $images_path . $article->getImage()?>" alt="<?='image de'. $article->getLibelle()?>">

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
      <p>Site fictif, proposant de merveilleuses citrouille.</p>
    </footer>

  </body>
</html>
