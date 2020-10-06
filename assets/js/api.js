fetch('https://opentdb.com/api.php?amount=10').then(function(response) {
    response.text().then(function(text) {
        let response = JSON.parse(text);
    });
});