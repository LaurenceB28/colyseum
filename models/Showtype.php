<?php 
function Showtypes()
{
$db = connect();
$sth = $db->query('SELECT * FROM `shows`');
return $sth->fetchAll(PDO::FETCH_OBJ);
}
?>