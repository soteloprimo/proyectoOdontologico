 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de Pacientes</h1>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <?php  echo form_open_multipart('paciente/agregar'); ?> 
    <button type="submit" class="btn btn-primary btn-lg ">AGREGAR PACIENTE</button>
    <?php echo form_close(); ?>
    
    <br>

     <?php  echo form_open_multipart('paciente/deshabilitados'); ?> 
    <button type="submit" class="btn btn-danger btn-lg ">VER PACIENTE DESHABILITADOS</button>
    <?php echo form_close(); ?>
</div>
    
    
    <br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Modificar</th>
      <th scope="col">Deshabilitar</th>
      <th scope="col">Registrar Motorizado</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $indice=1;
foreach ($cliente->result() as $row) 
{?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombres;?></td>
      <td><?php echo $row->apellidoPaterno;?></td>
      <td><?php echo $row->apellidoMaterno;?></td>
      <td><?php echo $row->direccion;?></td>
      <td><?php echo $row->telefono;?></td>

      <td>
        <?php echo form_open_multipart("paciente/modificar") ?>
        <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
        <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
        <?php echo form_close();?>
      </td>




      <td>
        <?php echo form_open_multipart("paciente/deshabilitarbd") ?>
        <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
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