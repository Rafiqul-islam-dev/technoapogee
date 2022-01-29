
$( document ).ready(function() {

  


window.onscroll = function () { myFunction() };

var navbar = document.querySelector(".product-nav-main");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}

});


window.addEventListener("scroll", function () {
  var header = document.querySelector("#header-page");
  header.classList.toggle("stickyMenu", window.scrollY > 150);
});


function multiplyBy() {
  num1 = document.getElementById("totalStu").value;
  // num2 = document.getElementById("secondNumber").value;
  document.getElementById("result").innerHTML = num1 * 15;
}

function myFunction() {
  var element = document.querySelector("#header-page");
  element.classList.toggle("moblie-menu");
}

/*=============== SHOW MENU ===============*/
/*=============== Core ===============*/

/*=============== HOME SWIPER ===============*/



/*=============== CHANGE BACKGROUND HEADER ===============*/

/*=============== NEW SWIPER ===============*/

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/

/*=============== SHOW SCROLL UP ===============*/

/*=============== SCROLL REVEAL ANIMATION ===============*/
