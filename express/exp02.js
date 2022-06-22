const express = require("express"); // npm install express --save
const port = 8080;

const app = express();

app.use(express.urlencoded({ extended: false }));
app.use(express.json());

//-- Routage --
app.get("/", function (req,rep) {
  rep.json({ nom: "toto", age: "154" });
});

app.get('/hello', function (req,rep) {
    rep.send('Hello World!');
});

app.listen(port, function () {
  console.log(
   // "Server started on port " + port + " go to http://localhost:" + port
  );
});
