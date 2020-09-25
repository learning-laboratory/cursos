const { Console } = require('console');
const http = require('http');

const server = http.createServer((request, response) => {
    response.writeHead(200, { 'Content-Type': 'text/html' }); //text/plain, text/html
    response.end('Hi guys is <strong>Mario Mabande</strong>.')
});

server.listen(9000);
console.log("Server start, visit: http://localhost:9000");