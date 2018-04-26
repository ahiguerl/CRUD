<?php
class OrdenServicio
{
	private $pdo;

	public $id;
	public $idCliente;
	public $fechaHora;
	public $descripcion;
	public $cantidadProductos;
	public $costoTotal;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Listar(){
		try{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM ordenservicio");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Obtener($id){
		try{
			$stm = $this->pdo
			->prepare("SELECT * FROM ordenservicio WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Eliminar($id){
		try{
			$stm = $this->pdo
			->prepare("DELETE FROM ordenservicio WHERE id = ?");

			$stm->execute(array($id));
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Actualizar($data){
		try{
			$sql = "UPDATE ordenservicio SET
			idCliente = ?,
			fechaHora = ?,
			descripcion = ?,
			cantidadProductos = ?,
			costoTotal = ?
			WHERE id = ?";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->idCliente,
					$data->fechaHora,
					$data->descripcion,
					$data->cantidadProductos,
					$data->costoTotal,
					$data->id
				)
			);

			echo json_encode(array('m'=>'Update'));
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Registrar(OrdenServicio $data){
		try{
			$sql = "INSERT INTO ordenservicio (idCliente,fechaHora,descripcion,cantidadProductos,costoTotal)
			VALUES (?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->idCliente,
					$data->fechaHora,
					$data->descripcion,
					$data->cantidadProductos,
					$data->costoTotal
				)
			);
			echo json_encode(array('m'=>'Registro'));
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}
}
