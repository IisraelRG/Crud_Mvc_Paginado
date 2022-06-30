<?php
class Clientes extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("ClientesModelo");
  }

  public function index(){
    $data = $this->modelo->getClientes();
    $this->vista("ClientesVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
      $apellidoP = isset($_POST["apellidoP"])?$_POST["apellidoP"]:"";
      $apellidoM = isset($_POST["apellidoM"])?$_POST["apellidoM"]:"";
      $edad = isset($_POST["edad"])?$_POST["edad"]:"";
      $genero = isset($_POST["genero"])?$_POST["genero"]:"";
      $sucursal = isset($_POST["sucursal"])?$_POST["sucursal"]:"";

      $this->modelo->modificarClientes($id, $nombre, $apellidoP, $apellidoM, $edad, $genero, $sucursal);

    } else {
      $data = $this->modelo->getCliente($id);
      $datos = [
        "id" => $id,
        "nombre" => $data[0]["nombre"],
        "apellidoP" => $data[0]["apellidoP"],
        "apellidoM" => $data[0]["apellidoM"],
        "edad" => $data[0]["edad"],
        "genero" => $data[0]["genero"],
        "sucursal" => $data[0]["sucursal"]
      ];
      $this->vista("ClientesModificar",$datos);
    }
  }

  public function borrar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarCliente($id);

    } else {
      $data = $this->modelo->getCliente($id);
      $datos = [
        "id" => $id,
        "nombre" => $data[0]["nombre"],
        "apellidoP" => $data[0]["apellidoP"],
        "apellidoM" => $data[0]["apellidoM"],
        "edad" => $data[0]["edad"],
        "genero" => $data[0]["genero"],
        "sucursal" => $data[0]["sucursal"]
      ];
      $this->vista("ClientesBorrar",$datos);
    }
  }

  public function alta()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
      $apellidoP = isset($_POST["apellidoP"])?$_POST["apellidoP"]:"";
      $apellidoM = isset($_POST["apellidoM"])?$_POST["apellidoM"]:"";
      $edad = isset($_POST["edad"])?$_POST["edad"]:"";
      $genero = isset($_POST["genero"])?$_POST["genero"]:"";
      $sucursal = isset($_POST["sucursal"])?$_POST["sucursal"]:"";

      $this->modelo->insertarClientes($nombre, $apellidoP, $apellidoM, $edad, $genero, $sucursal);

    } else {
      $this->vista("ClientesAlta");
    }
  }
}
?>