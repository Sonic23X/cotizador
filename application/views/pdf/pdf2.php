      <table id="precio">
      <thead class="py-5">
        <tr >
          <th class="bg-head p-20">PD</th>
          <th class="bg-head p-20">Cantidad</th>
          <th class="bg-head p-20">U.M.</th>
          <th class="bg-head p-115">Descripción</th>
          <th class="bg-head p-40">P.U.</th>
          <th class="bg-head p-40">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?= $paneles320 ?></td>
          <td>Pza.</td>
          <td>Módulo Fotovoltaico Policristalino 320 WH</td>
          <td>$144 USD</td>
          <td>$<?= $costo ?> USD</td>
        </tr>
       </tbody>
      </table>
      <hr>
    </div>
    <div>
      <table>
        <tr>
          <td class="p-xl border-brown"><span class="title fs-15"><b>Importe con letra</b></span> </td>
          <td class="text-brown p-10"><b>SUBTOTAL</b></td>
          <td class="text-center" valign="middle"><span class="bg-body p-10">$ &nbsp;&nbsp;<?= $costo ?> USD</span></td>
        </tr>
        <tr>
          <td rowspan="2" valign="middle">
            <span class="fs-17">
              <b>
                <?php
                  echo NumeroALetras::convertir(intval($costo * 1.16));
                  $decimales = explode(".", $costo * 1.16);
                  echo $decimales[1] . "/100 USD";                  
                ?>
              </b>
            </span>
          </td>
          <td class="text-brown"><h5>IVA</h5></td>
          <td class="text-center" valign="middle"><span class="bg-body p-10">$ &nbsp;&nbsp;<?= $costo * 0.16 ?> USD</span></td>
        </tr>
        <tr>
          <td class="text-brown"><h5>Total</h5></td>
          <td class="text-center" valign="middle"><span class="bg-body p-10">$ &nbsp;&nbsp;<?= $costo * 1.16 ?> USD</span></td>
        </tr>
      </table>
    </div>
    <div>
      <p class="text-brown">No incluye medidor bidireccional.</p>
      <p class="fs-11 p-10">Término de entrega EXW Pachuca. <br>Esta cotización tiene validez de 15 días hábiles, cambio de precio sin previo aviso. </p>
      <p class="text-brown fs-11">La ley del Impuesto sobre la renta , Artículo 34, Fraccion XIII , estipula que los porcentajes máximos autorizados refiriendose a activos fijos de energías renovables podrán ser deducidas al 100%.</p>
      <p class="text-center fs-10">Esta cotización es aproximada conforme a los datos proporcionados por el cliente y no constituye ningún compromiso de nuestra parte hasta la firma del contrato.</p>
    </div>
    <div class="footer">
      <table>
        <tr>
          <td class="p-xl"><a href="https://mercadosolar.com.mx/pages/terminos-y-condiciones">Términos y condiciones</a></td>
          <td class="p-50"><a href="https://mercadosolar.com.mx/pages/aviso-de-privacidad">Aviso de privacidad</a></td>
        </tr>
      </table>
    </div>

  </body>
</html>
