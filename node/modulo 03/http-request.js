const https = require('https');
const fs = require('fs');

const url = 'https://jsonplaceholder.typicode.com/posts';

https.get(url, response => {

    response.setEncoding('utf-8');
    let body = '';

    response.on('data', data => {
        body += data;
    });

    response.on('end', () => {
        body = JSON.parse(body);
        console.log(
            `${body[0].title}`
        );
        // fs.writeFile('data.json', body, 'utf-8', (error) => {
        //     if (error)
        //         return error;

        //     console.log('Just pulled all the posts and created file.')
        // });
    });
});