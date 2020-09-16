// main.js file
const scrollToUp = document.getElementById('scroll_to_up');

// Scroll to up using scrollTO event
function scrollToTop() { 
    window.scrollTo(0, 0); 
  } 

// Scroll to up on link click
scrollToUp.addEventListener('click', scrollToTop);