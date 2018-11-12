    <div class="">
      <form id="formulario">
        <br>
        <h1 class="text-center">Cotiza tu sistema</h1>
        <br>
        <h2 class="text-center">Solicita tu cotización para instalar
           tu sistema de paneles solares</h2>
           <p class="text-center">Son sólo unos sencillos pasos para obtener la cotización a tu
             medida, primero, necesitamos que registres tu información.</p>
        <hr>
        <br>
        <div class="row">
          <div class=" col-md">
            <label for="name">Nombre:</label>
            <input class="form-control" type="text" id="name" placeholder="Nombre*" required>
            <br>
            <label for="phone">Teléfono:</label>
            <input class="form-control" type="number" id="phone" placeholder="Telefono">
            <br>
          </div>
          <div class="col-md">
            <label for="email">Correo electrónico:</label>
            <input class="form-control" type="email" id="email" placeholder="Correo Electronico">
            <br>
            <label for="dir">Dirección:</label>
            <input class="form-control" type="text" id="dir" placeholder="Direccion" required>
            <br>
          </div>
        </div>
        <h3 class="text-center">Tu Consumo de luz</h3>
        <br>
        <div class="row">
          <div class="col-md">
            <label for="tcontrato">Tipo de contrato: <a class="tuto" name="tarifa" href="" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-question-circle color-black"></i></a></label>
            <select id="tcontrato" class="form-control">
              <option value="0" style="display: none">Tipo de Contrato*</option>
              <option value="1">1</option>
              <option value="1A">1A</option>
              <option value="1B">1B</option>
              <option value="1C">1C</option>
              <option value="1D">1D</option>
              <option value="1E">1E</option>
              <option value="1F">1F</option>
              <option value="DAC">DAC</option>
            </select>
            <br>
            <label for="con_act">Consumo actual: <a class="tuto" name="C-actual" href="" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-question-circle color-black"></i></a></label>
            <input class="form-control" type="number" id="con_act" placeholder="Consumo Actual*">
            <br>
          </div>
          <div class="col-md">
            <label for="periodo">Periodo de consumo: <a class="tuto" name="periodo" href="" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-question-circle color-black"></i></a></label>
            <select id="periodo" class="form-control">
              <option value="" style="display: none">Periodo de Facturación*</option>
              <option value="1">Mensual</option>
              <option value="2">Bimestral</option>
            </select>
            <br>
            <label for="con_ant">Consumo anterior: <a class="tuto" name="C-anterior" href="" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-question-circle color-black"></i></a></label>
            <input class="form-control" type="number" id="con_ant" placeholder="Consumo Anterior*">
            <br>
          </div>
        </div>
        <hr>
        <br>
        <input type="submit" id="send" class="btn btn-warning form-control">
      </form>
    </div>
