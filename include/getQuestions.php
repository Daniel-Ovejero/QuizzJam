<?php
require_once ('initPDO.php');
$lien = $_SESSION['link'];
$sql = "SELECT json FROM question WHERE lien = '$lien'";

$result = $dbh->query($sql);
$result->setFetchMode(PDO::FETCH_OBJ);
$row = $result->fetch();

//$t = json_encode($row->json);
//var_dump($t);
//$r = json_decode($row);
$r = json_decode($row->json);
var_dump($r);

