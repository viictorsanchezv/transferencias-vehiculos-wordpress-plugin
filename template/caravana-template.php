
        <!-- Marca  -->
        <div class="form-group">
            <label for="formarca">Marca</label>
            <input type="text" name='marca' placeholder='Ej: Sterckeman' class="form-control" id="marca-caravana" aria-describedby="marca-caravana">
        </div>

        <!-- Modelo  -->
        <div class="form-group">
            <label for="formarca">Modelo</label>
            <input type="text" name='modelo' placeholder='Ej: Starlett' class="form-control" id="modelo-caravana" aria-describedby="modelo-caravana">
        </div>

        
        <!-- Precio de venta -->
        <label for="basic-precio">Precio de venta</label>
        <div class="input-group mb-3 w-100">
            <input name='precio' type="number" placeholder='32.990' class="form-control" id="precio-caravana" aria-describedby="basic-precio">
        </div>   

        
         <!-- fecha matriculacion -->
        <div class="form-group">
            <label for="exampleInputEmail1">Fecha de la primera matriculaci&oacuten</label>
            <input type="date" class="form-control" id="date-caravana" aria-describedby="date-caravana">
        </div>
       

        <!-- datos adicionales -->
        <div id='caravana-adicional' style='display:none;'>
           
            <!-- datos del comprador -->
            <div class='row mt-4'>
              <!-- propiedad vehiculo -->
              <div class='col-12 col-md-6 col-lg-6 '>
                <p>¿Propiedad del veh&iacuteculo?</p>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="propiedad" id="propiedad1" checked value='true'> Soy el vendedor
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="propiedad" id="propiedad2" value='false'> Soy el comprador
                  </label>
                </div>
              </div>
    
             <!-- factura del vehiculo -->
              <div class='col-12 col-md-6 col-lg-6 '>
                <p class='mb-0'>¿El vendedor es empresa o aut&oacutenomo y emite factura de venta del veh&iacuteculo? </p>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="factura-caravana">
                  <label class="custom-control-label" for="factura-caravana">No</label>
                </div>
              </div>
              
            </div>
    
            <!-- gestion, informe, provincia -->
            <div class='row mt-2'>
              
              <div class='col-12 col-md-6 col-lg-6 '>
                <p>¿Gestión completa?</p>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary">
                    <input type="radio" name="gestion" id="gestion1" checked value='true'> S&iacute, gesti&oacuten completa
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="gestion" id="gestion2" value='false'> Solo gesti&oacuten en la DGT
                  </label>
                </div>
              </div>
              
              <div class='col-12 col-md-6 col-lg-6 '>
                <p class='mb-0'>¿Obtener informe del veh&iacuteculo en la DGT? </p>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="informe-caravana">
                  <label class="custom-control-label" for="informe-caravana">S&iacute</label>
                </div>
              </div>
            </div>

             <!-- fecha venta -->
            <div class="form-group mt-5">
                <label for="forventa">Fecha de la venta</label>
                <input type="date" class="form-control" id="venta" aria-describedby="venta">
            </div>

            <!-- provincial del comprador  -->
            <div class="form-group">
                <label for="formarca">Provincia del comprador</label>
                <select class="form-control" id='provincia-caravana' name='provincia-caravana'>
                  <option value='' default> Seleccione una provincia </option>
                  <option value="valencia"> Valencia</option>
                </select>
            </div>
            
            
         </div> 

        <!-- datos adicionales del vehiculo -->
         <div id='datos-adicionales-caravana' style='display:none;' >
          <div class='row'>
            
            <div class='col-12 col-md-12 col-lg-12 text-center mt-3 align-title'>
              <p class='title-border'> Datos adicionales del veh&iacuteculo</p>
            </div>
                <!-- matricula del vehiculo -->
            <div class='col-12 col-md-6 col-lg-6'>
              <label for="basic-matricula">Matr&iacutecula del veh&iacuteculo</label>
              <div class="input-group mb-3 w-100">
                <input name='matricula' type="text" placeholder='Ejemplo: 3990 WDS' class="form-control" id="basic-url" aria-describedby="basic-matricula">
              </div>   
            </div>
                <!-- Km -->
            <div class='col-12 col-md-6 col-lg-6'>
              <label for="basic-km">Km</label>
              <div class="input-group mb-3 w-100">
                <input name='km' type="number" placeholder='32.990' class="form-control" id="basic-km" aria-describedby="basic-km">
              </div>   
            </div>
            <!-- serial chasis -->
            <div class='col-12 col-md-6 col-lg-6'>
              <label for="basic-chasis">Serial del chasis</label>
              <div class="input-group mb-3 w-100">
                <input name='chasis' type="text" placeholder='DS5421ASD8536400A' class="form-control" id="basic-chasis" aria-describedby="basic-chasis">
              </div>   
            </div>

            <!-- servicio destinaba -->
            <div class='col-12 col-md-6 col-lg-6'>
              <div class="form-group">
                  <label for="formservicio_destinaba">Servicio al que se destinaba el veh&iacuteculo</label>
                  <select class="form-control" id="servicio-destinaba">
                    <option value='' default> - Servicio -  </option>
                    <option value="taxi"> Taxi </option>
                  </select>
              </div> 
            </div>

            <!-- cambio servicio -->
            <div class='col-12 col-md-6 col-lg-6'>
                  <p class='mb-0'>¿Es un cambio de servicio?  </p>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name='cambio' class="custom-control-input" checked id="cambio">
                    <label class="custom-control-label" for="cambio_si">S&iacute</label>
                  </div>
            </div>

            <!-- servicio destinara -->
            <div class='col-12 col-md-6 col-lg-6 mb-3'>
                <label for="formservicio_destinara">Servicio al que se destinar&aacute el veh&iacuteculo</label>
                <select class="form-control" id="servicio-destinara">
                  <option value='' default> - Servicio -  </option>
                  <option value="taxi"> Taxi </option>
                </select>
            </div>

          </div>
          
          <!-- datos adicionales de la transferencia -->
          <div class='row'>
            <div class='col-12 col-md-12 col-lg-12 text-center mt-3 align-title'>
              <p class='title-border'> Datos adicionales de la transferencia</p>
            </div>

        
            <!-- ficha tecnica -->
            <div class='col-12 col-md-6 col-lg-6 mt-4'>
              <p class='mb-0'>¿Cambios en la ficha t&eacutecnica de ITV? </p>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name='ficha_tecnica'checked id="ficha_tecnica">
                <label class="custom-control-label" for="ficha_tecnica_si">S&iacute</label>
              </div>
            </div>

            <!-- alta del vehiculo -->
            <div class='col-12 col-md-6 col-lg-6 mt-4'>
              <p class='mb-0'>Alta del veh&iacuteculo </p>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name='alta_vehiculo' checked id="alta_vehiculo">
                <label class="custom-control-label" for="alta_vehiculo_si">S&iacute</label>
              </div>
            </div>

              <!-- herencia -->
            <div class='col-12 col-md-6 col-lg-6 mt-4'>
              <p class='mb-0'>¿Es una herencia? </p>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name='herencia' checked id="herencia">
                <label class="custom-control-label" for="herencia_si">S&iacute</label>
              </div>
            </div>

          </div>
         </div> 