let but1 = document.getElementById("but1");
let but2 = document.getElementById("but2");
let but3 = document.getElementById("but3");
let but4 = document.getElementById("but4");
let maxQuestions = document.getElementById("maxQuestions");
let correct_answer = document.getElementById("correct_answer");
let question = document.getElementById("question");


function nextQuestion(element){
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let question = urlParams.get('question');

    console.log(maxQuestions.value, question);
    nbquestion = parseInt(question);
    if(nbquestion + 1 < maxQuestions.value){
        question ++;
        if(element.value === correct_answer.value){
            let newScore = sessionStorage.getItem('score');
            newScore++;
            sessionStorage.setItem('score', newScore);
        }
        window.location.href = "question.php" + "?question=" + question;
    }
    else{
        if(element.value === correct_answer.value){
            let newScore = sessionStorage.getItem('score');
            newScore++;
            sessionStorage.setItem('score', newScore);
        }
         window.location.href = "end.php";
    }
}
