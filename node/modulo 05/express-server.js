const express = require('express');
let app = express();
const port = process.env.PORT || 9000;

app.get('/', (request, responce) => {
    responce.send("<h1>Hello Man</h1>")
});

app.get('/api', (request, responce) => {
    // responce.send("<h1>Go api</h1>");
    responce.json({
        name: "MarioM3"
    });
});

app.listen(port);
console.log("start")