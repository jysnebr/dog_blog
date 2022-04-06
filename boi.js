// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav-wlinks");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function dropDown(){
    var x = document.getElementById("coll-nav");
    if (x.className === "nav-wlinks"){
        x.className += " nav-res";
    } else {
        x.className = "nav-wlinks";
    }
}

function seeMore() {
  var cut = document.getElementById("cut");
  var hide = document.getElementById("readMore");
  var show = document.getElementById("btnReadMore");

  if (hide.style.display === "none") {
    hide.style.display = "inline";
    cut.style.display = "none";
    show.innerHTML = "Show Less"

  } else {
    hide.style.display = "none";
    cut.style.display = "inline";
    show.innerHTML = "Read More"
  }
}