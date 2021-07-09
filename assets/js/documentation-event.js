

    
    var title = document.getElementById('title-ccompra');
    var imageTitle = document.getElementById('imagen-archivo-ccompra');
    var subirCompra = document.getElementById('subir-ccompra');
    var contratoFile = document.getElementById('ccompra');
    title.onclick = function(){
        contratoFile.click();
    }
    
    imageTitle.onclick = function(){
         contratoFile.click();
    }
    
    subirCompra.onclick = function(){
         contratoFile.click();
    }
    
    contratoFile.onchange = function (){
        if(contratoFile.value != '' ){
            document.getElementById('imagen-archivo-ccompra').src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    
    var radios = document.getElementsByName('contrato');
    
    for (var i = 0, length = radios.length; i < length; i++) {
      radios[i].onclick = function(){
            var radios = document.getElementsByName('contrato');

            for (var i = 0, length = radios.length; i < length; i++) {
              if (radios[i].checked) {
                
                  if( radios[i].value == 'true' ){
                      document.getElementById('contrato-compra-venta').style.display = 'flex';
                       
                      document.getElementById("nif-vendedor-frontal").classList.remove("col-lg-6");
                      document.getElementById("nif-vendedor-trasero").classList.remove("col-lg-6");
                      
                      document.getElementById("nif-vendedor-frontal").classList.add("col-lg-4");
                      document.getElementById("nif-vendedor-trasero").classList.add("col-lg-4");
                      document.getElementById('clausulas').style.display = 'block';
                  }else{
                      document.getElementById('clausulas').style.display = 'none';
                      document.getElementById('contrato-compra-venta').style.display = 'none';
                      document.getElementById("nif-vendedor-frontal").classList.remove("col-lg-4");
                      document.getElementById("nif-vendedor-frontal").classList.add("col-lg-6");
                      document.getElementById("nif-vendedor-trasero").classList.remove("col-lg-4");
                      document.getElementById("nif-vendedor-trasero").classList.add("col-lg-6");
                  }
               
              }
            }
      }
    }
    
    

    // ------------

    
    var titleVFrontal = document.getElementById('title-nifv-frontal');
    var imageTitleVFrontal = document.getElementById('imagen-archivo-nifv-frontal');
    var subirCompraVFrontal = document.getElementById('subir-nifv-frontal');
    var contratoFileVFrontal = document.getElementById('nifv-frontal');
    titleVFrontal.onclick = function(){
        contratoFileVFrontal.click();
    }
    
    imageTitleVFrontal.onclick = function(){
         contratoFileVFrontal.click();
    }
    
    subirCompraVFrontal.onclick = function(){
         contratoFileVFrontal.click();
    }
    
    contratoFileVFrontal.onchange = function (){
        if(contratoFileVFrontal.value != '' ){
            document.getElementById('imagen-archivo-nifv-frontal').src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    //-------------
    
    var titleVTrasero = document.getElementById('title-nifv-trasero');
    var imageTitleVTrasero = document.getElementById('imagen-archivo-nifv-trasero');
    var subirCompraVTrasero = document.getElementById('subir-nifv-trasero');
    var contratoFileVTrasero = document.getElementById('nifv-trasero');
    titleVTrasero.onclick = function(){
        contratoFileVTrasero.click();
    }
    
    imageTitleVTrasero.onclick = function(){
         contratoFileVTrasero.click();
    }
    
    subirCompraVTrasero.onclick = function(){
         contratoFileVTrasero.click();
    }
    
    contratoFileVTrasero.onchange = function (){
        if(contratoFileVTrasero.value != '' ){
            document.getElementById('imagen-archivo-nifv-trasero').src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    //------------------------------
    
    
    var titleCFrontal = document.getElementById('title-nifc-frontal');
    var imageTitleCFrontal = document.getElementById('imagen-archivo-nifc-frontal');
    var subirCompraCFrontal = document.getElementById('subir-nifc-frontal');
    var contratoFileCFrontal = document.getElementById('nifc-frontal');
    titleCFrontal.onclick = function(){
        contratoFileCFrontal.click();
    }
    
    imageTitleCFrontal.onclick = function(){
         contratoFileCFrontal.click();
    }
    
    subirCompraCFrontal.onclick = function(){
         contratoFileCFrontal.click();
    }
    
    contratoFileCFrontal.onchange = function (){
        if(contratoFileCFrontal.value != '' ){
            document.getElementById('imagen-archivo-nifc-frontal').src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    //------------------------------
    
    
    var titleCTrasero = document.getElementById('title-nifc-trasero');
    var imageTitleCTrasero = document.getElementById('imagen-archivo-nifc-trasero');
    var subirCompraCTrasero = document.getElementById('subir-nifc-trasero');
    var contratoFileCTrasero = document.getElementById('nifc-trasero');
    titleCTrasero.onclick = function(){
        contratoFileCTrasero.click();
    }
    
    imageTitleCTrasero.onclick = function(){
         contratoFileCTrasero.click();
    }
    
    subirCompraCTrasero.onclick = function(){
         contratoFileCTrasero.click();
    }
    
    contratoFileCTrasero.onchange = function (){
        if(contratoFileCTrasero.value != '' ){
            document.getElementById('imagen-archivo-nifc-trasero').src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    //------------------------------
    
    
    var titleFTecnica = document.getElementById('title-ftecnica-frontal');
    var imageTitleFTecnica = document.getElementById('imagen-archivo-ftecnica-frontal');
    var subirCompraFTecnica = document.getElementById('subir-ftecnica-frontal');
    var contratoFileFTecnica = document.getElementById('ftecnica-frontal');
    titleFTecnica.onclick = function(){
        contratoFileFTecnica.click();
    }
    
    imageTitleFTecnica.onclick = function(){
         contratoFileFTecnica.click();
    }
    
    subirCompraFTecnica.onclick = function(){
         contratoFileFTecnica.click();
    }
    
    contratoFileFTecnica.onchange = function (){
        if(contratoFileFTecnica.value != '' ){
            imageTitleFTecnica.src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    
    
    //------------------------------
    
    
    var titleFTecnicaT = document.getElementById('title-ftecnica-trasera');
    var imageTitleFTecnicaT = document.getElementById('imagen-archivo-ftecnica-trasera');
    var subirCompraFTecnicaT = document.getElementById('subir-ftecnica-trasera');
    var contratoFileFTecnicaT = document.getElementById('ftecnica-trasera');
    titleFTecnicaT.onclick = function(){
        contratoFileFTecnicaT.click();
    }
    
    imageTitleFTecnicaT.onclick = function(){
         contratoFileFTecnicaT.click();
    }
    
    subirCompraFTecnicaT.onclick = function(){
         contratoFileFTecnicaT.click();
    }
    
    contratoFileFTecnicaT.onchange = function (){
        if(contratoFileFTecnicaT.value != '' ){
            imageTitleFTecnicaT.src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    
    //-----------------------------------

    
    var titlePVehiculo = document.getElementById('title-permiso-vehiculo');
    var imageTitlePVehiculo = document.getElementById('imagen-archivo-permiso-vehiculo');
    var subirCompraPVehiculo = document.getElementById('subir-permiso-vehiculo');
    var contratoFilePVehiculo = document.getElementById('permiso-vehiculo');
    titlePVehiculo.onclick = function(){
        contratoFilePVehiculo.click();
    }
    
    imageTitlePVehiculo.onclick = function(){
         contratoFilePVehiculo.click();
    }
    
    subirCompraPVehiculo.onclick = function(){
         contratoFilePVehiculo.click();
    }
    
    contratoFilePVehiculo.onchange = function (){
        if(contratoFilePVehiculo.value != '' ){
            imageTitlePVehiculo.src = 'https://'+window.location.hostname+'/wp-content/plugins/transferencia-vehiculos/assets/img/pdf.webp';
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

