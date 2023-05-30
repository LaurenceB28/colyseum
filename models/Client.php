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
    $sth = $db->query('SELECT `clients`.`firstName`,`clients`.`lastName`,`clients`.`birthDate`, `cards`.`cardTypesId`,`clients`.`cardNumber`, 
    IF(`cards`.`cardTypesId`= 1 ,\'OUI\',\'NON\') AS `hasFidelityCard`
    FROM `clients` 
    LEFT JOIN `cards`
    ON `clients`.`cardNumber` = `cards`.`cardNumber`;');

    return $sth->fetchAll(PDO::FETCH_OBJ);
}



?>

<!-- SELECT `languages`.`name` AS `language`, `frameworks`. `name` AS `framework`
FROM `languages`
LEFT JOIN `frameworks` ON `languages`.`id` = `frameworks`.`languagesId`; -->