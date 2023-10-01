<section class="container mb-5 mb-5 d-flex justify-content-center">
  <div class="card" style="width: 50%;">
    <div class="card-header text-center">
      <h2>Registrar Usuario</h2>
    </div>
  
    <?php $validation = \Config\Services::validation(); ?>

  <!--Mensaje-->
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('msg')?>
        </div>
    <?php endif;?>
    <!--Fin Mensaje -->


    <form method="post" action="<?php echo base_url('/enviar-form')?>">
      <?= csrf_field(); ?>

      <?php if(!empty(session()->getFlashdata('fail'))): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>

      <?php if(!empty(session()->getFlashdata('success'))): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>

      <div class="card-body" media="(max-width:768px)">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" placeholder="Nombre" aria-describedby="emailHelp">
          <!-- ERROR -->
          <?php if($validation->hasError('nombre')): ?>
            <div class="alert alert-danger mt-2">
              <?= $validation->getError('nombre'); ?>
            </div>
          <?php endif ?>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" placeholder="Apellido" aria-describedby="emailHelp">
          <!-- ERROR -->
          <?php if($validation->hasError('apellido')): ?>
            <div class="alert alert-danger mt-2">
              <?= $validation->getError('apellido'); ?>
            </div>
          <?php endif ?>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="correo@algo.com" aria-describedby="emailHelp">
          <!-- ERROR -->
          <?php if($validation->hasError('email')): ?>
            <div class="alert alert-danger mt-2">
              <?= $validation->getError('email'); ?>
            </div>
          <?php endif ?>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Usuario</label>
          <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" placeholder="Usuario" aria-describedby="emailHelp">
          <!-- ERROR -->
          <?php if($validation->hasError('usuario')): ?>
            <div class="alert alert-danger mt-2">
              <?= $validation->getError('usuario'); ?>
            </div>
          <?php endif ?>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
          <!-- ERROR -->
          <?php if($validation->hasError('pass')): ?>
            <div class="alert alert-danger mt-2">
              <?= $validation->getError('pass'); ?>
            </div>
          <?php endif ?>
        </div>

        <input type="submit" value="Guardar" class="btn btn-primary">
        <a href="<?= base_url('/') ?>" class="btn btn-danger">Cancelar</a>

      </div>

    </form>

  </div>
  
</section>
