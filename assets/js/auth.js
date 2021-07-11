let iniciarSesion = document.getElementById('iniciar-sesion');

iniciarSesion.onclick = function(){
    let username = document.getElementById('username').value;
    let pass = document.getElementById('password').value;
    let spinner = document.getElementById('spinner');
    let sucess = document.getElementById('sucess-mensagge');
    spinner.style.display = 'block';
    iniciarSesion.setAttribute("disable", true);
    
    pass = encode(pass);
    
    let url = 'https://transferencia.staging.graphics/wp-json/gp/v1/login/?username='+username+'&password='+pass;
    
    fetch(url,{method: 'GET'})
        .then(function(response) {
            return response.json();
        })
        .then(function(myJson) {  
            
            if(myJson == 200){
                spinner.style.display = 'none';
                sucess.style.display = 'block';
                window.location.href = "https://transferencia.staging.graphics/";
            }else{
                spinner.style.display = 'none';
                document.getElementById('error').textContent = myJson;
                iniciarSesion.removeAttribute("disabled");
            }
        });  
}


let particularRole  = document.getElementById('particular-tab');
let profesionalRole = document.getElementById('profesional-tab');
let role = '';

particularRole.onclick = function(){
    role = 'particular';
    registerUser(role);
    
}

profesionalRole.onclick = function(){
    role = 'profesional';
    registerUser(role);
    
}


function registerUser(role){
    let username = document.getElementById(role+'-username').value;
    let password = document.getElementById(role+'-password').value;
    let email    = document.getElementById(role+'-email').value;
    let dedica   = '';
    let telf     = '';
    document.getElementById(role+'-spinner').style.display = 'block';
    console.log(role);
    if(role == 'profesional'){
        dedica = document.getElementById(role+'-dedica').value;
        telf   = document.getElementById(role+'-telf').value;
        
        let url = 'https://transferencia.staging.graphics/wp-json/gp/v1/register/?username='+username+'&password='+password+'&email='+email+'&dedica='+dedica+'&telf='+telf;
        
        fetch(url,{method: 'GET'})
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {  
                document.getElementById(role+'-spinner').style.display = 'none';
                document.getElementById(role+'-mensagge').style.display = 'block';
                //console.log(myJson);
                window.location.href = "https://transferencia.staging.graphics/";
            }); 
        
        
        
    }else{
        
        let url = 'https://transferencia.staging.graphics/wp-json/gp/v1/register/?username='+username+'&password='+password+'&email='+email;
        
        fetch(url,{method: 'GET'})
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {  
                document.getElementById(role+'-spinner').style.display = 'none';
                document.getElementById(role+'-mensagge').style.display = 'block';
                //console.log(myJson);
                window.location.href = "https://transferencia.staging.graphics/";
            }); 
        
        
    }
    
    
    
    
}

function encode(str) {
    var encoded = "";
    str = btoa(str);
    str = btoa(str);
    return str;
}