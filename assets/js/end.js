score = document.getElementById("score");
const btnDefi = document.getElementById("defi");


score.innerText += " " + sessionStorage.getItem('score') + " sur " + sessionStorage.getItem('nbQuestions') + " questions";

btnDefi.addEventListener('click', (event) => {
   let code = event.target.value;

   alert("Pour défier vos amis sur ce quizz envoyez leur ce code : \n\n" + code);
});