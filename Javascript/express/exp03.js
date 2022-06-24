const express = require("express"); // npm install express --save
const jsonfile = require("jsonfile"); // npm install jsonfile --save
const fs = require("fs-extra"); // npm install fs --save
const bcrypt = require('bcrypt'); // npm install bcrypt --save
const cookieparser = require(`cookie-parser`); // npm install cookie-parser --save
const session = require(`express-session`); // npm install express-session --save 
const mysqlStore = require(`express-mysql-session`); // npm install express-mysql-session --save

const bdd = require("./models/controllerpool");
const port = 8080;
const app = express();

// - option de connection à la base de données - //

let option = {
  host: `localhost`,
  port: 3306,
  user: `root`,
  password: ``,
  database: `animal1`
}

let sessionStore = mysqlStore(option);

app.use(session({
  secret: `secret`,
  store: sessionStore,
  resave: true,
  saveUninitialized: true,
  cookie: {maxAge: 60000}
}))


const salt = bcrypt.genSaltSync(10);


app.use(express.urlencoded({ extended: false }));
app.use(express.json());

//-- on declare le repertoire des vues (views) --//
app.set('views', __dirname + '/views');
//-- on declare le moteur de template à utiliser(ici ejs pour embedded js ) --//
app.set('view engine', 'ejs');





// Hash Password

const hash = bcrypt.hashSync('kergac29', salt);
console.log(hash);

const isValidPass = bcrypt.compareSync('kergac29', hash);
console.log(isValidPass);

//-- Routage --//
app.get("/", function (req,res) {
  if (req.session.pages_views) 
  {
    req.session.pages_views++;
    res.send(`vous avez visiter la page ${req.session.pages_views} fois`); 
  }
  else
  {
    req.session.pages_views = 1;
    res.cookie(`nom`,`dam`,{expire: 3600000});
    res.send(`bienvenue sur ma page pour la première fois`);
  }
  res.render('index');
});

app.get('/hello', function (req,res) {
    res.send('Hello World!');
});

app.get("/data1", function (req,res) {
  res.render('data1',{message:"Hello World",cpt:12});
});

app.get("/data2/:animal/:id", function (req,res) {
  res.render('data2',{animal:req.params.animal,id:req.params.id});
});

app.get("/data3", function (req,res) {
  jsonfile.readFile("donnes.json","utf-8", function(err, data) {
    res.render('data3',{donnes:data})
  })
})

app.get('/data4', function (req,res) {
  bdd.findAll("animal",function(animal){
    res.render('data4',{animaux:animal});
  });
});



app.get('/ajout_animal', function (req,res) {
  res.render('form1');
})

app.get('/modif_animal/:id', function (req,res) {
  res.render('form2',{id:req.params.id});
})



app.post('/add_animal', function (req,res) {
  bdd.add("animal",req.body,function(err){
    console.log(err)
    res.redirect('/data4');
    console.log('animal ajouté');
}); 
})

app.get('/remove/:id', function (req,res) {
  bdd.remove("animal",req.params.id,function(err){
    console.log(err)
    res.redirect('/data4');
    console.log('animal supprimée');
  })
})


app.post('/update_animal/:id', function (req,res) {
  bdd.update("animal",req.params.id,req.body,function(err){
    console.log(err)
    res.redirect('/data4');
    console.log('animal modifié');
  })
})


app.listen(port, function () {
  console.log(
   "Server started on port " + port + ", go to http://localhost:" + port
  );
});