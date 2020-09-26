const https = require("https");
const http = require("http");
const fs = require("fs");

const url = 'https://jsonplaceholder.typicode.com/posts';

http.createServer((request, response) => {

    if (request.method === 'GET' && request.url === '/posts') {

        https.get(url, (httpResponse) => {

            httpResponse.on('data', data => {
                httpResponse.setEncoding("utf-8");
                console.log(data);
                response.write(data);
            });

            httpResponse.on("end", () => {
                response.end();
                console.log("It's over.")
            });

        });

    } else {
        response.writeHead(404, { 'Content-Type': 'text/plain' });
        response.end('404 : Page not found');
    }

}).listen(9000);

console.log("Server start: ")