const express = require('express');
let app = express();
let router1 = require('./router1');
const port1 = 8080;
const port2 = 8081;

app.use('/api/', router1);

app.listen(port1, function () {
    console.log('Example app listening on port ' + port1);
})

app.listen(port2, function () {
    console.log('Example app listening on port ' + port2);
})