/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// 4 Slike, jedna pored druge
function four() {
    var elements = document.getElementsByClassName("column");
    var i;
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "25%";
    }
}


//Dve slike, jedna pored druge
function two() {
    var elements = document.getElementsByClassName("column");
    var i;
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "50%";
    }
}

// Cela slika, jedna u vecem nizu
function one() {
    var elements = document.getElementsByClassName("column");
    var i;
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
}

