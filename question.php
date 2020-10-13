<?php
session_start();
require_once ('include/getQuestions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>QuizzJam</title>
</head>
<body>

<div class="question text-center">
    <h1 id="question" class="question-texte"></h1>
</div>

<div>
    <input type="hidden" value="<?php $row[$_GET['question']]['correct_answer'] ?>">
    <?php
        if($row[$_GET['question']]['type'] === "boolean"){
            echo'
                <div class="row justify-content-center">
                    <button id="but1" class="col-sm-2 answer btn">Vrai</button>
                    <button id="but2" class="col-sm-2 answer btn">Faux</button>
                </div>
                ';
        }
        else{
            echo'
                <div class="row justify-content-center">
                    <button id="but1" class="col-sm-2 answer btn">'.$row[$_GET['question']]['rep'].'</button>
                    <button id="but2" class="col-sm-2 answer btn">'.$row[$_GET['question']]['rep'].'</button>
                </div>
                <div class="row justify-content-center">
                    <button id="but3" class="col-sm-2 answer btn">'.$row[$_GET['question']]['reponse'].'</button>
                    <button id="but4" class="col-sm-2 answer btn">'.$row[$_GET['question']]['reponse'].'</button>
                </div>
                ';
        }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./assets/js/api.js"></script>
</body>
</html>
