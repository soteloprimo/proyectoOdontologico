 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de usuarios dehabilitados</h1>

    <?php  echo form_open_multipart('usuario/index'); ?> 
    <button type="submit" name="buton1" class="btn btn-primary">VER USUARIOS HABILITADOS</button>
    <?php echo form_close(); ?>
    
    <br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cargo</th>
      <th scope="col">Nomres</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Habilitar</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $indice=1;
foreach ($usuario->result() as $row) 
{?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->cargo;?></td>
      <td><?php echo $row->nombres;?></td>
      <td><?php echo $row->apellidoPaterno;?></td>
      <td><?php echo $row->apellidoMaterno;?></td>

      <td>
        <?php echo form_open_multipart("usuario/habilitarbd") ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
        <input type="submit" name="buttony" value="Habilitar" class="btn btn-success">
        <?php echo form_close();?>
      </td>

    </tr>
  <?php
  $indice++;
}

?>
    
  </tbody>
</table>
    </div>
  </div>
</div>