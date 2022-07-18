let user = [
    {firstname: 'John', lastname: 'Doe'},
    {firstname: 'Jane', lastname: 'Doe'},
    {firstname: 'Jack', lastname: 'Doe'},
]

let compose = user.map(function(element){
    return `${element.firstname} ${element.lastname}`
})

console.log(compose)

let age = [32,33,14,25,19,22,17,20,29,31,35,30,28]

const result = age.filter(function(element){
    return element >= 18
})

console.log(result)