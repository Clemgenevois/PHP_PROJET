<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>article.php</title>
  </head>
  <body>
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
          <p><?=$article->getPrix()?>/unité</p>
        </figure>
      </article>
    </section>
  </body>
</html>
