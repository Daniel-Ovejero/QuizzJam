<?php
session_start();

require_once("initPDO.php");

if(isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    $_SESSION['pseudo'] = $pseudo;

    $sql = "SELECT * FROM user WHERE pseudo = '$pseudo'";

    $result = $dbh->query($sql);
    $result->setFetchMode(PDO::FETCH_OBJ);
    $row = $result->fetch();

    if($row){
        $_SESSION['id'] = $row->id;
        header("Location: ../gamemode.php");
    }
    else{
        $dbh->exec("INSERT INTO user (pseudo) VALUES ('$pseudo')");

        $result = $dbh->query($sql);
        $result->setFetchMode(PDO::FETCH_OBJ);
        $row = $result->fetch();

        if($row){
            $_SESSION['id'] = $row->id;
            header("Location: ../gamemode.php");
        }
    }
}
