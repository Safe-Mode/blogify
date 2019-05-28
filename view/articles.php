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
    <header class="page__header row align-items-center justify-content-between">
      <div class="logo col">
        <a href="index.php" class="logo__link">Blogify</a>
      </div>

      <div class="page-header__user-area user-area col">
        <a href="admin/" class="user-area__link">Admin panel</a>
      </div>
    </header>

    <main class="page__body">
      <?php foreach($articles as $a): ?>
      <article class="page__article article">
        <header class="article__header">
          <!-- <img class="article__image" src="<?=$a['image']['src']?>" alt="<?=$a['image']['alt']?>"> -->
          <h3 class="article__title">
            <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
          </h3>
          <p class="article__meta">Опубликовано: <time datetime="2019-05-27"><?=$a['date']?></time></p>
        </header>

        <div class="article__body"><?=$a['content']?></div>
      </article>
      <?php endforeach ?> 
    </main>

    <footer class="page__footer">
      <p class="copyright">&copy; Blogify, 2019</p>
    </footer>
  </div>
</body>
</html>