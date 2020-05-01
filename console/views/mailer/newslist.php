
<?php foreach ($newsList as $item) :?>

    <h1><a href="<?='test/index'.'/'. $item['id'] ?>"><?=  $item['title']  ?></a></h1>
    <p><?=  $item['content']  ?></p>
    <hr>
<?php endforeach; ?>