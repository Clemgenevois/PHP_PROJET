<!DOCTYPE html>
<html lang="fr" dir="ltr" style="article.style.css">
  <head>
    <meta charset="utf-8">
    <title>article.php</title>
  </head>
  <body>
    <header>

    </header>

    <section>
      <img src="<?=$article->getImage()?>" alt="<?='image de'. $article->getLibelle()?>">

      <article>
        <figure>
          <h3><?=$article->getLibelle()?></h3>
          <figcaption><?=article->getCompInfos()?></figcaption>
          <ul>
            <li>Catégorie : <?=$article->getCategorie()?></li>
            <li>Provenance : <?$article->getProvenance()?></li>
          </ul>
          <p class="prix"><?=$article->getPrix()?>€/unité</p>
        </figure>
      </article>

    </section>

    <footer>
    </footer>

  </body>
</html>
