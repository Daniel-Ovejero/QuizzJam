<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>QuizzJam</title>
</head>
<body>
    <section
        <div id="categBlock" class="row" style="margin: 10px;"></div>
    </section>

    <section>
        <div class="container">
            <h5>Sélectionnez une difficultée</h5>
            <form id="gamemodeSelect" action="" method="post">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="all" value="" checked="">
                    <label class="form-check-label" for="all">Toute difficultés</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="easy" value="easy">
                    <label class="form-check-label" for="easy">Facile</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="medium" value="medium">
                    <label class="form-check-label" for="medium">Normal</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficulty" id="hard" value="hard">
                    <label class="form-check-label" for="hard">Difficile</label>
                </div>
                <br><br>
                <h5>Entrez un nombre de question</h5>
                <input type="number" name="nbQuestion" id="nbQuestion" class="form-control" min="1" max="50" value="10">
                <br><br>
                <div class="text-right">
                    <button class="btn btn-primary" type="submit">Commencer</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/api.js"></script>
</body>
</html>