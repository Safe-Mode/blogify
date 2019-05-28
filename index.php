<?php
  require_once('db.php');
  require_once('model/articles.php');

  $link = db_connect();
  $articles = articles_all($link);

  $a = articles_get($link, 1);

  include('view/articles.php');
?>

<!-- <pre><?php print_r($articles); ?></pre> -->