
<?php $__env->startSection('content'); ?>
<div class="content" style="margin-left: 10px;">
    <h1>Creacion de un nuevo Ministerio</h1><br>
    <!-- MOSTRAR EN UNA LISTA LOS ERRORES -->
    <?php $__currentLoopData = $errors-> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <div class="alert alert-danger">
            <li><?php echo e($error); ?></li>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="row">
        <div class="col-md-11">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Llene los datos</b></h3>
                </div>

                <div class="card-body" style="display: block;">
                    <form action="<?php echo e(url('/ministerios ')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <!-- DATOS DEL MINISTERIO -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Nombre del ministerio</label><b>*</b>
                                        <input type="text" name="nombre_ministerio" value="<?php echo e(old('nombre_ministerio')); ?>" class="form-control" required>
                                        <!-- PARA MOSTRAR LOS ERRORES DE MANERA INDIVIDUAL -->
                                        <!-- <?php $__errorArgs = ['nombre_apellido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small style="color: red"> * Este campo es requerido</small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Fecha de ingreso</label><b>*</b>
                                        <input type="date" name="fecha_ingreso" value="<?php echo e(old('fecha_ingreso')); ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Descripción</label><b>*</b>
                                        <textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
                                        <!-- UTILIZANDO EL CKEDITOR -->
                                        <script>
                                            CKEDITOR.replace('descripcion')
                                        </script>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <a href="<?php echo e(url('/ministerios')); ?>" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar registro</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siscontroldeasistencia\resources\views/ministerios/create.blade.php ENDPATH**/ ?>