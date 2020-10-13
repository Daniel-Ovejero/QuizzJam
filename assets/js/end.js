score = document.getElementById("score");


score.innerText += " " + sessionStorage.getItem('score') + " sur " + sessionStorage.getItem('nbQuestions') + " questions";