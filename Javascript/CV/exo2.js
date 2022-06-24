// lecture d'un fichier de maniere ASYNCHRONE
// chargement d'un module d'IO fs-extra
// 'fin du programme' est affiche AVANT le chargement du fichier

const fs = require("fs-extra");
let data = fs.readFile("input.txt", "UTF-8", function (err, data) {
  if (err) {
    console.log(err);
  } else {
    console.log(data);
  }
});

console.log("fin du programme");

// commande du terminal: node exo2.js