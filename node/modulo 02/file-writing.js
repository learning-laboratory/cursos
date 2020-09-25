const fs = require('fs');

fs.writeFile('data.html', 'Hello this file has jus been created', 'UTF-8', (err) => {
    if (err) {
        return err;
    }
    console.log('The file has been saved')
});

fs.appendFile('data.html', `\nMore content`, 'UTF-8', (err) => {
    if (err) {
        return err;
    }
    console.log('The file has been appended.')
});