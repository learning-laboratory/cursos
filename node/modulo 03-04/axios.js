const axios = require('axios');

let username = "mariomthree";

axios.get("https://api.github.com/users/" + username).then((responce) => {
    console.log(responce.data);
}).catch((err) => {
    console.log(err);
});