$(document).ready(function () {
  $('.parallax').parallax();
  $('.sidenav').sidenav();
  $(".dropdown-button").dropdown();  
  $('.tap-target').tapTarget();
});


$("#facts_generator").on('click', function(){ 
  alert(random_fact());
});

function random_fact(){
  console.log("generating random fact");
  let facts = [1,2,3,4,"zeyu sucks"];
  let randomly_picked = facts[Math.floor((Math.random() * facts.length))];
  return randomly_picked
}