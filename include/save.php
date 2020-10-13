<?php
session_start();

require_once("initPDO.php");

if(isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    $_SESSION['pseudo'] = $pseudo;

    $sql = "SELECT * FROM user WHERE pseudo like '$pseudo'";

    foreach ($dbh->query($sql) as $row){
        $_SESSION['id'] = $row['id'];
        $dbh->exec("INSERT INTO user (pseudo) VALUES ('$pseudo')");
        header("Location: gamemode.php");
    }

    $dbh->exec("INSERT INTO user (pseudo) VALUES ('$pseudo')");

    foreach ($dbh->query($sql) as $row){
        $_SESSION['id'] = $row['id'];
        $dbh->exec("INSERT INTO user (pseudo) VALUES ('$pseudo')");
        header("Location: gamemode.php");
    }
}
