

<?php $__env->startSection('content'); ?>
<div class="content" style="margin-left: 20px;">
    <h1>Listado de Ministerios</h1>

    <?php if($message = Session::get('mensaje')): ?>
    <script>
        Swal.fire({
            title: "Buen trabajo!",
            text: "<?php echo e($message); ?>",
            icon: "success"
        });
    </script>

    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Ministerios registrados</b></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(url('/ministerios/create')); ?>" class="btn btn-primary">
                            <i class="bi bi-file-plus"></i>Agregar nuevo ministerio
                        </a>
                    </div>
                </div>

                <div class="card-body" style="display: block;">
                    <table id="example1" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombres del ministerio</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>fecha de ingreso</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 0 ?>
                            <?php $__currentLoopData = $ministerios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ministerio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $contador = $contador + 1 ?></td>
                                <td><?php echo e($ministerio->nombre_ministerio); ?></td>
                                <!-- Por lo que es text area se debe poner !! !! a los bordes para que te reconozca los datos -->
                                <td><?php echo $ministerio->descripcion; ?></td>
                                <td style="text-align: center;" >
                                    <button class="btn btn-success btn-sm" style="border-radius: 20px;">Activo</button>
                                </td>
                                <td><?php echo e($ministerio->fecha_ingreso); ?></td>
                                <td style="text-align: center;">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <!-- MANDAMOS A BUSCAR POR EL ID y luego mandamos al controlador -->
                                        <a href="<?php echo e(url('ministerios',$ministerio->id)); ?>" type="button" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                                        <a href="<?php echo e(route ('ministerios.edit',$ministerio->id)); ?>" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <form action="<?php echo e(url('ministerios',$ministerio->id)); ?>" method="post" >
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <button type="submit" onclick="return confirm('¿Esta seguro de eliminar este registro?')" class="btn btn-danger" >
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <script>
                        $(function() {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_  a _END_ de _TOTAL_ Ministerios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Miembros",
                                    "infoFiltered": "(Filtrado de _MAX_ total Ministerios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Ministerios",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior",
                                    }
                                },
                                "responsive": true,
                                "lengthChange": true,
                                "autoWidth": false,
                                buttons: [{
                                        extend: 'collection',
                                        text: 'Reportes',
                                        orientation: 'landscape',
                                        buttons: [{
                                            text: 'Copiar',
                                            extend: 'copy',
                                        }, {
                                            extend: 'pdf'
                                        }, {
                                            extend: 'csv'
                                        }, {
                                            extend: 'excel'
                                        }, {
                                            text: 'Imprimir',
                                            extend: 'print'
                                        }]
                                    },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed there-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>

            </div>

        </div>
    </div>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siscontroldeasistencia\resources\views/ministerios/index.blade.php ENDPATH**/ ?>