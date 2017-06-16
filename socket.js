var serve = require('http').Server();
var io = require('socket.io')(serve);
var Redis = require('ioredis');
var redis = new Redis();
redis.subscribe('clicked-cell-channel');
redis.on('message', function(channel, message) {
	console.log(channel, message);
	message = JSON.parse(message);
	io.emit(channel + ':' + message.event, message.data);
});


serve.listen(8081);
