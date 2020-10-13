const categBlock = document.getElementById('categBlock');
let preventTarget = null;

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

    if (preventTarget !== null) {
        preventTarget.removeAttribute('style');
    }
    preventTarget = target;
    if (target.tagName === 'P') { target = target.parentElement; }

    target.style.border = "solid red 3px";

})