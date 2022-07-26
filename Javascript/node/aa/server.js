const express = require("express"); // Import express
const mongoclient = require("mongodb").MongoClient; // mongodb client
const port = 3030; // Port to listen on

let db; // Database
mongoclient.connect("mongodb://localhost:27017/", (err, connection) => {
  db = connection.db("dwwm"); // Connect to dwwm database
  console.log("Connected to mongodb"); // If great succes, log it :)
});

const app = express(); // Create express app
app.use(express.json()); // Use json

//Route pour afficher tous les animaux
app.get("/animeaux", (req, res) => {
  db.collection("animeaux").find().toArray((err, docs) => {
      res.json(docs);
    });
});

app.get("/animeaux/:nom", (req, res) => {
  db.collection("animeaux").find({ nom: req.params.nom }).toArray((err, docs) => {
      res.json(docs);
    });
});


let ani1 = { name: "chat", poid: 5, age: 2 };
let ani2 = { name: "chien", poid: 10, age: 4 };
let ani3 = { name: "loup", poid: 15, age: 6 };

app.get("/insertAnimal", (req, res) => {
  try {
    db.collection("animeaux").insertMany([ani1, ani2, ani3], (err, docs) => {
      res.json(docs);
    });
  } catch (err) {
    console.log({ message: err });
  }
});

app.listen(port, () => {
  console.log(
    "Server is running on http://localhost:" + port +", press Ctrl+C to stop, or Ctrl+Shift+C to quit."
  );
});
