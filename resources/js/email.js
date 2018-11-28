  $(document).ready(function(){

  $('#send_emails').click(function() {

    window.open("http://localhost/solar/cotizador/Cotizar/PDF/" + $('#send_cot').attr('name'), "Cotizacion", "width=800, height=600");

    $.ajax({
      url: 'http://localhost/solar/cotizador/Cotizar/Email/' + $('#send_cot').attr('name'),
      success: function(response)
      {


        $('.message').fadeOut(500, function()
        {
          $('.next_men').fadeIn(10);
        });

      }
    });

  });

});
