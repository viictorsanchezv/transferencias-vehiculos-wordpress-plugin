        <!-- marca -->
        <div class='col-12 col-md-5 col-lg-5'>
          <div class="form-group" style='display: flex; flex-direction: column;'>
              <label class='font-weight-bold' for="formarca">Marca <span class='text-blue'> * </span> </label>
              <select name='coche-marca' class="form-control" id="coche-marca">
              <option value='' default> Seleccione una marca </option>
              <?php foreach($marcas as $marca){ ?>
                  <option value='<?php echo $marca->term_id; ?>'><?php echo $marca->name; ?></option>
              <?php } ?>
              </select>
          </div>
        </div>
        <div class='col-12 col-md-7 col-lg-7'>
          <!-- fecha matriculacion -->
          <div class="form-group">
              <label class='font-weight-bold' for="exampleInputEmail1">Fecha de la primera matricula <span class='text-blue'> * </span> </label>
              <input type="date" class="form-control" name='coche-date' id="coche-date" aria-describedby="date">
          </div>        
        </div>
        
        <div class='col-12 col-md-5 col-lg-5'>
          <!-- combustible  -->
          <div class="form-group" id='combustible-container' style='display:block;'>
              <label class='font-weight-bold' for="forcombustible">Combustible <span class='text-blue'> * </span> </label>
              <select class="form-control" name='coche-combustible' id="coche-combustible">
                  <option value='' default> Seleccione tipo de combustible </option>
                
              </select>
          </div>
          <div class="spinner-border text-primary" role="status" id='coche-spinner-combustible' style='display: none;'>
            <span class="sr-only">Loading...</span>
          </div>  
        </div>

        <div class='col-12 col-md-7 col-lg-7'>
          <!-- modelo  -->
          <div class="form-group" id='modelo-container' style='display:flex; flex-direction: column;'>
              <label class='font-weight-bold' for="formodelo">Modelo <span class='text-blue'> * </span> </label>
              <select class="form-control" name='coche-modelo' id="coche-modelo">
                  <option value='' default> Seleccione modelo de veh&iacuteculo </option>
              </select>
          </div>
          <div class="spinner-border text-primary" role="status" id='coche-spinner-modelo' style='display: none;'>
            <span class="sr-only">Loading...</span>
          </div> 

        </div>
             <!-- datos tabla --> 
          <div class='col-12 col-md-12 col-lg-12'>
            <div id='tabla' style='display:none;'>
              <!-- Tabla informativa -->
              <table class="table">
                <thead class='w-100'>
                  <tr>
                    <th class='table-info text-center font-weight-bold' colspan="2">Datos del veh&iacuteculo</th>
                  </tr>
                </thead>
                
                <tbody class='w-100'>
                  <tr>
                    <th scope="row">Marca</th>
                    <td id='marca-tabla'></td>
                  </tr>
                  <tr>
                    <th scope="row">Modelo</th>
                    <td id='modelo-tabla'></td>
                  </tr>
                  <tr>
                    <th scope="row">Cilindrada</th>
                    <td id='cilindrada-tabla'></td>
                  </tr>
                  <tr>
                    <th scope="row">Cilindros</th>
                    <td id='cilindros-tabla'></td>
                  </tr>
                  <tr>
                    <th scope="row">Combustibles</th>
                    <td id='combustible-tabla'></td>
                  </tr>
                  <tr>
                    <th scope="row">Potencia (KW)</th>
                    <td id='potencia-tabla'></td>
                  </tr>
                  <tr>
                    <th scope="row">Potencia Fiscal</th>
                    <td id='fiscal-tabla'></td>
                  </tr>
                  <!-- <tr>
                    <th scope="row">Potencia (CV)</th>
                    <td id='cv-tabla'></td>
                  </tr> -->

                  

                </tbody>
                
              </table>
              <!-- datos del comprador -->
              
              <div class='row mt-4'>
                <div class='col-12 col-md-12 col-lg-12 mt-4'>
                  <div class='d-flex'>
                      <p class='font-weight-bold'>¿Propiedad del veh&iacuteculo? </p>
                      <div class="tooltip question-circle"> <strong> i </strong></div>
                      <span class="tooltiptext" style='width: 400px;'>Indique si usted es el vendedor o el comprador del veh&iacuteculo.</span>
                  </div>
                
                  
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="coche-propiedad" id="propiedad1" checked value='true'> Soy el vendedor
                    </label>
                    <label class="btn btn-secondary ">
                      <input type="radio" name="coche-propiedad" id="propiedad2" value='false'> Soy el comprador
                    </label>
                  </div>
                </div>

                <div class='col-12 col-md-12 col-lg-12 mt-4'>
                  <label class='font-weight-bold d-flex mb-0'>¿El vendedor es empresa o aut&oacutenomo, emite factura de venta? 
                      <div class="tooltip question-circle"> <strong> i </strong></div>  
                      <span class="tooltiptext" >Indique si el vendedor emitir&aacute una factura por la venta del veh&iacuteculo. En caso afirmativo, 
                      el sistema nos solicitar&aacute que adjuntemos la factura con su respectivo IVA.</span>
                  </label>
            
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name='coche-factura' id="coche-factura">
                    <label class="custom-control-label" id='coche-factura-label' for="coche-factura">No</label>
                  </div>
                </div>
              </div>

              <div class='row mt-2'>
                  <div class='col-12 col-md-12 col-lg-12 mt-4 ' id='gestion-container'>
                      <div class='d-flex'>  
                          <p class='font-weight-bold'>¿Gestión completa?</p>
                          <div class="tooltip question-circle"> <strong> i </strong> </div>
                          <span class="tooltiptext" >Indique el tipo de gesti&oacuten que desea realizar:
                            <br><br>
                            <strong>Gesti&oacuten completa: </strong>Se realiza el pago del Impuesto de Transmisiones Patrimoniales (ITP), as&iacute como la gesti&oacuten de la transferencia en la DGT.
                            <br><br>
                            <strong>Solamente la gesti&oacuten de la DGT: </strong>Solamente nos encargaremos de la transferencia en la DGT. Tenga en cuenta que para acceder en esta opci&oacuten tiene que haber ido previamente a 
                            Hacienda y liquidar previamente el ITP correspondiente y tendr&aacute que adjuntar el contrato de <strong>compraventa</strong> y el resguardo del pago de Hacienda del <strong>Impuesto de Transmisiones Patrimoniales.</strong>
                          </span>
                      </div>
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary">
                          <input type="radio" name="coche-gestion" id="gestion1" checked value='true'> S&iacute, gesti&oacuten completa
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="coche-gestion" id="gestion2" value='false'> Solo gesti&oacuten en la DGT
                        </label>
                      </div>
                  </div>
                  <div class='col-12 col-md-12 col-lg-12 mt-5 mb-5'>
                      <div class='d-flex'>  
                          <p class='font-weight-bold mb-0'>¿Obtener informe del veh&iacuteculo en la DGT? </p>
                          <div class="tooltip question-circle"> <strong> i </strong> </div>
                          <span class="tooltiptext" >Indique si desea que, como primer paso de la gesti&oacuten solicitemos el
                            certificado del veh&iacuteculo en la DGT. En caso contrario, deber&aacute adjuntar una copia del mismo.
                            <br><br>
                            El objetivo de pedir el informe apesar de no sea obligatorio para la transferencia es que, si existiera alg&uacuten problema para la completa transferencia,
                            se paralice en este punto el tr&aacutemite sin llegar a abonar el ITP, dinero bastante dif&iacutecil de recuperar si ya se ha satisfecho.
                            <br><br>
                            Obtener este informe agilizar&aacute todas las gestiones pues nos permite saber si el veh&iacuteculo puede ser tramitado con los datos que nos proporciona.
                          </span>
                      </div>     
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name='coche-informe' checked id="coche-informe">
                        <label class="custom-control-label" for="coche-informe" id='coche-informe-label'>S&iacute</label>
                      </div>
                  </div>
                  
                  <!-- <div class='col-12 col-md-12 col-lg-12 mt-3'>
                      <div class='d-flex'>  
                          <p class='mb-0'>¿Es un veh&iacuteculo historico? </p>
                          <div class="tooltip question-circle"> <strong> i </strong> </div>
                          <span class="tooltiptext" >Indique si el veh&iacuteculo es historico o no.
                          </span>
                      </div>     
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name='coche-historico' id="coche-historico">
                        <label class="custom-control-label" for="coche-historico" id='coche-historico-label'>S&iacute</label>
                      </div>
                  </div> -->
                  
                  
                  
              </div>

              <div class='row mt-4'>
                <div class='col-12 col-md-6 col-lg-6'>
                  <!-- fecha venta -->
                  <div class="form-group ">
                      <div class='d-flex'>  
                          <label class='font-weight-bold' for="forventa">Fecha de la venta <span class='text-blue'> * </span> </label>
                          <div class="tooltip question-circle"> <strong> i </strong> </div>
                          <span class="tooltiptext" >Fecha en la que se realiza la venta del veh&iacuteculo. </span>
                      </div>
                      <input type="date" class="form-control" name='coche-venta' id="coche-venta" aria-describedby="venta">
                  </div>

                </div>
                <div class='col-12 col-md-6 col-lg-6'>
                  <!-- provincial del comprador  -->
                  <div class="form-group">
                      <div class='d-flex'>  
                          <label class='font-weight-bold' for="forprovincia" id='provincia-label'>Provincia del comprador <span class='text-blue'> * </span></label>
                          <div class="tooltip question-circle"> <strong> i </strong></div>
                          <span class="tooltiptext">Provincia de la que reside el comprador de este parametro depende el calculo del Impuesto de Transmisiones Patrimoniales (ITP).</span>
                      </div>    
                      <select class="form-control" name='coche-provincia' id="coche-provincia">
                        <option value='' default> Seleccione una provincia </option>
                        <option value="andalucia"> Andaluc&iacutea</option>
                        <option value="aragon">    Arag&oacuten</option>
                        <option value="asturias">  Asturias</option>
                        <option value="baleares">  Baleares</option>
                        <option value="canarias">  Canarias</option>
                        <option value="cantabria"> Cantabria</option>
                        <option value="mancha">    Castilla la Mancha</option>
                        <option value="leon">      Castilla Le&oacuten</option>
                        <option value="cataluna">  Catalu&ntilde;a</option>
                        <option value="ceuta">     Ceuta</option>
                        <option value="valencia">  Comunidad Valenciana</option>
                        <option value="extremadura"> Extremadura </option>
                        <option value="galicia">   Galicia</option>
                        <option value="rioja">     La Rioja</option>
                        <option value="madrid">    Madrid</option>
                        <option value="melilla">   Melilla</option>
                        <option value="murcia">     Murcia</option>
                        <option value="navarra">     Navarra</option>
                        <optgroup label="Paises Vazco">     
                          <option value="alava">  Alava </option>
                          <option value="guipuzcoa"> Guip&uacutezcoa </option>
                          <option value="vizcaya"> Vizcaya</option>
                        </optgroup>
                      </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
      


        <!-- datos adicionales del vehiculo -->
        <div class='separator'></div>
        <div id='datos-adicionales' style='display:none;' >
          <div class='row mt-5'>
            <div class='col-12 col-md-12 col-lg-12 text-center  align-title'>
              <p class='font-weight-bold title-border'> Datos adicionales del veh&iacuteculo</p>
            </div>
                <!-- matricula del vehiculo -->
            <div class='col-12 col-md-6 col-lg-6'>
              <label  class='font-weight-bold' for="basic-matricula">Matr&iacutecula del veh&iacuteculo <span class='text-blue'> * </span> </label>
              <div class="input-group mb-3 w-100">
                <input name='coche-matricula' type="text" placeholder='Ejemplo: 3990 WDS' class="form-control" id="coche-matricula" aria-describedby="basic-matricula">
              </div>   
            </div>
            
            <!-- Km -->
            <!--<div class='col-12 col-md-6 col-lg-6'>-->
            <!--  <label for="basic-km">Km <span class='text-blue'> * </span> </label>-->
            <!--  <div class="input-group mb-3 w-100">-->
            <!--    <input name='coche-km' type="text" pattern="_[0-9]+" placeholder='32990' class="form-control" id="coche-km" aria-describedby="basic-km">-->
            <!--  </div>   -->
            <!--</div>-->
            
            
            <!-- serial chasis -->
            <div class='col-12 col-md-6 col-lg-6'>
              <label class='font-weight-bold' for="basic-chasis">N&uacutemero del bastidor <span class='text-blue'> * </span> </label>
              <div class="input-group mb-3 w-100">
                <input name='coche-chasis' type="text" placeholder='DS5421ASD8536400A' class="form-control" id="coche-chasis" aria-describedby="basic-chasis">
              </div>   
            </div>

            <!-- servicio destinaba -->
            <!--<div class='col-12 col-md-6 col-lg-6'>-->
            <!--  <div class="form-group">-->
            <!--        <div class='d-flex'>-->
            <!--            <label for="formservicio_destinaba">Servicio al que se destinaba el veh&iacuteculo <span class='text-blue'> * </span> </label>-->
            <!--            <div class="tooltip question-circle"> <strong> i </strong></div>-->
            <!--            <span class="tooltiptext">Indique el servicio al que se dedicaba el veh&iacuteculo por parte del vendedor.</span>-->
            <!--        </div>-->
            <!--        <select class="form-control" name='coche-servicio-destinaba' id="coche-servicio-destinaba">-->
            <!--            <option value='' default> - Servicio -  </option>-->
            <!--            <option value="taxi"> Taxi </option>-->
            <!--        </select>-->
            <!--  </div> -->
            <!--</div>-->

            <!-- cambio servicio -->
            <div class='col-12 col-md-6 col-lg-6'>
                <div class='d-flex'>
                    <p class='font-weight-bold mt-4'>¿Es un cambio de servicio?  </p>
                    <div class="tooltip question-circle"> <strong> i </strong></div>
                    <span class="tooltiptext">Cuando un veh&iacuteculo cambia de servicio (por ejemplo, de uso particular a uso empresarial), se aplicar&aacuten las tasas correspondientes.</span>
                </div>    
                <div class="custom-control custom-switch">
                    <input type="checkbox" name='coche-cambio' class="custom-control-input" checked id="coche-cambio">
                    <label class="custom-control-label" for="coche-cambio">S&iacute</label>
                </div>
            </div>
            
            <!-- notificacion -->
            <div class='col-12 col-md-6 col-lg-6 '>
                <div class='d-flex'>  
                    <p class='font-weight-bold mt-4'>Precio de notificaci&oacuten de venta </p>
                    <!--<div class="tooltip question-circle"> <strong> i </strong> </div>-->
                    <!--<span class="tooltiptext" >Indique si si desea que, como primer paso de la gesti&oacuten solicitemos el-->
                    <!--  certificado del veh&iacuteculo en la DGT. En caso contrario, deber&aacute adjuntar una copia del mismo.-->
                    <!--  <br><br>-->
                    <!--  El objetivo de pedir el informe apesar de no sea obligatorio para la transferencia es que, si existiera alg&uacuten problema para la completa transferencia,-->
                    <!--  se paralice en este punto el tr&aacutemite sin llegar a abonar el ITP, dinero bastante dif&iacutecil de recuperar si ya se ha satisfecho.-->
                    <!--  <br><br>-->
                    <!--  Obtener este informe agilizar&aacute todas las gestiones pues nos permite saber si el veh&iacuteculo puede ser tramitado con los datos que nos proporciona.-->
                    <!-- </span>-->
                </div>     
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" name='precio-notificacion' id="precio-notificacion">
                  <label class="custom-control-label" for="precio-notificacion" id='precio-notificacion-label'>S&iacute</label>
                </div>
            </div>

            <!-- servicio destinara -->
            <!--<div class='col-12 col-md-6 col-lg-6 mb-3' id='coche-servicio-destinara-container'>-->
            <!--    <div class='d-flex'>-->
            <!--        <label for="formservicio_destinara">Servicio al que se destinar&aacute el veh&iacuteculo <span class='text-blue'> * </span>  </label>-->
            <!--        <div class="tooltip question-circle"> <strong> i </strong></div>-->
            <!--        <span class="tooltiptext">Indique el servicio al que se  destinar&aacute el veh&iacuteculo por parte del comprador.</span>-->
                    
            <!--    </div>-->
                
            <!--    <select class="form-control" name='coche-servicio-destinara' id="coche-servicio-destinara">-->
            <!--      <option value='' default> - Servicio -  </option>-->
            <!--      <option value="taxi"> Taxi </option>-->
            <!--    </select>-->
            <!--</div>-->

          </div>
          
          <div class='separator'></div>
          <!-- datos adicionales de la transferencia -->
          <div class='row'>
            <div class='col-12 col-md-12 col-lg-12 text-center mt-3 align-title'>
              <p class='title-border'> Datos adicionales de la transferencia</p>
            </div>
            <!-- precio de venta -->
            <div class='col-12 col-md-6 col-lg-6 mt-4'>
                <div class='d-flex'>
                    <label class='font-weight-bold' for="basic-precio">Precio de compraventa <span class='text-blue'> * </span>  </label>
                    <div class="tooltip question-circle"> <strong> i </strong></div>
                    <span class="tooltiptext">Tenga en cuenta que el precio de venta no puede ser inferior al valor real del veh&iacuteculo mostrado en la tabla superior.</span>
                </div>   
              <div class="input-group mb-3 w-100">
                <input name='coche-precio' type="text" class="form-control" id="coche-precio" aria-describedby="basic-precio">
              </div>   
            </div>

            <!-- ficha tecnica -->
            <div class='col-12 col-md-6 col-lg-6 mt-4'>
                <div class='d-flex'>
                    <p class='mb-0 font-weight-bold'>¿Cambios en la ficha t&eacutecnica de ITV? </p>
                    <div class="tooltip question-circle"> <strong> i </strong></div>
                    <span class="tooltiptext">Si haz realizado en la estaci&oacuten de ITV una modificaci&oacuten sobre el veh&iacuteculo que consta en la Ficha T&eacutecnica,
                    es necesario comunicarlo a Tr&aacutefico para poder transferir.</span>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name='coche-ficha_tecnica'checked id="coche-ficha_tecnica">
                    <label class="custom-control-label" for="coche-ficha_tecnica">S&iacute</label>
                </div>
            </div>

            <!-- alta del vehiculo -->
            <div class='col-12 col-md-6 col-lg-6 mt-4'>
                <div class='d-flex'>
                    <p class='font-weight-bold mb-0'>Alta del veh&iacuteculo </p>   
                    <div class="tooltip question-circle"> <strong> i </strong></div>
                    <span class="tooltiptext">Para realizar una transferencia de un veh&iacuteculo que est&aacute dado de baja temporal es necesario darlo de alta para hacer 
                    la transferencia del mismo.</span>
                </div>
              
              
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name='coche-alta_vehiculo' checked id="coche-alta_vehiculo">
                <label class="custom-control-label" for="coche-alta_vehiculo"></label>
              </div>
            </div>

              <!-- herencia -->
            <div class='col-12 col-md-6 col-lg-6 mt-4'>
                <div class='d-flex'>
                    <p class='font-weight-bold mb-0'>¿Es una herencia? </p>
                    <div class="tooltip question-circle"> <strong> i </strong></div>
                    <span class="tooltiptext">Indique si el veh&iacuteculo es una herencia.</span>
                </div>    
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name='coche-herencia' id="coche-herencia">
                <label class="custom-control-label" for="coche-herencia">S&iacute</label>
              </div>
            </div>

          </div>
        </div>
        
        
        <script>
            
            jQuery('#coche-modelo').select2();
            
            jQuery('#coche-marca').select2();
        </script>