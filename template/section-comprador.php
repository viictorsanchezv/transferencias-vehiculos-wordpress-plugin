    <div class='row p-3 m-0 p-40 justify-content-between'>
        <div class='col-12 col-md-12 col-lg-12 text-left' style='font-size:17px; margin-bottom: 1rem;'>
            <h3 class='mb-1 font-weight-bold principal-color title-border'>Informaci&oacuten personal del <strong class='principal-color' id='comprador-datos-personales'> comprador </strong> </h3>
            <p style="font-size: 15px;">Rellene a continuaci&oacuten los datos personales del comprador del veh&iacuteculo.</p>
        </div>
        
        <!-- correo -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1">Correo electr&oacutenico <span class='text-blue'> * </span> </label>
                <input type="email" class="form-control" id="correo" name='comprador-email' placeholder='Ej.: juangomez@mail.com' aria-describedby="emailHelp">
            </div>     
        </div>
        
        <!-- NIF -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1" id='nif-empresa-compradora-label'>NIF/NIE/CIF </label> <span class='text-blue'> * </span>
                <input type="text" class="form-control" pattern='[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$' name='comprador-nif' id="nif" placeholder='Ej.: 12345678Z' aria-describedby="nif">
            </div>     
        </div>
        
            <!-- Nombre -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1" id='primer-nombre-label'>Nombre  </label> <span class='text-blue'> * </span>
                <input type="text" class="form-control" pattern="[a-zA-Z]+" id='nombre' name='comprador-nombre' placeholder='Ej.: Juan' aria-describedby="nombre">
            </div>     
        </div>
        
        <!-- Apellido -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1" id='primer-apellido-label'>Primer apellido </label> <span class='text-blue'> * </span>
                <input type="text" class="form-control" pattern="[a-zA-Z]+" id="apellido" name='comprador-apellido' placeholder='Ej.: Gomez' aria-describedby="apellido">
            </div>     
        </div>
        
            <!-- Segundo Apellido -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1" id='segundo-apellido-label'>Segundo apellido </label>
                <input type="text" class="form-control" pattern="[a-zA-Z]+" id="apellido2" name='comprador-apellido2' placeholder='Ej.: Perez' aria-describedby="apellido">
            </div>     
        </div>
        
        <!-- telefono -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group mb-3">
                <label class='font-weight-bold' for="telefono-vendedor">Tel&eacutefono de contacto <span class='text-blue'> * </span> </label>
                <input type="number" id='numero-comprador' pattern="_[0-9]+" name='comprador-telefono'placeholder='+34123456' class="form-control" >
            </div>
        </div>
        
        <div class='col-12 col-md-5 col-lg-5 text-left' id='dni-apoderado-container' style='display: none;'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1" id='nif-empresa-compradora-label'>DNI apoderado </label> <span class='text-blue'> * </span>
                <input type="text" class="form-control" pattern='[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$' name='apoderado-dni' id="apoderado-dni" placeholder='Ej.: 12345678Z' aria-describedby="nif">
            </div>     
        </div>
 
    </div>  
    
    <div class='separator'></div>
     
    <div class='row p-3 m-0 justify-content-between p-40' id='container-direccion-comprador'>
        <div class='col-12 col-md-12 col-lg-12 text-left' style='font-size:17px;  margin-bottom: 1rem;' >
            <h3 class='mb-1 font-weight-bold principal-color title-border'>Direcci&oacuten del <strong class='principal-color' id='comprador-direccion-datos'> comprador </strong> </h3>
            <p style="font-size: 15px;">Rellene a continuaci&oacuten la direcci&oacuten del comprador. 
            Recuerde que los datos que proporcione deben ser los mismos que figuran en su NIF/NIE/CIF.</p>
        </div>
        
        <!-- direccion -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1">Direcci&oacuten <span class='text-blue'> * </span> </label>
                <input type="text" class="form-control" id="direccion-comprador" name='comprador-direccion' placeholder='Ej.: Calle Laguna 7 8A' aria-describedby="emailHelp">
            </div>     
        </div>
        
        <!-- codigo postal -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1">C&oacutedigo postal <span class='text-blue'> * </span> </label>
                <input type="number" pattern="_[0-9]+" class="form-control" name='comprador-postal' id="postal-comprador" placeholder='Ej.: 03891' aria-describedby="postal">
            </div>     
        </div>
        
            <!-- localidad ciudad -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1">Localidad / Ciudad</label>
                <input type="text" class="form-control" id="localidad-comprador" name='comprador-localidad' placeholder='Localidad' aria-describedby="localidad-comprador">
            </div>     
        </div>
        
        <!-- observacion adicional -->
        <div class='col-12 col-md-5 col-lg-5 text-left'>
            <div class="form-group">
                <label class='font-weight-bold' for="exampleInputEmail1">Observaciones adicionales </label>
                <input type="text" class="form-control" id="observacion" name='comprador-observacion' aria-describedby="observacion">
            </div>     
        </div>
        
        <div class='col-12 col-md-12 col-lg-12 text-left' style="margin-top: 16px;">
            <label class='font-weight-bold mb-0 d-flex'>&#191; La DIRECCI&OacuteN que figura en el DNI es la de empadronamiento &#63; 
                <div class="tooltip question-circle"> <strong> i </strong></div>  
                    <span class="tooltiptext" > En el caso de que la direcci&oacuten de empadronamiento del comprador sea diferente 
                    a la que figura en el DNI, ind&iacutequelo mediante esta opci&oacuten. Recuerde que necesitar&aacute adjuntar el certificado de empadronamiento.</span>
            </label>
        
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name='comprador-empadronamiento' checked id="comprador-empadronamiento">
                <label class="custom-control-label" for="comprador-empadronamiento">S&iacute</label>
            </div>
            
        </div>
            
    </div>  
