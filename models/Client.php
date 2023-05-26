<?php
require_once __DIR__ . '/../helpers/connect.php';
function clientList()
{
    $db = connect();
    $sth = $db->query('SELECT * FROM `clients`');
    return $sth->fetchAll(PDO::FETCH_OBJ);
}


function getFirstTwenty(){
    $db = connect();
    $sth = $db->query('SELECT `firstName`,`lastName` FROM `clients`LIMIT 20 ;');
    return $sth->fetchAll(PDO::FETCH_OBJ);
}

function clientFidCardOnly()
{
    $db = connect();
    $sth = $db->query('SELECT * FROM `clients` WHERE `cardNumber`');
    return $sth->fetchAll(PDO::FETCH_OBJ);
}

function clientsMonly()
{
    $db = connect();
    $sth = $db->query('SELECT * FROM `clients` WHERE NAME LIKE `m%` ORDER BY ASC ');
    return $sth->fetchAll(PDO::FETCH_OBJ);
}

function clientsIDs()
{
    $db = connect();
    $sth = $db->query('SELECT `firstName`,`lastName`,`birthDate`,`card`, `cardNumber` FROM `clients`; ');
    return $sth->fetchAll(PDO::FETCH_OBJ);
}



?>