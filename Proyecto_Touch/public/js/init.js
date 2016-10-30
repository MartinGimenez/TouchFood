$(document).ready(function(){
$('.slider').slider({full_width: true});
$(".button-collapse").sideNav();
$('.modal-trigger').leanModal();
$(".button-collapse").sideNav();
var options = [ {selector: '.page-footer', offset: 50, callback: function(el) { Materialize.toast("Puedes revisar el menú completo, tenemos muchas comidas para ofrecerte!", 4000 ); } }, {selector: '.nav-wrapper', offset: 205, callback: function(el) { Materialize.toast("Aprovecha nuestras ofertas!", 2000 ); } }]; 
Materialize.scrollFire(options); 
});
