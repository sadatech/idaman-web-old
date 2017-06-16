var app = require('express')();
var serve = require('http').Server(app);
var io = require('socket.io')(serve);

serve.listen(3000);

app.get('/', function(req, res) {
	res.sendFile(__dirname + '/index.html');
});
io.on('connection', function(socket) {
	// socket.on('chat.message', function(msg) {
	// 	io.emit('chat.message', msg);
	// });
	console.log("socket bisa");
})