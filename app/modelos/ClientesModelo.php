<?php
class ClientesModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getClientes(){
    $data = $this->db->querySelect("SELECT * FROM clientes");
    return $data;
  }

  public function getCliente($id){
    $data = $this->db->querySelect("SELECT * FROM clientes WHERE id=".$id);
    return $data;
  }

  public function insertarClientes($nombre, $apellidoP, $apellidoM, $edad, $genero, $sucursal){
    $sql = "INSERT INTO clientes VALUES(0,";
    $sql.= "'".$nombre."', ";
    $sql.= "'".$apellidoP."', ";
    $sql.= "'".$apellidoM."', ";
    $sql.= "'".$edad."', ";
    $sql.= "'".$genero."', ";
    $sql.= "'".$sucursal."')";
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."clientes");
      exit();
    } else {
      exit("Error al insertar los datos del cliente");
    }
  }

  public function modificarClientes($id, $nombre, $apellidoP, $apellidoM, $edad, $genero, $sucursal){
    $sql = "UPDATE clientes SET ";
    $sql.= "`nombre`='".$nombre."', ";
    $sql.= "`apellidoP`='".$apellidoP."', ";
    $sql.= "`apellidoM`='".$apellidoM."', ";
    $sql.= "`edad`='".$edad."', ";
    $sql.= "`genero`='".$genero."', ";
    $sql.= "`sucursal`='".$sucursal."' ";
    $sql.= "WHERE `id`=".$id;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."clientes");
      exit();
    }else {
      exit("Error al borrar el cliente");
    }
  }

  public function borrarCliente($id){
    $sql = "DELETE FROM `clientes`";
    $sql.= "WHERE `id`=".$id;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."clientes");
      exit();
    }else {
      exit("Error al borrar el cliente");
    }
  }
}
?>