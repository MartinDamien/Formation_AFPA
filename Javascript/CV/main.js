$(document).ready(function(){
    $.getJSON('magasin.json', function(data){
    });
})
/*var ul = $('<ul>').appendTo('body');
var json = { items: ['item 1', 'item 2', 'item 3'] };
$(json.items).each(function(index, item) {
    ul.append(
        $(document.createElement('li')).text(item)
    );
});*/

    document.getElementById("app").innerHTML = `
      <h1 class="app-title">Pets (${petsData.length} results)</h1>
      ${petsData.map(petTemplate).join("")}
      <p class="footer">These ${petsData.length} pets were added recently. Check back soon for updates.</p>
    `;
    
    function petTemplate(pet) {
      return `
        <div class="animal">
        <img class="pet-photo" src="${pet.photo}">
        <h2 class="pet-name">${pet.name} <span class="species">(${pet.species})</span></h2>
        <p><strong>Age:</strong> ${age(pet.birthYear)}</p>
        ${pet.favFoods ? foods(pet.favFoods) : ""}
        </div>
      `;
    }
    
