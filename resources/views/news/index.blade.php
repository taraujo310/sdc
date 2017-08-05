<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Novidades</title>
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
    <h2>Novidades</h2>
    <?php if(!count($news)): ?>
      <h3>Não há notícias cadastradas</h3>
    <?php else: ?>
      <?php foreach ($news as $news_item): ?>
        <h3>
          <a href='/news/<?= $news_item->id ?>'>
            <?= $news_item->title ?>
          </a>
        </h3>
        <p><?= $news_item->body ?></p>
      <?php endforeach ?>
    <?php endif ?>
  </body>
</html>
