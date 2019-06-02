<?php
require_once('assets/header.php');
?>

<article class="page__article article">
  <header class="article__header">
    <h1 class="article__title"><?= $article['title'] ?></h1>
    <p class="article__meta">Опубликовано: <time datetime="<?= $article['date'] ?>"><?= $article['date'] ?></time></p>
    <img class="article__image" src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>">
  </header>

  <div class="article__body"><?= $article['content'] ?></div>
</article>

<?php
require_once('assets/footer.php');
?>