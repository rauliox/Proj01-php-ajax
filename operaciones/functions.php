<?php
        
         function conectar_general(){
             $servidor = "localhost";
             $user = "root";
             $password = "1234";
             $db="sistema";
             $conexion = mysql_connect($servidor,$user,$password,$db);
             if(! $conexion){
                 die (mysql_error());
                 
             }
            $bd = mysql_select_db($db,$conexion);
             if(! $bd){
                 die (mysql_error());
                 
             }
         }
                      
                
         function ejecutar_sql($sql){

                $resultado = mysql_query($sql);

                if (! $resultado ){
                    die(mysql_error());
                 }
                return $resultado;

           }
           
           function insertar_producto($nombre,$url_imagen,$descripcion,$detalle_envio){
               
               conectar_general();
                $result = ejecutar_sql("insert into producto(nombre,imagen,descripcion,detalle_envio) values($nombre,$url_imagen,$descripcion,$detalle_envio)");
                if(mysql_affected_rows() > 0 ){
                    $msj = "se insertó con exito".mysql_affected_rows()."filas";
                    
                }
                mysql_free_result($result);
                mysql_close(); 
                return $msj;
           }
           
           
           
           
           
           
       
        
            
?>

