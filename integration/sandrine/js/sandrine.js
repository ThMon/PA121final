console.log("pof");
let burger = document.querySelector(".toggle-menu");
let icon = document.querySelector(".toggle-menu i");
//console.log(burger);
let navigation = document.querySelector("header");
//console.log(navigation);
function classToggle(event) {
    event.preventDefault();
    navigation.classList.toggle("nav-is-showing");
    icon.classList.toggle("fa-times");
}
burger.addEventListener("click", classToggle);



var gogo = document.querySelector(".nav-main");
console.log(gogo);

function alertTrigger(){


}

gogo.addEventListener("click", classToggle)
