<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blogify</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Marck+Script|Neucha|Pattaya|Seymour+One&display=swap&subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="page">
  <div class="page__container container">
  <header class="page__header">
      <div class="logo">
        <a href="index.php" class="logo__link">Blogify</a>
      </div>
    </header>

    <main class="page__body">
      <article class="page__article article">
        <header class="article__header">
          <img class="article__image" src="<?=$article['image']['src']?>" alt="<?=$article['image']['alt']?>">
          <h1 class="article__title"><?=$article['title']?></h1>
          <p class="article__meta">Опубликовано: <time datetime="<?=$article['date']?>"><?=$article['date']?></time></p>
        </header>

        <div class="article__body"><?=$article['content']?></div>
      </article>
    </main>

    <footer class="page__footer">
      <p class="copyright">&copy; Blogify, 2019</p>
    </footer>
  </div>
</body>
</html>