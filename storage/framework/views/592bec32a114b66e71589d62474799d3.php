
<?php $__env->startSection('content'); ?>
<div class="content" style="margin-left: 10px;">
    <h1>Creacion de un nuevo Miembro</h1><br>
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
                    <form action="<?php echo e(url('/miembros ')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <!-- DATOS DEL MIEMBRO -->
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombres y apellidos</label><b>*</b>
                                        <input type="text" name="nombre_apellido" value="<?php echo e(old('nombre_apelllido')); ?>" class="form-control" required>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Email</label><b>*</b>
                                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Teléfono</label><b>*</b>
                                        <input type="number" name="telefono" value="<?php echo e(old('telefono')); ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label><b>*</b>
                                        <input type="date" name="fecha_nacimiento" value="<?php echo e(old('fecha_nacimiento')); ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Género</label>
                                        <select name="genero" class="form-control">
                                            <option value="MASCULINO" <?php echo e(old('genero') == 'MASCULINO' ? 'selected' : ''); ?>>MASCULINO</option>
                                            <option value="FEMENINO" <?php echo e(old('genero') == 'FEMENINO' ? 'selected' : ''); ?>>FEMENINO</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Ministerio</label><b>*</b>
                                        <input type="text" name="ministerio" value="<?php echo e(old('ministerio')); ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Dirección</label><b>*</b>
                                        <input type="text" name="direccion" value="<?php echo e(old('direccion')); ?>" class="form-control" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- FOTOGRAFIA -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fotografia</label>
                                <input type="file" id="file" name="fotografia" class="form-control">

                                <center><output id="list"></output></center>
                                <script>
                                    function archivo(evt) {
                                        var files = evt.target.files;
                                        // obtenemos la imagen del campo "file"
                                        for (var i = 0, f; f = files[i] ; i++) {
                                            // Admitimos la imagen
                                            if (!f.type.match('image.*')) {
                                                continue;
                                            }
                                            var reader = new FileReader();
                                            reader.onload =(function (theFile){
                                                return function (e) {
                                                    //isertamos la imagen
                                                    document.getElementById("list").innerHTML= ['<img class="thumb thumbnail" src="',e.target.result,'"width="40%" title="', escape(theFile.name), '"/>'].join('');
                                                };
                                            })(f);
                                            reader.readAsDataURL(f);
                                        }
                                        
                                    }
                                    document.getElementById('file').addEventListener('change', archivo , false);
                                </script>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <a href="" class="btn btn-secondary">Cancelar</a>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siscontroldeasistencia\resources\views/miembros/create.blade.php ENDPATH**/ ?>