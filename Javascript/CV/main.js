let http = new XMLHttpRequest();
http.open("GET", "magasin.json", true);
http.onload = function () {
    if (this.readyState == 4 && this.status == 200) {
        let magasin = JSON.parse(this.responseText);
        var hommes = magasin[0];
        var femmes = magasin[1];
        var enfants = magasin[2];
    }
}
http.send(); 

console.log(hommes)    
/*
let output = "";
for (let categorie of hommes) {
    output += `
    <div class="produit">
    <img src="${categorie.photo}" alt="">
    <h3 class="nomproduit">${categorie.nom_produit}</h3>
    <p class="Prix">${categorie.prix}</p>
    </div>
    `;
}document.querySelector(".magasin").innerHTML = output;


 
$(document).ready(function(){
    $.getJSON('magasin.json', function(data){
    });
})
var ul = $('<ul>').appendTo('body');
var json = { items: ['item 1', 'item 2', 'item 3'] };
$(json.items).each(function(index, item) {
    ul.append(
        $(document.createElement('li')).text(item)
    );
});*/
