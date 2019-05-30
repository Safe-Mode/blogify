<?php
  require_once('../db.php');
  require_once('../model/articles.php');

  $link = db_connect();
  $articles = articles_all($link);
  $action = (isset($_GET['action'])) ? $_GET['action'] : '';

  if ($action == 'add') {
    if (!empty($_POST)) {
      articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
      header('Location: index.php');
    }

    include('../view/article_admin.php');
  } else {
    $articles = articles_all($link);
    include('../view/articles_admin.php');
  }
  
?>