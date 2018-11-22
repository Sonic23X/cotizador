$(document).ready(function(){

  $('#send_emails').click(function() {

    window.open("http://localhost/solar/cotizador/Cotizar/PDF/" + $('#send_cot').attr('name'), "Cotizacion", "width=800, height=600")

  });

});
