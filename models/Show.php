<?php 
require_once __DIR__ . '/../helpers/connect.php';
function showTitles()
{
    $db = connect();
    $sql = 'SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title` ASC;';
    $sth = $db->query($sql);
    return $sth->fetchAll();
}