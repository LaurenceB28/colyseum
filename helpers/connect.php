<?php
require_once __DIR__ .'/../config/config.php';
function connect()
{
    $db = new PDO(DNS,USER,PASSWORD);
    return $db;
}