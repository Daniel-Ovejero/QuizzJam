<?php
session_start();
require_once ('initPDO.php');


if (isset($_POST['score']) && $_POST['score'] != '') {
    $sql = "SELECT id FROM question WHERE lien = ".$_SESSION['link']." ";

    $result = $dbh->query($sql);
    $result->setFetchMode(PDO::FETCH_OBJ);
    $row = $result->fetch();

    $dbh->exec("INSERT INTO score (user, value, question) VALUE (".$_SESSION['id'].", ".$_POST['score'].", ". $row->id .")");
}
