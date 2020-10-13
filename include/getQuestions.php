<?php
require_once ('initPDO.php');
$lien = $_SESSION['link'];
$sql = "SELECT json FROM question WHERE lien = '$lien'";

$result = $dbh->query($sql);
$result->setFetchMode(PDO::FETCH_OBJ);
$row = $result->fetch();

$quest = json_decode($row->json);

$answers = $quest->results[$_GET['question']]->incorrect_answers;
$answers[] = $quest->results[$_GET['question']]->correct_answer;



shuffle($answers);