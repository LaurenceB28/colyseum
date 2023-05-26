<?php
require_once __DIR__ .'/../helpers/connect.php';

function Showtypes(){
    $db = connect();
    $sth = $db->query('SELECT `type` FROM `showtypes`;');
    return $sth->fetchAll(PDO::FETCH_OBJ);
}
