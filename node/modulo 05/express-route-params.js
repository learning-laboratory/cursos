const express = require('express');
let app = express();
const port = process.env.PORT || 9000;

app.get('/', (request, responce) => {
    responce.send("Home");
});

app.get('/post/:id/category/:category_id', (request, responce) => {
    responce.send(`
        Params(id): ${request.params.id}
        <br>
        Parms(category_id): ${request.params.category_id}
    `);
});


app.listen(port);
console.log("start")