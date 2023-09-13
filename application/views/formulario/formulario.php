<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>AGREGAR CLIENTE</h2>
     <br>
        <?php  echo form_open_multipart('cliente/agregarbd'); ?>

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NOMBRES</label>
  <div class="col-sm-10">
     <input type="text" name="nombres" class="form-control" autocomplete="off" placeholder="Ingrese el nombre del cliente" required>
  </div>
  </div>

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">PRIMER APELLIDO</label>
  <div class="col-sm-10">
     <input type="text"  name="apellidopaterno" class="form-control" autocomplete="off" placeholder="Ingrese el primer apellido" required>
  </div>  
  </div>
   
  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">SEGUNDO APELLIDO</label>
  <div class="col-sm-10">
     <input type="text"  name="apellidomaterno" class="form-control" autocomplete="off" placeholder="Ingrese el segundo apellido ">
  </div>  
  </div> 

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">DIRECCION</label>
  <div class="col-sm-10">
     <input type="text" name="direccion" class="form-control" autocomplete="off" placeholder="Ingrese la direccion de referencia"required>
  </div>  
  </div> 

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">TELEFONO</label>
  <div class="col-sm-10">
     <input type="text"  name="telefono" class="form-control" autocomplete="off" placeholder="Ingrese el numero telefono de referencia" required>
  </div>  
  </div> 

    
    <br>
    <button type="submit" class="btn btn-primary">AGREGAR CLIENTE</button>

    <?php form_close(); ?>

    


    
    </div>
  </div>
</div>