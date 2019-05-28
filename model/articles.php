<?php
  function articles_all($link)
  {
    $query = 'SELECT * FROM articles ORDER BY id DESC';
    $result = mysqli_query($link, $query);

    if (!$result)
      die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $articles = [];

    for ($i = 0; $i < $n; $i++) {
      $articles[] = mysqli_fetch_assoc($result);
    }

    return $articles;
  }

  function articles_get($link, $id)
  {
    $query = sprintf("SELECT * FROM articles WHERE id=%d", $id);
    $result = mysqli_query($link, $query);

    if (!$result)
      die(mysqli_error($link));

    return mysqli_fetch_assoc($result);
  }

  function articles_new($title, $date, $content)
  {

  }

  function articles_edit($id, $title, $date, $content)
  {

  }

  function articles_delete($id)
  {

  }
?>