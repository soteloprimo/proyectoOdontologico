 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de usuarios</h1>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <?php  echo form_open_multipart('usuario/agregar'); ?> 
    <button type="submit" class="btn btn-primary btn-lg ">AGREGAR USUARIOS</button>
    <?php echo form_close(); ?>
    
    <br>

     <?php  echo form_open_multipart('usuario/deshabilitados'); ?> 
    <button type="submit" class="btn btn-danger btn-lg ">VER USUARIOS DESHABILITADOS</button>
    <?php echo form_close(); ?>
</div>
    
    
    <br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cargo</th>
      <th scope="col">Nomres</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <!-- <th scope="col">Contraseña</th>-->
      <th scope="col">Login</th>
      <th scope="col">Modificar</th>
      <th scope="col">Deshabilitar</th>
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
      <!-- <td><?php echo $row->contrasenia;?></td>-->
      <td><?php echo $row->login;?></td>

      <td>
        <?php echo form_open_multipart("usuario/modificar") ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
        <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
        <?php echo form_close();?>
      </td>




      <td>
        <?php echo form_open_multipart("usuario/deshabilitarbd") ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
        <input type="submit" name="buttonz" value="Deshabilitar" class="btn btn-danger">
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