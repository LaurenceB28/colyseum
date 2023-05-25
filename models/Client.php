<?php
function clientList()
{
$db = connect();
$sth = $db->query('SELECT * FROM `clients`');
return $sth->fetchAll(PDO::FETCH_OBJ);
}


function getFisrtTwenty()
{
$db = connect();
$sth = $db->query('SELECT * FROM `clients`LIMIT 20');
return $sth->fetchAll(PDO::FETCH_OBJ);
}

function clientFidCardOnly()
{
$db = connect();
$sth = $db->query('SELECT * FROM `clients` WHERE `cardNumber`');
return $sth->fetchAll(PDO::FETCH_OBJ);
}

function clientMnameOnly()
{
$db = connect();
$sth = $db->query('SELECT * FROM `clients` WHERE NAME  LIKE `m%` ORDER BY ASC ');
return $sth->fetchAll(PDO::FETCH_OBJ);
}




?>