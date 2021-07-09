    <div class='row'>
        <div class='col-12 col-md-4 col-lg-4 text-left p-0' style='font-size:17px;'>
            <p class='mb-0 font-weight-bold'>Informaci&oacuten personal del <strong class='principal-color' id='vendedor-datos-personales' > vendedor </strong> </p>
            <p>Rellene a continuaci&oacuten los datos personales del vendedor del veh&iacuteculo.</p>
        </div>
        <div class='col-12 col-md-8 col-lg-8'>
            <div class='row'>
                <!-- correo -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electr&oacutenico <span class='text-danger'> * </span></label>
                        <input type="email" class="form-control" id="correo-vendedor" name='vendedor-email' placeholder='Ej.: juangomez@mail.com' aria-describedby="emailHelp">
                    </div>     
                </div>
                
                <!-- NIF -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="nif-vendedor" id='nif-empresa-vendedora-label' >NIF/NIE/CIF </label> <span class='text-danger'> * </span>
                        <input type="text" class="form-control" pattern='[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$' name='vendedor-nif' id="vendedor-nif" placeholder='Ej.: 12345678Z' aria-describedby="nif">
                    </div>     
                </div>
                
                 <!-- Nombre -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1" id='primer-nombre-label-vendedor'>Nombre </label>  <span class='text-danger'> * </span>
                        <input type="text" class="form-control" pattern="[a-zA-Z]+" id='nombre-vendedor' name='vendedor-nombre' placeholder='Ej.: Juan' aria-describedby="nombre">
                    </div>     
                </div>
                
                <!-- Apellido -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1" id='primer-apellido-label-vendedor'>Primer apellido  </label> <span class='text-danger'> * </span>
                        <input type="text" class="form-control"pattern="[a-zA-Z]+" id="apellido-vendedor" name='vendedor-apellido' placeholder='Ej.: Gomez' aria-describedby="apellido">
                    </div>     
                </div>
                
                 <!-- Segundo Apellido -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1" id='segundo-apellido-label-vendedor'>Segundo apellido </label>
                        <input type="text" class="form-control" pattern="[a-zA-Z]+" id="apellido2-vendedor" name='vendedor-apellido2' placeholder='Ej.: Perez' aria-describedby="apellido">
                    </div>     
                </div>
                
                <!-- telefono -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group mb-3">
                      <label for="telefono-vendedor">Tel&eacutefono de contacto <span class='text-danger'> * </span> </label>
                      <input type="number" id='numero-vendedor' pattern="_[0-9]+" name='vendedor-telefono'placeholder='+34123456' class="form-control" >
                    </div>
                </div>
                
                <div class='col-12 col-md-6 col-lg-6 text-left' id='dni-apoderado-container-vendedor' style='display: none;'>
                    <div class="form-group">
                        <label for="nif-vendedor" id='dni-apoderado-label' >DNI del apoderado </label> <span class='text-danger'> * </span>
                        <input type="text" class="form-control" pattern='[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$' name='dni-apoderado-vendedor' id="dni-apoderado-vendedor" placeholder='Ej.: 12345678Z' aria-describedby="nif">
                    </div>     
                </div>
                
             
            </div>
            
        </div>
        
    </div>  
    
    <div class='separator'></div>
     
     <div class='row' id='container-direccion-vendedor'>
        <div class='col-12 col-md-4 col-lg-4 text-left p-0' style='font-size:17px;'>
            <p class='mb-0 font-weight-bold'>Direcci&oacuten del <strong class='principal-color'  id='vendedor-direccion-datos'> vendedor </strong> </p>
            <p>Rellene a continuaci&oacuten la direcci&oacuten del vendedor. 
            Recuerde que los datos que proporcione deben ser los mismos que figuran en su NIF/NIE/CIF.</p>
        </div>
        <div class='col-12 col-md-8 col-lg-8'>
            <div class='row'>
                <!-- direccion -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Direcci&oacuten <span class='text-danger'> * </span> </label>
                        <input type="text" class="form-control" id="vendedor-direccion" name='vendedor-direccion' placeholder='Ej.: Calle Laguna 7 8A' aria-describedby="emailHelp">
                    </div>     
                </div>
                
                <!-- codigo postal -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">C&oacutedigo postal <span class='text-danger'> * </span> </label>
                        <input type="number" class="form-control" pattern="_[0-9]+" name='vendedor-postal' id="vendedor-postal" placeholder='Ej.: 03891' aria-describedby="postal">
                    </div>     
                </div>
                
                 <!-- localidad ciudad -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Localidad / Ciudad</label>
                        <input type="text" class="form-control" id="vendedor-localidad" name='vendedor-localidad' placeholder='Localidad' aria-describedby="localidad-vendedor">
                    </div>     
                </div>
                
                <!-- observacion adicional -->
                <div class='col-12 col-md-6 col-lg-6 text-left'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Observaciones adicionales </label>
                        <input type="text" class="form-control" id="vendedor-observacion" name='vendedor-observacion' aria-describedby="observacion">
                    </div>     
                </div>
             
            </div>
            
        </div>
        
    </div>  
    
