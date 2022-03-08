
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }



  const nav = document.querySelector('#navbar');
  let navTop = nav.offsetTop;
  
  function fixedNav() {
    if (window.scrollY >= navTop) {    
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');    
    }
  }
  
  window.addEventListener('scroll', fixedNav);

  // When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};

// Get the navbar
// var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
// var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// }