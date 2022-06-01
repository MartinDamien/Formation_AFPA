var UnObjet = {nom: "Mon Prenom"}
console.log(UnObjet)
console.log(typeof UnObjet)
/*definir une variable*/

/*________________________________________________________________________________________________________________________________________________ */

var name = "Ayda, " ;
const greeting = "Hello " ;
let autre = "ca va ?" ;
console.log(greeting + name + autre);
/*ecrire dans le log*/

/*________________________________________________________________________________________________________________________________________________ */


var num = 5 ; 

if (num < 10) {              // si num inferieur à 10
    console.log("Small") ; 
}
else if (num < 100) {       // Sinon Si  
        console.log("Medium"); 
}
else {                     // sinon
    console.log("Large"); 
}
/*les conditions*/

/*________________________________________________________________________________________________________________________________________________ */

let liste = [4,5,6,3,4,52]; 

console.log(liste[0])
console.log(liste[3])

liste.push(25);           /*ajouter un element à une liste */
console.log(liste);

let taille = liste.length ; 
console.log("longueur tableau:" + taille);
for(let index = 0 ; index < taille ; index++ ) {
    console.log(liste[index] * 2 );
}
/*afficher individuellement chaque element d'une liste et les modifier(multiplier)*/

/*________________________________________________________________________________________________________________________________________________ */

console.log("chainedecaractere".slice(4,9))
//separer une chaine de caractere//

/*________________________________________________________________________________________________________________________________________________ */

console.log("coconut".indexOf("u"))
//afficher l'ordre d'une lettre//

/*________________________________________________________________________________________________________________________________________________ */

let phrase = "Une phase quelcomque pour l'exemple"
let word = console.log(phrase.split(" "))
console.log(word.join(" "))
//separer et assembler une chaine de caractere//

/*________________________________________________________________________________________________________________________________________________ */

const p = 'The quick brown fox jumps over the lazy dog. If the dog reacted, was it really lazy?';

console.log(p.replace('dog', 'monkey'));

const regex = /Dog/i;
console.log(p.replace(regex, 'ferret'));
//remplacer un mot dans une chaine de caractere//

/*________________________________________________________________________________________________________________________________________________ */

function multifact(facteur) {
    return
  
    function ts(number) {
      return number * facteur
    }
  }
  
  var double = multifact(2);
/*fonction "multifact"?  CODE A REVOIR*/ 

/*________________________________________________________________________________________________________________________________________________ */

function person(n, p, a, s) {  /*on defini une classe qui definit le structure de person*/
/* atributs :*/
  this.nom = n;                /*nom*/
  this.prenom = p;             /*prenom*/
  this.age = a;                /*age*/ 
  this.salaire = s;
  this.presentation = function() {
    console.log("je m'appelle " + this.prenom + " " + this.nom + ", j'ai " + this.age + " ans.Je gagne " + this.salaire + " euro.");
  }
}

let jo = new person("smith", "jo", 55, 1200);
jo.presentation();
let fred = new person("Testo", "Fred", 42, 2200);
fred.presentation(); 
/*constructeur*/

/*________________________________________________________________________________________________________________________________________________ */

let femmes = [{
  nom_produit: "robe classe", prix: 25, photo: "robe.png", },
{ nom_produit: "pantalon femmes", prix: 45, photo: "pantalonf.png", },
{ nom_produit: "t-shirt femmes", prix: 35.5, photo: "tshirt.png", },
]

for (let i = 0; i < taille; i++) {
  document.write(femmes[i].nom_produit)
}
for (let index = 0; index < femmes.length; index++) {
  document.write(femmes[index].prix + "<br>")
}
for (let index = 0; index < femmes.length; index++) {
  document.write("<img src='./images/" + femmes[index].photo> + "' alt=''>")
}
/*afficher element d'un tableau*/

/*________________________________________________________________________________________________________________________________________________ */

let femmes = [{
  nom_produit: "robe classe", prix: 25, photo: "robe.png", },
{ nom_produit: "pantalon femmes", prix: 45, photo: "pantalonf.png", },
{ nom_produit: "t-shirt femmes", prix: 35.5, photo: "tshirt.png", },
]

femmes.forEach(function(p) {
document.write(p.nom_produit+"<br>")
document.write(p.prix+"<br>")
document.write(p.photo+"<br>")
});
/*.forEach*/

/*_____________________________________________________________________________________________________________________________________________________ */
