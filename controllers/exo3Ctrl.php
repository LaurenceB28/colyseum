<?php 
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__.'/../models/Client.php';
$clientTwenty = getFisrtTwenty();


include(__DIR__ .'/../views/templates/header.php');
include(__DIR__ .'/../views/exos/exo3.php');
include(__DIR__ .'/../views/templates/footer.php');