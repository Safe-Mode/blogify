<?php
  require_once('db.php');
  require_once('model/articles.php');

  $link = db_connect();
  $article = articles_get($link, $_GET['id']);

  include('view/article.php');
?>