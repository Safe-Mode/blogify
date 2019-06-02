<?php
require_once('assets/header.php');
?>

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
      <?php foreach ($articles as $a) : ?>
        <tr>
          <td><?= $a['date'] ?></td>
          <td><?= $a['title'] ?></td>
          <td>
            <a href="index.php?action=edit&id=<?= $a['id'] ?>">Редактировать</a>
          </td>
          <td>
            <a class="btn btn-danger" href="index.php?action=delete&id=<?= $a['id'] ?>">Удалить</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?php
require_once('assets/footer.php');
?>