

<?php $__env->startSection('content'); ?>
<div class="content" style="margin: 20px;">

    <br>

    <div class="row">
        <!-- CANTIDAD DE  MINISTERIOS -->
        <div class="col-lg-3">
            <div class="small-box bg-info" style="height: 160px;">
                <div class="inner">
                    <!-- CONTADOR DE LA CANTIDAD DE MINISTERIOS -->
                    <?php $contador_de_ministerio = 0; ?>
                    <?php $__currentLoopData = $ministerios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ministerio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $contador_de_ministerio = $contador_de_ministerio + 1; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3><?=$contador_de_ministerio; ?></h3>
                    <p>Ministerios</p>
                </div>
                <div class="icon">
                <i class="bi bi-building-check"></i>
                </div>
                <a href="<?php echo e(url('ministerios')); ?>" class="small-box-footer" style="margin-top: 15px;">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- CANTIDAD DE  MIEMBROS -->
        <div class="col-lg-3">
            <div class="small-box bg-success" style="height: 160px;">
                <div class="inner">
                    <!-- CONTADOR DE LA CANTIDAD DE MIEMBROS -->
                    <?php $contador_de_miembros = 0; ?>
                    <?php $__currentLoopData = $miembros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $miembro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $contador_de_miembros = $contador_de_miembros + 1; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3><?=$contador_de_miembros; ?></h3>
                    <p>Miembros</p>
                </div>
                <div class="icon">
                <i class="bi bi-file-earmark-person"></i>
                </div>
                <a href="<?php echo e(url('miembros')); ?>" class="small-box-footer" style="margin-top: 15px;">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

         <!-- CANTIDAD DE  USUARIO -->
        <div class="col-lg-3">
            <div class="small-box bg-warning" style="height: 160px;">
                <div class="inner">
                    <!-- CONTADOR DE LA CANTIDAD DE USUARIOS -->
                    <?php $contador_de_usuarios = 0; ?>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $contador_de_usuarios = $contador_de_usuarios + 1; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3><?=$contador_de_usuarios; ?></h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                <i class="bi bi-person-check"></i>
                </div>
                <a href="<?php echo e(url('usuarios')); ?>" class="small-box-footer" style="margin-top: 15px;">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- CANTIDAD DE ASISTENCIA -->
        <div class="col-lg-3">
            <div class="small-box bg-primary" style="height: 160px;">
                <div class="inner">
                    <!-- CONTADOR DE LA CANTIDAD DE USUARIOS -->
                    <?php $contador_de_asistencias = 0; ?>
                    <?php $__currentLoopData = $asistencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asistencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $contador_de_asistencias = $contador_de_asistencias + 1; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3><?=$contador_de_asistencias; ?></h3>
                    <p>Asistencias</p>
                </div>
                <div class="icon">
                <i class="bi bi-calendar-week"></i>
                </div>
                <a href="<?php echo e(url('asistencias')); ?>" class="small-box-footer" style="margin-top: 15px;">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siscontroldeasistencia\resources\views/index.blade.php ENDPATH**/ ?>