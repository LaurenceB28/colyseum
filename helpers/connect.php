<?php
function connect()
{
    $db = new PDO("mysql:host=localhost;dbname=colyseum", "colyseum", "q3LJ!Od@4z5GwaNh");
    return $db;
}