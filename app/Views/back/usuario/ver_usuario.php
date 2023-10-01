<section class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="registrar_usuario" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
        <div class="d-inline-flex">
            <form class="form-inline" role="buscar">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
            </form>
        </div>
    </div>
    
    <!--Mensaje-->
    <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('msg')?>
            </div>
    <?php endif;?>
    <!--Fin Mensaje-->  

    <div class="row">
        <table class="table table-striped">        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id_usuario'] ?></td>
                        <td><?= $usuario['apellido'] ?></td>
                        <td><?= $usuario['nombre'] ?></td>
                        <td><?= $usuario['usuario'] ?></td>
                        <td><?= $usuario['email'] ?></td>
                        <td>
                            <?php if ($usuario['perfil_id'] === '1'): ?>
                                Administrador
                            <?php else:?>
                                Cliente
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url("/editar_usuario/{$usuario['id_usuario']}") ?>" class="btn btn-warning">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a href="<?= base_url("/ver_usuario/delete/{$usuario['id_usuario']}") ?>" type="button" class="btn btn-danger">    
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col">
            <ul class="pagination justify-content-end">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <!-- Puedes generar dinámicamente los enlaces de paginación según tu lógica -->
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>  
</section>



