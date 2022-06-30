<?php include_once("encabezado.php"); ?>
   <h1>Dar de alta un cliente</h1>  
  <form action='<?php print RUTA_APP."clientes/alta/"; ?>' method="POST">
    <div class="form-group text-left">
      <label for="nombre">Nombre:</label></td>
      <input type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group text-left">
      <label for="apellidoP">Apellido P:</label>
      <input type="text" name="apellidoP"  class="form-control">
    </div>
    <div class="form-group text-left">
      <label for="apellidoM">Apellido M:</label>
      <input type="text" name="apellidoM" class="form-control">
    </div>
    <div class="form-group text-left">
      <label for="edad">Edad:</label>
      <input type="number" name="edad" class="form-control">
    </div>
    <div class="form-group text-left">
      <label for="genero">Genero:</label>
      <select name="genero" class="custom-select" id="genero">
          <option value="Hombre">Hombre</option>
          <option value="Mujer">Mujer</option>
          <option value="Otro">Otro</option>
      </select>
    </div>
    <div class="form-group text-left">
      <label for="sucursal">Sucursal:</label>
      <select name="sucursal" class="custom-select" id="sucursal">
          <option value="Sucursal 1">Sucursal 1</option>
          <option value="Sucursal 2">Sucursal 2</option>
          <option value="Sucursal 3">Sucursal 3</option>
          <option value="Sucursal 4">Sucursal 4</option>
      </select>
    </div>
    <div class="form-group text-left">
      <input type="submit" value="Enviar" class="btn btn-success">
      <a href='<?php print RUTA_APP."clientes/"; ?>' class="btn btn-info">Regresar</a>
    </div>
  </form>
<?php include_once("piepagina.php"); ?>