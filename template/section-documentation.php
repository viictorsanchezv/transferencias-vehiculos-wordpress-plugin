    <div class='row'>
        
        <div class='col-12 col-md-12 col-lg-12 mt-3 text-left'>
             <!-- documentos comprador -->
            <h3 class='mb-1 font-weight-bold principal-color'>Cl&aacuteusulas del tr&aacutemite</h3>
        </div>
    
       
        <div class='col-12 col-md-12 col-lg-12 text-left'>
            <div class='d-flex'>
                <p class='font-weight-bold'>¿Quiere que generemos toda la documentaci&oacuten?</p>
                <div class="tooltip question-circle"> <strong> i </strong></div>
                <span class="tooltiptext" style='width: 400px;'>Si ya dispone de un contrato de compra venta indique <strong>'Yo aporto el contrato'</strong>. 
                En caso contrario nuestro sistema generar&aacute de forma automatic&aacute un contrato de compra venta est&aacutendar que podr&aacute personalizar. </span>
            </div>
            
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                <input type="radio" name="contrato" id="contrato" value='true' checked> Generar toda la documentaci&oacuten
                </label>
                <label class="btn btn-secondary">
                <input type="radio" name="contrato" id="contrato2" value='false'> Yo aporto el contrato
                </label>
            </div>
        </div>
            
        <!-- clausulas -->
        <div class='col-12 col-md-12 col-lg-12 mt-3 text-left' id='clausulas'>
            
            <p class="font-weight-bold w-100" >
                Estas son las cl&aacuteusulas que añadiremos nosotros:
            </p> 
            
            <p>
                1.El vendedor declara que el mencionado vehículo es de su legítima propiedad, lo vende y entrega en este acto al comprador, 
                recibiéndolo este último a su completa satisfacción.
                <br>
                2. El precio de la compraventa, teniendo en cuenta las características del vehículo, 
                uda de clase alguna pendiente de liquidación a la fecha de este contrato, obligándose a 
                estar en entera indemnidad a favor del comprador de cualquier reclamación.
                <br>
                3. El vendedor facilita y firma en este acto todos los documentos necesarios para 
                que el vehículo quede inscrito a nombre del comprador en la Dirección General de Tráfico.
                <br>
                4. El comprador se hace cargo desde este momento, de todas las responsabilidades 
                que se puedan contraer como consecuencia de la propiedad del vehículo descrito que acepta, para su tenencia o uso.     
            </p>
                
                
            <div class="formt-group">
                <div class='d-flex'>
                    <p class='mb-0'>Si desea añadir cl&aacuteusulas adicionales en el contrato red&aacutectelas a continuaci&oacuten </p>
                    <div class="tooltip question-circle"> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>En esta secci&oacuten podr&aacute establecer todas aquellas cl&aacuteusulas que considere necesario.
                    &Eacutestas se incluir&aacuten autom&aacuteticamente en el contrato est&aacutendar dentro de una secci&oacuten denominada. <strong>'Cl&aacuteusulas Adicionales.'</strong></span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
                        
        </div>
       
        <!-- mensajes warning -->
        <div class='col-12 col-md-12 col-lg-12 mt-3 text-left' >
            <p class='list-group-item list-group-item-warning border-left-warning'>
                Aporte imágenes donde se ven las <span class='font-weight-bold principal-color'> cuatro esquinas </span> de los documentos, sin dedos y con los documentos bien <span class='font-weight-bold principal-color'> enfocados </span>. Recomendamos realizar las fotos sobre un <span class='font-weight-bold principal-color'>fondo blanco. </span>
            </p>
            
        </div>
   
        <div class='col-12 col-md-12 col-lg-12 mt-3 text-left'>
            <h3 class='mb-5 mt-5 font-weight-bold principal-color '>Documentaci&oacuten del vendedor</h3>
        </div>
        
        <!-- documentos -->    
        <div class='col-12 col-md-6 col-lg-6 justify-content-center' style='display: none; ' id='impuesto-hacienda-container' >
            <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
                <p class='mt-2 mb-2 cursor-pointer' id='title-impuesto-hacienda' ><strong> Modelo 620 / 621 - Impuesto hacienda ITP </strong></p>
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-impuesto-hacienda' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="impuesto-hacienda" name='file-impuesto-hacienda' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-impuesto-hacienda'>Subir</label>    
                </div>    
            </div>
        </div>
           
        <div class='col-12 col-md-6 col-lg-6 justify-content-center' style='display: none' id='contrato-compra-venta' >
            <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
                <p class='mt-2 mb-2 cursor-pointer' id='title-ccompra' ><strong> Contrato de compraventa </strong></p>
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-ccompra' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="ccompra" name='file-ccompra' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-ccompra'>Subir</label>    
                </div>    
            </div>
        </div>
            
            
        <div class='col-12 col-md-6 col-lg-6 justify-content-center' style='display: flex' id='nif-vendedor-frontal'>
                <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
                
                <div class='d-flex justify-content-center'>
                        <p class='mt-2 mb-2 cursor-pointer' id='title-nifv-frontal' ><strong> NIF del vendedor (frontal) </strong></p>
                    <div class="tooltip question-circle mt-2"> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Cara delantera del documento de identidad del vendedor</span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-nifv-frontal' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="nifv-frontal" name='file-nifv-frontal' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-nifv-frontal'>Subir</label>    
                </div>
            </div>
        </div>
            
            
        <div class='col-12 col-lg-6 col-md-6 justify-content-center' style='display: flex' id='nif-vendedor-trasero'>
                <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
            
                <div class='d-flex justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-nifv-trasero' ><strong> NIF del vendedor (trasero) </strong></p>
                    <div class="tooltip question-circle mt-2"> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Cara trasera del documento de identidad del vendedor</span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-nifv-trasero' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="nifv-trasero" name='file-nifv-trasero' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-nifv-trasero'>Subir</label>    
                </div>
            </div>
                
        </div>
            
        <div class='col-12 col-lg-6 col-md-6 justify-content-center' style='display: none;' id='liquidacion-sucesiones-container'>
                <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
            
                <div class='d-flex justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-liquidacion-sucesiones' ><strong> Liquidaci&oacuten de impuestos de sucesiones </strong></p>
                    
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-liquidacion-sucesiones' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="file-liquidacion-sucesiones" name='file-liquidacion-sucesiones' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-liquidacion-sucesiones'>Subir</label>    
                </div>
            </div>
                
        </div>
            
        <div class='col-12 col-lg-6 col-md-6 justify-content-center mt-2' style='display: none;' id='escritura-herencia-container'>
            <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
                <div class='d-flex justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-escritura-herencia' ><strong> Escritura de herencia. </strong></p>
                    
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-escritura-herencia' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="file-escritura-herencia" name='file-escritura-herencia' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-escritura-herencia'>Subir</label>    
                </div>
            </div>
                
        </div>
            
            
        <div class='col-12 col-lg-6 col-md-6 justify-content-center' style='display: none;' id='cif-empresa-vendedora'>
                <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
            
                <div class='d-flex justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-cif-empresa-vendedora' ><strong> CIF de la empresa vendedora o IAE (aut&oacutenomos) </strong></p>
                    <div class="tooltip question-circle mt-2"> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Cara frontal del CIF de la empresa que vende el veh&iacuteculo.</span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-cif-empresa-vendedora' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="nifv-cif-empresa-vendedora" name='file-cif-empresa-vendedora' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-cif-empresa-vendedora'>Subir</label>    
                </div>
            </div>
                
        </div>  

    </div>
    
    <div class='row justify-content-center '>
        <div class='col-12 col-md-12 col-lg-12 mt-3 text-left'>
             <!-- documentos comprador -->
            <h3 class='mb-5 mt-5 font-weight-bold principal-color '>Documentaci&oacuten del comprador</h3>
        </div>
    </div>
    
    <div class='row'>
        <div class='col-12 col-md-6 col-lg-6 p-0' id='nif-vendedor-frontal'>
             <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
            
                <div class='d-flex justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-nifc-frontal' ><strong> NIF del comprador (frontal) </strong></p>
                    <div class="tooltip question-circle mt-2"> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Cara frontal del documento de identidad del comprador.</span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-nifc-frontal' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="nifc-frontal" name='file-nifc-frontal' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-nifc-frontal'>Subir</label>    
                </div>
            </div>
            
        </div>
         <div class='col-12 col-lg-6 col-md-6 p-0' id='nif-vendedor-trasero'>
              <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
                <div class='d-flex justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-nifc-trasero' ><strong> NIF del comprador (trasero) </strong></p>
                    <div class="tooltip question-circle mt-2"> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Cara trasera del documento de identidad del comprador.</span>
                </div>
               
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-nifc-trasero' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="nifc-trasero" name='file-nifc-trasero' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-nifc-trasero'>Subir</label>    
                </div>
            </div>
             
         </div> 
    </div>
    
    
    <div class='row justify-content-center'>
        <div class='col-12 col-md-12 col-lg-12 mt-3 text-left'>
            <!-- documentacion del vehiculo -->
            <h3 class='mb-5 mt-5 font-weight-bold principal-color'>Documentaci&oacuten del veh&iacuteculo</h3>
        </div>
    </div>
    
    <div class='row'>
        <div class='col-12 col-md-6 col-lg-6 p-0' id='ficha-tecnica-vehiculo-frontal'>
            <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
                
                <div class='d-flex flex-column justify-content-center' style='margin: 0px auto;'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-ftecnica-frontal' ><strong> Ficha t&eacutecnica del veh&iacuteculo (frontal) </strong></p>
                    <div class="tooltip question-circle mt-2" style='margin: 0px auto;'> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Parte delantera de la ficha t&eacutecnica del veh&iacuteculo. </span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-ftecnica-frontal' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="ftecnica-frontal" name='file-ftecnica-frontal' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-ftecnica-frontal'>Subir</label>    
                </div>    
            </div>
            
            
        </div>
        
         <div class='col-12 col-md-6 col-lg-6 p-0' id='ficha-tecnica-vehiculo-trasero'>
             <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;'>
                
                <div class='d-flex  flex-column justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-ftecnica-trasera' ><strong> Ficha t&eacutecnica del veh&iacuteculo (trasera) </strong></p>
                    <div class="tooltip question-circle mt-2" style='margin: 0px auto;'> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Parte trasera de la ficha t&eacutecnica del veh&iacuteculo. </span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-ftecnica-trasera' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="ftecnica-trasera" name='file-ftecnica-trasera' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-ftecnica-trasera'>Subir</label>    
                </div>
            </div>
        </div>
        
        <div class='col-12 col-lg-6 col-md-6 mt-1 p-0' id='permiso-circulacion'>
            <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;' >
    
                <div class='d-flex  flex-column justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-permiso-vehiculo' ><strong> Permiso de circulaci&oacuten del veh&iacuteculo </strong></p>
                    <div class="tooltip question-circle mt-2" style='margin: 0px auto;'> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Permiso de circulaci&oacuten del veh&iacuteculo. </span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-archivo-permiso-vehiculo' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="permiso-vehiculo" name='file-permiso-vehiculo' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-permiso-vehiculo'>Subir</label>    
                </div>
            </div>
             
        </div>
         
        <div class='col-12 col-lg-6 col-md-6 mt-1 p-0' id='factura-venta' style='display: none;'>
            <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;' >
                <div class='d-flex  flex-column justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-factura-vehiculo' ><strong> Factura de venta del veh&iacuteculo </strong></p>
                    <div class="tooltip question-circle mt-2" style='margin: 0px auto;'> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Factura de venta. </span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-factura-vehiculo' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="factura-vehiculo" name='file-factura-vehiculo' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-factura-vehiculo'>Subir</label>    
                </div>
                
            </div>
             
         </div>
         
         <div class='col-12 col-lg-6 col-md-6 mt-1 p-0' id='informe-dgt-container' style='display: none;'>
            <div class='text-center column-bg-file p-2' style='width: 295px; margin: 0px auto;' >
                <div class='d-flex  flex-column justify-content-center'>
                    <p class='mt-2 mb-2 cursor-pointer' id='title-informe-dgt' ><strong> Informe del veh&iacuteculo de la DGT </strong></p>
                    <div class="tooltip question-circle mt-2" style='margin: 0px auto;'> <strong> i </strong></div>
                    <span class="tooltiptext" style='width: 400px;'>Informe del veh&iacuteculo de la DGT. </span>
                </div>
                
                <img width='64' height='64' class='mt-2 mb-2 cursor-pointer' id='imagen-informe-dgt' src="<?php echo plugin_dir_url( __DIR__ ).'assets/img/no-image.png'; ?>" alt="Imagen archivo">
                <div class='file-input text-center'>
                    <input type="file" id="informe-dgt" name='file-informe-dgt' accept='.pdf, image/*' class="file-ccompra">
                    <label for="file" id='subir-informe-dgt'>Subir</label>    
                </div>
                
            </div>
             
         </div>
        
    </div>
    
    
    
    
    
    
    <script src='<?php echo plugin_dir_url( __DIR__ ).'assets/js/documentation-event.js'; ?>'></script>