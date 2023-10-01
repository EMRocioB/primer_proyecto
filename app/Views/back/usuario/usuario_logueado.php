<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="clo-5">
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg')?>
                    </div>
                <?php endif;?>
                <br><br>
                <?php if(session()->perfil_id == 1): ?>
            <div>
                <img class="center" height="100px" width="100px" src="<?php echo base_url('assests/img/');?>">
            </div>
            <?php elseif(session()->perfil_id == 2): ?>
            <div>
                <img class="center" height="100px" width="100px" src="<?php echo base_url('assests/img/');?>">
            </div>
            <?php endif;?>
        </div>
    </div>
</div>

