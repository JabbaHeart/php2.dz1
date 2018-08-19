<?php

namespace App;


abstract class Model
{
    protected static $table = null;

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, static::class);
    }

    public static function findLastRecords($number)
    {
        $db = new Db();
        $sql = 'SELECT * FROM '. static::$table . ' ORDER BY id DESC LIMIT ' . $number;
        return $db->query($sql, static::class);

    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE Id=:id';
        $arr =  $db->query($sql, static::class, [':id'=>$id]);
        if (!empty($arr)) {
            return $arr[0];
        } else {
            return false;
        }

    }

    public function getLink()
    {
        return '/php2.dz1/article.php?id=' . $this->id;
    }

}