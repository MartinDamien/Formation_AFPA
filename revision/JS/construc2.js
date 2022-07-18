
function Car(name, modele, combustible) {
    this.name = name;

    this.modele = modele;

    this.combustible = combustible;

    Car.prototype.demarrer = function () {
      console.log(`${this.name} ${this.modele} démarre`);
    };

    Car.prototype.accelerer = function () {
      console.log(`${this.name} ${this.modele} accelere`);
    };

    Car.prototype.freiner = function () {
      console.log(`${this.name} ${this.modele} freine`);
    };

    Car.prototype.stop = function () {
      console.log(`${this.name} ${this.modele} stop`);
    };
  }
