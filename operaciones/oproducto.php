<?php 

include('functions.php');
$operacion = $_POST["operacion"];

//$msj = "<script> alert('$operacion') </script>";
//echo $msj;
   $msj ="";

if ($operacion == "insertar"){
    
    $nombre = $_POST["nombre"];
    $imagen = $_POST["url_imagen"];
    $descripcion = $_POST["descripcion"];
    $envio = $_POST["envio"];
    
        if($nombre === ""){
        $msj = "Ingresar Nombre del producto";
        echo $msj;
        return ;
        }
        if($imagen === ""){
        $msj = "Ingresar url de la imagen";
        echo $msj;
        return ;
        }
        if($descripcion === ""){
        $msj = "Ingresar descripción del producto";
        echo $msj;
        return ;
        }
        if($envio === ""){
        $msj = "Ingresar detalle de envío";
        echo $msj;
        return ;
        }
   
       try {
                conectar_general();
                $result = ejecutar_sql("insert into producto(nombre,imagen,descripcion,detalle_envio) values('$nombre','$imagen','$descripcion','$envio')");
                 if(mysql_affected_rows() > 0 ){

                    
                   $ret = mysql_affected_rows();
                     
                   $var = mysql_insert_id();                
                   mysql_close(); 
                   $msj= "se insertaron $ret filas";
                
                }
            
             } 
            catch (Exception $ex) {
                echo $ex;
                $msj = "hubo un problema".ex;
          }
    
echo $msj;        



}



?>