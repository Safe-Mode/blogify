<?php
  require_once('db.php');
  require_once('model/articles.php');

  $articles = articles_all();

  include('view/articles.php');
?>

<!-- <pre><?php print_r($articles); ?></pre> -->