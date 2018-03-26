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
  const facts = [
    "Recycling one aluminum can saves enough energy to run a TV for three hours -- or the equivalent of a half a gallon of gasoline.",
    "350, 000 aluminum cans are produced every minute!",

    "More aluminum goes into beverage cans than any other product.",

    "Once an aluminum can is recycled, it can be part of a new can within six weeks.",

    "Because so many of them are recycled, aluminum cans account for less than 1% of the total U.S.waste stream, according to EPA estimates.",

    "During the time it takes you to read this sentence, 50, 000 12- ounce aluminum cans are made.",

    "An aluminum can that is thrown away will still be a can 500 years from now!",
    "There is no limit to the amount of times aluminum cans be recycled.",

    "Aluminum can manufacturers have been making cans lighter -- in 1972 each pound of aluminum produced 22 cans; today it yields 29 cans.",

    "We use over 80,000,000,000 aluminum pop cans every year.",

    "At one time, aluminum was more valuable than gold!",

    "A 60- watt light bulb can be run for over a day on the amount of energy saved by recycling 1 pound of steel.In one year in the United States, the recycling of steel saves enough energy to heat and light 18, 000, 000 homes!",

    "Every ton of recycled steel saves 2, 500 pounds of iron ore, 1, 000 of coal, and 40 pounds of limestone."
  ];
  
  let randomly_picked = facts[Math.floor((Math.random() * facts.length))];
  return randomly_picked
}
