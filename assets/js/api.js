const categBlock = document.getElementById('categBlock');
const formGamemode = document.getElementById('gamemodeSelect');

let preventTarget = null;
let idCategory = null;

fetch('https://opentdb.com/api_category.php').then((response) => {
    response.json().then((jsonObject) => {
        let categories = jsonObject.trivia_categories;

        for (key in categories) {
            let category = categories[key];

            categBlock.innerHTML += `<div id="${category.id}" class="col-md-3 categBlock"><p>${category.name}</p></div>`;
        }
    });
});

categBlock.addEventListener('click', (event) => {
    let target = event.target;

    if (preventTarget !== null) { preventTarget.removeAttribute('style'); }
    if (target.tagName === 'P') { target = target.parentElement; }

    target.style.border = "solid red 3px";
    preventTarget = target;
    idCategory = target.id;

})

formGamemode.addEventListener('submit', (event) => {
    let target = event.target;
    event.preventDefault();

    let url = "https://opentdb.com/api.php?amount="+target.nbQuestion.value;

    if (target.difficulty.value) { url += "&difficulty=" + target.difficulty.value; }
    if (idCategory !== null) { url += "&category=" + idCategory; }

    fetch(url).then((response) => {
        response.json().then((jsonObject) => {
            console.log(jsonObject);

            let datas = new FormData();
            datas.append('questions', JSON.stringify(jsonObject));

            fetch('./include/save.php', {method: 'post', body: datas}).then((resp) => {
                sessionStorage.setItem('score', '0');
                if(target.nbQuestion.value != null){ sessionStorage.setItem('nbQuestions', target.nbQuestion.value); }
                else{ sessionStorage.setItem('nbQuestions', 10); }
                window.location.href = "question.php" + "?question=0";
            })

        });
    });
});