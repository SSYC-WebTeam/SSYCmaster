/**
  * login.js
  * jQuery JavaScript Library v1.10.2
  * Contains header.php for the widget: Login With Ajax 
  * Login wiht ajax: https://wordpress.org/plugins/login-with-ajax/
*/
$(window).load(function() { // enable function upon window load
    $(".login-open").click(function() { // when link is clicked...
    $(".login-closed").toggle(); // ... open or close the navigation list
    });
});
