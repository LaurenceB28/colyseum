<?php 
require_once __DIR__ . '/../helpers/connect.php';
function showTitles()
{
    $db = connect();
    $sth = $db->query('SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title` ASC ;');
    return $sth->fetchAll(PDO::FETCH_OBJ);
}