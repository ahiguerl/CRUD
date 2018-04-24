<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->id : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=OrdenServicio">Listado de Órdenes de servicio</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->id : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-orden" method="post" >
<!-- <form id="frm-orden" action="?c=OrdenServicio&a=Guardar" method="post" > -->
    <input type="hidden" id="id" name="id" value="<?php echo $alm->id; ?>" />

    <div class="form-group">
        <label>Id Cliente</label>
        <input type="text" id="idCliente" name="idCliente" value="<?php echo $alm->idCliente; ?>" class="form-control" placeholder="Ingrese el Id del Cliente" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Fecha Hora</label>
        <input type="text" id="fechaHora" name="fechaHora" value="<?php echo $alm->fechaHora; ?>" class="form-control datepicker"  />
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input type="text" id="descripcion" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control" placeholder="Ingrese la descripción" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Cantidad productos</label>
        <input type="text" id="cantidadProductos" name="cantidadProductos" value="<?php echo $alm->cantidadProductos; ?>" class="form-control" placeholder="Ingrese la cantidad de productos" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Costo total</label>
        <input type="text" id="costoTotal" name="costoTotal" value="<?php echo $alm->costoTotal; ?>" class="form-control" placeholder="Ingrese el costo total" data-validacion-tipo="requerido" />
    </div>

    <hr />

    <div class="text-right">

    </div>
</form>
<h1 id="rta"></h1>
<button id="Guardar" class="btn btn-success">Guardar</button>

<script>
    $(document).ready(function(){
        $("#frm-orden").submit(function(){
            return $(this).validate();
        });
    });

    $("#Guardar").click(function (){
      $.ajax({
        // url: "controller/rta.php",
        url: "index.php?ajax=1&c=OrdenServicio",
        type: "POST",
        dataType: "json",
        data: {id: $("#id").val(),
        idCliente:$("#idCliente").val(),
        fechaHora:$("#fechaHora").val(),
        descripcion: $("#descripcion").val(),
        cantidadProductos: $("#cantidadProductos").val(),
        costoTotal:$("#costoTotal").val()},
        success: function (result) {
          $("#rta").html(result.m);
          console.log(result.m);
        }
      })
    });
</script>
