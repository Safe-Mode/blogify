<?php
  function articles_all()
  {
    $art_1 = [
      'id' => 1,
      'image' => [
        'src' => 'img/anaconda.jpg',
        'alt' => 'Анаконда',
      ],
      'title' => 'Title 1',
      'date' => '2019-05-28',
      'content' => 'Content 1',
    ];

    $art_2 = [
      'id' => 2,
      'image' => [
        'src' => 'img/youngs.jpg',
        'alt' => 'Молодые люди со смартфонами в Москве',
      ],
      'title' => 'Title 2',
      'date' => '2019-05-28',
      'content' => 'Content 2',
    ];

    return [$art_1, $art_2];
  }

  function articles_get($id)
  {
    return [
      'id' => 1,
      'image' => [
        'src' => 'img/anaconda.jpg',
        'alt' => 'Анаконда',
      ],
      'title' => 'Это простой заголовок',
      'date' => '2019-01-01',
      'content' => 'Здесь будет статья...',
    ];
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