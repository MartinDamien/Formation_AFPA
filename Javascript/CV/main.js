$(document).ready(function(){
    $.getJSON('resume.json', function(data){
        console.log(data);
    });
})