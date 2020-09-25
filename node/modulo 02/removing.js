const fs = require('fs');

// if (fs.existsSync('./dir')) {
//     fs.unlinkSync('./dir/index.js');
//     fs.rmdirSync('./dir');
// }

try {
    fs.unlinkSync('./dir/index.js');
    fs.rmdirSync('./dir');
} catch (error) {
    console.log("error");
}