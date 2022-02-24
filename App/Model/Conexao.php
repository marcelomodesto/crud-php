<?php

namespace App\Model;

use PDO;

class Conexao
{

    private static $instance;

    public static function getConnection()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=icaro;charset-utf8;', 'root', 'password');
        }

        return self::$instance;
    }
}
