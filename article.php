<?php
  require_once('db.php');
  require_once('model/articles.php');

  $article = articles_get($_GET['id']);

  include('view/article.php');
?>