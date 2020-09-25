const emitter = require('./module/SendEmail');

emitter.on('emailEvent', (message) => {
    console.log(`Email: ${message}`);
});

emitter.emit('emailEvent', 'Send email for user after registration.');