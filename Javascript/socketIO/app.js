const express = require('express');
const app = express();
const server = require('http').createServer(app);
const path = require('path');
const io = require('socket.io')(server);


app.use(
    express.static(path.join(__dirname, '/public'))
)

io.on('connection', (socket) => {
    console.log(`client connecter. socket id: ${socket.id}`);
    socket.on('chat message', (msg) => {
        io.emit('chat message', msg); 
    })
    socket.on('disconnect', () => {
        console.log(`un client s'est deconnecter`)
    })
})

const port = process.env.PORT || 3000;
server.listen(port, () => {
    console.log(`server is running on http://localhost:${port}`);
})