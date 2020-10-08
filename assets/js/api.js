const categBlock = document.getElementById('categBlock');

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
    let child = event.target
    let categ = document.getElementById(child.id);

    document.getElementById('result').innerText = categ.textContent;

})