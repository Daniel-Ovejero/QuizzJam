<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

$dbname = 'quizz-jam';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
}
catch(PDOException $e)
{
    $e->getMessage();
}

if(isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    $dbh->exec("INSERT INTO user (pseudo) VALUES ('$pseudo')");
}
