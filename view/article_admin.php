<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blogify</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Marck+Script|Neucha|Pattaya|Seymour+One&display=swap&subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="page">
  <div class="page__container container">
    <header class="page__header row align-items-center justify-content-between">
      <div class="logo col">
        <a href="../index.php" class="logo__link">Blogify</a>
      </div>

      <div class="page-header__user-area user-area col">
        <a href="../admin/" class="user-area__link">Admin panel</a>
      </div>
    </header>

    <main class="page__body">
      <form method="POST" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
        <div class="form-group">
          <label for="add-title">Заголовок</label>
          <input type="text" class="form-control" id="add-title" name="title" value="<?=(isset($article)) ? $article['title'] : ''?>" placeholder="Заголовок статьи" required>
        </div>

        <div class="form-group">
          <label for="add-date">Дата</label>
          <input type="date" class="form-control" id="add-date" name="date" value="<?=(isset($article)) ? $article['date'] : ''?>" placeholder="Дата публикации" required>
        </div>

        <div class="form-group">
          <label for="add-content">Контент</label>
          <textarea class="form-control" id="add-content" rows="5" name="content" placeholder="Текст статьи" required><?=(isset($article)) ? $article['content'] : ''?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Сохранить</button>
      </form>
    </main>

    <footer class="page__footer">
      <p class="copyright">&copy; Blogify, 2019</p>
    </footer>
  </div>
</body>
</html>