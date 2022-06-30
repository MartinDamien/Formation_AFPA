const express = require("express"); // import express
const cors = require("cors"); // import cors
// cors evite les erreurs de cross origin

const app = express(); // create express app
const port = 3030; // define port
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

app.listen(port, () => {
  console.log('Server is running on http://localhost:' + port + ', press Ctrl+C to stop, or Ctrl+Shift+C to quit.');
})
