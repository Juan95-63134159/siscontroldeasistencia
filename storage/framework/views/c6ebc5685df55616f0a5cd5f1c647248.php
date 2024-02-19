<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('fecha')); ?>

            <?php echo e(Form::date('fecha', $asistencia->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha'])); ?>

            <?php echo $errors->first('fecha', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Miembros')); ?>

            <?php echo e(Form::select('miembro_id',$miembros, $asistencia->miembro_id, ['class' => 'form-control' . ($errors->has('miembro_id') ? ' is-invalid' : ''), 'placeholder' => 'Buscar Miembros'])); ?>

            <?php echo $errors->first('miembro_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar Asistencia</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\siscontroldeasistencia\resources\views/asistencia/form.blade.php ENDPATH**/ ?>