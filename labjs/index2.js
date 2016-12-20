var remit = require('redis-eventemitter');
var pubsub = remit({
    port: 7777,
    host: '127.0.0.1'
});

console.log('Server Up!');
pubsub.on('testing', function(channel, payload) {
    console.log(channel, payload);
});