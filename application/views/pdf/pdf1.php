<!DOCTYPE html>
<?php $mes = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio',
                   8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'); ?>
<html lang="es" dir="ltr">
  <head>
    <title>Cotiza tu sistema de paneles solares - Mercado Solar</title>
    <meta charset="utf-8">

<style type='text/css'>
  body{
    width: 100%;
    background: #ffffff;
  }
  div{
    margin: 15px 25px 0px 25px;
  }
  table{
    width: 100%;
    text-align: center;
  }
  table #datos{
    margin-left:50px;
}
#precio th, #precio td{
  padding-top: 5px;
  padding-bottom: 5px;
}
p-5{
  padding: 5px;
}
.py-5{
  padding-top: 5px;
  padding-bottom: 5px;
}
.p-10{
  padding: 5px 10px 5px 10px;
}
.p-20{
  padding: 5px 20px 5px 20px;
}
.p-40{
  padding: 5px 40px 5px 40px;
}
.p-50{
  padding: 5px 50px 5px 50px;
}
.p-115{
  padding: 5px 115px 5px 115px;
}
.p-xl{
  padding: 0px 420px 0px 3px;
}
.ml-10{
  margin-left: 10px;
}
.mr-10{
  margin-right: 10px;
}
.mt-10{
  margin-top: 10px
}
.mb-10{
  margin-bottom: 10px;
}
p{
  margin-top: 3px;
  margin-bottom: 3px;
}
.text-brown{
  text-align: center;
  color:#be8f00;
  font-family: Arial;
}
.fs-17{
  font-size: 17px;
}
.fs-15{
  font-size: 15px;
  font-weight: 600;
}
.fs-14{
  font-size: 14px;
  font-weight: 800;
}
.fs-11{
  font-size: 11px;
}
.fs-10{
  font-size: 10px;
}
.text-grey{
  color: grey; font-size: 12px; margin-left:20px;
}
.text-center{
  text-align: center;
}
.title{
  text-align: center;
  color: #be8f00;
  font-family: Arial;
}
  .bg-head{
    background-color: #bebebe;
    border: 1px solid #bebebe;
  }
  .bg-body{
    background-color: #ccc4c4;
  }
  .border-brown{
    border-bottom: 1px solid #8c6308;
  }
  .footer{
    margin-top: 150px;
  }
  a{
    text-decoration: none;
    color: rgb(75, 77, 75);
  }
  </style>
  </head>
  <body>
    <div >
      <hr>
        <table>
          <tr>
            <td rowspan="5">
              <img src="D:/xampp/htdocs/solar/cotizador/resources/img/logo.jpg" style="margin-left: 20px;" width="150"height="150" >
            </td>
            <td class="p-20"></td>
            <td>
              <h3 class="title">MERCADO SOLAR S DE RL DE CV</h3>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              Campo de tiro 402 Col. Adolfo López Mateos
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              C.P. 42094 Pachuca de soto, Hidalgo, México
            </td>
          </tr>
          <tr>
            <td></td>
            <td class="text-grey">
            EIM170223K29
            </td>
          </tr>
          <tr>
            <td></td>
            <td class="text-brown fs-14">
              Telefono: 771-280-2845 &nbsp;&nbsp;&nbsp;
              Correo Electronico: contacto@mercadosolar.com.mx
            </td>
          </tr>
        </table>

      <hr>
    </div>
    <div>
      <h4 class="title fs-17">Información del cliente</h4>
      <table>
        <tr>
          <td class="p-20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td class="text-brown p-50 fs-15">Folio:</td>
          <td class="text-brown p-40 fs-15">Nombre del cliente:</td>
          <td class="text-brown p-40 fs-15">Direccion:</td>
          <td class="text-brown p-20 fs-15">Tarifa:</td>
        </tr>
        <tr>
          <td class="p-20"></td>
          <td><?= json_decode(json_encode($_id), true)['$id'] ?></td>
          <td><?= $nombre ?><</td>
          <td><?= $direccion ?></td>
          <td><?= $tarifa ?></td>
        </tr>
        <tr>
          <td class="p-20"></td>
          <td class="text-brown p-10 fs-15">Fecha:</td>
          <td colspan="2" class="text-brown p-10 fs-15">Correo Electronico:</td>
          <td class="text-brown p-10 fs-15">Telefono:</td>
        </tr>
        <tr>
          <td class="p-20"></td>
          <td>
             <?= date('j') . " de " . $mes[date('m')] . " del " . date('Y') ?>
          </td>
          <td colspan="2"><?= $correoElectronico ?></td>
          <td><?= $telefono ?></td>
        </tr>
      </table>
      <br>
      <hr>
    </div>
    <div>
      <h4 class="title fs-17">Resultados de la cotización:</h4>
