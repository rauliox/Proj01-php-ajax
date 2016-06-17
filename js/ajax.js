$(document).ready(function(){
            $("a[id=registro]").click(function(event){
                event.preventDefault();
                //var data = $(this).;
                //console.log(data);
                    $('#content').empty();
                    $('#content').load('registrarProducto.php'); 
                   // $('#content').load('registrarProducto.php').fadeIn(); 
               
             });
            
             $("input[id=cancelar]").click(function(event){
                event.preventDefault();
              $("#content").html("");
          
            });
                        
                   
          $("#enviar").click(function(event){
          event.preventDefault();
           //if(validar() === true){
                 $.ajax ({
                    beforeSend: validar,
                    url:"operaciones/oproducto.php",
                     data: 
                          {      nombre: $("#nombre_producto").val(),
                                 url_imagen:$("#url_imagen").val(),
                                 descripcion:$("#descripcion").val(),
                                 envio:$("#envio").val(),
                                 operacion:'insertar'
                            
                        },
                        type:'POST',
                        success :function(data){
                            //setTimeout(function(){
                              $("#msg").html(data).fadeOut(3000);
                             
                            //},1000);
                            
                        } 
                               
                                           
             });
           
         // };
         
          
        
        
        
     });
          
          
      
  
    
});

function validar(){
    
    var uno = document.getElementById('nombre_producto');
    if(uno.value === ""){
          alert("no inserto , primero ejecuta esto"); 
          return false;
    }
    else {
     
     return true;   
     
    }
   
}

                
    
    
    
    
    
    
