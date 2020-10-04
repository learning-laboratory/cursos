const WS = new WebSocket('ws://localhost:9000');
document.forms[0].onSubmit = () => {
    let input = document.getElementsByName('message');
    console.log(input.value);
    WS.send(input.value)
};