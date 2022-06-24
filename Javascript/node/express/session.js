const express = require(`express`);
const cookieparser = require(`cookie-parser`);
const session = require(`express-session`);
const mysqlStore = require(`express-mysql-session`);
let app = express();

// - option de connection à la base de données - //

let option = {
    host: `localhost`,
    port: 3306,
    user: `root`,
    password: ``,
    database: `sessiontest`
}

let sessionStore = mysqlStore(option);

app.use(session({
    secret: `secret`,
    store: sessionStore,
    resave: true,
    saveUninitialized: true,
    cookie: {maxAge: 60000}
}))

// - SESSION - //
// app.use(cookieparser());
// app.use(
//   session({
//     secret: `123456789`,
//     resave: true,
//     saveUninitialized: true,
//   })
// );

// - ROUTES - //
app.get(`/`, (req, res) => {
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
});

app.get(`/efface`, (req, res) => {
    res.clearCookie(`nom`);
    res.send(`cookie effacée`);
})

app.listen(3000, () => {
    console.log(`server demarer, http://localhost:3000`);
});
