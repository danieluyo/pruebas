var redis = require('redis'),
    remit = require('redis-eventemitter');
var sub = redis.createClient({
    port: 7777,
    host: '127.0.0.1'
});
var pubsub = remit({
    port: 7777,
    host: '127.0.0.1'
});

sub.on('error', function (error) {
    console.log('ERROR ' + error)
});

sub.on('subscribe', function (channel, count) {
    console.log('SUBSCRIBE COUNT', channel, count)
});

sub.on('message', function (channel, payload) {
    console.log('INCOMING MESSAGE', channel, payload)
    pubsub.emit('testing', payload);
});


