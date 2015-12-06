/**
  * Toggle.js
  *
  * Contains header.php for toggle navigation 
  *
*/
$(window).load(function() { // enable function upon window load
    $("#toggle-icon").click(function() { // when link is clicked...
    $("#nav-toggle").toggle(); // ... open or close the navigation list
    });
});
