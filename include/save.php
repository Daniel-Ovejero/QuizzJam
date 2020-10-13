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
        if(isset($_POST['codeAmi']) && $_POST['codeAmi'] != ""){
            $_SESSION['link'] = $_POST['codeAmi'];
            header("Location: ../question.php?question=0");
        }
        else{
            header("Location: ../gamemode.php");
        }
    }
    else{
        $dbh->exec("INSERT INTO user (pseudo) VALUES ('$pseudo')");

        $result = $dbh->query($sql);
        $result->setFetchMode(PDO::FETCH_OBJ);
        $row = $result->fetch();

        if($row){
            $_SESSION['id'] = $row->id;
            if(isset($_POST['codeAmi']) && $_POST['codeAmi'] != ""){
                $_SESSION['link'] = $_POST['codeAmi'];
                header("Location: ../question.php?question=0");
            }
            else{
                header("Location: ../gamemode.php");
            }
        }
    }
}

if (isset($_POST['questions']) && $_POST['questions'] != '') {
    $jsonObject = json_decode($_POST['questions']);
    $jsonObject = json_encode($jsonObject);

    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $link = '';
    for($i=0; $i<10; $i++){
        $link .= $chars[rand(0, strlen($chars)-1)];
    }

    var_dump($jsonObject);

    $dbh->exec("INSERT INTO question (lien, json) VALUE ('$link', '$jsonObject')");

    $_SESSION['link'] = $link;

}