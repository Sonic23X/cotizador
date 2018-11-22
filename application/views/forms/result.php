
    <br>
    <br><br><br><br><br><br>
    <div class="clearfix">

    </div>
    <div class="message">
      <h1 class="text-center">Resultados</h1>

      <h4 class="text-center">Se <?php if($panel_320 == 1){ ?>necesita 1 panel solar <?php } else { ?>
        necesitan <?= $panel_320 ?> paneles solares <?php } ?> para satisfacer tus necesidades energeticas</h4>
      <h4 class="text-center">teniendo un costo de $<?= $dinero ?>  USD*. </h4>
      <br><br>
      <center>
        <input type="button" data-toggle="modal" data-backdrop="static" data-target="#aviso"
          name="<?= $folio ?>" id="send_cot" class="btn btn-primary form-control" value="¡Lo quiero!**">
      </center>
      <br><br><br><br>
    </div>
    <div id="little_char">

      <span>* Precio sujeto al cambio de moneda EstadoUnidense a Mexicana</span>
      <br>
      <span>** Al enviar tu cotización aceptas nuestros terminos y condiciones</span>

    </div>
