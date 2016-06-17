

<script src="js/ajax.js"> </script>

<form role="form" method="post" >
  <div class="form-group">
    <label for="nombre">Nombre Producto:</label>
    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto">
  </div>
   <div class="form-group">
    <label for="imagen">Url Imagen:</label>
    <input type="text" class="form-control" id="url_imagen" name="url_imagen">
  </div>
  <div class="form-group">
  <label for="sinopsis">Descripcion:</label>
  <textarea class="form-control" rows="2" id="descripcion" name="descripcion"></textarea>
  </div>
  <div class="form-group">
  <label for="envio">Envío Internacional:</label>
            <select name="envio" id="envio">
            <option value="si">Si</option>
            <option value="no">No</option>
            </select>
 </div>
    <div id="msg">
    </div>
    <input type="submit" name="button" id="enviar" value="Enviar" onclick="return validar();"/>
    <input type="button" name="cancelar" id="cancelar" value="cancelar"/>   
</form>

