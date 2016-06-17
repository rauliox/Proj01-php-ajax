<?php
require ('./operaciones/functions.php');


conectar_general();
     $result = ejecutar_sql('select idProducto,nombre,imagen,descripcion from producto');
     
 
$array = array();
while($row = mysql_fetch_row($result)) {
  $array[] = $row;
}

print_r($array);

     
     
     /*
      while($fila = mysql_fetch_assoc($result)){
           echo "<tr style='text-align:center;'><td>";
           echo $fila['idProducto']."\n";
           echo "</td><td>";
           echo $fila['nombre'];  
           echo "</td>";
           echo"<td>";
            echo $fila['imagen'];  
           echo"</td>";
           echo"<td>";
            echo $fila['descripcion'];  
           echo"</td>";
            echo "</tr>";
                    }
            echo "</table>";   
   
  mysql_free_result($result);
var_dump($result)
   

*/
     /*
$lines = file('./fpdf/paises.txt');


    $data = array();
    
   foreach($lines as $line){
       
        $data[] = explode(';',trim($line));
        
  }
  var_dump ($data);
   
echo "<br/><br/>";
$fila = mysql_fetch_assoc($result);
var_dump($fila) ; 
        */
?>