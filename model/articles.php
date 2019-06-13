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

function articles_new($link, $title, $date, $file, $content)
{
  $title = trim($title);
  $content = trim(nl2br($content));

  if ($title == '')
    return false;

  if ($file) {
    $sql = "INSERT INTO articles (title, date, image, content) VALUES ('%s', '%s', '%s', '%s')";
    $query = sprintf(
      $sql,
      mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      $file,
      mysqli_real_escape_string($link, $content)
    );
  } else {
    $sql = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
    $query = sprintf(
      $sql,
      mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      mysqli_real_escape_string($link, $content)
    );
  }

  $result = mysqli_query($link, $query);

  if (!$result)
    die(mysqli_error($link));

  return true;
}

function articles_edit($link, $id, $title, $date, $file, $content)
{
  $title = trim($title);
  $date = trim($date);
  $content = trim(nl2br($content));
  $id = (int)$id;

  if ($title == '')
    return false;

  if ($file) {
    $sql = "UPDATE articles SET title='%s', date='%s', image='%s', content='%s' WHERE id='%d'";
    $query = sprintf(
      $sql,
      mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      $file,
      mysqli_real_escape_string($link, $content),
      $id
    );
  } else {
    $sql = "UPDATE articles SET title='%s', date='%s', content='%s' WHERE id='%d'";
    $query = sprintf(
      $sql,
      mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      mysqli_real_escape_string($link, $content),
      $id
    );
  }

  $result = mysqli_query($link, $query);

  if (!$result)
    die(mysqli_error($link));

  return mysqli_affected_rows($link);
}

function articles_delete($link, $id)
{
  $id = (int)$id;

  if ($id == 0)
    return false;

  $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
  $result = mysqli_query($link, $query);

  if (!$result)
    die(mysqli_error($link));

  return mysqli_affected_rows($link);
}

function articles_intro($text, $length = 1000)
{
  return (strlen($text) > $length) ? mb_strcut($text, 0, $length) . '...' : $text;
}
