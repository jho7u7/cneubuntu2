<main>
  <div class="container">
    <br>
    <div class="row">
      <div class="col-md-6">
          <h1>~ LISTADO DE CANDIDATOS ~</h1>
      </div>
      <div class="col-md-6">
        <br>
        <a href="<?php echo site_url('candidatos/nuevoc');?>"class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"></i>Agregar Candidato</a>
      </div>
    </div>
    <br>
    <?php if ($candidatos): ?>
      <table class="table table-striped table-bordered">
        <thead class="bg-primary">
          <tr>
            <th>ID</th>
            <th>CEDULA</th>
            <th>DIGNIDAD</th>
            <th>APELLIDOS</th>
            <th>NOMBRES</th>
            <th>MOVIMIENTO</th>
            <th>TIPO</th>
            <th>TELEFONO</th>
            <th>LATITUD</th>
            <th>LONGITUD</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($candidatos as $filaTemporal): ?>
            <tr>
              <td><?php echo $filaTemporal->id_can?></td>
              <td><?php echo $filaTemporal->cedula_can?></td>
              <td><?php echo $filaTemporal->dignidad_can?></td>
              <td><?php echo $filaTemporal->apellido_can?></td>
              <td><?php echo $filaTemporal->nombre_can?></td>
              <td><?php echo $filaTemporal->movimiento_can?></td>
              <td><?php echo $filaTemporal->tipo_can?></td>
              <td><?php echo $filaTemporal->telf_can?></td>
              <td><?php echo $filaTemporal->latitud_can?></td>
              <td><?php echo $filaTemporal->longitud_can?></td>
              <td class="text-center">
                <a href="#" title="Editar Candidato">
                  <i class="glyphicon glyphicon-pencil"></i>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url("candidatos/eliminar/$filaTemporal->id_can")?>"title="Eliminar Candidato" onclick="return confirm ('¿Desea eliminar este registro?');" style="color:red">
                 <i class="glyphicon glyphicon-trash"></i>
               </a>
             </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <h1>No hay datos</h1>
    <?php endif; ?>
  </div>
</main>
