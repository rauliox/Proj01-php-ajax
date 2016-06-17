
  <?php include 'header.php'; ?>
      
  
      <div class="row">
      <div class="col-md-12">
          <p id="content" class="ocultar"> </p>
          
          <h1>Lista de Productos</h1>
        
           <?php
             conectar_general();
           
           $result = ejecutar_sql('select * from producto');
           
           ?>
              
          <table class= "table">
          <tr style="text-align:center;">
               <th >Id Producto</th>
           <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
           <th scope="col"><center>Descripcion</center></th>
           <th scope="col">Envío internacional</th>
           </tr>           
           <?php
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
           echo"<td>";
            echo $fila['detalle_envio'];  
           echo"</td>";
           echo "</tr>";
                    }
            echo "</table>";         
           mysql_free_result($result);
          
           mysql_close(); 
           ?>
          
          
           
      </div>
      </div>
      
      <div class="row">
      <div class="col-md-6">
          
     
      </div>
      <div class="col-md-6">
         
      </div>
      </div>
      
      
 <?php           include 'footer.php'; ?>
 

