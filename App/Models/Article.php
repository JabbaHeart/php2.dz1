<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    protected static $table = 'news';

    protected $header;
    protected $message;

    public function getHeader()
    {
        return $this->header;
    }

    public function getMessage()
    {
        return $this->message;
    }


}