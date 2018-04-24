<h1 class="page-header">Órdenes de servicio</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=OrdenServicio&a=Crud">Nueva orden</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id</th>
            <th>Id Cliente</th>
            <th>Fecha Hora</th>
            <th style="width:120px;">Descripcion</th>
            <th style="width:120px;">Cantidad productos</th>
            <th style="width:60px;">Costo total</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->idCliente; ?></td>
            <td><?php echo $r->fechaHora; ?></td>
            <td><?php echo $r->descripcion; ?></td>
            <td><?php echo $r->cantidadProductos; ?></td>
            <td><?php echo $r->costoTotal; ?></td>
            <td>
                <a href="?c=OrdenServicio&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=OrdenServicio&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
