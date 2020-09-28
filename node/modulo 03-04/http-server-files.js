const http = require("http");
const fs = require("fs");

http.createServer((request, response) => {

    console.log(request.method);

    if (request.url == '/') {
        fs.readFile('./index.html', 'UTF-8', (err, data) => {
            response.writeHead(200, { 'Content-Type': 'text/html' });
            response.end(data);
        });
    } else {
        response.writeHead(404, { 'Content-Type': 'text/plain' });
        response.end('Error 404: Page not found.');
    }

}).listen(9000);

console.log("Listening:")