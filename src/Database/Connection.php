<?php

namespace Foundation\Database;

use PDO;
use PDOException;

class Connection {
    public static function make($config) {
        try {
            return new PDO(
                'mysql:host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['password'],
            );
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
}
