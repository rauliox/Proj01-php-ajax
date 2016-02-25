       $(document).ready(function(){
            $("form[id=logeo]").submit(function(event){
                event.preventDefault();
                var data = $(this).serializeArray();
                data.push({name:'tag',value : 'login'});
                $.ajax({
                    url:'process.php',
                    type:'post',
                    dataType:'json',
                    data: data,   
                    beforeSend:function(){
                        $('.fa').css('display','inline');
                    }
                    
                })
                        .done(function(result){
                            $('span').html("Usuario Correcto");
                              setTimeout(function(){
                            $('span').html(result);
                            }, 1000);
                            //console.log("entrando al done" + result);
                            window.location = 'index.php';
                   // $('span').html($info);
                })
                        .fail(function(){
                    $('span').html("Datos incorrectos");
                            console.log("entrando al fail");
                            
                })
                        .always(function(){
                            setTimeout(function(){
                            $('.fa').hide();
                            }, 1000);
               
                });
                
          
            });
            
            $("p").click(function(event){
                event.preventDefault();
                $.post({url:"process.php",type:'post',dataType:'json',data:{tag: "logout"}})
                  .done( function(resultado){
                        $( "#resultado" ).html(resultado);
                         window.location = 'index.php';
                          console.log("entrando al done" + resultado);
                         }  )
                  .fail( function(resultado) {
                    alert(resultado);
                 });
              });
            
                  
                 

            
                
         
        });
