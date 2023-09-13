 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de clientes dehabilitados</h1>

    <?php  echo form_open_multipart('cliente/index1'); ?> 
    <button type="submit" name="buton1" class="btn btn-primary">VER CLIENTES HABILITADOS</button>
    <?php echo form_close(); ?>
    
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
      <th scope="col">Habilitar</th>
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
        <?php echo form_open_multipart("cliente/habilitarbd") ?>
        <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
        <input type="submit" name="buttonz" value="Habilitar" class="btn btn-warning">
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