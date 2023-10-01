<section class="container mb-5 mb-5 d-flex justify-content-center">
  <div class="card" style="width: 50%;">
    <div class="card-header text-center">
      <h2>Iniciar Sesión</h2>
    </div>

    <!--Mensaje de Error (se registro con exito o no)--> 
      <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg')?>
        </div>
      <?php endif;?>

<!--Inicio del formulario de login-->
<form method="post" action="<?php echo base_url('/enviarlogin')?>">
    <div class="card-body" media="(max-width:768px)">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="pass" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
 
  <input type="submit" value="Ingresar" class="btn btn-primary">

  <a href="<?= base_url('/principal_ultimo') ?>" class="btn btn-danger">Cancelar</a>

  <br><span>¿Aún no se registró?<a href="<?php echo base_url('/registro'); ?>">Registrase aquí</a></span>
  </div>
</form>
</div>
</section>