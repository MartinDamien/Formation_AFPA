const express = require('express'); // import express
const app = express(); // create express app
const port = 3030; // define port


const cors = require("cors"); // import cors
// cors evite les erreurs de cross origin

//middleware
app.use(express.json()); // parse json data

app.get('/',function(req,res){
    res.sendFile(__dirname + '/clientphp.html');
})
app.get("/nom", function (req, res) {
  res.json({ nom: "toto", age: "12" });
});

app.get('/api/users', function (req, res) {
  res.sendFile(__dirname + '/adresse.php');
})

app.get('api/encode', function (req, res) {
    res.sendFile(__dirname + '/encode.php');
})

app.listen(3000, () => {
  console.log("server started on http://localhost:3000");
});
