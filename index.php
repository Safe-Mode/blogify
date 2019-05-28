<?php
  require_once('db.php');
  require_once('model/articles.php');

  $link = db_connect();
  $articles = articles_all($link);

  include('view/articles.php');
?>