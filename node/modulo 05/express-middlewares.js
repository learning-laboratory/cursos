const { request } = require('express');
const express = require('express');

let app = express();

app.use('/css', express.static(__dirname + "/public"));

app.use((request, responce, next) => {
    console.log('Middleware');
    next();
});

app.get('/', (request, responce) => {
    responce.send(`<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/css/style.css">
        <title>Document</title>
    </head>
    
    <body>
        <h4>Start</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati quasi porro eveniet culpa, ipsum architecto nisi unde aliquid animi maiores atque neque, voluptatibus alias provident? Obcaecati cum rerum enim laborum.</p>
    </body>
    
    </html>`);
});

app.listen(9000);
console.log("Start");