<?php
require_once('assets/header.php');
?>

<form method="POST" enctype="multipart/form-data" action="index.php?action=<?= $_GET['action'] ?>&id=<?= (isset($_GET['id'])) ? $_GET['id'] : '' ?>">
  <div class="form-group">
    <label for="add-title">Заголовок</label>
    <input type="text" class="form-control" id="add-title" name="title" value="<?= (isset($article)) ? $article['title'] : '' ?>" placeholder="Заголовок статьи" required>
  </div>

  <div class="form-group">
    <label for="add-date">Дата</label>
    <input type="date" class="form-control" id="add-date" name="date" value="<?= (isset($article)) ? $article['date'] : '' ?>" placeholder="Дата публикации" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Изображение</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload">
  </div>

  <div class="form-group">
    <label for="add-content">Контент</label>
    <textarea class="form-control" id="add-content" rows="5" name="content" placeholder="Текст статьи" required><?= (isset($article)) ? $article['content'] : '' ?></textarea>
  </div>

  <button type="submit" class="btn btn-success">Сохранить</button>
</form>

<?php
require_once('assets/footer.php');
?>