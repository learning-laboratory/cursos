const WS = new WebSocket('ws://localhost:9000');

WS.onmessage = (payload) => {
    console.log(payload.data);
};

document.forms[0].onsubmit = () => {
    let input = document.getElementById("message")
    console.log(input.value);
    WS.send(input.value)
};