<?php

namespace AHT;

use NPT\Config;

/**
 * Base model
 *
 * PHP version 7.3.11
 */
abstract class Model
{

    /**
     * Get the database connection
     */
    protected static function getDB()
    {
        $conn = mysqli_connect(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME);
        return $conn;
    }
}
