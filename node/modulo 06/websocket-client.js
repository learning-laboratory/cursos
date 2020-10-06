const WS = new WebSocket('ws://localhost:9000');

WS.onmessage = (payload) => {
    displayMessage(payload.data);
};
WS.onopen = () => {
    console.log('CONNECTION OPEN');
};
WS.onclose = () => {
    console.log('CONNECTION CLOSE');
};

function displayMessage(message) {
    let h1 = document.createElement('h1');
    h1.innerText = message;
    document.querySelector('div.message').appendChild(h1);
}
document.forms[0].onsubmit = () => {
    let input = document.getElementById("message")
    console.log(input.value);
    WS.send(input.value)
};