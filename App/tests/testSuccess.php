<?php

require __DIR__ . '/../Db.php';

$db = new \App\Db();
$sql = 'INSERT INTO persons (lastname, age) VALUES (:lastname, :age)';
$db->execute($sql, [':lastname'=>'Кузнецов', ':age'=>45]);

$id = $db->getId();
$data = $db->getData('SELECT * FROM persons WHERE Id=:id', [':id'=>$id]);

assert( true == in_array('Кузнецов', $data[0]));
assert( '45' == in_array('45', $data[0]));

