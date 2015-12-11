/**
  * login.js
  * jQuery JavaScript Library v1.10.2
  * Contains header.php for the widget: Login With Ajax 
  * Login wiht ajax: https://wordpress.org/plugins/login-with-ajax/
*/
   
$(document).ready(function() {
	$(".login-closed").hide();
	$('.login-open').click(function() {
	    $('.login-closed').toggle();	    
	});
});