<?php
$dsn = 'mysql:dbname=colyseum;host=127.0.0.1';
$user = 'colyseum';
$password = 'q3LJ!Od@4z5GwaNh';
$dbh = new PDO($dsn, $user, $password);







require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__.'/../models/Client.php';
$clients = clientList();



include __DIR__ .'/../views/templates/header.php';
include __DIR__ .'/../views/exos/exo1.php';
include __DIR__ .'/../views/templates/footer.php';


