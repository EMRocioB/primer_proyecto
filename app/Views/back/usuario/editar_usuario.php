<section class="container mb-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <div class="card-header text-center">
            <h2>Editar Usuario</h2>
        </div>

        <?php $validation = \Config\Services::validation(); ?>

        <!--Mensaje-->
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('msg')?>
            </div>
        <?php endif;?>
         <!--Fin Mensaje-->    


        <form method="post" action="<?= base_url('/actualizar') ?>">
            <?= csrf_field(); ?>

            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('success'))): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>

            <div class="card-body" media="(max-width:768px)">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?= set_value('nombre', esc($usuario['nombre'])) ?>">
                    <!-- ERROR -->
                    <?php if ($validation->hasError('nombre')): ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('nombre'); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="<?= set_value('apellido', esc($usuario['apellido'])) ?>">
                    <!-- ERROR -->
                    <?php if ($validation->hasError('apellido')): ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('apellido'); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="correo@algo.com" value="<?= set_value('email', esc($usuario['email'])) ?>">
                    <!-- ERROR -->
                    <?php if ($validation->hasError('email')): ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('email'); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" value="<?= set_value('usuario', esc($usuario['usuario'])) ?>">
                    <!-- ERROR -->
                    <?php if ($validation->hasError('usuario')): ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError('usuario'); ?>
                        </div>
                    <?php endif ?>
                </div>

                <input type="submit" value="Guardar" class="btn btn-primary">
                <a href="<?= base_url('/ver_usuario') ?>" class="btn btn-danger">Cancelar</a>
            </div>

            <!-- Agrega un campo oculto para enviar el ID del usuario a editar -->
            <input type="hidden" name="id_usuario" value="<?= esc($usuario['id_usuario']) ?>">
        </form>
    </div>
</section>
