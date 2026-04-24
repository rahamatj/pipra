<?php

namespace App;

use DateTime;
use Foundation\Model;
use Foundation\Database\Query;

class Post extends Model {

    public int $id;
    public string $title;
    public string $body;

    protected static $table = 'posts';
}
