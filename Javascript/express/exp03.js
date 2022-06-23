const express = require("express"); // npm install express --save
const jsonfile = require("jsonfile"); // npm install jsonfile --save
const fs = require("fs-extra"); // npm install fs --save
const port = 8080;

const bdd = require("./models/controllerpool");

const app = express();

app.use(express.urlencoded({ extended: false }));
app.use(express.json());

//-- on declare le repertoire des vues (views) --//
app.set('views', __dirname + '/views');
//-- on declare le moteur de template à utiliser(ici ejs pour embedded js ) --//
app.set('view engine', 'ejs');


//-- Routage --//
app.get("/", function (req,res) {
  res.render('index');
});

app.get('/hello', function (req,res) {
    res.send('Hello World!');
});

app.get("/data1", function (req,res) {
  res.render('data1',{message:"Hello World",cpt:12});
});

app.get("/data2/:etudiant/:id", function (req,res) {
  res.render('data2',{etudiant:req.params.etudiant,id:req.params.id});
});

app.get("/data3", function (req,res) {
  jsonfile.readFile("donnes.json","utf-8", function(err, data) {
    res.render('data3',{donnes:data})
  })
})

app.get('/data4', function (req,res) {
  bdd.findAll("espece",function(espece){
    res.render('data4',{especes:espece});
  });
});

app.get('/form', function (req,res) {
  res.render('form1');
})

app.post('/add_espece', function (req,res) {
  console.log(req.body);
  bdd.add("espece",req.body,function(espece){
    res.render('data4',{especes:espece});
}); 
})

app.listen(port, function () {
  console.log(
   "Server started on port " + port + ", go to http://localhost:" + port
  );
});
