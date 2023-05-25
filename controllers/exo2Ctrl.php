<?php
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__.'/../models/Showtype.php';
$shows = Showtypes();




include(__DIR__ .'/../views/templates/header.php');
include(__DIR__ .'/../views/exos/exo2.php');
include(__DIR__ .'/../views/templates/footer.php');
