
$(document).ready(function(){

  $('#formulario').submit(function(event) {
    event.preventDefault();

    var json;

    var name = $('#name').val();
    var email = $('#email').val();
    var telefono = $('#phone').val();
    var direccion = $('#dir').val();

    var tipo_con = $('#tcontrato').val();
    var periodo = $('#periodo').val();
    var actual = $('#con_act').val();
    var anterior = $('#con_ant').val();

    var envio = "nombre=" + name + "&email=" + email + "&tel=" + telefono
    + "&direccion=" + direccion + "&tipo_con=" + tipo_con + "&periodo=" +
    periodo + "&actual=" + actual + "&anterior=" + anterior;

    $.ajax({
      url: 'http://localhost/solar/cotizador/Cotizar/Calculo', //modificar
      type: 'POST',
      data: envio,
      success: function(response)
      {
        window.location.href = response;
      }
    });

  });

});
