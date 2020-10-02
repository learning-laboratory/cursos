const express = require('express');
const bodyParser = require('body-parser');

let app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.use('/assets', express.static(__dirname + "/public"));

app.use((request, responce, next) => {
    console.log('Middleware');
    next();
});

app.post('/post', (request, responce) => {
    console.log(`Titulo: ${request.body}`);

});

app.listen(9000);
console.log("Start");