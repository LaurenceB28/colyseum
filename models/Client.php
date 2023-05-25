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
?>