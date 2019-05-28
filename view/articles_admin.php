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
    </header>

    <main class="page__body">
      <a href="index.php?action=add" class="btn btn-success">Добавить статью</a>

      <div class="page__table table-responsive">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Дата</th>
              <th scope="col">Заголовок</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>

          <tbody>
            <?php foreach($articles as $a): ?>
            <tr>
              <td><?=$a['date']?></td>
              <td><?=$a['title']?></td>
              <td>
                <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
              </td>
              <td>
                <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </main>

    <footer class="page__footer">
      <p class="copyright">&copy; Blogify, 2019</p>
    </footer>
  </div>
</body>
</html>