// NODE est un gestionnaire d'evenements
let events = require("events");

//creation d'un event
let eventEmitter = new events.EventEmitter();

// l'event écoute la reception d'un event "message"
eventEmitter.on("message", function () {
  console.log("message recu");
});

console.log("j'ecoute l'event message");

//emision d'un event "message"
setTimeout(function () {
  eventEmitter.emit("message");
}, 2000);

// commande du terminal: node exo3.js