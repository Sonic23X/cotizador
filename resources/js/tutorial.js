$(document).ready(function() {
var imagen="";
var text;
var dir = $('#img-tuto').attr('src');
  $('.tuto').click(function () {
    switch ($(this).attr('name')) {
        case 'tarifa':
            imagen="tarifa.jpg";
            text="";
             break;
        case 'C-actual':
            imagen="lectact.jpg";
            text="";
             break;
        case 'C-anterior':
            imagen="lectant.jpg";
            text="";
             break;
        case 'periodo':
            imagen="periodo.jpg";
            text="<br>Si tu recibo de luz marca una cantidad de días menor a 31 días tu periodo de consumo es mensual, de lo contrario será bimestral.";
             break;
        default:
    }
    $('#img-tuto').attr('src', dir + imagen);
    document.getElementById("text-tuto").innerHTML = text;
});
});
