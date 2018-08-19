<?php

require __DIR__ . '/autoload.php';

$records = \App\Models\Article::findLastRecords(3);

include __DIR__ . '/App/Templates/news.php';




