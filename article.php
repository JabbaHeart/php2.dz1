<?php

require __DIR__ . '/autoload.php';

$record = \App\Models\Article::findById($_GET['id']);

include __DIR__ . '/App/Templates/article.php';

