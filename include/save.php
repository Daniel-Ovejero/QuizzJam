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

if (isset($_POST['questions']) && $_POST['questions'] != '') {
    $jsonObject = $_POST['questions'];

    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $link = '';
    for($i=0; $i<10; $i++){
        $link .= $chars[rand(0, strlen($chars)-1)];
    }

    $dbh->exec("INSERT INTO question (lien, json) VALUE ('$link', '$jsonObject')");

    $_SESSION['link'] = $link;

}