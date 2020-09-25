const fs = require('fs');
//console.log(fs)
if (fs.existsSync("views") == false) {
    fs.mkdirSync("views", (err) => {
        if (err) {
            return err;
        }
        fs.writeFileSync("./views/more.html", 'This is a new directory and data.', (err) => {
            if (err) {
                return err;
            }
            console.log('Directory and file saved.');
        });
    });
}