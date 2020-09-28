const http = require('http');
const fs = require('fs');

http.createServer((request, response) => {

    let body = '';

    if (request.method === 'GET') {
        response.writeHead(200, { 'Content-Type': 'text/html' });
        fs.readFile('./http-form.html', 'UTF-8', (err, data) => {
            if (err) {
                return err;
            }
            response.write(data);
            response.end();
        });
    } else if (request.method === 'POST') {

        request.on('data', (data) => {
            body += data;
        });

        request.on('end', () => {
            response.writeHead(200, { 'Content-Type': 'text/html' });
            response.write(body, () => {
                response.end();
            });
        });
    } else {

        response.writeHead(200, { 'Content-Type': 'text/html' });
        response.end('Error 404.');
    }

}).listen(9000);

console.log("START:")