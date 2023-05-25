<?php 
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__.'/../models/Client.php';
$clientMonly = clientMnameOnly();


include(__DIR__ .'/../views/templates/header.php');
include(__DIR__ .'/../views/exos/exo5.php');
include(__DIR__ .'/../views/templates/footer.php');