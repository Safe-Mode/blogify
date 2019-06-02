<?php
  require_once('assets/header.php');
?>

<?php foreach($articles as $a): ?>
<article class="page__article article">
  <header class="article__header">
    <img class="article__image" src="<?=$a['image']?>" alt="<?=$a['title']?>">
    <h3 class="article__title">
      <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
    </h3>
    <p class="article__meta">Опубликовано: <time datetime="2019-05-27"><?=$a['date']?></time></p>
  </header>

  <div class="article__body"><?=articles_intro($a['content'])?></div>
</article>
<?php endforeach ?>

<?php
  require_once('assets/footer.php');
?>