// window.onload = function() {
    let marca               = document.getElementById('coche-marca');
    let matriculacion       = document.getElementById('coche-date');
    let combustibleContainer= document.getElementById('combustible-container');
    let combustible         = document.getElementById('coche-combustible');
    let modeloContainer     = document.getElementById('modelo-container');
    let modelo              = document.getElementById('coche-modelo');
    let tabla               = document.getElementById('tabla');
    let cochePrecio         = document.getElementById('coche-precio');
    let modalCocheValidate  = document.getElementById('closeModalPrecioValidate');
    let cocheFactura        = document.getElementById('coche-factura');
    let cocheInforme        = document.getElementById('coche-informe');
    let cocheCambio         = document.getElementById('coche-cambio');
    let cocheFichaTecnica   = document.getElementById('coche-ficha_tecnica');
    let cocheAlta           = document.getElementById('coche-alta_vehiculo');
    let cocheHerencia       = document.getElementById('coche-herencia');
    let provincia           = document.getElementById('coche-provincia');
    
    const ITPorcentaje = {
        'valencia': 8,
        'madrid': 4
        
    }
    
    const correccion = {
        '1': 84,
        '2': 67,
        '3': 56,
        '4': 47,
        '5': 39,
        '6': 34,
        '7': 28,
        '8': 24,
        '9': 19,
        '10': 17,
        '11': 13,
    }
    
    cocheHerencia.onchange = function (){
        if(cocheHerencia.checked == true){
            document.getElementById('itp-costes-tabla').style.display = 'none';
            document.getElementById('calculo-itp-total').style.display = 'none';
            
            document.getElementById('comprador-title').textContent = 'Heredero';
            document.getElementById('comprador-datos-personales').textContent = 'Heredero';
            document.getElementById('comprador-direccion-datos').textContent = 'Heredero';
            document.getElementById('title-comprador-section').textContent = 'Datos personales del heredero';
            document.getElementById('titulo-comprador').textContent = 'Datos del heredero';
            document.getElementById('title-nifc-frontal').innerHTML = '<strong> NIF del heredero (frontal) </strong>';
            document.getElementById('title-nifc-trasero').innerHTML = '<strong> NIF del heredero (trasero) </strong>';
            
            document.getElementById('vendedor-title').textContent = 'Causante';
            document.getElementById('vendedor-datos-personales').textContent = 'Causante';
            document.getElementById('vendedor-direccion-datos').textContent = 'Causante';
            document.getElementById('title-vendedor-section').textContent = 'Datos personales del causante';
            document.getElementById('titulo-vendedor').textContent = 'Datos del causante';
            document.getElementById('title-nifv-frontal').innerHTML = '<strong>  NIF del causante (frontal)  </strong>';
            document.getElementById('title-nifv-trasero').innerHTML = '<strong>  NIF del causante (trasero)  </strong>';
              
            document.getElementById('liquidacion-sucesiones-container').style.display = 'flex';
            
            sumarITP( parseFloat(document.getElementById('itp-costes').textContent) ,false);
        }else{
            
            document.getElementById('comprador-title').textContent = 'Comprador';
            document.getElementById('comprador-datos-personales').textContent = 'Comprador';
            document.getElementById('comprador-direccion-datos').textContent = 'Comprador';
            document.getElementById('title-comprador-section').textContent = 'Datos personales del comprador';
            document.getElementById('titulo-comprador').textContent = 'Datos del comprador';   
            document.getElementById('title-nifc-frontal').innerHTML = '<strong> NIF del comprador (frontal) </strong>';
            document.getElementById('title-nifc-trasero').innerHTML = '<strong> NIF del comprador (trasero) </strong>';
               
            document.getElementById('vendedor-title').textContent = 'Vendedor';
            document.getElementById('vendedor-datos-personales').textContent = 'Vendedor';
            document.getElementById('vendedor-direccion-datos').textContent = 'Vendedor';
            document.getElementById('title-vendedor-section').textContent = 'Datos personales del vendedor';
            document.getElementById('titulo-vendedor').textContent = 'Datos del vendedor';
            document.getElementById('title-nifv-frontal').innerHTML = '<strong>  NIF del vendedor (frontal)  </strong>';
            document.getElementById('title-nifv-trasero').innerHTML = '<strong>  NIF del vendedor (trasero)  </strong>';
            
            
            document.getElementById('liquidaciones-sucesiones-container').style.display = 'none';  
            document.getElementById('itp-costes-tabla').style.display = 'table-row';
            document.getElementById('calculo-itp-total').style.display = 'table-row';
            sumarITP( parseFloat(document.getElementById('itp-costes').textContent) ,true);
        }
    }
    
    cocheAlta.onchange = function(){
        if(cocheAlta.checked == true){
            document.getElementById('alta-baja').style.display = 'table-row';
            sumarITP( parseFloat(document.getElementById('alta-baja-tabla').textContent) , true);
        }else{
            document.getElementById('alta-baja').style.display = 'none';
            sumarITP( parseFloat(document.getElementById('alta-baja-tabla').textContent) , false);
        }
    }
    
    cocheFichaTecnica.onchange = function(){
        if(cocheFichaTecnica.checked == true){
            document.getElementById('ficha-tecnica-itv').style.display = 'table-row';
            sumarITP(20.40, true);
        }else{
            document.getElementById('ficha-tecnica-itv').style.display = 'none';
            sumarITP(20.40 , false);
            
        }
    }
    
    // cocheCambio.onchange = function (){
        
    //     if(cocheCambio.checked == true ){
    //         document.getElementById('coche-servicio-destinara-container').style.display = 'block';
            
    //     }else{
    //         document.getElementById('coche-servicio-destinara').value = '';
    //         document.getElementById('coche-servicio-destinara-container').style.display = 'none';
            
    //     }
        
    // }
    
    cocheInforme.onchange = function(){
        
        if(cocheInforme.checked == true){
            document.getElementById('coche-informe-label').textContent = 'Sí';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
            document.getElementById('informe-dgt-container').style.display = 'none';
            document.getElementById('informe-trafico').style.display = 'table-row';
            document.getElementById('cif-empresa-vendedora').style.display = 'none';
          
            sumarITP(8.59 , true);
        }else {
            document.getElementById('coche-informe-label').textContent = 'No';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Si no desea que realicemos esta gestión, deberá adjuntar el informe del vehículo de la DGT';
            document.getElementById('precio-validado').textContent = '';
            document.getElementById('modalPrecioValidate').style.display = 'block';
            document.getElementById('informe-dgt-container').style.display = 'flex';
            document.getElementById('informe-trafico').style.display = 'none';
            document.getElementById('cif-empresa-vendedora').style.display = 'flex';
            
            sumarITP(8.59 , false);
        }
    
        
        
    }
    
    cocheFactura.onchange = function(){
        let labelCocheFactura = document.getElementById('coche-factura-label').textContent;
        if(labelCocheFactura == 'Si'){
            document.getElementById('coche-factura-label').textContent = 'No';
            document.getElementById('gestion-container').style.display = 'block';
            document.getElementById('calculo-itp').style.display = 'block';
            document.getElementById('factura-venta').style.display = 'none';
            document.getElementById('itp-costes-tabla').style.display = 'table-row';
            document.getElementById('cif-empresa-vendedora').style.display = 'none';
            document.getElementById('title-nifv-frontal').childNodes[0].textContent = 'NIF del vendedor (frontal)';
            document.getElementById('title-nifv-trasero').childNodes[0].textContent = 'NIF del vendedor (trasero)';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
        }else {
            document.getElementById('coche-factura-label').textContent = 'Si';
            document.getElementById('title-nifv-frontal').childNodes[0].textContent = 'NIF del administrador de la empresa vendedora (frontal)';
            document.getElementById('title-nifv-trasero').childNodes[0].textContent = 'NIF del administrador de la empresa vendedora (trasero)';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Recuerde que si activa esta opción tendrá que adjuntar la factura de venta del vehículo';
            document.getElementById('precio-validado').textContent = '';
            document.getElementById('calculo-itp').style.display = 'none';
            document.getElementById('gestion-container').style.display = 'none';
            document.getElementById('factura-venta').style.display = 'flex';
            document.getElementById('cif-empresa-vendedora').style.display = 'flex';
            document.getElementById('itp-costes-tabla').style.display = 'none';
            document.getElementById('modalPrecioValidate').style.display = 'block';
        }
        
    }
    
    marca.onchange = function (event){    
        if(matriculacion.value != '' && marca.value != ''){
            combustibleDislplay();
        }    
        
    }

    matriculacion.onchange = function (event){
        
        
        if(matriculacion.value != '' && marca.value != ''){
            combustibleDislplay();
        }
        
        let matricula = document.getElementById('coche-date').value;
        
        if(factorCorreccion(matricula) != undefined ){
           document.getElementById('factor-correccion').textContent = factorCorreccion(matricula)+',00 % ';   
        }else{
           document.getElementById('factor-correccion').textContent = '-'; 
        }
       
        
    }

    combustible.onchange = function (){
        modeloContainer.style.display   = 'block';
        matriculacion                   = document.getElementById('coche-date');
        matriculacion                   = matriculacion.value.split('-');
        let url = 'https://transferencia.staging.graphics/wp-json/gp/v1/car_model/?marca='+marca.value+'&combustible='+combustible.value+'&matriculacion='+matriculacion[0];

        fetch(url,{method: 'GET'})
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) { 
                 
                for(let i =0; i<=modelo.length; i++){
                    modelo.remove( modelo.options[i] ); 
                }

                modelo = document.getElementById("coche-modelo");
                
                let defaultOption = document.createElement('option');
                defaultOption.text  = 'Seleccione el modelo de vehículo';
                defaultOption.value = '';
                modelo.appendChild(defaultOption);
                
                Object.entries(myJson).forEach(([key, value]) => {
                    let option = document.createElement("option");
                        option.text  =  value.post_title;
                        option.value = value.ID;
                    
                        modelo.appendChild(option);
                });
            }); 


    }

    modelo.onchange = function(){
        let url = 'https://transferencia.staging.graphics/wp-json/gp/v1/modelo_tabla/?modelo='+modelo.value;
        fetch(url,{method: 'GET'})
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) { 
              let modeloTabla       = document.getElementById('modelo-tabla');
              let marcaTabla        = document.getElementById('marca-tabla');
              let cilindrosTabla    = document.getElementById('cilindros-tabla');
              let cilindradaTabla   = document.getElementById('cilindrada-tabla');
              let potenciaTabla     = document.getElementById('potencia-tabla');
              let fiscalTabla       = document.getElementById('fiscal-tabla');
              let combustibleTabla  = document.getElementById('combustible-tabla');
              //let cvTabla           =   document.getElementById('cv-tabla');

              modeloTabla.textContent       = myJson['modelo'];
              marcaTabla.textContent        = myJson['marca'];
              cilindradaTabla.textContent   = myJson['cilindrada'];
              cilindrosTabla.textContent    = myJson['cilindros'];
              combustibleTabla.textContent  = myJson['combustible'];
              potenciaTabla.textContent     = myJson['potencia'];
              fiscalTabla.textContent       = myJson['potencia_fiscal'];
              
              // minimo precio del vehiculo correspondiente al valor en tabla de la DGT
              document.getElementById('valoracion-precio-venta').textContent = myJson['valor_euros'];

              cochePrecio.min = myJson['valor_euros'];
              
            }); 


        tabla.style.display = 'block';

    }

    provincia.onchange = function(){
        let facturaValidacion = document.getElementById('coche-factura').checked;
        let ITPTotal = 0;
        document.getElementById('datos-adicionales').style.display = 'block';
        
        if(provincia.value != '' && facturaValidacion == false ){
            
         
            document.getElementById('calculo-itp').style.display = 'block';
            // insertar informacion del porcentaje de ITP en tabla
            
            document.getElementById('porcentaje-itp').textContent = 'ITP ( '+calculoITP(provincia.value)+',00 % )';
            document.getElementById('tasa-transferencia').style.display = 'table-row';
            document.getElementById('informe-trafico').style.display = 'table-row';
            document.getElementById('tramitacion').style.display = 'table-row';
            document.getElementById('alta-baja').style.display = 'table-row';
            document.getElementById('ficha-tecnica-itv').style.display = 'table-row';
            
            ITPTotal = parseFloat(document.getElementById('ficha-tecnica-tabla').textContent)+parseFloat(document.getElementById('alta-baja-tabla').textContent)+parseFloat(document.getElementById('tasa-transferencia-tabla').textContent)+parseFloat(document.getElementById('informe-trafico-tabla').textContent)+parseFloat(document.getElementById('tramitacion-tabla').textContent);
            document.getElementById('total-tabla').textContent = ITPTotal.toFixed(2)+' €';
            
            // calculo del ITP base segun las tablas de la DGT luego 
            // se actualiza en base al precio del vehiculo
            
            let ITPBase =  parseFloat(document.getElementById('valoracion-precio-venta').textContent);
            document.getElementById('itp-costes').textContent =  (ITPBase)*(parseInt(calculoITP(provincia.value))/100).toString()+' €';
            document.getElementById('itp-total').textContent  = (ITPBase)*(parseInt(calculoITP(provincia.value))/100).toString()+' €';
            sumarITP( parseFloat(document.getElementById('itp-costes').textContent) ,true);
            
        }   
    }
    
    function combustibleDislplay(){
        combustibleContainer.style.display = 'block';

        let url = 'https://transferencia.staging.graphics/wp-json/gp/v1/combustible/?marca='+marca.value;
        fetch(url,{method: 'GET'})
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {  
                for(let i =0; i<=combustible.length; i++){
                    combustible.remove( combustible.options[i] ); 
                }

                combustible = document.getElementById("coche-combustible");
                
                let defaultOption = document.createElement('option');
                defaultOption.text  = 'Seleccione un tipo de combustible';
                defaultOption.value = '';
                combustible.appendChild(defaultOption);
                
                Object.entries(myJson).forEach(([key, value]) => {
                    let option = document.createElement("option");
                        option.text  =  value.name;
                        option.value = value.term_id;
                    
                        combustible.appendChild(option);
                });
            });  
    }
    
    //-------- motos --------------
    
    let cilindrada  = document.getElementById('cilindrada');
    let motoFactura = document.getElementById('factura-moto');
    let motoMarca   = document.getElementById('moto-marca');
    let motoCambio  = document.getElementById('moto-cambio');
    let motoFichaTecnica = document.getElementById('moto-ficha_tecnica');
    let motoAlta        = document.getElementById('moto-alta_vehiculo');
    let motoHerencia    =  document.getElementById('moto-herencia');
    let motoPrecio      = document.getElementById('moto-precio');
    
    
    motoPrecio.onkeypress = function(){
        let valorTable = document.getElementById('valoracion-precio-venta').textContent;
        
        if(parseInt(valorTable) < parseInt(motoPrecio.value) ){
            document.getElementById('precio-venta').textContent = motoPrecio.value; 
        }
       
        
    }
    
    motoPrecio.onchange = function() {
       let valorTable = document.getElementById('valoracion-precio-venta').textContent;

       if(parseInt(valorTable) > parseInt(motoPrecio.value) ){
           
           //abre el modal del error
           document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
           document.getElementById('modalPrecioValidate').style.display = 'block';
           document.getElementById('precio-validado').textContent = valorTable+' €';
           document.getElementById('precio-venta').textContent = valorTable;
       
           
       }else{
           
            let provincia = document.getElementById('moto-provincia');
            document.getElementById('precio-venta').textContent = motoPrecio.value; 
            document.getElementById('itp-total').textContent = parseInt(motoPrecio.value)*(parseInt(calculoITP(provincia.value))/100);
            document.getElementById('itp-costes').textContent =  (parseInt(motoPrecio.value)*(parseInt(calculoITP(provincia.value))/100)).toString()+' €';
            
            sumarITP( parseFloat(document.getElementById('itp-costes').textContent) ,true);
            
       }
        
    }
    
    motoHerencia.onchange = function (){
        if(motoHerencia.checked == true){
            document.getElementById('itp-costes-tabla').style.display = 'none';
            document.getElementById('calculo-itp-total').style.display = 'none';
            sumarITP( parseFloat(document.getElementById('itp-costes').textContent) ,false);
        }else{
            document.getElementById('itp-costes-tabla').style.display = 'table-row';
            document.getElementById('calculo-itp-total').style.display = 'table-row';
            sumarITP( parseFloat(document.getElementById('itp-costes').textContent) ,true);
        }
    }
    
    motoAlta.onchange = function(){
        if(motoAlta.checked == true){
            document.getElementById('alta-baja').style.display = 'table-row';
            sumarITP( parseFloat(document.getElementById('alta-baja-tabla').textContent) , true);
        }else{
            document.getElementById('alta-baja').style.display = 'none';
            sumarITP( parseFloat(document.getElementById('alta-baja-tabla').textContent) , false);
        }
    }
    
    motoFichaTecnica.onchange = function(){
        if(motoFichaTecnica.checked == true){
            document.getElementById('ficha-tecnica-itv').style.display = 'table-row';
            sumarITP(20.40 , true);
        }else{
            document.getElementById('ficha-tecnica-itv').style.display = 'none';
            sumarITP(20.40 , false);
            
        }
    }
    
    motoCambio.onchange = function (){
        
        if(motoCambio.checked == true ){
            document.getElementById('moto-servicio-destinara-container').style.display = 'block';
            
        }else{
            document.getElementById('moto-destinara').value = '';
            document.getElementById('moto-servicio-destinara-container').style.display = 'none';
            
        }
        
    }
    
    motoFactura.onchange = function (){
        let labelMotoFactura = document.getElementById('moto-factura-label').textContent;
        if(labelMotoFactura == 'Si'){
            document.getElementById('moto-factura-label').textContent = 'No';
            document.getElementById('moto-gestion-container').style.display = 'block';
            document.getElementById('calculo-itp').style.display = 'block';
            document.getElementById('factura-venta').style.display = 'none';
            document.getElementById('itp-costes-tabla').style.display = 'table-row';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
        }else {
            document.getElementById('moto-factura-label').textContent = 'Si';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Recuerde que si activa esta opción tendrá que adjuntar la factura de venta del vehículo';
            document.getElementById('precio-validado').textContent = '';
            document.getElementById('calculo-itp').style.display = 'none';
            document.getElementById('moto-gestion-container').style.display = 'none';
            document.getElementById('factura-venta').style.display = 'flex';
            document.getElementById('itp-costes-tabla').style.display = 'none';
            document.getElementById('modalPrecioValidate').style.display = 'block';
        }
    }
    
    cilindrada.onchange = function (){
        document.getElementById('moto-precio').min = '600';
        if( cilindrada.value != '' && dateMoto.value != '' ){
            motoDisplay(); 
            
        }
        document.getElementById('valoracion-precio-venta').textContent = '600';
     
    }
    
    let dateMoto = document.getElementById('moto-date');
    
    dateMoto.onchange = function(){
        if(dateMoto.value != '' && cilindrada.value != '' ){
            motoDisplay();
            document.getElementById('factor-correccion').textContent = factorCorreccion(dateMoto.value)+',00 % ';
        }
    }
    
    function motoDisplay(){
        document.getElementById('moto-adicional').style.display = 'block';
    }
    
    let provinciaMoto = document.getElementById('moto-provincia');
    
    provinciaMoto.onchange = function(){
        
        let facturaValidacion = document.getElementById('factura-moto').checked;
        let ITPTotal = 0;
        document.getElementById('datos-adicionales-moto').style.display = 'block';
        if(provinciaMoto.value != '' && facturaValidacion == false ){
            document.getElementById('calculo-itp').style.display = 'block';
            // insertar informacion del porcentaje de ITP en tabla
            document.getElementById('porcentaje-itp').textContent = 'ITP ( '+calculoITP(provinciaMoto.value)+',00 % )';
            document.getElementById('tasa-transferencia').style.display = 'table-row';
            document.getElementById('informe-trafico').style.display = 'table-row';
            document.getElementById('tramitacion').style.display = 'table-row';
            document.getElementById('alta-baja').style.display = 'table-row';
            document.getElementById('ficha-tecnica-itv').style.display = 'table-row';
            
            ITPTotal = parseFloat(document.getElementById('ficha-tecnica-tabla').textContent)+parseFloat(document.getElementById('alta-baja-tabla').textContent)+parseFloat(document.getElementById('tasa-transferencia-tabla').textContent)+parseFloat(document.getElementById('informe-trafico-tabla').textContent)+parseFloat(document.getElementById('tramitacion-tabla').textContent);
            document.getElementById('total-tabla').textContent = ITPTotal.toFixed(2)+' €';
        }
        
    }
    
    
    // moto tab validacion del modal o  popup 
    
    let motoTab = document.getElementById('moto-tab');
    
    motoTab.onclick = function(){
        let modeloTabCoche = document.getElementById('coche-modelo');
        if(modeloTabCoche.value != '' ){
          document.getElementById('modal-cambio-vehiculo').style.display = 'block';
            
        }
        
    }
    
    let gestionCheckMoto = document.querySelector('[id^="moto-gestion"]');
    gestionCheckMoto.onchange = function() {
        let ele = document.getElementsByName('moto-gestion');
          
        for(i = 0; i < ele.length; i++) {
            if(ele[i].checked){
                
                if( ele[i].value == 'true' ){
                             
                    document.getElementById('calculo-itp').style.display = 'block';
                    document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
                    document.getElementById('contrato-compra-venta').style.display = 'none';
                    document.getElementById('impuesto-hacienda-container').style.display = 'none';
                    document.getElementById('itp-costes-tabla').style.display = 'none';
                    
                }else{
                 
                    document.getElementById('exampleModalLabelValidacion').textContent = 'Recuerde que si activa esta opción tendrá que adjuntar el contrato de compraventa así como el resguardo del pago en Hacienda del Impuesto de Transmisiones Patrimoniales.';
                    document.getElementById('precio-validado').textContent = '';
                    document.getElementById('calculo-itp').style.display = 'none';
                    document.getElementById('modalPrecioValidate').style.display = 'block';
                    document.getElementById('contrato-compra-venta').style.display = 'flex';
                    document.getElementById('impuesto-hacienda-container').style.display = 'flex';
                    document.getElementById('itp-costes-tabla').style.display = 'table-row';
                }
                
            }
            
        }
    }
    
    let motoInforme = document.getElementById('moto-informe');
    motoInforme.onchange = function(){
        
        if(motoInforme.checked == true){
            document.getElementById('coche-informe-label').textContent = 'Sí';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
            document.getElementById('informe-dgt-container').style.display = 'none';
            document.getElementById('informe-trafico').style.display = 'table-row';
            sumarITP(8.59 , true);
        }else {
            document.getElementById('coche-informe-label').textContent = 'No';
            document.getElementById('exampleModalLabelValidacion').textContent = 'Si no desea que realicemos esta gestión, deberá adjuntar el informe del vehículo de la DGT';
            document.getElementById('precio-validado').textContent = '';
            document.getElementById('modalPrecioValidate').style.display = 'block';
            document.getElementById('informe-dgt-container').style.display = 'flex';
            document.getElementById('informe-trafico').style.display = 'none';
             sumarITP(8.59 , false);
        }
    
        
        
    }

    // ------------------ final motos  ------------------------------  


    // let cocheTab = document.getElementById('coche-tab');
    
    // cocheTab.onclick = function(){
    //     let modeloTabMoto = document.getElementById('coche-modelo');
    //     if(modeloTabMoto.value != '' ){
    //         document.getElementById('modal-cambio-vehiculo').style.display = 'block';
            
    //     }
        
    // }
    

    
    // let aceptarCambioMoto = document.getElementById('aceptar-cambio-moto');
    
    // aceptarCambioMoto.onclick = function(){
    //     document.getElementById('moto-marca').value = '';
    //     let tablaCoche = document.getElementById('moto-adicional');
    //     let datosAdicionales = document.getElementById('datos-adicionales-moto');
    //     document.getElementById('modal-cambio-vehiculo').style.display = 'none';
    //     tabla.style.display = 'none';
    //     datosAdicionales.style.display = 'none';
        
        
    // }
    
    // let cancelarCambioMoto = document.getElementById('cancelar-cambio-moto');
    
    // cancelarCambioMoto.onclick = function(){
    //     document.getElementById('modal-cambio-vehiculo').style.display = 'none';
    //     document.getElementById('moto-tab').click();
        
    // }
    
    // -------  aceptar y cancelar modal de cambio de vehiculos --------------
    let aceptarCambio = document.getElementById('aceptar-cambio');
    
    aceptarCambio.onclick = function(){
        document.getElementById('coche-marca').value = '';
        let combustibleCoche = document.getElementById('combustible-container');
        let modeloContainerCoche = document.getElementById('modelo-container');
        let tablaCoche = document.getElementById('tabla');
        let datosAdicionales = document.getElementById('datos-adicionales');
        document.getElementById('coche-modelo').value = '';
        document.getElementById('modal-cambio-vehiculo').style.display = 'none';
        combustibleCoche.style.display = 'none';
        combustibleCoche.value = '';
        modeloContainerCoche.style.display = 'none';
        tabla.style.display = 'none';
        datosAdicionales.style.display = 'none';
        document.getElementById('calculo-itp').style.display = 'none';
        
    }
    
    let cancelarCambio = document.getElementById('cancelar-cambio');
    
    cancelarCambio.onclick = function(){
        document.getElementById('modal-cambio-vehiculo').style.display = 'none';
        document.getElementById('coche-tab').click();
        
    }
    
    // ------- final aceptar y cancelar modal de cambio de vehiculos --------------
    
    // validate NIF and DNI
    
    function comprobar(elemID) {
      var elem = document.getElementById(elemID);
    
      if (validar(elem.value.trim(), elemID) || elem.value.trim() == "") {
    
        elem.style.borderBottomColor = "green"
        elem.style.borderWidth = '1px 1px 2px 1px';
    
        return true;
      } else {
    
        elem.style.borderBottomColor = "red"
        elem.style.borderWidth = '1px 1px 2px 1px';
        return false;
    
      }
    
    
    }
    
    function validar(value, elemID) {
    
      if (elemID == "nif" || elemID == 'vendedor-nif' ) {
    
        var validChars = 'TRWAGMYFPDXBNJZSQVHLCKET';
        var nifRexp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
        var nieRexp = /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
        var str = value.toString().toUpperCase();
    
        if (!nifRexp.test(str) && !nieRexp.test(str)) return false;
    
        var nie = str
          .replace(/^[X]/, '0')
          .replace(/^[Y]/, '1')
          .replace(/^[Z]/, '2');
    
        var letter = str.substr(-1);
        var charIndex = parseInt(nie.substr(0, 8)) % 23;
    
        if (validChars.charAt(charIndex) === letter) return true;
    
        return false;
      } else {
        return /^[a-z]{3}[0-9]{6}[a-z]?$/i.test(value);
      }
      
      
    }
    
    var nif = document.getElementById('nif');
    var Vendedornif = document.getElementById('vendedor-nif');
    
    nif.onchange = function(){
        comprobar(nif.id);
    }
    
    Vendedornif.onchange = function(){
        comprobar(Vendedornif.id);
    }
    
    //fin calculo de NIF ----------------------------------------------
    
    
    // calculo del ITP
    function factorCorreccion(d1){
        var today = new Date();
        var a = moment([d1]);
       
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = yyyy + '-' + mm + '-' + dd;
        
        var b = moment([today]);
    
        var daydiff = b.diff(a, 'years');       // 1
        
        if(daydiff < 1){

            return 100;
        }else if(daydiff > 12 ){

            return 10;
        }else{
       
            return correccion[daydiff]; 
        }
       
    }
    
    function calculoITP( provincia ){
        let cocheDateCalculo  = matriculacion.value;
        
        var porcentajeITP = ITPorcentaje[provincia];
        return porcentajeITP;
        
    }
    
    cochePrecio.onkeypress = function(){
        let valorTable = document.getElementById('valoracion-precio-venta').textContent;
        
        if(parseInt(valorTable) < parseInt(cochePrecio.value) ){
            document.getElementById('precio-venta').textContent = cochePrecio.value; 
        }
       
        
    }
    
    cochePrecio.onchange = function() {
       let valorTable = document.getElementById('valoracion-precio-venta').textContent;

       if(parseInt(valorTable) > parseInt(cochePrecio.value) ){
           
           //abre el modal del error
           document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
           document.getElementById('modalPrecioValidate').style.display = 'block';
           document.getElementById('precio-validado').textContent = valorTable+' €';
           document.getElementById('precio-venta').textContent = valorTable;
       
           
       }else{
           
            let provincia = document.getElementById('coche-provincia');
            let lastITP = document.getElementById('itp-total').textContent;
            
            sumarITP( parseFloat(lastITP) ,false);
            
            document.getElementById('precio-venta').textContent = cochePrecio.value; 
            document.getElementById('itp-total').textContent = parseInt(cochePrecio.value)*(parseInt(calculoITP(provincia.value))/100);
            document.getElementById('itp-costes').textContent =  (parseInt(cochePrecio.value)*(parseInt(calculoITP(provincia.value))/100)).toString()+' €';
            
            sumarITP( parseFloat(document.getElementById('itp-costes').textContent) ,true);
            
       }
        
        
        
    }
    
    let gestionCheck = document.querySelector('[id^="gestion"]');
    gestionCheck.onchange = function() {
        let ele = document.getElementsByName('coche-gestion');
        let ITPTotal = parseFloat(document.getElementById('itp-total').textContent);
        for(i = 0; i < ele.length; i++) {
            if(ele[i].checked){
                
                if( ele[i].value == 'true' ){
                    document.getElementById('calculo-itp').style.display = 'block';
                    document.getElementById('exampleModalLabelValidacion').textContent = 'Tenga en cuenta que el precio de venta no puede ser inferior al valor real del vehículo mostrado en la tabla de costes.';
                    document.getElementById('contrato-compra-venta').style.display = 'none';
                    document.getElementById('impuesto-hacienda-container').style.display = 'none';
                    document.getElementById('itp-costes-tabla').style.display = 'none';
                    
                    // solo gestion en la DGT 15 euros
                    document.getElementById('solo-gestion-dgt-container').style.display = 'none';
                   
                    sumarITP(ITPTotal, true);
                    sumarITP(15 , false);
                    
                }else{
                    document.getElementById('exampleModalLabelValidacion').textContent = 'Recuerde que si activa esta opción tendrá que adjuntar el contrato de compraventa así como el resguardo del pago en Hacienda del Impuesto de Transmisiones Patrimoniales.';
                    document.getElementById('precio-validado').textContent = '';
                    document.getElementById('calculo-itp').style.display = 'none';
                    document.getElementById('modalPrecioValidate').style.display = 'block';
                    document.getElementById('contrato-compra-venta').style.display = 'flex';
                    document.getElementById('impuesto-hacienda-container').style.display = 'flex';
                    document.getElementById('itp-costes-tabla').style.display = 'table-row';
                    
                    // solo gestion en la DGT 15 euros
                    document.getElementById('solo-gestion-dgt-container').style.display = 'table-row';

                    sumarITP(ITPTotal, false);
                    sumarITP(15, true);
                }
                
            }
            
        }
    }
    
    
    function sumarITP(valor,signo){
        let ITPTotal = parseFloat(document.getElementById('total-tabla').textContent);
        if(signo == true){
            ITPTotal += valor;
            document.getElementById('total-tabla').textContent = ITPTotal.toFixed(2)+' €';
        }else{
            ITPTotal -= valor;
            document.getElementById('total-tabla').textContent = ITPTotal.toFixed(2)+' €';
        }
    }
    
    // modal de validacion de precio 
    
    modalCocheValidate.onclick = function (){
        document.getElementById('modalPrecioValidate').style.display = 'none'; 
    }
    
    
    // caravana
    
    // let marcaCaravana   = document.getElementById('marca-caravana');
    
    // let modeloCaravana  = document.getElementById('modelo-caravana');
    
    // let precioCaravana  = document.getElementById('precio-caravana');
    
    // let dateCaravana    = document.getElementById('date-caravana');
    
    
    // marcaCaravana.onchange = function(){
    //     caravanaDisplay();
    // }
    // modeloCaravana.onchange = function(){
    //     caravanaDisplay();
    // }
    // precioCaravana.onchange = function(){
    //     caravanaDisplay();
    // }
    // dateCaravana.onchange = function(){
    //     caravanaDisplay();
    // }
    
    // function caravanaDisplay(){
    //     if(marcaCaravana.value != '' && modeloCaravana.value != '' && precioCaravana.value != '' && dateCaravana.value != ''){
    //         document.getElementById('caravana-adicional').style.display = 'block';
    //     }
    // }
    
    // let provinciaCaravana = document.getElementById('provincia-caravana');
    
    // provinciaCaravana.onchange = function (){
    //     document.getElementById('datos-adicionales-caravana').style.display = 'block';
    // }
    
    

        
    
    
    
    



 // };