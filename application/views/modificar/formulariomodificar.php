<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>MODIFICAR CLIENTE</h2>

      <br>
      
      <?php 
      foreach ($infocliente->result() as $row) 
      {
        echo form_open_multipart('cliente/modificarbd'); 
        ?> 
        
        <input type="hidden" name="idcliente" value="<?php echo $row->idcliente;?>" > 

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre del cliente</label>
        <div class="col-sm-10">
           <input type="text" name="nombres" class="form-control"placeholder="Ingrese su nombre" value="<?php echo $row->nombres;?>" required>
        </div>
        </div>

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Primer apellido</label>
        <div class="col-sm-10">
           <input type="text" name="apellidopaterno" class="form-control" placeholder="Ingrese su apellido paterno" value="<?php echo $row->apellidoPaterno;?>" required>
        </div>
        </div>

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Segundo apellido</label>
        <div class="col-sm-10">
           <input type="text" name="apellidomaterno" class="form-control" placeholder="Ingrese su apellido materno" value="<?php echo $row->apellidoMaterno;?>" >
        </div>
        </div>

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Direccion</label>
        <div class="col-sm-10">
           <input type="text" name="direccion" class="form-control" placeholder="Ingrese su direccion" value="<?php echo $row->direccion;?>" required>
        </div>
        </div>

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Numero de telefono</label>
        <div class="col-sm-10">
           <input type="text" name="telefono" class="form-control" placeholder="Ingrese su numero de telefono" value="<?php echo $row->telefono;?>" required>
        </div>
        </div>

        <br>
              
        <button type="submit" class="btn btn-success">MODIFICAR CLIENTE</button>

    <?php echo form_close();
      }
       ?>

    

    
    </div>
  </div>
</div>