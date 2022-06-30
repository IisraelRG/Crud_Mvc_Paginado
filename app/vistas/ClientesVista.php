<?php include_once("encabezado.php"); ?>
  <h1>Clientes</h1>
  <table class="table table-bordered" id="tabla">
    <thead>
      <th>id</th>
      <th>Nombre</th>
      <th>Apellido P</th>
      <th>Apellido M</th>
      <th>Edad</th>
      <th>Genero</th>
      <th>Sucursal</th>
      <th>Modificar</th>
      <th>Borrar</th>
    </thead>
    <tbody>
      <?php
      for ($i=0; $i < count($data); $i++) { 
        print "<tr>";
        print "<td>".$data[$i]["id"]."</td>";
        print "<td class='text-left'>".$data[$i]["nombre"]."</td>";
        print "<td class='text-left'>".$data[$i]["apellidoP"]."</td>";
        print "<td class='text-left'>".$data[$i]["apellidoM"]."</td>";
        print "<td class='text-left'>".$data[$i]["edad"]."</td>";
        print "<td class='text-left'>".$data[$i]["genero"]."</td>";
        print "<td class='text-left'>".$data[$i]["sucursal"]."</td>";
        print "<td><a href='".RUTA_APP."clientes/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
        print "<td><a href='".RUTA_APP."clientes/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
        print "</tr>";
      }
      ?>
    </tbody>
  </table>
  <br>
  <a href='<?php print RUTA_APP."clientes/alta/"; ?>' class="btn btn-info">Dar de alta un cliente</a>
<?php include_once("piepagina.php");