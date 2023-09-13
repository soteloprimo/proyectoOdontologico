<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>AGREGAR USUARIO</h2>
     <br>
        <?php  echo form_open_multipart('usuario/agregarbd'); ?>

  <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CARGO</label>
              <div class="col-sm-10">
                 <select type="text" name="cargo" class="form-select" aria-label="Cargo">
                     <option selected>Seleccione el cargo</option>
                     <option value="administrador">administrador</option>
                     <option value="empleado">empleado</option>
                  </select>
              </div>
  </div>

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NOMBRES</label>
  <div class="col-sm-10">
     <input type="text" name="nombres" class="form-control" autocomplete="off" placeholder="Ingrese el nombre del usuario" required>
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
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CONTRASEÑA</label>
  <div class="col-sm-10">
     <input type="password" name="contrasenia" class="form-control" autocomplete="off" placeholder="Ingrese la contraseña" required>
  </div>  
  </div> 
  
    <br>
    <button type="submit" class="btn btn-primary">AGREGAR USUARIO</button>

    <?php form_close(); ?>

    


    
    </div>
  </div>
</div>