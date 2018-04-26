<?php
require_once 'model/ordenservicio.php';

class OrdenServicioController{

  private $model;

  public function __CONSTRUCT(){
    $this->model = new OrdenServicio();
  }

  public function Index(){
    require_once 'view/header.php';
    require_once 'view/ordenservicio/ordenservicio.php';
    require_once 'view/footer.php';
  }

  public function Crud(){
    $alm = new OrdenServicio();

    if(isset($_REQUEST['id'])){
      $alm = $this->model->Obtener($_REQUEST['id']);
    }

    require_once 'view/header.php';
    require_once 'view/ordenservicio/ordenservicio-editar.php';
    require_once 'view/footer.php';
  }

  public function Guardar(){
    $alm = new OrdenServicio();

    $alm->id = $_REQUEST['id'];
    $alm->idCliente = $_REQUEST['idCliente'];
    $alm->fechaHora = $_REQUEST['fechaHora'];
    $alm->descripcion = $_REQUEST['descripcion'];
    $alm->cantidadProductos = $_REQUEST['cantidadProductos'];
    $alm->costoTotal = $_REQUEST['costoTotal'];

    $alm->id > 0
    ? $this->model->Actualizar($alm)
    : $this->model->Registrar($alm);

    header('Location: index.php');
  }

  public function ActivarAjax(){
    $alm = new OrdenServicio();

    $alm->id = $_POST['id'];
    $alm->idCliente = $_POST['idCliente'];
    $alm->fechaHora = $_POST['fechaHora'];
    $alm->descripcion = $_POST['descripcion'];
    $alm->cantidadProductos = $_POST['cantidadProductos'];
    $alm->costoTotal = $_POST['costoTotal'];

    $alm->id > 0 ? $this->model->Actualizar($alm) : $this->model->Registrar($alm);
  }

  public function Eliminar(){
    $this->model->Eliminar($_REQUEST['id']);
    header('Location: index.php');
  }
}
