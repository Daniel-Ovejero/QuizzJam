<?php
session_start();
session_unset();
session_destroy();
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
<div class="container">
    <div class="text-center mt-xl-5">
        <h1>QUIZZ JAM</h1>
    </div>
    <form name="form-pseudo" method="post" action="./include/save.php">
        <div class="text-center mt-xl-5">
            <label for="pseudo">Choisissez votre pseudo</label>
        </div>
        <div class="text-center">
            <input class="form-control small-input" id="pseudo" name="pseudo" placeholder="Pseudo">
        </div>

        <button id="btnCodeAmi" class="btn btn-primary mt-3" type="button" onclick="onCodeAmi()" >Entrer un code ami</button>

        <div style="height: 0px; overflow:hidden;" id="codeDef">
            <br>
            <div class="form-group">
                <input type="text" class="form-control" id="codeAmi" name="codeAmi" placeholder="Entrer un code pour relever le défi de vos amis">
            </div>
        </div>

        <div class="text-center mt-xl-5">
            <button class="btn btn-primary" id="next" type="submit">Suivant</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./assets/js/api.js"></script>
</body>
</html>
