<?php
  require_once('../db.php');
  require_once('../functions.php');
  require_once('../model/articles.php');

  $link = db_connect();
  $articles = articles_all($link);
  $action = (isset($_GET['action'])) ? $_GET['action'] : '';

  if ($action == 'add') {
    if (!empty($_POST)) {
      $file = file_handle();
      articles_new($link, $_POST['title'], $_POST['date'], $file, $_POST['content']);
      header('Location: index.php');
    }

    include('../view/article_admin.php');
  } else if ($action == 'edit') {
    if (!isset($_GET['id']))
      header('Location: index.php');

    $id = $_GET['id'];

    if (!empty($_POST) && $id > 0) {
      $file = file_handle();
      articles_edit($link, $id, $_POST['title'], $_POST['date'], $file, $_POST['content']);
      header('Location: index.php');
    }

    $article = articles_get($link, $id);
    include('../view/article_admin.php');
  } else if ($action == 'delete') {
    $id = $_GET['id'];
    articles_delete($link, $id);
    header('Location: index.php');
  } else {
    $articles = articles_all($link);
    include('../view/articles_admin.php');
  }
?>