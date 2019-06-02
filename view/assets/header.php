<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blogify</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Marck+Script|Neucha|Pattaya|Plaster&display=swap&subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body class="page">
  <div class="page__container container">
    <header class="page__header row align-items-center justify-content-between">
      <div class="logo col">
        <?php if ($_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/') : ?>
          <a href="/index.php" class="logo__link">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/icons/pen.php'); ?>
            Blogify
          </a>
        <?php else : ?>
          <a class="logo__link">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/icons/pen.php'); ?>
            Blogify
          </a>
        <?php endif; ?>
      </div>

      <?php if ($_SERVER['REQUEST_URI'] != '/admin/') : ?>
        <div class="page-header__user-area user-area col">
          <a href="/admin/" class="user-area__link">Admin panel</a>
        </div>
      <?php endif; ?>
    </header>

    <main class="page__body">